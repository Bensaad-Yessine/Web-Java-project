<?php

namespace App\Tests\Service;

use PHPUnit\Framework\TestCase;
use App\Service\TacheManager;
use App\Entity\Tache;

class TacheManagerTest extends TestCase
{
    private function createValidTache(): Tache
    {
        $tache = new Tache();

        $tache->setTitre("Tache Test");
        $tache->setType("MANUEL");
        $tache->setPriorite("MOYEN");

        $dateDebut = new \DateTime("+1 day");
        $dateFin = (clone $dateDebut)->modify("+5 hours");

        $tache->setDateDebut($dateDebut);
        $tache->setDateFin($dateFin);

        return $tache;
    }

    public function testValidTache()
    {
        $manager = new TacheManager();
        $tache = $this->createValidTache();

        $this->assertTrue($manager->validate($tache));
    }

    public function testTitreVide()
    {
        $this->expectException(\InvalidArgumentException::class);

        $manager = new TacheManager();
        $tache = $this->createValidTache();

        $tache->setTitre("");

        $manager->validate($tache);
    }

    public function testTypeInvalide()
    {
        $this->expectException(\InvalidArgumentException::class);

        $manager = new TacheManager();
        $tache = $this->createValidTache();

        $tache->setType("INVALID");

        $manager->validate($tache);
    }

    public function testPrioriteInvalide()
    {
        $this->expectException(\InvalidArgumentException::class);

        $manager = new TacheManager();
        $tache = $this->createValidTache();

        $tache->setPriorite("SUPER");

        $manager->validate($tache);
    }

    public function testDateDebutPasFuture()
    {
        $this->expectException(\InvalidArgumentException::class);

        $manager = new TacheManager();
        $tache = $this->createValidTache();

        $tache->setDateDebut(new \DateTime("-1 day"));

        $manager->validate($tache);
    }

    public function testDateFinAvantDateDebut()
    {
        $this->expectException(\InvalidArgumentException::class);

        $manager = new TacheManager();
        $tache = $this->createValidTache();

        $tache->setDateFin(new \DateTime("-1 day"));

        $manager->validate($tache);
    }

}
