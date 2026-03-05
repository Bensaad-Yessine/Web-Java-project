<?php

namespace App\Service\Tests;

use App\Entity\Salle;
use App\Service\SalleManager;
use PHPUnit\Framework\TestCase;

class SalleManagerTest extends TestCase
{
    private function makeSalle(
        string $block = 'A',
        int $etage = 0,
        int $number = 1,
        int $capacite = 10
    ): Salle {
        $salle = new Salle();
        $salle->setBlock($block);
        $salle->setEtage($etage);
        $salle->setNumber($number);
        $salle->setCapacite($capacite);

        // IMPORTANT: ton name est calculé via updateName()
        // updateName() est appelé dans setBlock/setNumber, mais setEtage ne l'appelle pas.
        // Donc on relance updateName indirectement en "re-settant" block (ou number) :
        $salle->setBlock($block);

        return $salle;
    }

    public function testValidSalle(): void
    {
        $manager = new SalleManager();
        $salle = $this->makeSalle('B', 3, 7, 30); // name attendu: B37

        $this->assertTrue($manager->validate($salle));
        $this->assertSame('B37', $salle->getName());
    }

    public function testBlocInvalid(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $manager = new SalleManager();
        $salle = $this->makeSalle('Z', 0, 1, 10);
        $manager->validate($salle);
    }

    public function testEtageOutOfRange(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $manager = new SalleManager();
        $salle = $this->makeSalle('A', 5, 1, 10);
        $manager->validate($salle);
    }

    public function testNumberOutOfRange(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $manager = new SalleManager();
        $salle = $this->makeSalle('A', 0, 10, 10);
        $manager->validate($salle);
    }

    public function testCapaciteOutOfRange(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $manager = new SalleManager();
        $salle = $this->makeSalle('A', 0, 1, 31);
        $manager->validate($salle);
    }

    public function testNameMustBeDerivedCorrectly(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        // On provoque volontairement un name incohérent via Reflection (test avancé)
        $salle = $this->makeSalle('A', 3, 7, 10);

        $ref = new \ReflectionClass($salle);
        $p = $ref->getProperty('name');
        $p->setAccessible(true);
        $p->setValue($salle, 'A11'); // faux, attendu A37

        $manager = new SalleManager();
        $manager->validate($salle);
    }
}