<?php

namespace App\Service;

use App\Entity\GroupeProjet;

class GroupeProjetManager
{
    public function validate(GroupeProjet $groupe): bool
    {
        // Regle 1 : Nom obligatoire
        if (empty($groupe->getNomProjet())) {
            throw new \InvalidArgumentException('Le nom du projet est obligatoire.');
        }

        // Regle 2 : Nom entre 3 et 20 caracteres
        $longueur = strlen($groupe->getNomProjet());
        if ($longueur < 3 || $longueur > 20) {
            throw new \InvalidArgumentException('Le nom du projet doit contenir entre 3 et 20 caracteres.');
        }

        // Regle 3 : Matiere obligatoire
        if (empty($groupe->getMatiere())) {
            throw new \InvalidArgumentException('La matiere est obligatoire.');
        }

        // Regle 4 : Nombre de membres entre 2 et 10
        if (
            $groupe->getNbrMembre() === null ||
            $groupe->getNbrMembre() < 2 ||
            $groupe->getNbrMembre() > 10
        ) {
            throw new \InvalidArgumentException('Le nombre de membres doit etre entre 2 et 10.');
        }

        // Regle 5 : Statut obligatoire
        if (empty($groupe->getStatut())) {
            throw new \InvalidArgumentException('Le statut est obligatoire.');
        }

        return true;
    }
}
