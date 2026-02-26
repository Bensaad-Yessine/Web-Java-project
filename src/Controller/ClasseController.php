<?php

namespace App\Controller;

use App\Entity\Classe;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\ClasseRepository;
use App\Repository\MatiereClasseRepository;
use App\Repository\TacheRepository;
use App\Repository\SeanceRepository;
use App\Form\ClasseType;
use App\Service\WorkloadService;
use App\Service\ArchivingService;
use App\Service\ProgramGeneratorService;
use App\Service\ProgramGenerationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;


#[Route('/classe')]
class ClasseController extends AbstractController
{
    #[Route(name: 'app_classe_index', methods: ['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function index(
        Request $request,
        ClasseRepository $classeRepository
    ): Response {
        $search = $request->query->get('search', '');
        $niveau = $request->query->get('niveau', '');
        $filiere = $request->query->get('filiere', '');
        $sort = $request->query->get('sort', 'id');
        $direction = $request->query->get('direction', 'asc');

        $classes = $classeRepository->findWithFilters(
            $search ?: null,
            $niveau ?: null,
            $filiere ?: null,
            $sort,
            $direction
        );

        $niveaux = $classeRepository->getDistinctNiveaux();
        $filieres = $classeRepository->getDistinctFilieres();

        return $this->render('classe/index.html.twig', [
            'classes' => $classes,
            'search' => $search,
            'niveau' => $niveau,
            'filiere' => $filiere,
            'sort' => $sort,
            'direction' => $direction,
            'niveaux' => $niveaux,
            'filieres' => $filieres,
        ]);
    }

    #[Route('/ajax/filter', name: 'app_classe_ajax_filter', methods: ['GET'])]
    public function ajaxFilter(
        Request $request,
        ClasseRepository $classeRepository,
        \Symfony\Component\Security\Csrf\CsrfTokenManagerInterface $csrfTokenManager
    ): JsonResponse {
        $search = $request->query->get('search', '');
        $niveau = $request->query->get('niveau', '');
        $filiere = $request->query->get('filiere', '');
        $sort = $request->query->get('sort', 'id');
        $direction = $request->query->get('direction', 'asc');

        $classes = $classeRepository->findWithFilters(
            $search ?: null,
            $niveau ?: null,
            $filiere ?: null,
            $sort,
            $direction
        );

        $data = [];
        foreach ($classes as $classe) {
            $data[] = [
                'id' => $classe->getId(),
                'nom' => $classe->getNom(),
                'niveau' => $classe->getNiveau(),
                'filiere' => $classe->getFiliere(),
                'anneeuniversitaire' => $classe->getAnneeuniversitaire(),
                'description' => $classe->getDescription(),
                'url' => $this->generateUrl('app_classe_show', ['id' => $classe->getId()]),
                'editUrl' => $this->generateUrl('app_classe_edit', ['id' => $classe->getId()]),
                'csrfToken' => $csrfTokenManager->getToken('delete' . $classe->getId())->getValue(),
            ];
        }

        return new JsonResponse([
            'success' => true,
            'count' => count($classes),
            'data' => $data,
        ]);
    }

    // =========================
    // AJOUTER
    // =========================
    #[Route('/new', name: 'app_classe_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $classe = new Classe();
        $form = $this->createForm(ClasseType::class, $classe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($classe);
            $entityManager->flush();
            
            $this->addFlash('success', 'Classe créée avec succès.');

            return $this->redirectToRoute('app_classe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('classe/new.html.twig', [
            'classe' => $classe,
            'form' => $form->createView()
        ]);
    }

    // =========================
    // AFFICHER
    // =========================
    #[Route('/{id}', name: 'app_classe_show', methods: ['GET'])]
    public function show(Classe $classe): Response
    {
        return $this->render('classe/show.html.twig', [
            'classe' => $classe
        ]);
    }

    /**
     * Vue Front Office d'une classe pour l'étudiant.
     */
    #[Route('/front/{id}', name: 'app_classe_front_show', methods: ['GET'])]
    public function frontShow(
        Classe $classe,
        UserRepository $userRepository,
        \App\Service\StatsService $statsService,
        \Symfony\UX\Chartjs\Builder\ChartBuilderInterface $chartBuilder,
        \App\Service\StudyCoachService $studyCoachService
    ): Response {

        $users = $userRepository->findUsersByClasse($classe);

        // Données de charge horaire / complexité par matière
        $workloadData = $statsService->getWorkloadPerMatiere($classe);

        $workloadChart = $chartBuilder->createChart(\Symfony\UX\Chartjs\Model\Chart::TYPE_BAR);
        $workloadChart->setData([
            'labels' => $workloadData['labels'],
            'datasets' => [
                [
                    'label' => 'Charge horaire (h)',
                    'backgroundColor' => 'rgba(220,38,38,0.7)',
                    'borderColor' => 'rgba(185,28,28,1)',
                    'borderWidth' => 1,
                    'data' => $workloadData['hours'],
                ],
            ],
        ]);
        $workloadChart->setOptions([
            'plugins' => [
                'legend' => ['display' => true],
            ],
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                ],
            ],
        ]);

        $complexityChart = $chartBuilder->createChart(\Symfony\UX\Chartjs\Model\Chart::TYPE_RADAR);
        $complexityChart->setData([
            'labels' => $workloadData['labels'],
            'datasets' => [
                [
                    'label' => 'Complexité (1-10)',
                    'backgroundColor' => 'rgba(248,113,113,0.25)',
                    'borderColor' => 'rgba(220,38,38,1)',
                    'pointBackgroundColor' => 'rgba(220,38,38,1)',
                    'data' => $workloadData['complexities'],
                ],
            ],
        ]);
        $complexityChart->setOptions([
            'scales' => [
                'r' => [
                    'beginAtZero' => true,
                    'max' => 10,
                ],
            ],
        ]);

        // Assistant de révision AI (plan personnalisé)
        $studyPlan = $studyCoachService->generatePlan($classe);

        return $this->render('user/classe/front_show.html.twig', [
            'classe' => $classe,
            'users' => $users,
            'workloadChart' => $workloadChart,
            'complexityChart' => $complexityChart,
            'studyPlan' => $studyPlan,
        ]);

    }


    // =========================
    // MODIFIER
    // =========================
    #[Route('/{id}/edit', name: 'app_classe_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(Request $request, Classe $classe, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ClasseType::class, $classe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            
            $this->addFlash('success', 'Classe modifiée avec succès.');

            return $this->redirectToRoute('app_classe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('classe/edit.html.twig', [
            'classe' => $classe,
            'form' => $form->createView()
        ]);
    }

    // =========================
    // SUPPRIMER
    // =========================
    #[Route('/{id}', name: 'app_classe_delete', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function delete(Request $request, Classe $classe, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$classe->getId(), $request->getPayload()->getString('_token'))) {
            try {
                $entityManager->remove($classe);
                $entityManager->flush();
                $this->addFlash('success', 'Classe supprimée avec succès.');
            } catch (\Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException $e) {
                $this->addFlash('error', 'Impossible de supprimer cette classe car elle contient des éléments liés (ex: Étudiants, Séances).');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de la suppression.');
            }
        } else {
            $this->addFlash('error', 'Token de sécurité invalide.');
        }

        return $this->redirectToRoute('app_classe_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/users', name: 'app_classe_users', methods: ['GET'])]
    public function users(Classe $classe, UserRepository $userRepository): Response
    {        
        $users = $userRepository->findUsersByClasse($classe);     

        return $this->render('classe/users.html.twig', [
            'classe' => $classe,
            'users' => $users,
        ]);
    }

    // ==========================================================
    // ✅ FEATURE 1: AUDIT DE CHARGE DE TRAVAIL
    // ==========================================================

    /**
     * Affiche l'audit de charge de travail d'une classe.
     * GET /classe/{id}/audit
     */
    #[Route('/{id}/audit', name: 'app_classe_audit', methods: ['GET'])]
    public function audit(Classe $classe, WorkloadService $workloadService): Response
    {
        $workload = $workloadService->calculateWorkload($classe);

        $template = $this->isGranted('ROLE_ADMIN') ? 'classe/audit.html.twig' : 'user/classe/front_audit.html.twig';

        return $this->render($template, [
            'classe' => $classe,
            'workload' => $workload,
        ]);
    }

    /**
     * API : Retourne le JSON d'audit pour une classe.
     * GET /classe/{id}/audit/api
     */
    #[Route('/{id}/audit/api', name: 'app_classe_audit_api', methods: ['GET'])]
    public function auditApi(Classe $classe, WorkloadService $workloadService): JsonResponse
    {
        // API destinée au front / aux intégrations : on renvoie seulement les données,
        // sans envoyer d'e-mail automatique.
        $workload = $workloadService->calculateWorkload($classe);
        return new JsonResponse($workload);
    }

    // ==========================================================
    // ✅ FEATURE 2: GÉNÉRATEUR DE PROGRAMME AUTOMATIQUE
    // ==========================================================

    /**
     * Affiche les suggestions de matières pour une classe.
     */
    #[Route('/{id}/suggestions', name: 'app_classe_suggestions', methods: ['GET', 'POST'])]
    public function suggestions(
        Request $request,
        Classe $classe,
        ProgramGeneratorService $generator,
        EntityManagerInterface $em
    ): Response {
        if ($request->isMethod('POST')) {
            if (!$this->isGranted('ROLE_ADMIN')) {
                throw $this->createAccessDeniedException('Seuls les administrateurs peuvent modifier le programme.');
            }
            $selectedIds = $request->request->all('selected_matieres');
            if (!empty($selectedIds)) {
                $generator->applySuggestions($classe, array_map('intval', $selectedIds));
                $em->flush();
                $this->addFlash('success', count($selectedIds) . ' matière(s) ajoutée(s) à la classe.');
            }
            return $this->redirectToRoute('app_classe_show', ['id' => $classe->getId()]);
        }

        $suggestions = $generator->getSuggestions($classe);

        // Si c'est un étudiant, on utilise le template front
        $template = $this->isGranted('ROLE_ADMIN') ? 'classe/suggestions.html.twig' : 'user/classe/front_suggestions.html.twig';

        return $this->render($template, [
            'classe' => $classe,
            'suggestions' => $suggestions,
        ]);
    }

    // ==========================================================
    // ✅ FEATURE 3: ARCHIVAGE VERS NOUVELLE ANNÉE
    // ==========================================================

    /**
     * Clone une classe vers une nouvelle année universitaire.
     */
    #[Route('/{id}/archive', name: 'app_classe_archive', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function archive(
        Request $request,
        Classe $classe,
        ArchivingService $archivingService
    ): Response {
        if ($request->isMethod('POST')) {
            $nouvelleAnnee = $request->request->get('nouvelle_annee');
            if (!$nouvelleAnnee) {
                $nouvelleAnnee = $archivingService->getNextYear($classe->getAnneeuniversitaire() ?? date('Y') . '/' . (date('Y')+1));
            }

            $clone = $archivingService->archiveAndClone($classe, $nouvelleAnnee);
            $this->addFlash('success', "Classe clonée vers l'année {$nouvelleAnnee} avec succès !");
            return $this->redirectToRoute('app_classe_show', ['id' => $clone->getId()]);
        }

        $nextYear = $archivingService->getNextYear(
            $classe->getAnneeuniversitaire() ?? date('Y') . '/' . (date('Y')+1)
        );

        return $this->render('classe/archive.html.twig', [
            'classe' => $classe,
            'nextYear' => $nextYear,
        ]);
    }

    // ==========================================================
    // ✅ FEATURE 4: STATISTIQUES / DISTRIBUTION
    // ==========================================================

    /**
     * Vue Front Office : Distribution de complexité des matières d'une classe.
     * GET /classe/front/{id}/stats
     */
    #[Route('/front/{id}/stats', name: 'app_classe_stats', methods: ['GET'])]
    public function stats(Classe $classe, MatiereClasseRepository $matiereClasseRepository, \App\Service\QuizStatsService $quizStatsService): Response
    {
        $matieres = $matiereClasseRepository->findByClasseWithSearch($classe);

        $total = count($matieres);

        $faible = 0;   // score 1-3
        $moyen = 0;    // score 4-6
        $eleve = 0;    // score 7-10

        $totalHeures = 0;
        $totalComplexite = 0;
        $totalCoefficient = 0;

        foreach ($matieres as $m) {
            $score = $m->getScorecomplexite() ?? 0;
            $totalHeures += $m->getChargehoraire() ?? 0;
            $totalComplexite += $score;
            $totalCoefficient += $m->getCoefficient() ?? 0;

            if ($score <= 3) $faible++;
            elseif ($score <= 6) $moyen++;
            else $eleve++;
        }

        $statsData = [
            'classe' => $classe,
            'total' => $total,
            'totalHeures' => $totalHeures,
            'totalComplexite' => $totalComplexite,
            'complexiteMoyenne' => $total > 0 ? round($totalComplexite / $total, 2) : 0,
            'totalCoefficient' => $totalCoefficient,
            'faibleCount' => $faible,
            'moyenCount' => $moyen,
            'eleveCount' => $eleve,
            'faiblePercent' => $total > 0 ? round($faible / $total * 100, 1) : 0,
            'moyenPercent' => $total > 0 ? round($moyen / $total * 100, 1) : 0,
            'elevePercent' => $total > 0 ? round($eleve / $total * 100, 1) : 0,
        ];

        $quizPerformance = $quizStatsService->getMatierePerformanceForClasse($classe);
        $hardestQuestions = $quizStatsService->getHardestQuestionsForClasse($classe, 3);

        return $this->render('user/classe/front_stats.html.twig', array_merge($statsData, [
            'quizPerformance' => $quizPerformance,
            'hardestQuestions' => $hardestQuestions,
        ]));

    }

    // ==========================================================
    // ✅ FEATURE 5: EXPORT PDF / CSV
    // ==========================================================

    /**
     * Export CSV des matières d'une classe.
     * GET /classe/{id}/export/csv
     */
    #[Route('/{id}/export/csv', name: 'app_classe_export_csv', methods: ['GET'])]
    public function exportCsv(Classe $classe): Response
    {
        $matieres = $classe->getMatiereClasses();

        $csv = "Nom,Coefficient,Charge Horaire (h),Score Complexité,Description\n";
        foreach ($matieres as $m) {
            $csv .= sprintf(
                '"%s","%s","%s","%s","%s"' . "\n",
                str_replace('"', '""', $m->getNom() ?? ''),
                $m->getCoefficient() ?? 0,
                $m->getChargehoraire() ?? 0,
                $m->getScorecomplexite() ?? 0,
                str_replace('"', '""', $m->getDescription() ?? '')
            );
        }

        $filename = sprintf('classe_%s_%s.csv', 
            preg_replace('/[^a-z0-9]/i', '_', $classe->getNom()),
            date('Y-m-d')
        );

        return new Response($csv, 200, [
            'Content-Type' => 'text/csv; charset=utf-8',
            'Content-Disposition' => "attachment; filename=\"{$filename}\"",
        ]);
    }

    /**
     * Export HTML (imprimable comme PDF) des matières, tâches et séances d'une classe.
     * GET /classe/{id}/export/pdf
     */
    #[Route('/{id}/export/pdf', name: 'app_classe_export_pdf', methods: ['GET'])]
    public function exportPdf(
        Classe $classe, 
        TacheRepository $tacheRepository,
        SeanceRepository $seanceRepository
    ): Response {
        // Récupérer les tâches et séances depuis la base de données
        $taches = [];
        $seances = [];
        
        // Get current user
        $user = $this->getUser();
        if ($user instanceof User) {
            // Get tasks for the current user
            $taches = $tacheRepository->findBy(['user' => $user], ['dateDebut' => 'ASC']);
            
            // Get seances for this class
            $seances = $seanceRepository->findBy(['classe' => $classe], ['jour' => 'ASC', 'heureDebut' => 'ASC']);
        }

        return $this->render('classe/export_pdf.html.twig', [
            'classe' => $classe,
            'taches' => $taches,
            'seances' => $seances,
        ]);
    }

    // ==========================================================
    // ✅ FEATURE 6: GÉNÉRATION DE TÂCHES ET SÉANCES
    // ==========================================================

    /**
     * Génère automatiquement les tâches et séances pour l'utilisateur connecté
     * POST /classe/{id}/generate
     */
    #[Route('/{id}/generate', name: 'app_classe_generate', methods: ['GET', 'POST'])]
    public function generate(
        Request $request,
        Classe $classe,
        ProgramGenerationService $generationService
    ): Response {
        // Vérifier que l'utilisateur est connecté
        $user = $this->getUser();
        if (!$user instanceof User) {
            $this->addFlash('error', 'Vous devez être connecté pour générer votre programme.');
            return $this->redirectToRoute('app_classe_front_show', ['id' => $classe->getId()]);
        }

        // Vérifier que l'utilisateur appartient à cette classe
        $userClasse = $user->getClasse();
        if (!$userClasse || $userClasse->getId() !== $classe->getId()) {
            $this->addFlash('error', 'Vous ne pouvez pas générer le programme pour cette classe.');
            return $this->redirectToRoute('app_classe_front_show', ['id' => $classe->getId()]);
        }

        // Vérifier si des données existent déjà
        $hasExistingData = $generationService->hasExistingData($classe);
        
        if ($request->isMethod('POST')) {
            try {
                // Optionnel: Clear existing data if requested
                if ($request->request->get('clear_existing') === '1') {
                    $generationService->clearExistingData($classe, $user);
                }

                // Générer les tâches et séances
                $result = $generationService->generateForClasse($classe, $user);

                $this->addFlash('success', sprintf(
                    'Programme généré avec succès ! %d séances et %d tâches créées.',
                    $result['seances'],
                    $result['taches']
                ));
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la génération: ' . $e->getMessage());
            }

            return $this->redirectToRoute('app_classe_front_show', ['id' => $classe->getId()]);
        }

        // Afficher la page de confirmation
        return $this->render('classe/generate.html.twig', [
            'classe' => $classe,
            'hasExistingData' => $hasExistingData,
            'matiereCount' => $classe->getMatiereClasses()->count(),
        ]);
    }
}
