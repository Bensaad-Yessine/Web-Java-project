<?php

namespace App\Entity;

use App\Repository\MatiereClasseRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MatiereClasseRepository::class)]
class MatiereClasse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // =====================
    // COEFFICIENT
    // =====================
    #[ORM\Column(nullable: true)]
    #[Assert\NotNull(message: "Le coefficient est obligatoire.")]
    #[Assert\Type(type: 'numeric', message: "Le coefficient doit être un nombre.")]
    #[Assert\PositiveOrZero(message: "Le coefficient doit être supérieur ou égal à 0.")]
    private ?float $coefficient = null;

    // =====================
    // CHARGE HORAIRE
    // =====================
    #[ORM\Column(nullable: true)]
    #[Assert\NotNull(message: "La charge horaire est obligatoire.")]
    #[Assert\Type(type: 'integer', message: "La charge horaire doit être un entier.")]
    #[Assert\PositiveOrZero(message: "La charge horaire doit être supérieur ou égal à 0.")]
    private ?int $chargehoraire = null;

    // =====================
    // SCORE DE COMPLEXITE
    // =====================
    #[ORM\Column(nullable: true)]
    #[Assert\NotNull(message: "Le score de complexité est obligatoire.")]
    #[Assert\Type(type: 'numeric', message: "Le score de complexité doit être un nombre.")]
    #[Assert\Range(
        min: 0,
        max: 10,
        notInRangeMessage: "Le score de complexité doit être compris entre {{ min }} et {{ max }}."
    )]
    private ?float $scorecomplexite = null;

    // =====================
    // RELATION AVEC CLASSE
    // =====================
    #[ORM\ManyToOne(inversedBy: 'matiereclasses')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "Vous devez sélectionner une classe.")]
    private ?Classe $classe = null;

    // =====================
    // GETTERS & SETTERS
    // =====================
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
        return $this->classe;
    }

    public function setClasse(?Classe $classe): static
    {
        $this->classe = $classe;
        return $this;
    }
}
