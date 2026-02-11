<?php

namespace App\Entity;

use App\Repository\SeanceRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: SeanceRepository::class)]
class Seance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: "Le nom de matière est obligatoire.")]
    #[Assert\Length(
        max: 20,
        maxMessage: "Le nom de matière ne doit pas dépasser {{ limit }} caractères."
    )]
    private ?string $matiere = null;

    #[ORM\Column(length: 10)]
    #[Assert\NotBlank(message: "Le jour est obligatoire.")]
    #[Assert\Choice(
        choices: ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"],
        message: "Jour invalide."
    )]
    private ?string $jour = null;

    #[ORM\Column(length: 15)]
    #[Assert\NotBlank(message: "Le type de séance est obligatoire.")]
    #[Assert\Choice(
        choices: ["MATINALE","APRES_MIDI"],
        message: "Type invalide."
    )]
    private ?string $typeSeance = null;

    #[ORM\Column(length: 15)]
    #[Assert\NotBlank(message: "Le mode est obligatoire.")]
    #[Assert\Choice(
        choices: ["PRESENTIEL","EN_LIGNE"],
        message: "Mode invalide."
    )]
    private ?string $mode = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "La salle est obligatoire.")]
    private ?Salle $salle = null;

    public function getId(): ?int { return $this->id; }

    public function getMatiere(): ?string { return $this->matiere; }
    public function setMatiere(string $matiere): static { $this->matiere = $matiere; return $this; }

    public function getJour(): ?string { return $this->jour; }
    public function setJour(string $jour): static { $this->jour = $jour; return $this; }

    public function getTypeSeance(): ?string { return $this->typeSeance; }
    public function setTypeSeance(string $typeSeance): static { $this->typeSeance = $typeSeance; return $this; }

    public function getMode(): ?string { return $this->mode; }
    public function setMode(string $mode): static { $this->mode = $mode; return $this; }

    public function getSalle(): ?Salle { return $this->salle; }
    public function setSalle(?Salle $salle): static { $this->salle = $salle; return $this; }
}
