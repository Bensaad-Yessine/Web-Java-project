<?php

namespace App\Entity;

use App\Repository\TacheRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\User;

#[ORM\Entity(repositoryClass: TacheRepository::class)]
class Tache
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le titre ne peut pas être vide.")]
    #[Assert\Length(
        max: 255,
        maxMessage: "Le titre ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le type est obligatoire.")]
    #[Assert\Choice(
        choices: ["MANUEL", "REUNION", "REVISION", "SANTE", "EMPLOI"],
        message: "Le type doit être une valeur valide."
    )]
    private ?string $type = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotBlank(message: "La date de début est obligatoire.")]
    #[Assert\Type(\DateTime::class)]
    private ?\DateTime $dateDebut = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotBlank(message: "La date de fin est obligatoire.")]
    #[Assert\Type(\DateTime::class)]
    #[Assert\Expression(
        "this.getDateFin() > this.getDateDebut()",
        message: "La date de fin doit être après la date de début."
    )]
    #[Assert\Expression(
        "(this.getDateFin().getTimestamp() - this.getDateDebut().getTimestamp()) <= 6*3600",
        message: "La tâche ne peut pas durer plus de 6 heures."
    )]
    private ?\DateTime $dateFin = null;


    #[ORM\Column]
    #[Assert\NotBlank(message: "La durée estimée est obligatoire.")]
    #[Assert\Positive(message: "La durée estimée doit être un nombre positif.")]
    private ?int $dureeEstimee = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La priorité est obligatoire.")]
    #[Assert\Choice(
        choices: ["FAIBLE", "MOYEN", "ELEVEE"],
        message: "La priorité doit être FAIBLE, MOYEN ou ELEVEE."
    )]
    private ?string $priorite = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le statut est obligatoire.")]
    #[Assert\Choice(
        choices: ["A_FAIRE", "EN_COURS", "TERMINEE", "EN_RETARD"],
        message: "Le statut doit être une valeur valide."
    )]
    private ?string $statut = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "L'origine est obligatoire.")]
    #[Assert\Choice(
        choices: ["MANUEL", "EMPLOI", "REUNION", "SANTE", "REVISION"],
        message: "L'origine doit être une valeur valide."
    )]
    private ?string $origine = "MANUEL";

    #[ORM\ManyToOne(inversedBy: 'taches')]
    private ?User $user = null;


    // ========================
    // Getters & Setters
    // ========================

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function getDateDebut(): ?\DateTime
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTime $dateDebut): static
    {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    public function getDateFin(): ?\DateTime
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTime $dateFin): static
    {
        $this->dateFin = $dateFin;
        return $this;
    }

    public function getDureeEstimee(): ?int
    {
        return $this->dureeEstimee;
    }

    public function setDureeEstimee(int $dureeEstimee): static
    {
        $this->dureeEstimee = $dureeEstimee;
        return $this;
    }

    public function getPriorite(): ?string
    {
        return $this->priorite;
    }

    public function setPriorite(string $priorite): static
    {
        $this->priorite = $priorite;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;
        return $this;
    }

    public function getOrigine(): ?string
    {
        return $this->origine;
    }

    public function setOrigine(string $origine): static
    {
        $this->origine = $origine;
        return $this;
    }

    public function getUser(): ?User
{
    return $this->user;
}

public function setUser(?User $user): self
{
    $this->user = $user;
    return $this;
}

}
