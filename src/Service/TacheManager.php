<?php

namespace App\Service;

use App\Entity\Tache;

class TacheManager
{
    public function validate(Tache $tache): bool
    {
        if (empty($tache->getTitre())) {
            throw new \InvalidArgumentException('Le titre est obligatoire');
        }

        $types = ["MANUEL", "REUNION", "REVISION", "SANTE", "EMPLOI"];
        if (!in_array($tache->getType(), $types)) {
            throw new \InvalidArgumentException('Type invalide');
        }

        $priorites = ["FAIBLE", "MOYEN", "ELEVEE"];
        if (!in_array($tache->getPriorite(), $priorites)) {
            throw new \InvalidArgumentException('Priorité invalide');
        }

        if ($tache->getDateDebut() <= new \DateTime()) {
            throw new \InvalidArgumentException('La date début doit être dans le futur');
        }

        if ($tache->getDateFin() <= $tache->getDateDebut()) {
            throw new \InvalidArgumentException('La date fin doit être après la date début');
        }

        $duration = $tache->getDateFin()->getTimestamp() - $tache->getDateDebut()->getTimestamp();

        if ($duration > 36000) {
            throw new \InvalidArgumentException('La durée dépasse 10 heures');
        }

        return true;
    }
}