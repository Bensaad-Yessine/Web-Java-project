<?php

namespace App\Controller;

use App\Entity\PropositionReunion;
use App\Entity\User;
use App\Entity\Vote;
use App\Repository\VoteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

final class VoteController extends AbstractController
{
    #[Route('/api/proposition/{id}/vote', name: 'api_proposition_vote', methods: ['POST'])]
    public function vote(Request $request, PropositionReunion $proposition, VoteRepository $voteRepository, EntityManagerInterface $em): JsonResponse
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->json(['success' => false, 'message' => 'Utilisateur non authentifié.'], 401);
        }

        if (!$this->isGranted('ROLE_ADMIN') && !$proposition->getIdGroupe()->getIdUser()->contains($user)) {
            return $this->json(['success' => false, 'message' => 'Vous ne faites pas partie de ce groupe.'], 403);
        }

        $data = json_decode($request->getContent(), true) ?? [];
        $voteValue = $data['vote'] ?? null;
        if (!in_array($voteValue, ['pour', 'contre', 'abstention'], true)) {
            return $this->json(['success' => false, 'message' => 'Vote invalide.'], 400);
        }

        if (!$this->isVoteOpen($proposition)) {
            return $this->json(['success' => false, 'message' => 'La période de vote est terminée ou non disponible.'], 400);
        }

        $vote = $voteRepository->findOneBy([
            'proposition' => $proposition,
            'user' => $user,
        ]);

        if (!$vote) {
            $vote = new Vote();
            $vote->setProposition($proposition);
            $vote->setUser($user);
            $proposition->addVote($vote);
        }

        $vote->setVote($voteValue);
        $vote->setVotedAt(new \DateTime());

        $em->persist($vote);
        $em->flush();

        $results = $this->calculateResults($proposition, $voteRepository, $user);

        return $this->json([
            'success' => true,
            'message' => 'Vote enregistré',
            'results' => $results,
        ]);
    }

    #[Route('/api/proposition/{id}/results', name: 'api_proposition_results', methods: ['GET'])]
    public function results(PropositionReunion $proposition, VoteRepository $voteRepository, EntityManagerInterface $em): JsonResponse
    {
        $this->closeVoteIfNeeded($proposition, $voteRepository, $em);

        $user = $this->getUser();
        $currentUser = $user instanceof User ? $user : null;
        $results = $this->calculateResults($proposition, $voteRepository, $currentUser);

        return $this->json([
            'success' => true,
            'results' => array_merge($results, [
                'statut' => $proposition->getStatus(),
                'dateFin' => $proposition->getDateFinVote() ? $proposition->getDateFinVote()->format(DATE_ATOM) : null,
                'tempsRestant' => $this->formatTimeRemaining($proposition->getDateFinVote()),
            ]),
        ]);
    }

    private function isVoteOpen(PropositionReunion $proposition): bool
    {
        $status = $proposition->getStatus();
        if (!in_array($status, ['Proposé', 'En attente'], true)) {
            return false;
        }

        $dateFin = $proposition->getDateFinVote();
        if (!$dateFin) {
            return false;
        }

        return (new \DateTime()) <= $dateFin;
    }

    private function calculateResults(PropositionReunion $proposition, VoteRepository $voteRepository, ?User $currentUser): array
    {
        $votes = $voteRepository->findBy(['proposition' => $proposition]);

        $pour = 0;
        $contre = 0;
        $abstention = 0;
        $monVote = null;

        foreach ($votes as $vote) {
            if ($vote->getVote() === 'pour') {
                $pour++;
            } elseif ($vote->getVote() === 'contre') {
                $contre++;
            } elseif ($vote->getVote() === 'abstention') {
                $abstention++;
            }

            if ($currentUser && $vote->getUser() && $vote->getUser()->getId() === $currentUser->getId()) {
                $monVote = $vote->getVote();
            }
        }

        $total = $pour + $contre + $abstention;
        $totalExprimes = $pour + $contre;
        $pourcentagePour = $totalExprimes > 0 ? round(($pour / $totalExprimes) * 100, 1) : 0;
        $pourcentageContre = $totalExprimes > 0 ? round(($contre / $totalExprimes) * 100, 1) : 0;

        return [
            'pour' => $pour,
            'contre' => $contre,
            'abstention' => $abstention,
            'total' => $total,
            'totalExprimés' => $totalExprimes,
            'pourcentagePour' => $pourcentagePour,
            'pourcentageContre' => $pourcentageContre,
            'aVote' => $monVote !== null,
            'monVote' => $monVote,
        ];
    }

    private function closeVoteIfNeeded(PropositionReunion $proposition, VoteRepository $voteRepository, EntityManagerInterface $em): void
    {
        $dateFin = $proposition->getDateFinVote();
        if (!$dateFin || (new \DateTime()) < $dateFin) {
            return;
        }

        if (!in_array($proposition->getStatus(), ['Proposé', 'En attente'], true)) {
            return;
        }

        $results = $this->calculateResults($proposition, $voteRepository, null);
        $totalExprimes = $results['totalExprimés'] ?? 0;
        $pourcentagePour = $results['pourcentagePour'] ?? 0;

        if ($totalExprimes === 0) {
            $proposition->setStatus('Annulée');
        } elseif ($pourcentagePour > 50) {
            $proposition->setStatus('Acceptée');
        } elseif ($pourcentagePour < 50) {
            $proposition->setStatus('Refusée');
        } else {
            $proposition->setStatus('Égalité');
        }

        $em->flush();
    }

    private function formatTimeRemaining(?\DateTime $dateFin): ?string
    {
        if (!$dateFin) {
            return null;
        }

        $now = new \DateTime();
        if ($dateFin <= $now) {
            return '0 minute';
        }

        $interval = $now->diff($dateFin);
        $parts = [];

        if ($interval->d > 0) {
            $parts[] = $interval->d . ' jour' . ($interval->d > 1 ? 's' : '');
        }
        if ($interval->h > 0) {
            $parts[] = $interval->h . ' heure' . ($interval->h > 1 ? 's' : '');
        }
        if ($interval->i > 0 && count($parts) < 2) {
            $parts[] = $interval->i . ' minute' . ($interval->i > 1 ? 's' : '');
        }

        return implode(' ', $parts);
    }
}
