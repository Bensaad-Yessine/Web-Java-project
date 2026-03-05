<?php

namespace App\Controller\Api;

use App\Entity\Seance;
use App\Entity\Salle;
use App\Repository\SalleRepository;
use App\Repository\ClasseRepository;
use App\Repository\MatiereClasseRepository;
use App\Repository\SeanceRepository;
use App\Service\RoomAvailabilityService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api', name: 'api_')]
class MapApiController extends AbstractController
{ 
    private array $allSlots = [
        ['09:00', '10:30'],
        ['10:45', '12:15'],
        ['13:30', '15:00'],
        ['15:15', '16:45'],
    ];
    /**
     * GET /api/blocs
     * returns statistics for every bloc (total/available/occupied/reserved)
     */
    #[Route('/blocs', name:'blocs', methods:['GET'])]
    public function blocs(
        SalleRepository $repo,
        RoomAvailabilityService $availability
    ): JsonResponse {
        $today = new \DateTime();
        $salles = $repo->findAll();
        $stats = [];
        foreach ($salles as $salle) {
            $bloc = $salle->getBlock();
            if (!isset($stats[$bloc])) {
                $stats[$bloc] = [
                    'bloc' => $bloc,
                    'total' => 0,
                    'libres' => 0,
                    'occupees' => 0,
                    'reservees' => 0,
                ];
            }
            $stats[$bloc]['total']++;
            $avail = $availability->getAvailability($salle, $today);
            if ($avail['isAvailable']) {
                $stats[$bloc]['libres']++;
            } else {
                $stats[$bloc]['occupees']++;
            }
        }

        return $this->json(['blocks' => array_values($stats)]);
    }

    /**
     * GET /api/blocs/{bloc}/etages
     * returns distinct floors with counts for the given bloc
     */
    #[Route('/blocs/{bloc}/etages', name:'blocs_etages', methods:['GET'])]
    public function etages(string $bloc, SalleRepository $repo): JsonResponse
    {
        $data = $repo->getEtagesForBlocStats($bloc);
        return $this->json(['bloc' => $bloc, 'etages' => $data]);
    }

    /**
     * GET /api/blocs/{bloc}/salles
     * returns rooms grouped by floor along with per-floor stats.
     */
    #[Route('/blocs/{bloc}/salles', name:'blocs_salles', methods:['GET'])]
    public function salles(
        string $bloc,
        SalleRepository $repo,
        RoomAvailabilityService $availability
    ): JsonResponse {
        $salles = $repo->getSallesByBlocOrdered($bloc);
        $today = new \DateTime();
        $grouped = [];

        foreach ($salles as $salle) {
            $etage = (string) $salle->getEtage();
            if (!isset($grouped[$etage])) {
                $grouped[$etage] = [
                    'etage' => (int) $etage,
                    'salles' => [],
                    'stats' => ['total'=>0,'libres'=>0,'occupees'=>0,'reservees'=>0],
                ];
            }
            $avail = $availability->getAvailability($salle, $today);
            $status = $avail['isAvailable'] ? 'libre' : 'occupee';

            $grouped[$etage]['salles'][] = [
                'id'       => $salle->getId(),
                'nom'      => $salle->getName(),
                'capacite' => $salle->getCapacite(),
                'statut'   => $status,
                'freeSlots'    => $avail['freeSlots'],
                'occupiedSlots'=> $avail['occupiedSlots'],
            ];

            $grouped[$etage]['stats']['total']++;
            if ($status === 'libre') {
                $grouped[$etage]['stats']['libres']++;
            } else {
                $grouped[$etage]['stats']['occupees']++;
            }
        }

        $etages = array_values($grouped);
        return $this->json(['bloc' => $bloc, 'etages' => $etages]);
    }

    /**
     * GET /api/salle/{id}/disponibilite?date=YYYY-MM-DD
     * returns free/occupied slots for a room on a given date
     */
    #[Route('/salle/{id}/disponibilite', name:'salle_disponibilite', methods:['GET'])]
    public function disponibilite(
        int $id,
        Request $request,
        SalleRepository $repo,
        RoomAvailabilityService $availability
    ): JsonResponse {
        $salle = $repo->find($id);
        if (!$salle) {
            return $this->json(['error' => 'Salle introuvable'], 404);
        }

        $dateStr = $request->query->get('date', date('Y-m-d'));
        try {
            $date = new \DateTime($dateStr);
        } catch (\Exception $e) {
            $date = new \DateTime();
        }

        $avail = $availability->getAvailability($salle, $date);

        return $this->json([
            'salle'        => ['id' => $salle->getId(), 'nom' => $salle->getName()],
            'date'         => $date->format('Y-m-d'),
            'isAvailable'  => $avail['isAvailable'],
            'freeSlots'    => $avail['freeSlots'],
            'occupiedSlots'=> $avail['occupiedSlots'],
        ]);
    }

