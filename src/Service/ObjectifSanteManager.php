<?php

namespace App\Service;

use App\Entity\ObjectifSante;

class ObjectifSanteManager
{
    public function validate(ObjectifSante $o): bool
    {
        // 1) titre obligatoire + min length 3
        $titre = $o->getTitre();
        if (empty($titre) || mb_strlen(trim($titre)) < 3) {
            throw new \InvalidArgumentException('Le titre est obligatoire (min 3 caractères).');
        }

        // 2) type obligatoire + choice
        $type = $o->getType();
        $allowedTypes = ['SOMMEIL', 'SPORT', 'ALIMENTATION'];
        if (empty($type) || !in_array($type, $allowedTypes, true)) {
            throw new \InvalidArgumentException('Type invalide (SOMMEIL, SPORT, ALIMENTATION).');
        }

        // 3) valeur cible obligatoire + range by type
        $valeur = $o->getValeurCible();
        if ($valeur === null) {
            throw new \InvalidArgumentException('Valeur cible obligatoire.');
        }

        $ranges = [
            'SOMMEIL' => [1, 16],
            'SPORT' => [0, 300],
            'ALIMENTATION' => [1, 6],
        ];

        [$min, $max] = $ranges[$type];
        if ($valeur < $min || $valeur > $max) {
            throw new \InvalidArgumentException("ValeurCible invalide pour $type : entre $min et $max.");
        }

        // 4) dates: fin > début
        $debut = $o->getDateDebut();
        $fin   = $o->getDateFin();
        if ($debut === null || $fin === null) {
            throw new \InvalidArgumentException('Date début et date fin sont obligatoires.');
        }
        if ($debut >= $fin) {
            throw new \InvalidArgumentException('La date fin doit être postérieure à la date début.');
        }

        // 5) statut choice
        $statut = $o->getStatut();
        $allowedStatuts = ['EN_COURS', 'ATTEINT', 'ABANDONNE'];
        if (!in_array($statut, $allowedStatuts, true)) {
            throw new \InvalidArgumentException('Statut invalide (EN_COURS, ATTEINT, ABANDONNE).');
        }

        return true;
    }
}