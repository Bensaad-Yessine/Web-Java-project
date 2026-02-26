<?php

namespace App\Controller;

use App\Repository\PropositionReunionRepository;
use App\Repository\GroupeProjetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalendrierController extends AbstractController
{
    #[Route('/calendrier', name: 'front_calendrier', methods: ['GET'])]
    public function index(GroupeProjetRepository $groupeRepo): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $groupes = $groupeRepo->findByMember($user);

        return $this->render('calendrier/index.html.twig', [
            'groupes' => $groupes,
            'tasks'   => [],
        ]);
    }

    #[Route('/api/propositions/calendar', name: 'api_propositions_calendar', methods: ['GET'])]
    public function calendarEvents(Request $request, PropositionReunionRepository $propositionRepo, GroupeProjetRepository $groupeRepo): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return new JsonResponse([], 403);
        }

        $start    = $request->query->get('start');
        $end      = $request->query->get('end');
        $groupeId = $request->query->get('groupeId');

        // Récupère toutes les propositions de l'utilisateur (actives + archivées)
        $propositions = $propositionRepo->findAllByUser($user, $start, $end, $groupeId ? (int)$groupeId : null);

        $colors = [
            'proposed'   => '#3b82f6',  // Bleu
            'confirmed'  => '#22c55e',  // Vert
            'cancelled'  => '#ef4444',  // Rouge
            'postponed'  => '#f97316',  // Orange
            'En attente' => '#3b82f6',
            'Proposé'    => '#3b82f6',
            'Acceptée'   => '#22c55e',
            'Refusée'    => '#ef4444',
            'Annulée'    => '#ef4444',
        ];

        $events = [];
        foreach ($propositions as $p) {
            $status   = $p->getStatus() ?? 'En attente';
            $color    = $colors[$status] ?? '#6b7280';
            $archived = $p->isArchived();
            if ($archived) {
                $color = '#9ca3af'; // Gris pour archives
            }

            $dateReunion = $p->getDateReunion();
            $heureDebut  = $p->getHeureDebut();
            $heureFin    = $p->getHeureFin();

            if (!$dateReunion || !$heureDebut) {
                continue;
            }

            $startDt = (clone $dateReunion)->setTime(
                (int)$heureDebut->format('H'),
                (int)$heureDebut->format('i')
            );
            $endDt = $heureFin
                ? (clone $dateReunion)->setTime((int)$heureFin->format('H'), (int)$heureFin->format('i'))
                : (clone $startDt)->modify('+2 hours');

            $groupe = $p->getIdGroupe();

            $events[] = [
                'id'              => $p->getId(),
                'title'           => $p->getTitre(),
                'start'           => $startDt->format('Y-m-d\TH:i:s'),
                'end'             => $endDt->format('Y-m-d\TH:i:s'),
                'color'           => $color,
                'url'             => $this->generateUrl('front_proposition_reunion_show', ['id' => $p->getId()]),
                'extendedProps'   => [
                    'status'      => $status,
                    'lieu'        => $p->getLieu(),
                    'groupe'      => $groupe ? $groupe->getNomProjet() : '—',
                    'description' => $p->getDescription(),
                    'archived'    => $archived,
                ],
            ];
        }

        return new JsonResponse($events);
    }
}
