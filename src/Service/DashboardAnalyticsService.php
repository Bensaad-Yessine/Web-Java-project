<?php

namespace App\Service;

use App\Entity\ObjectifSante;
use App\Repository\SuiviBienEtreRepository;

class DashboardAnalyticsService
{
    public function __construct(
        private SuiviBienEtreRepository $suiviRepo
    ) {}

    public function build(ObjectifSante $objectif): array
    {
        $objectifId = $objectif->getId();

        $stats = $this->suiviRepo->getAggregatedStats($objectifId);
        $suivis = $this->suiviRepo->findByObjectifOrdered($objectifId);
        $humeurs = $this->suiviRepo->getHumeurDistribution($objectifId);

        $nbSuivis = (int) ($stats['nbSuivis'] ?? 0);

        if ($nbSuivis === 0 || empty($suivis)) {
            return [
                "objectifId" => $objectifId,
                "message" => "Aucun suivi disponible pour générer les statistiques."
            ];
        }

        $firstScore = $suivis[0]?->getScore() ?? 0;
        $lastScore = end($suivis)?->getScore() ?? 0;
        $previousScore = count($suivis) > 1 ? ($suivis[count($suivis)-2]->getScore() ?? 0) : null;

        $delta = ($lastScore !== null && $previousScore !== null)
            ? round($lastScore - $previousScore, 1)
            : null;

        $progression = ($lastScore !== null && $firstScore !== null)
            ? round($lastScore - $firstScore, 1)
            : null;

        $completionRate = $this->calculateCompletionRate($objectif, $nbSuivis);

        return [
            "objectifId" => $objectifId,
            "nbSuivis" => $nbSuivis,

            "scores" => [
                "avg" => round((float) ($stats['avgScore'] ?? 0), 1),
                "best" => round((float) ($stats['maxScore'] ?? 0), 1),
                "worst" => round((float) ($stats['minScore'] ?? 0), 1),
                "last" => $lastScore,
                "previous" => $previousScore,
                "delta" => $delta,
                "progression" => $progression
            ],

            "indicatorsAvg" => [
                "sommeil" => round((float) ($stats['avgSleep'] ?? 0), 1),
                "energie" => round((float) ($stats['avgEnergy'] ?? 0), 1),
                "stress" => round((float) ($stats['avgStress'] ?? 0), 1),
                "alimentation" => round((float) ($stats['avgFood'] ?? 0), 1),
            ],

            "completionRate" => $completionRate,
            "humeurDistribution" => $humeurs,
        ];
    }

    private function calculateCompletionRate(ObjectifSante $objectif, int $nbSuivis): float
    {
        if (!$objectif->getDateDebut() || !$objectif->getDateFin()) {
            return 0;
        }

        $days = $objectif->getDateDebut()->diff($objectif->getDateFin())->days + 1;

        if ($days <= 0) return 0;

        return round(($nbSuivis / $days) * 100, 1);
    }
}