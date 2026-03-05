<?php

namespace App\Service;

use App\Entity\Salle;

class SalleManager
{
    public function validate(Salle $salle): bool
    {
        $block = (string) $salle->getBlock();
        $etage = $salle->getEtage();
        $number = $salle->getNumber();
        $capacite = $salle->getCapacite();
        $name = (string) $salle->getName();

        // 1) block A..K
        if (!preg_match('/^[A-K]$/', $block)) {
            throw new \InvalidArgumentException('Bloc invalide (A à K)');
        }

        // 2) etage 0..4
        if (!is_int($etage) || $etage < 0 || $etage > 4) {
            throw new \InvalidArgumentException('Etage invalide (0 à 4)');
        }

        // 3) number 1..9
        if (!is_int($number) || $number < 1 || $number > 9) {
            throw new \InvalidArgumentException('Numéro invalide (1 à 9)');
        }

        // 4) capacité 1..30 + numérique
        if (!is_int($capacite) || $capacite < 1 || $capacite > 30) {
            throw new \InvalidArgumentException('Capacité invalide (1 à 30)');
        }

        // 5) règle avancée: name doit être dérivé correctement
        $expectedName = $block . $etage . $number;
        if ($name !== $expectedName) {
            throw new \InvalidArgumentException("Nom invalide: attendu {$expectedName}");
        }

        return true;
    }
}