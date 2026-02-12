<?php

namespace App\Entity;

use App\Repository\SeanceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: SeanceRepository::class)]
class Seance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

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

    // CHANGE THESE FROM DATE_MUTABLE TO DATETIME_MUTABLE
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $heureDebut = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $heureFin = null;

    #[ORM\ManyToOne(inversedBy: 'seances')]
    #[ORM\JoinColumn(nullable: false)] // Add this if matiere is required
    private ?MatiereClasse $matiere = null;

    #[ORM\ManyToOne(inversedBy: 'seances')]
    #[ORM\JoinColumn(nullable: false)] // Add this if classe is required
    private ?Classe $classe = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $createdAt = null;

    public function getId(): ?int { return $this->id; }

    public function getMatiere(): ?MatiereClasse
    {
        return $this->matiere;
    }

    public function setMatiere(?MatiereClasse $matiere): static
    {
        $this->matiere = $matiere;
        return $this;
    }

    public function getJour(): ?string { return $this->jour; }
    public function setJour(string $jour): static { $this->jour = $jour; return $this; }

    public function getTypeSeance(): ?string { return $this->typeSeance; }
    public function setTypeSeance(string $typeSeance): static { $this->typeSeance = $typeSeance; return $this; }

    public function getMode(): ?string { return $this->mode; }
    public function setMode(string $mode): static { $this->mode = $mode; return $this; }

    public function getSalle(): ?Salle { return $this->salle; }
    public function setSalle(?Salle $salle): static { $this->salle = $salle; return $this; }

    public function getHeureDebut(): ?\DateTimeInterface
    {
        return $this->heureDebut;
    }

    public function setHeureDebut(?\DateTimeInterface $heureDebut): static
    {
        $this->heureDebut = $heureDebut;
        return $this;
    }

    public function getHeureFin(): ?\DateTimeInterface
    {
        return $this->heureFin;
    }

    public function setHeureFin(?\DateTimeInterface $heureFin): static
    {
        $this->heureFin = $heureFin;
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

    // Add a __toString method for better display
    public function __toString(): string
    {
        return sprintf('Seance #%d - %s', $this->id, $this->jour);
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
    
}