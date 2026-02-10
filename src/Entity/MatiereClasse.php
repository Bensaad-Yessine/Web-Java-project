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

    #[ORM\Column]
    #[Assert\NotNull(message: "Le coefficient est obligatoire.")]
    #[Assert\Type(type: 'float', message: "Le coefficient doit être un nombre.")]
    #[Assert\Positive(message: "Le coefficient doit être supérieur à 0.")]
    private ?float $coefficient = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "La charge horaire est obligatoire.")]
    #[Assert\Type(type: 'integer', message: "La charge horaire doit être un entier.")]
    #[Assert\Positive(message: "La charge horaire doit être supérieure à 0.")]
    private ?int $chargehoraire = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "Le score de complexité est obligatoire.")]
    #[Assert\Type(type: 'integer', message: "Le score de complexité doit être un entier.")]
    #[Assert\Range(
        min: 1,
        max: 10,
        notInRangeMessage: "Le score de complexité doit être compris entre {{ min }} et {{ max }}."
    )]
    private ?int $scorecomplexite = null;
    #[ORM\ManyToOne(inversedBy: 'matiereClasses')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "Vous devez sélectionner une classe.")]
    private ?Classe $classe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCoefficient(): ?float
    {
        return $this->coefficient;
    }

    public function setCoefficient(float $coefficient): static
    {
        $this->coefficient = $coefficient;
        return $this;
    }

    public function getChargehoraire(): ?int
    {
        return $this->chargehoraire;
    }

    public function setChargehoraire(int $chargehoraire): static
    {
        $this->chargehoraire = $chargehoraire;
        return $this;
    }

    public function getScorecomplexite(): ?int
    {
        return $this->scorecomplexite;
    }

    public function setScorecomplexite(int $scorecomplexite): static
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