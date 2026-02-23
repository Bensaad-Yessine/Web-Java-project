<?php

namespace App\Service;

use App\Entity\Classe;
use Doctrine\ORM\EntityManagerInterface;

class ArchivingService
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {}

    /**
     * Clone une classe vers une nouvelle année universitaire.
     * Les matières associées sont transférées.
     */
    public function cloneClass(Classe $original, string $nouvelleAnnee): Classe
    {
        $clone = new Classe();
        $clone->setNom($original->getNom());
        $clone->setNiveau($original->getNiveau());
        $clone->setFiliere($original->getFiliere());
        $clone->setDescription($original->getDescription());
        $clone->setAnneeuniversitaire($nouvelleAnnee);

        // Copier les matières associées
        foreach ($original->getMatiereClasses() as $matiere) {
            $matiere->addClass($clone);
        }

        $this->entityManager->persist($clone);

        return $clone;
    }

    /**
     * Archive une classe en la clonant vers nouvelle année, et flush la transaction.
     */
    public function archiveAndClone(Classe $original, string $nouvelleAnnee): Classe
    {
        $clone = $this->cloneClass($original, $nouvelleAnnee);
        $this->entityManager->flush();
        return $clone;
    }

    /**
     * Génère la prochaine année universitaire (ex: "2024/2025" → "2025/2026")
     */
    public function getNextYear(string $currentYear): string
    {
        if (preg_match('/^(\d{4})\/(\d{4})$/', $currentYear, $m)) {
            $start = (int)$m[1] + 1;
            $end = (int)$m[2] + 1;
            return "$start/$end";
        }
        $year = (int)date('Y');
        return ($year + 1) . '/' . ($year + 2);
    }
}
