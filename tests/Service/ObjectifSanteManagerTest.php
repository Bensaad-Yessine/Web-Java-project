<?php

namespace App\Tests\Service;

use App\Entity\ObjectifSante;
use App\Service\ObjectifSanteManager;
use PHPUnit\Framework\TestCase;

class ObjectifSanteManagerTest extends TestCase
{
    private function makeValidObjectif(): ObjectifSante
    {
        $o = new ObjectifSante();
        $o->setTitre('Dormir mieux');
        $o->setType('SOMMEIL');
        $o->setValeurCible(8);
        $o->setDateDebut(new \DateTime('2026-03-01'));
        $o->setDateFin(new \DateTime('2026-03-10'));
        $o->setStatut('EN_COURS');
        return $o;
    }

    // ✅ 1) Valid
    public function testValidObjectifSante(): void
    {
        $objectif = $this->makeValidObjectif();
        $manager = new ObjectifSanteManager();

        $this->assertTrue($manager->validate($objectif));
    }

    // ❌ 2) Missing title
    public function testObjectifWithoutTitre(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $objectif = $this->makeValidObjectif();
        $objectif->setTitre('');

        $manager = new ObjectifSanteManager();
        $manager->validate($objectif);
    }

    // ❌ 3) Invalid type
    public function testObjectifWithInvalidType(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $objectif = $this->makeValidObjectif();
        $objectif->setType('INVALID_TYPE');

        $manager = new ObjectifSanteManager();
        $manager->validate($objectif);
    }

    // ❌ 4) valeurCible out of range for SOMMEIL
    public function testObjectifWithValeurCibleOutOfRange(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $objectif = $this->makeValidObjectif();
        $objectif->setType('SOMMEIL');
        $objectif->setValeurCible(20); // > 16

        $manager = new ObjectifSanteManager();
        $manager->validate($objectif);
    }

    // ❌ 5) dateFin before or equal dateDebut
    public function testObjectifWithInvalidDates(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $objectif = $this->makeValidObjectif();
        $objectif->setDateDebut(new \DateTime('2026-03-10'));
        $objectif->setDateFin(new \DateTime('2026-03-10')); // not after

        $manager = new ObjectifSanteManager();
        $manager->validate($objectif);
    }

    // ❌ 6) invalid statut
    public function testObjectifWithInvalidStatut(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $objectif = $this->makeValidObjectif();
        $objectif->setStatut('DONE'); // not allowed

        $manager = new ObjectifSanteManager();
        $manager->validate($objectif);
    }
}