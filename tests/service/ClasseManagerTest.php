<?php

namespace App\Tests\Service;

use App\Entity\Classe;
use App\Service\ClasseManager;
use PHPUnit\Framework\TestCase;

class ClasseManagerTest extends TestCase
{
    public function testValidClasse()
    {
        $classe = new Classe();
        $classe->setNom("GL3");
        $classe->setNiveau("3ème année");

        $manager = new ClasseManager();

        $this->assertTrue($manager->validate($classe));
    }

    public function testClasseWithoutNom()
    {
        $this->expectException(\InvalidArgumentException::class);

        $classe = new Classe();
        $classe->setNiveau("3ème année");

        $manager = new ClasseManager();
        $manager->validate($classe);
    }

    public function testClasseWithShortNom()
    {
        $this->expectException(\InvalidArgumentException::class);

        $classe = new Classe();
        $classe->setNom("A");
        $classe->setNiveau("3ème année");

        $manager = new ClasseManager();
        $manager->validate($classe);
    }

    public function testClasseWithoutNiveau()
    {
        $this->expectException(\InvalidArgumentException::class);

        $classe = new Classe();
        $classe->setNom("GL3");

        $manager = new ClasseManager();
        $manager->validate($classe);
    }
}