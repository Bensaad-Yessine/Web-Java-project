<?php

namespace App\Tests\Service;

use App\Entity\GroupeProjet;
use App\Service\GroupeProjetManager;
use PHPUnit\Framework\TestCase;

class GroupeProjetManagerTest extends TestCase
{
    public function testGroupeValide(): void
    {
        $groupe = new GroupeProjet();
        $groupe->setNomProjet('Groupe Maths');
        $groupe->setMatiere('Mathematiques');
        $groupe->setNbrMembre(5);
        $groupe->setStatut('actif');

        $manager = new GroupeProjetManager();
        $this->assertTrue($manager->validate($groupe));
    }

    public function testNomProjetVide(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $groupe = new GroupeProjet();
        $groupe->setMatiere('Mathematiques');
        $groupe->setNbrMembre(5);
        $groupe->setStatut('actif');

        $manager = new GroupeProjetManager();
        $manager->validate($groupe);
    }

    public function testNomProjetTropCourt(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $groupe = new GroupeProjet();
        $groupe->setNomProjet('AB');
        $groupe->setMatiere('Mathematiques');
        $groupe->setNbrMembre(5);
        $groupe->setStatut('actif');

        $manager = new GroupeProjetManager();
        $manager->validate($groupe);
    }

    public function testMatiereVide(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $groupe = new GroupeProjet();
        $groupe->setNomProjet('Groupe Maths');
        $groupe->setNbrMembre(5);
        $groupe->setStatut('actif');

        $manager = new GroupeProjetManager();
        $manager->validate($groupe);
    }

    public function testNbrMembreInvalide(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $groupe = new GroupeProjet();
        $groupe->setNomProjet('Groupe Maths');
        $groupe->setMatiere('Mathematiques');
        $groupe->setNbrMembre(1);
        $groupe->setStatut('actif');

        $manager = new GroupeProjetManager();
        $manager->validate($groupe);
    }

    public function testStatutVide(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $groupe = new GroupeProjet();
        $groupe->setNomProjet('Groupe Maths');
        $groupe->setMatiere('Mathematiques');
        $groupe->setNbrMembre(5);

        $manager = new GroupeProjetManager();
        $manager->validate($groupe);
    }
}
