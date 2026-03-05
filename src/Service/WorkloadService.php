<?php

namespace App\Service;

use App\Entity\Classe;

class WorkloadService
{
    private const COMPLEXITY_THRESHOLD = 7.0;
    private const HOURS_PER_SUBJECT_THRESHOLD = 4.0;

    public function calculateWorkload(Classe $classe): array
    {
        $matieres = $classe->getMatiereClasses();

        $totalComplexite = 0.0;
        $totalHeures = 0.0;
        $nbMatieres = $matieres ? $matieres->count() : 0;

        $matiereDetails = [];
        foreach ($matieres as $matiere) {
            $score = (float) ($matiere->getScorecomplexite() ?? 0);
            $hours = (float) ($matiere->getChargehoraire() ?? 0);
            $coeff = (float) ($matiere->getCoefficient() ?? 0);

            $totalComplexite += $score;
            $totalHeures += $hours;

            $matiereDetails[] = [
                'nom' => $matiere->getNom(),
                'scorecomplexite' => $score,
                'chargehoraire' => $hours,
                'coefficient' => $coeff,
            ];
        }

        $complexiteMoyenne = $nbMatieres > 0 ? round($totalComplexite / $nbMatieres, 2) : 0.0;

        $seuilComplexiteMoyenne = self::COMPLEXITY_THRESHOLD;
        $seuilComplexite = $nbMatieres * $seuilComplexiteMoyenne;
        $seuilHeures = $nbMatieres * self::HOURS_PER_SUBJECT_THRESHOLD;

        $surcharge = $totalComplexite > $seuilComplexite
            || $totalHeures > $seuilHeures
            || $complexiteMoyenne > $seuilComplexiteMoyenne;

        return [
            'surcharge' => $surcharge,
            'totalComplexite' => round($totalComplexite, 2),
            'totalHeures' => round($totalHeures, 2),
            'complexiteMoyenne' => $complexiteMoyenne,
            'seuilComplexite' => round($seuilComplexite, 2),
            'seuilHeures' => round($seuilHeures, 2),
            'seuilComplexiteMoyenne' => $seuilComplexiteMoyenne,
            'nbMatieres' => $nbMatieres,
            'matieres' => $matiereDetails,
        ];
    }

    public function auditAndNotify(Classe $classe): array
    {
        // Placeholder for notification logic; currently returns the audit data only.
        return $this->calculateWorkload($classe);
    }
}
