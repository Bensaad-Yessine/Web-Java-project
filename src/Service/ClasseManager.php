<?php

namespace App\Service;

use App\Entity\Classe;

class ClasseManager
{
    public function validate(Classe $classe): bool
    {
        if (empty($classe->getNom())) {
            throw new \InvalidArgumentException("Le nom est obligatoire");
        }

        if (strlen($classe->getNom()) < 2) {
            throw new \InvalidArgumentException("Le nom doit contenir au moins 2 caractères");
        }

        if (empty($classe->getNiveau())) {
            throw new \InvalidArgumentException("Le niveau est obligatoire");
        }

        return true;
    }
}