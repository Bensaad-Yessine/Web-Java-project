<?php

namespace App\Controller;

use App\Entity\Seance;
use App\Entity\Classe;
use App\Form\SeanceType;
use App\Repository\SeanceRepository;
use App\Repository\ClasseRepository;
use App\Repository\SalleRepository;
use App\Service\SmartRoomAIService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

#[Route('/seance')]
final class SeanceController extends AbstractController
{
    public function __construct(
        private readonly SmartRoomAIService $smartRoomAI
    ) {}
    // =========================
    // INDEX
    // =========================
    #[Route('/', name: 'app_seance_index', methods: ['GET'])]
    public function index(Request $request, SeanceRepository $repo, SalleRepository $salleRepo): Response
    {
        $search = $request->query->get('search');
        $jour = $request->query->get('jour');
        $type = $request->query->get('type');
        $mode = $request->query->get('mode');
        $salleId = $request->query->get('salle');
        $sort = $request->query->get('sort', 'id');
        $direction = $request->query->get('direction', 'asc');

        $seances = $repo->findWithFilters($search, $jour, $type, $mode, $salleId ? (int)$salleId : null, null, null, $sort, $direction);

        // list of salles for filter dropdown
        $salles = $salleRepo->findAll();

        return $this->render('seance/index.html.twig', [
            'seances' => $seances,
            'search' => $search,
            'jour' => $jour,
            'type' => $type,
            'mode' => $mode,
            'sort' => $sort,
            'direction' => $direction,
            'salles' => $salles,
            'salleFilter' => $salleId,
        ]);
    }

    #[Route('/ajax/filter', name: 'app_seance_ajax_filter', methods: ['GET'])]
    public function ajaxFilter(
        Request $request,
        SeanceRepository $repo,
        CsrfTokenManagerInterface $csrfTokenManager
    ): JsonResponse {
        $search = $request->query->get('search');
        $jour = $request->query->get('jour');
        $type = $request->query->get('type');
        $mode = $request->query->get('mode');
        $salleId = $request->query->get('salle');
        $sort = $request->query->get('sort', 'id');
        $direction = $request->query->get('direction', 'asc');

        $seances = $repo->findWithFilters($search, $jour, $type, $mode, $salleId ? (int)$salleId : null, null, null, $sort, $direction);

        $data = [];
        foreach ($seances as $seance) {
            $data[] = [
                'id' => $seance->getId(),
                'matiere' => $seance->getMatiere() ? $seance->getMatiere()->getNom() : 'N/A',
                'classe' => $seance->getClasse() ? $seance->getClasse()->getNom() : 'N/A',
                'salle' => $seance->getSalle() ? $seance->getSalle()->getName() : 'N/A',
                'jour' => $seance->getJour(),
                'typeSeance' => $seance->getTypeSeance(),
                'mode' => $seance->getMode(),
                'heureDebut' => $seance->getHeureDebut() ? $seance->getHeureDebut()->format('H:i') : '',
                'heureFin' => $seance->getHeureFin() ? $seance->getHeureFin()->format('H:i') : '',
                'url' => $this->generateUrl('app_seance_show', ['id' => $seance->getId()]),
                'editUrl' => $this->generateUrl('app_seance_edit', ['id' => $seance->getId()]),
                'csrfToken' => $csrfTokenManager->getToken('delete' . $seance->getId())->getValue(),
            ];
        }

        return new JsonResponse([
            'success' => true,
            'count' => count($seances),
            'data' => $data,
        ]);
    }

    // =========================
    // SHOW SEANCES BY CLASSE
    // IMPORTANT: placed BEFORE /{id}
    // =========================
    #[Route('/by-classe/{id<\d+>}', name: 'app_seance_by_classe', methods: ['GET'])]
    public function showSeanceByClasse(
        Request $request,
        SeanceRepository $seanceRepository,
        Classe $classe
    ): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // Calcul de la semaine affichée (offset en semaines par rapport à aujourd'hui)
        $weekOffset = (int) $request->query->get('week', 0);

        // Lundi de la semaine courante + offset
        $monday = new \DateTime();
        $monday->modify('monday this week');
        if ($weekOffset !== 0) {
            $monday->modify(($weekOffset > 0 ? '+' : '') . $weekOffset . ' weeks');
        }
        $saturday = (clone $monday)->modify('+5 days'); // Samedi

        // Jours FR → numéro ISO (Lundi=1 … Samedi=6)
        $joursMap = [
            'Lundi'    => 1,
            'Mardi'    => 2,
            'Mercredi' => 3,
            'Jeudi'    => 4,
            'Vendredi' => 5,
            'Samedi'   => 6,
        ];

        // Toutes les séances de la classe, filtrées par semaine via heureDebut
        $startWeek = (clone $monday)->setTime(0, 0, 0);
        $endWeek   = (clone $saturday)->setTime(23, 59, 59);

