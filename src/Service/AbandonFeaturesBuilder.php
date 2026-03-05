<?php

namespace App\Service;

use App\Entity\ObjectifSante;
use App\Repository\SuiviBienEtreRepository;

class AbandonFeaturesBuilder
{
    public function __construct(private SuiviBienEtreRepository $suiviRepo) {}

    public function build(ObjectifSante $objectif): array
    {
        $dateDebut = $objectif->getDateDebut();
        $dateFin   = $objectif->getDateFin();

        // nb_jours_total (au moins 1 pour éviter division par 0)
        $nbJoursTotal = max(1, $dateDebut->diff($dateFin)->days + 1);

        // scores
        $rows = $this->suiviRepo->findScoresByObjectif($objectif->getId());
        $scores = array_map(fn($r) => (float)$r['score'], $rows);

        $nbSuivis = count($scores);
        $regularite = $nbSuivis / $nbJoursTotal;

        // Si aucun suivi -> valeurs par défaut
        if ($nbSuivis === 0) {
            return [
                "nb_jours_total" => $nbJoursTotal,
                "nb_suivis" => 0,
                "regularite" => 0.0,
                "score_moyen" => 0.0,
                "score_debut" => 0.0,
                "score_fin" => 0.0,
                "progression" => 0.0,
                "std_score" => 0.0,
            ];
        }

        // score_moyen
        $scoreMoyen = array_sum($scores) / $nbSuivis;

        // score_debut = moyenne des 3 premiers (ou moins si <3)
        $first = array_slice($scores, 0, min(3, $nbSuivis));
        $scoreDebut = array_sum($first) / count($first);

        // score_fin = moyenne des 3 derniers (ou moins si <3)
        $last = array_slice($scores, max(0, $nbSuivis - 3));
        $scoreFin = array_sum($last) / count($last);

        $progression = $scoreFin - $scoreDebut;

        // std_score (écart-type)
        $variance = 0.0;
        foreach ($scores as $s) {
            $variance += ($s - $scoreMoyen) ** 2;
        }
        $variance /= $nbSuivis;
        $std = sqrt($variance);

        return [
            "nb_jours_total" => (int)$nbJoursTotal,
            "nb_suivis" => (int)$nbSuivis,
            "regularite" => round($regularite, 3),
            "score_moyen" => round($scoreMoyen, 2),
            "score_debut" => round($scoreDebut, 2),
            "score_fin" => round($scoreFin, 2),
            "progression" => round($progression, 2),
            "std_score" => round($std, 2),
        ];
    }
}