    /**
     * GET /api/etudiant/creneaux?date=YYYY-MM-DD
     * Retourne les créneaux OCCUPÉS de l'étudiant connecté pour une date donnée.
     * Un créneau est occupé si la classe de l'étudiant a déjà une séance à cette heure.
     */
    #[Route('/etudiant/creneaux', name:'etudiant_creneaux', methods:['GET'])]
    public function etudiantCreneaux(
        Request $request,
        SeanceRepository $seanceRepo
    ): JsonResponse {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $user = $this->getUser();
        $classe = ($user && method_exists($user, 'getClasse')) ? $user->getClasse() : null;
        if (!$classe) {
            return $this->json(['occupiedSlots' => [], 'freeSlots' => $this->allSlots]);
        }

        $dateStr = $request->query->get('date', date('Y-m-d'));
        try {
            $date = new \DateTime($dateStr);
        } catch (\Exception $e) {
            $date = new \DateTime();
        }

        $start = (clone $date)->setTime(0, 0, 0);
        $end   = (clone $date)->setTime(23, 59, 59);

        $seances = $seanceRepo->findByClasseAndWeek($classe, $start, $end);

        // Calculer quels créneaux fixes sont pris
        $occupied = [];
        $free     = [];
        foreach ($this->allSlots as [$slotStart, $slotEnd]) {
            $taken = false;
            foreach ($seances as $s) {
                $sd = $s->getHeureDebut()->format('H:i');
                $ef = $s->getHeureFin()->format('H:i');
                if ($sd < $slotEnd && $ef > $slotStart) {
                    $taken = true;
                    break;
                }
            }
            if ($taken) {
                $occupied[] = [$slotStart, $slotEnd];
            } else {
                $free[] = [$slotStart, $slotEnd];
            }
        }

        return $this->json([
            'date'          => $date->format('Y-m-d'),
            'occupiedSlots' => $occupied,
            'freeSlots'     => $free,
        ]);
    }

    /**
     * POST /api/salle/{id}/reserver
     * body JSON: { date, heureDebut, heureFin, classeId, matiereId }
     * Creates a "Séance de révision" and adds it to the schedule
     */
    #[Route('/salle/{id}/reserver', name:'salle_reserver', methods:['POST'])]
    public function reserver(
        int $id,
        Request $request,
        SalleRepository $salleRepo,
        ClasseRepository $classeRepo,
        MatiereClasseRepository $matiereRepo,
        RoomAvailabilityService $availability,
        EntityManagerInterface $em
    ): JsonResponse {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $salle = $salleRepo->find($id);
        if (!$salle) {
            return $this->json(['error' => 'Salle introuvable'], 404);
        }

        $data = json_decode($request->getContent(), true);
        if (!$data) {
            return $this->json(['error' => 'Données invalides'], 400);
        }

        $dateStr     = $data['date']       ?? date('Y-m-d');
        $heureDebut  = $data['heureDebut'] ?? null;
        $heureFin    = $data['heureFin']   ?? null;
        $classeId    = $data['classeId']   ?? null;
        $matiereId   = $data['matiereId']  ?? null;

        if (!$heureDebut || !$heureFin) {
            return $this->json(['error' => 'Horaire manquant'], 400);
        }

        // Validate slot
        $allowedSlots = [
            ['09:00', '10:30'],
            ['10:45', '12:15'],
            ['13:30', '15:00'],
            ['15:15', '16:45'],
        ];
        $slotValid = false;
        foreach ($allowedSlots as [$a, $b]) {
            if ($heureDebut === $a && $heureFin === $b) {
                $slotValid = true;
                break;
            }
        }
        if (!$slotValid) {
            return $this->json(['error' => 'Créneau invalide'], 400);
        }

        // Build datetime objects
        try {
            $dtDebut = new \DateTime($dateStr . ' ' . $heureDebut);
            $dtFin   = new \DateTime($dateStr . ' ' . $heureFin);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Date/heure invalide'], 400);
        }

        // Check availability again for this specific date
        $avail = $availability->getAvailability($salle, $dtDebut);
        $slotFree = false;
        foreach ($avail['freeSlots'] as [$a, $b]) {
            if ($a === $heureDebut && $b === $heureFin) {
                $slotFree = true;
                break;
            }
        }
        if (!$slotFree) {
            return $this->json(['error' => 'Ce créneau est déjà occupé'], 409);
        }

        // Resolve classe
        $classe = $classeId ? $classeRepo->find($classeId) : null;
        if (!$classe) {
            // Use the user's class if available
            $user = $this->getUser();
            if ($user && method_exists($user, 'getClasse') && $user->getClasse()) {
                $classe = $user->getClasse();
            } else {
                // fallback: first class in DB
                $classe = $classeRepo->findOneBy([]);
            }
        }
        if (!$classe) {
            return $this->json(['error' => 'Aucune classe trouvée'], 400);
        }

        // Resolve matière
        $matiere = $matiereId ? $matiereRepo->find($matiereId) : null;
        if (!$matiere) {
            $matiere = $matiereRepo->findOneBy([]);
        }
        if (!$matiere) {
            return $this->json(['error' => 'Aucune matière trouvée'], 400);
        }

        // Map date to French day
        $joursMap = [
            'Monday'    => 'Lundi',
            'Tuesday'   => 'Mardi',
            'Wednesday' => 'Mercredi',
            'Thursday'  => 'Jeudi',
            'Friday'    => 'Vendredi',
            'Saturday'  => 'Samedi',
        ];
        $jourEn  = $dtDebut->format('l');
        $jourFr  = $joursMap[$jourEn] ?? 'Lundi';

        // Create the seance
        $seance = new Seance();
        $seance->setSalle($salle);
        $seance->setHeureDebut($dtDebut);
        $seance->setHeureFin($dtFin);
        $seance->setJour($jourFr);
        $seance->setTypeSeance('Révision');  // Séance de révision
        $seance->setMode('Présentiel');
        $seance->setClasse($classe);
        $seance->setMatiere($matiere);
        $seance->setCreatedAt(new \DateTimeImmutable());

        $em->persist($seance);
        $em->flush();

        return $this->json([
            'success' => true,
            'message' => 'Séance de révision créée avec succès',
            'seance'  => [
                'id'         => $seance->getId(),
                'salle'      => $salle->getName(),
                'jour'       => $jourFr,
                'heureDebut' => $dtDebut->format('H:i'),
                'heureFin'   => $dtFin->format('H:i'),
                'date'       => $dtDebut->format('Y-m-d'),
            ],
        ], 201);
    }
}