        // Séances avec date réelle dans la semaine uniquement (pas de fallback récurrent)
        $seancesWithDate = $seanceRepository->findByClasseAndWeek($classe, $startWeek, $endWeek);

        // Pour chaque jour de la semaine, calculer la date réelle
        $weekDays = [];
        for ($i = 0; $i < 6; $i++) {
            $day = (clone $monday)->modify("+$i days");
            $jourFr = array_search($i + 1, $joursMap);
            $weekDays[$jourFr] = $day->format('Y-m-d');
        }

        return $this->render('seance/schedule.html.twig', [
            'seances'         => $seancesWithDate,
            'seancesWithDate' => $seancesWithDate,
            'classe'          => $classe,
            'weekOffset'      => $weekOffset,
            'mondayDate'      => $monday->format('d/m/Y'),
            'saturdayDate'    => $saturday->format('d/m/Y'),
            'mondayISO'       => $monday->format('Y-m-d'),
            'weekDays'        => $weekDays,
        ]);
    }

    // =========================
    // NEW
    // =========================
    #[Route('/new', name: 'app_seance_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SalleRepository $salleRepo): Response
    {
        $seance = new Seance();
        $form = $this->createForm(SeanceType::class, $seance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Si aucune salle n'est sélectionnée, en assigner une automatiquement
            if (!$seance->getSalle()) {
                $defaultSalle = $salleRepo->findOneBy([], ['id' => 'ASC']);
                if ($defaultSalle) {
                    $seance->setSalle($defaultSalle);
                    $this->addFlash('info', 'Aucune salle sélectionnée. La salle "' . $defaultSalle->getName() . '" a été assignée par défaut.');
                } else {
                    $this->addFlash('warning', 'Aucune salle disponible dans le système. Veuillez en créer une avant d\'ajouter des séances.');
                    return $this->redirectToRoute('app_seance_new');
                }
            }

            $entityManager->persist($seance);
            $entityManager->flush();

            $this->addFlash('success', 'Séance créée avec succès.');

            return $this->redirectToRoute('app_seance_index');
        }

        return $this->render('seance/new.html.twig', [
            'seance' => $seance,
            'form' => $form->createView(),
        ]);
    }

    // =========================
    // SHOW ONE SEANCE
    // =========================
    #[Route('/{id<\d+>}', name: 'app_seance_show', methods: ['GET'])]
    public function show(Seance $seance): Response
    {
        return $this->render('seance/show.html.twig', [
            'seance' => $seance,
        ]);
    }

    // =========================
    // EDIT
    // =========================
    #[Route('/{id<\d+>}/edit', name: 'app_seance_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Seance $seance,
        EntityManagerInterface $entityManager
    ): Response
    {
        $form = $this->createForm(SeanceType::class, $seance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->flush();

            $this->addFlash('success', 'Séance modifiée avec succès.');

            return $this->redirectToRoute('app_seance_index');
        }

        return $this->render('seance/edit.html.twig', [
            'seance' => $seance,
            'form' => $form->createView(),
        ]);
    }

    // =========================
    // DELETE
    // =========================
    #[Route('/{id<\d+>}', name: 'app_seance_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Seance $seance,
        EntityManagerInterface $entityManager
    ): Response
    {
        if ($this->isCsrfTokenValid(
            'delete'.$seance->getId(),
            $request->request->get('_token')
        )) {
            $entityManager->remove($seance);
            $entityManager->flush();

            $this->addFlash('success', 'Séance supprimée.');
        }

        return $this->redirectToRoute('app_seance_index');
    }

    // =========================
    // SMART ROOM AI INTEGRATION
    // =========================

    /**
     * Prédiction d'assiduité pour une séance (AJAX)
     */
    #[Route('/{id<\d+>}/predict-attendance', name: 'app_seance_predict_attendance', methods: ['GET'])]
    public function predictAttendance(Seance $seance): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $prediction = $this->smartRoomAI->predictAttendance($seance);
        
        if ($prediction === null) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Service de prédiction indisponible. Vérifiez que l\'API Smart Room AI est en cours d\'exécution.'
            ]);
        }

        return new JsonResponse([
            'success' => true,
            'predicted_attendance' => $prediction['predicted_attendance'],
            'confidence' => $prediction['confidence'],
            'confidence_text' => $this->smartRoomAI->formatConfidence($prediction['confidence']),
            'confidence_icon' => $this->smartRoomAI->getConfidenceIcon($prediction['confidence']),
            'explanations' => $prediction['explain'],
        ]);
    }

    /**
     * Recommandation de salle optimale (AJAX)
     */
    #[Route('/{id<\d+>}/recommend-room', name: 'app_seance_recommend_room', methods: ['GET'])]
    public function recommendRoom(Seance $seance, SalleRepository $salleRepo): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // Récupérer les salles disponibles au même créneau
        $availableRooms = $salleRepo->findAvailableRooms(
            $seance->getJour(), 
            $seance->getHeureDebut(), 
            $seance->getHeureFin(),
            $seance->getId() // Exclure la salle actuelle
        );

        $recommendation = $this->smartRoomAI->recommendRoom($seance, $availableRooms);
        
        if ($recommendation === null) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Service de recommandation indisponible.'
            ]);
        }

        return new JsonResponse([
            'success' => true,
            'recommendation' => $recommendation,
            'formatted_message' => $this->smartRoomAI->formatRecommendationMessage($recommendation),
            'total_available_rooms' => count($availableRooms),
        ]);
    }

    /**
     * Prédiction AJAX pour le formulaire de création (sans séance existante)
     */
    #[Route('/preview-predict', name: 'app_seance_preview_predict', methods: ['POST'])]
    public function previewPredict(Request $request, SalleRepository $salleRepo): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $data = json_decode($request->getContent(), true);
        
        if (!$data) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Données invalides'
            ]);
        }

        try {
            // Log pour debug
            error_log('[DEBUG] Données reçues: ' . json_encode($data));
            
            // Simuler une séance temporaire pour la prédiction
            $tempSeance = new \App\Entity\Seance();
            
            // Convertir le numéro de jour en chaîne française
            $jourMap = [0 => 'Dimanche', 1 => 'Lundi', 2 => 'Mardi', 3 => 'Mercredi', 4 => 'Jeudi', 5 => 'Vendredi', 6 => 'Samedi'];
            $jourStr = $jourMap[$data['jour_semaine']] ?? 'Lundi';
            $tempSeance->setJour($jourStr);
            
            // Créer un DateTime valide avec aujourd'hui et l'heure spécifiée
            $today = new \DateTime();
            $heureDebut = \DateTime::createFromFormat('Y-m-d H:i', $today->format('Y-m-d') . ' ' . $data['heure_debut'] . ':00');
            $tempSeance->setHeureDebut($heureDebut ?: new \DateTime());
            
            // Calculer heure de fin
            $heureFin = clone $heureDebut;
            $heureFin->add(new \DateInterval('PT' . $data['duree_min'] . 'M'));
            $tempSeance->setHeureFin($heureFin);
            
            $tempSeance->setDuree($data['duree_min']);
            $tempSeance->setTypeSeance($data['type_seance']);
            $tempSeance->setMode($data['mode']);
            
            // Créer un objet MatiereClasse fictif pour la prédiction
            $matiere = new \App\Entity\MatiereClasse();
            $tempSeance->setMatiere($matiere);
            
            $tempSeance->setGroupe($data['groupe']);

            error_log('[DEBUG] Séance temporaire créée: ' . print_r($tempSeance, true));

            // Obtenir la prédiction via le service IA
            $prediction = $this->smartRoomAI->predictAttendance($tempSeance);
            
            error_log('[DEBUG] Prédiction obtenue: ' . print_r($prediction, true));
            
            if ($prediction === null) {
                // Fallback si le service IA n'est pas disponible
                $prediction = $this->getFallbackPrediction($data);
            }

            // Récupérer les salles disponibles
            $availableRooms = $this->formatAvailableRooms($salleRepo->findAll());

            return new JsonResponse([
                'success' => true,
                'data' => [
                    'predicted_attendance' => $prediction['predicted_attendance'],
                    'confidence' => $prediction['confidence'],
                    'explanations' => $prediction['explain'],
                    'available_rooms' => $availableRooms
                ]
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Erreur: ' . $e->getMessage()
            ]);
        }
    }

    /**
     * Recommandation AJAX pour le formulaire de création
     */
    #[Route('/preview-recommend', name: 'app_seance_preview_recommend', methods: ['POST'])]
    public function previewRecommend(Request $request): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $data = json_decode($request->getContent(), true);
        
        if (!$data) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Données invalides'
            ]);
        }

        try {
            $prediction = $data['seance']['predicted_attendance'] ?? 0;
            $marginRatio = $data['margin_ratio'] ?? 0.10;
            $capacityRequired = ceil($prediction * (1 + $marginRatio));
            
            $availableRooms = $data['available_rooms'] ?? [];
            
            // Filtrer et recommander
            $suitableRooms = array_filter($availableRooms, function($room) use ($capacityRequired) {
                return $room['is_available'] && $room['capacite'] >= $capacityRequired;
            });
            
            usort($suitableRooms, function($a, $b) {
                return $a['capacite'] - $b['capacite'];
            });
            
            $recommendedRoom = !empty($suitableRooms) ? $suitableRooms[0] : null;
            $alternatives = array_slice($suitableRooms, 1, 3);

            if ($recommendedRoom) {
                $message = "Salle recommandée : {$recommendedRoom['id']} (capacité {$recommendedRoom['capacite']}) pour {$prediction} étudiants attendus";
            } else {
                $message = "Aucune salle disponible pour {$capacityRequired} places requises ({$prediction} étudiants attendus)";
            }

            return new JsonResponse([
                'success' => true,
                'data' => [
                    'predicted_attendance' => $prediction,
                    'capacity_required' => $capacityRequired,
                    'recommended_room' => $recommendedRoom,
                    'alternatives' => $alternatives,
                    'message' => $message
                ]
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Erreur: ' . $e->getMessage()
            ]);
        }
    }

    /**
     * Vérifier la santé du service Smart Room AI
     */
    #[Route('/smart-room/health', name: 'app_seance_smartroom_health', methods: ['GET'])]
    public function smartRoomHealth(): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $isHealthy = $this->smartRoomAI->isHealthy();
        $modelInfo = $this->smartRoomAI->getModelInfo();

        return new JsonResponse([
            'healthy' => $isHealthy,
            'model_info' => $modelInfo,
            'timestamp' => (new \DateTime())->format('Y-m-d H:i:s'),
        ]);
    }

    /**
     * Page d'optimisation de salle (nouveau formulaire amélioré)
     */
    #[Route('/{id<\d+>}/optimize', name: 'app_seance_optimize', methods: ['GET', 'POST'])]
    public function optimizeSeance(
        Request $request,
        Seance $seance,
        EntityManagerInterface $entityManager,
        SalleRepository $salleRepo
    ): Response {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // Obtenir les prédictions et recommandations
        $prediction = $this->smartRoomAI->predictAttendance($seance);
        $recommendation = null;
        
        if ($prediction) {
            $availableRooms = $salleRepo->findAvailableRooms(
                $seance->getJour(),
                $seance->getHeureDebut(),
                $seance->getHeureFin(),
                $seance->getId()
            );
            $recommendation = $this->smartRoomAI->recommendRoom($seance, $availableRooms);
        }

        // Traitement du formulaire si soumission
        if ($request->isMethod('POST')) {
            $newSalleId = $request->request->get('salle_id');
            if ($newSalleId) {
                $newSalle = $salleRepo->find($newSalleId);
                if ($newSalle) {
                    $seance->setSalle($newSalle);
                    $entityManager->flush();
                    $this->addFlash('success', 'Salle mise à jour avec succès.');
                    return $this->redirectToRoute('app_seance_show', ['id' => $seance->getId()]);
                }
            }
        }

        // Toutes les salles disponibles pour le formulaire
        $allAvailableRooms = $salleRepo->findAvailableRooms(
            $seance->getJour(),
            $seance->getHeureDebut(),
            $seance->getHeureFin()
        );

        return $this->render('seance/optimize.html.twig', [
            'seance' => $seance,
            'prediction' => $prediction,
            'recommendation' => $recommendation,
            'available_rooms' => $allAvailableRooms,
            'smart_room_healthy' => $this->smartRoomAI->isHealthy(),
        ]);
    }

    /**
     * Obtenir une prédiction de fallback basique si l'API n'est pas disponible
     */
    private function getFallbackPrediction(array $data): array
    {
        $baseAttendance = $data['salle_capacite_initiale'] * ($data['moy_presence_groupe_30j'] ?? 0.75);
        
        // Ajustements simples
        $factors = [];
        
        if ($data['heure_debut'] == 8) {
            $baseAttendance *= 0.8;
            $factors[] = "Créneau 8h => présence plus faible";
        }
        
        if ($data['mode'] == 'en_ligne') {
            $baseAttendance *= 0.6;
            $factors[] = "Mode en ligne => présence réduite";
        }
        
        if ($data['type_seance'] == 'TP') {
            $baseAttendance *= 1.1;
            $factors[] = "TP => présence plus élevée";
        }
        
        $predicted = max(0, min((int)$baseAttendance, $data['salle_capacite_initiale']));
        $confidence = 0.6; // confiance moyenne pour fallback
        
        return [
            'predicted_attendance' => $predicted,
            'confidence' => $confidence,
            'explain' => array_merge($factors, [
                "Prédiction basique (API non disponible)",
                "Basée sur les taux de présence du groupe"
            ])
        ];
    }

    /**
     * Formater les salles pour l'API
     */
    private function formatAvailableRooms(array $salles): array
    {
        return array_map(function($salle) {
            return [
                'id' => $salle->getName(),
                'name' => $salle->getName(),
                'bloc' => $salle->getBlock() ?? 'A',
                'etage' => $salle->getEtage() ?? 0,
                'capacite' => $salle->getCapacite(),
                'is_available' => true
            ];
        }, $salles);
    }
}
