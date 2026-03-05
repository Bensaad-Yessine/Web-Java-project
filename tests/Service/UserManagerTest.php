<?php

namespace App\Tests\Service;

use App\Entity\User;
use App\Service\UserManager;
use PHPUnit\Framework\TestCase;

class UserManagerTest extends TestCase
{
    // =========================================================
    // TEST 1 — Utilisateur valide (tout correct)
    // =========================================================
    public function testValidUser(): void
    {
        $user = new User();
        $user->setNom('Ayari');
        $user->setPrenom('Mohamed');
        $user->setEmail('mohamed.ayari@etudiant.istt.tn');
        $user->setSexe('Homme');
        $user->setDateDeNaissance(new \DateTime('-20 years'));

        $manager = new UserManager();

        $this->assertTrue($manager->validate($user));
    }

    // =========================================================
    // TEST 2 — Règle 1 : Nom trop court (moins de 2 caractères)
    // =========================================================
    public function testUserWithInvalidNom(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le nom est obligatoire et doit contenir au moins 2 caractères');

        $user = new User();
        $user->setNom('A'); // trop court
        $user->setPrenom('Mohamed');
        $user->setEmail('mohamed.ayari@etudiant.istt.tn');
        $user->setSexe('Homme');
        $user->setDateDeNaissance(new \DateTime('-20 years'));

        $manager = new UserManager();
        $manager->validate($user);
    }

    // =========================================================
    // TEST 3 — Règle 2 : Prénom vide
    // =========================================================
    public function testUserWithEmptyPrenom(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le prénom est obligatoire et doit contenir au moins 2 caractères');

        $user = new User();
        $user->setNom('Ayari');
        $user->setPrenom(''); // vide
        $user->setEmail('mohamed.ayari@etudiant.istt.tn');
        $user->setSexe('Homme');
        $user->setDateDeNaissance(new \DateTime('-20 years'));

        $manager = new UserManager();
        $manager->validate($user);
    }

    // =========================================================
    // TEST 4 — Règle 3 : Email invalide
    // =========================================================
    public function testUserWithInvalidEmail(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('L\'email n\'est pas valide');

        $user = new User();
        $user->setNom('Ayari');
        $user->setPrenom('Mohamed');
        $user->setEmail('email_invalide'); // pas un email
        $user->setSexe('Homme');
        $user->setDateDeNaissance(new \DateTime('-20 years'));

        $manager = new UserManager();
        $manager->validate($user);
    }

    // =========================================================
    // TEST 5 — Règle 4 : Sexe invalide
    // =========================================================
    public function testUserWithInvalidSexe(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le sexe doit être "Homme" ou "Femme"');

        $user = new User();
        $user->setNom('Ayari');
        $user->setPrenom('Mohamed');
        $user->setEmail('mohamed.ayari@etudiant.istt.tn');
        $user->setSexe('Autre'); // valeur non autorisée
        $user->setDateDeNaissance(new \DateTime('-20 years'));

        $manager = new UserManager();
        $manager->validate($user);
    }

    // =========================================================
    // TEST 6 — Règle 5 : Utilisateur trop jeune (moins de 10 ans)
    // =========================================================
    public function testUserTooYoung(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('L\'utilisateur doit avoir au moins 10 ans');

        $user = new User();
        $user->setNom('Ayari');
        $user->setPrenom('Mohamed');
        $user->setEmail('mohamed.ayari@etudiant.istt.tn');
        $user->setSexe('Homme');
        $user->setDateDeNaissance(new \DateTime('-5 years')); // seulement 5 ans

        $manager = new UserManager();
        $manager->validate($user);
    }
}