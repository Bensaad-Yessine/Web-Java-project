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
     * Suggère des matières à ajouter à une classe.
     *
     * Stratégie :
     *  1. On cherche d'abord dans les classes du même niveau + filière + année universitaire.
     *  2. Si aucune suggestion, on élargit à même niveau + filière (toutes années).
     *  3. Si toujours rien, on élargit à même filière seule.
     *  4. Enfin, en dernier recours, on suggère des matières globalement (toutes filières / niveaux).
     *
     * @return MatiereClasse[]
     */
    public function getSuggestions(Classe $classe): array
    {
        // Matières actuellement affectées à la classe
        $currentMatiereIds = array_map(
            fn($m) => $m->getId(),
            $classe->getMatiereClasses()->toArray()
        );

        $niveau = $classe->getNiveau();
        $filiere = $classe->getFiliere();
        $annee = $classe->getAnneeuniversitaire();

        // Stratégies de recherche, du plus strict au plus large
        $strategies = [
            // 1) Même niveau + même filière + même année universitaire
            ['niveau' => $niveau, 'filiere' => $filiere, 'annee' => $annee],
            // 2) Même niveau + même filière, toutes années confondues
            ['niveau' => $niveau, 'filiere' => $filiere, 'annee' => null],
            // 3) Même filière uniquement
            ['niveau' => null, 'filiere' => $filiere, 'annee' => null],
            // 4) Dernier recours : aucune contrainte (on propose des matières globalement)
            ['niveau' => null, 'filiere' => null, 'annee' => null],
        ];

        foreach ($strategies as $strategy) {
            $suggestions = $this->matiereClasseRepository->findSuggestionsForClasse(
                $strategy['niveau'],
                $strategy['filiere'],
                $currentMatiereIds,
                $strategy['annee']
            );

            if (!empty($suggestions)) {
                return $suggestions;
            }
        }

        // Si vraiment aucune matière n'est trouvée (BD quasi vide), on retourne un tableau vide
        return [];
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
