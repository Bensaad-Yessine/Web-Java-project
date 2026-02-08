<?php

namespace App\Entity;

use App\Repository\PreferenceAlerteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PreferenceAlerteRepository::class)]
class PreferenceAlerte
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $emailActif = null;

    #[ORM\Column]
    private ?bool $pushActif = null;

    #[ORM\Column]
    private ?bool $siteNotifActive = null;

    #[ORM\Column]
    private ?int $delaiRappelMin = null;

    #[ORM\Column]
    private ?int $delaiUrgentHeures = null;

    #[ORM\Column]
    private ?int $freaquenceMaxParJour = null;

    #[ORM\Column]
    private ?\DateTime $heureSilenceDebut = null;

    #[ORM\Column]
    private ?\DateTime $heureSilenceFin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isEmailActif(): ?bool
    {
        return $this->emailActif;
    }

    public function setEmailActif(bool $emailActif): static
    {
        $this->emailActif = $emailActif;

        return $this;
    }

    public function isPushActif(): ?bool
    {
        return $this->pushActif;
    }

    public function setPushActif(bool $pushActif): static
    {
        $this->pushActif = $pushActif;

        return $this;
    }

    public function isSiteNotifActive(): ?bool
    {
        return $this->siteNotifActive;
    }

    public function setSiteNotifActive(bool $siteNotifActive): static
    {
        $this->siteNotifActive = $siteNotifActive;

        return $this;
    }

    public function getDelaiRappelMin(): ?int
    {
        return $this->delaiRappelMin;
    }

    public function setDelaiRappelMin(int $delaiRappelMin): static
    {
        $this->delaiRappelMin = $delaiRappelMin;

        return $this;
    }

    public function getDelaiUrgentHeures(): ?int
    {
        return $this->delaiUrgentHeures;
    }

    public function setDelaiUrgentHeures(int $delaiUrgentHeures): static
    {
        $this->delaiUrgentHeures = $delaiUrgentHeures;

        return $this;
    }

    public function getFreaquenceMaxParJour(): ?int
    {
        return $this->freaquenceMaxParJour;
    }

    public function setFreaquenceMaxParJour(int $freaquenceMaxParJour): static
    {
        $this->freaquenceMaxParJour = $freaquenceMaxParJour;

        return $this;
    }

    public function getHeureSilenceDebut(): ?\DateTime
    {
        return $this->heureSilenceDebut;
    }

    public function setHeureSilenceDebut(\DateTime $heureSilenceDebut): static
    {
        $this->heureSilenceDebut = $heureSilenceDebut;

        return $this;
    }

    public function getHeureSilenceFin(): ?\DateTime
    {
        return $this->heureSilenceFin;
    }

    public function setHeureSilenceFin(\DateTime $heureSilenceFin): static
    {
        $this->heureSilenceFin = $heureSilenceFin;

        return $this;
    }
}
