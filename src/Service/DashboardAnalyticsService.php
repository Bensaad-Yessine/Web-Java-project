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

        if (!$stats['nbSuivis']) {
            return [
                "objectifId" => $objectifId,
                "message" => "Aucun suivi disponible pour générer les statistiques."
            ];
        }

        $firstScore = $suivis[0]?->getScore();
        $lastScore = end($suivis)?->getScore();
        $previousScore = count($suivis) > 1 ? $suivis[count($suivis)-2]->getScore() : null;

        $delta = ($lastScore !== null && $previousScore !== null)
            ? round($lastScore - $previousScore, 1)
            : null;

        $progression = ($lastScore !== null && $firstScore !== null)
            ? round($lastScore - $firstScore, 1)
            : null;

        $completionRate = $this->calculateCompletionRate($objectif, (int)$stats['nbSuivis']);

        return [
            "objectifId" => $objectifId,
            "nbSuivis" => (int)$stats['nbSuivis'],

            "scores" => [
                "avg" => round($stats['avgScore'], 1),
                "best" => round($stats['maxScore'], 1),
                "worst" => round($stats['minScore'], 1),
                "last" => $lastScore,
                "previous" => $previousScore,
                "delta" => $delta,
                "progression" => $progression
            ],

            "indicatorsAvg" => [
                "sommeil" => round($stats['avgSleep'], 1),
                "energie" => round($stats['avgEnergy'], 1),
                "stress" => round($stats['avgStress'], 1),
                "alimentation" => round($stats['avgFood'], 1),
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