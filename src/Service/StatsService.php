<?php

namespace App\Service;

use App\Entity\Classe;

class StatsService
{
    /**
     * Retourne les données de charge horaire par matière pour une classe,
     * prêtes à être utilisées dans un graphique Chart.js.
     */
    public function getWorkloadPerMatiere(Classe $classe): array
    {
        $labels = [];
        $hours = [];
        $complexities = [];

        foreach ($classe->getMatiereClasses() as $matiereClasse) {
            $labels[] = $matiereClasse->getNom() ?? 'Matière';
            $hours[] = (float) ($matiereClasse->getChargehoraire() ?? 0);
            $complexities[] = (float) ($matiereClasse->getScorecomplexite() ?? 0);
        }

        return [
            'labels' => $labels,
            'hours' => $hours,
            'complexities' => $complexities,
        ];
    }
}
