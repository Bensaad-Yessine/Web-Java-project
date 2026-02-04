<?php

namespace App\Entity;

use App\Repository\MatiereClasseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatiereClasseRepository::class)]
class MatiereClasse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?float $coefficient = null;

    #[ORM\Column(nullable: true)]
    private ?int $chargehoraire = null;

    #[ORM\Column(nullable: true)]
    private ?float $scorecomplexite = null;

    #[ORM\ManyToOne(inversedBy: 'matiereclasses')]
    #[ORM\JoinColumn(nullable: false)]
    private ?classe $classe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCoefficient(): ?float
    {
        return $this->coefficient;
    }

    public function setCoefficient(?float $coefficient): static
    {
        $this->coefficient = $coefficient;

        return $this;
    }

    public function getChargehoraire(): ?int
    {
        return $this->chargehoraire;
    }

    public function setChargehoraire(?int $chargehoraire): static
    {
        $this->chargehoraire = $chargehoraire;

        return $this;
    }

    public function getScorecomplexite(): ?float
    {
        return $this->scorecomplexite;
    }

    public function setScorecomplexite(?float $scorecomplexite): static
    {
        $this->scorecomplexite = $scorecomplexite;

        return $this;
    }

    public function getClasse(): ?Classe
    {
        return $this->Classe;
    }

    public function setClasse(?Classe $Classe): static
    {
        $this->Classe = $Classe;

        return $this;
    }
}
