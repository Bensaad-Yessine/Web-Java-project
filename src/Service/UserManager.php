<?php

namespace App\Service;

use App\Entity\User;

class UserManager
{
    /**
     * Règle 1 : Le nom est obligatoire (min 2 caractères)
     * Règle 2 : Le prénom est obligatoire (min 2 caractères)
     * Règle 3 : L'email doit être valide
     * Règle 4 : Le sexe doit être "Homme" ou "Femme"
     * Règle 5 : L'utilisateur doit avoir au moins 10 ans
     */
    public function validate(User $user): bool
    {
        // Règle 1 — Nom obligatoire
        if (empty($user->getNom()) || strlen(trim($user->getNom())) < 2) {
            throw new \InvalidArgumentException('Le nom est obligatoire et doit contenir au moins 2 caractères');
        }

        // Règle 2 — Prénom obligatoire
        if (empty($user->getPrenom()) || strlen(trim($user->getPrenom())) < 2) {
            throw new \InvalidArgumentException('Le prénom est obligatoire et doit contenir au moins 2 caractères');
        }

        // Règle 3 — Email valide
        if (!filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('L\'email n\'est pas valide');
        }

        // Règle 4 — Sexe valide
        if (!in_array($user->getSexe(), ['Homme', 'Femme'])) {
            throw new \InvalidArgumentException('Le sexe doit être "Homme" ou "Femme"');
        }

        // Règle 5 — Age minimum 10 ans
        if ($user->getDateDeNaissance() === null) {
            throw new \InvalidArgumentException('La date de naissance est obligatoire');
        }

        $age = (new \DateTime())->diff($user->getDateDeNaissance())->y;
        if ($age < 10) {
            throw new \InvalidArgumentException('L\'utilisateur doit avoir au moins 10 ans');
        }

        return true;
    }
}