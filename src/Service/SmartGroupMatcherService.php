<?php

namespace App\Service;

use App\Entity\GroupeProjet;

/**
 * SmartGroup Matcher — Algorithme de scoring pondéré
 *
 * Score = (Niveau × 30%) + (Disponibilités × 30%) + (Objectif × 25%) + (Taille × 15%)
 */
class SmartGroupMatcherService
{
    private const NIVEAU_MAP = [
        'débutant'      => 1,
        'intermédiaire' => 2,
        'avancé'        => 3,
    ];

    private const MAX_MEMBERS = 10;

    /**
     * Rank groups by compatibility score with the given criteria.
     *
     * @param GroupeProjet[] $groups
     * @param array{
     *   matiere: string,
     *   niveau: string,
     *   disponibilites: string[],
     *   objectif: string,
     *   style: string
     * } $criteria
     *
     * @return array<int, array{
     *   groupe: GroupeProjet,
     *   score: int,
     *   niveauScore: int,
     *   disponibiliteScore: int,
     *   objectifScore: int,
     *   tailleScore: int,
     *   justification: string,
     *   details: string[]
     * }>
     */
    public function rankGroups(array $groups, array $criteria): array
    {
        $results = [];

        foreach ($groups as $group) {
            [$niveauScore, $niveauDetail]        = $this->scoreNiveau($group, $criteria);
            [$disponibiliteScore, $dispoDetail]  = $this->scoreDisponibilites($group, $criteria);
            [$objectifScore, $objectifDetail]    = $this->scoreObjectif($group, $criteria);
            [$tailleScore, $tailleDetail]        = $this->scoreTaille($group);

            $total = (int) round(
                ($niveauScore      * 0.30) +
                ($disponibiliteScore * 0.30) +
                ($objectifScore    * 0.25) +
                ($tailleScore      * 0.15)
            );

            $results[] = [
                'groupe'             => $group,
                'score'              => $total,
                'niveauScore'        => $niveauScore,
                'disponibiliteScore' => $disponibiliteScore,
                'objectifScore'      => $objectifScore,
                'tailleScore'        => $tailleScore,
                'justification'      => implode(' · ', array_filter([$niveauDetail, $dispoDetail, $objectifDetail, $tailleDetail])),
                'details'            => [
                    'niveau'        => $niveauDetail,
                    'disponibilite' => $dispoDetail,
                    'objectif'      => $objectifDetail,
                    'taille'        => $tailleDetail,
                ],
            ];
        }

        usort($results, static fn(array $a, array $b) => $b['score'] <=> $a['score']);

        return $results;
    }

    /** Niveau score (30%) — how close is the group level to the user's level */
    private function scoreNiveau(GroupeProjet $group, array $criteria): array
    {
        $userNiveau  = self::NIVEAU_MAP[$criteria['niveau'] ?? ''] ?? null;
        $groupNiveau = self::NIVEAU_MAP[$group->getNiveauGroupe() ?? ''] ?? null;

        if ($userNiveau === null || $groupNiveau === null) {
            return [50, 'Niveau non renseigné'];
        }

        $diff = abs($userNiveau - $groupNiveau);

        return match ($diff) {
            0       => [100, 'Niveau identique ✅'],
            1       => [50,  'Niveau proche'],
            default => [0,   'Niveau très différent ❌'],
        };
    }

    /** Disponibilités score (30%) — overlap between user days and group days */
    private function scoreDisponibilites(GroupeProjet $group, array $criteria): array
    {
        $userDays  = array_filter((array) ($criteria['disponibilites'] ?? []));
        $groupDays = array_filter((array) ($group->getDisponibilites() ?? []));

        if (empty($userDays) || empty($groupDays)) {
            return [50, 'Disponibilités non renseignées'];
        }

        $common = count(array_intersect($userDays, $groupDays));
        $score  = (int) round($common / max(count($userDays), count($groupDays)) * 100);

        if ($common === 0) {
            return [0, 'Aucun créneau commun ❌'];
        }

        return [$score, "$common créneau(x) en commun ✅"];
    }

    /** Objectif score (25%) — same objective = perfect match */
    private function scoreObjectif(GroupeProjet $group, array $criteria): array
    {
        $userObj  = $criteria['objectif'] ?? '';
        $groupObj = $group->getObjectifGroupe() ?? '';

        if (!$userObj || !$groupObj) {
            return [50, 'Objectif non renseigné'];
        }

        if ($userObj === $groupObj) {
            return [100, 'Même objectif ✅'];
        }

        return [0, 'Objectifs différents ❌'];
    }

    /** Taille score (15%) — the less crowded the group, the higher the score */
    private function scoreTaille(GroupeProjet $group): array
    {
        $current = $group->getIdUser()->count();
        $max     = self::MAX_MEMBERS;

        if ($current >= $max) {
            return [0, 'Groupe complet ❌'];
        }

        $spots = $max - $current;
        $score = (int) round($spots / $max * 100);

        if ($spots <= 1) {
            return [$score, "1 place disponible"];
        }

        return [$score, "$spots places disponibles ✅"];
    }
}
