<?php

namespace App\Service;

use App\Entity\Classe;
use App\Entity\MatiereClasse;
use App\Repository\MatiereClasseRepository;

class ProgramGeneratorService
{
    public function __construct(
        private MatiereClasseRepository $matiereClasseRepository
    ) {}

    /**
     * Suggère des matières à ajouter à une classe en se basant sur son niveau et sa filière.
     * @return MatiereClasse[]
     */
    public function getSuggestions(Classe $classe): array
    {
        // Matières actuellement affectées à la classe
        $currentMatiereIds = array_map(
            fn($m) => $m->getId(),
            $classe->getMatiereClasses()->toArray()
        );

        // Récupérer les matières des classes du même niveau / filière
        $suggestions = $this->matiereClasseRepository->findSuggestionsForClasse(
            $classe->getNiveau(),
            $classe->getFiliere(),
            $currentMatiereIds
        );

        return $suggestions;
    }

    /**
     * Applique les suggestions automatiquement à la classe
     * @param int[] $selectedIds IDs des matières à ajouter
     */
    public function applySuggestions(Classe $classe, array $selectedIds): void
    {
        $matieres = $this->matiereClasseRepository->findBy(['id' => $selectedIds]);
        foreach ($matieres as $matiere) {
            if (!$classe->getMatiereClasses()->contains($matiere)) {
                $matiere->addClass($classe);
            }
        }
    }
}
