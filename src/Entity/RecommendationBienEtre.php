<?php

namespace App\Entity;

use App\Repository\RecommendationBienEtreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecommendationBienEtreRepository::class)]
class RecommendationBienEtre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $recommendationId = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptionGeneree = null;

    #[ORM\Column(length: 255)]
    private ?string $statut = null;

    #[ORM\Column]
    private ?\DateTime $dateGeneration = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateFinValidite = null;
    #[ORM\Column(length: 30, nullable: true)]
private ?string $typeRecommendation = null;

#[ORM\Column(nullable: true)]
private ?int $priorite = null;

#[ORM\Column(nullable: true)]
private ?bool $estAppliquee = null;

#[ORM\Column(nullable: true)]
private ?\DateTimeInterface $dateConsultation = null;


    #[ORM\ManyToOne(inversedBy: 'recommendations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?SuiviBienEtre $suiviBienEtre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRecommendationId(): ?int
    {
        return $this->recommendationId;
    }

    public function setRecommendationId(int $recommendationId): static
    {
        $this->recommendationId = $recommendationId;

        return $this;
    }

    public function getDescriptionGeneree(): ?string
    {
        return $this->descriptionGeneree;
    }

    public function setDescriptionGeneree(string $descriptionGeneree): static
    {
        $this->descriptionGeneree = $descriptionGeneree;

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

    public function getDateGeneration(): ?\DateTime
    {
        return $this->dateGeneration;
    }

    public function setDateGeneration(\DateTime $dateGeneration): static
    {
        $this->dateGeneration = $dateGeneration;

        return $this;
    }

    public function getDateFinValidite(): ?\DateTime
    {
        return $this->dateFinValidite;
    }

    public function setDateFinValidite(\DateTime $dateFinValidite): static
    {
        $this->dateFinValidite = $dateFinValidite;

        return $this;
    }

    public function getSuiviBienEtre(): ?SuiviBienEtre
    {
        return $this->suiviBienEtre;
    }

    public function setSuiviBienEtre(?SuiviBienEtre $suiviBienEtre): static
    {
        $this->suiviBienEtre = $suiviBienEtre;

        return $this;
    }
    public function getTypeRecommendation(): ?string { return $this->typeRecommendation; }
public function setTypeRecommendation(?string $typeRecommendation): self { $this->typeRecommendation = $typeRecommendation; return $this; }

public function getPriorite(): ?int { return $this->priorite; }
public function setPriorite(?int $priorite): self { $this->priorite = $priorite; return $this; }

public function isEstAppliquee(): ?bool { return $this->estAppliquee; }
public function setEstAppliquee(?bool $estAppliquee): self { $this->estAppliquee = $estAppliquee; return $this; }

public function getDateConsultation(): ?\DateTimeInterface { return $this->dateConsultation; }
public function setDateConsultation(?\DateTimeInterface $dateConsultation): self { $this->dateConsultation = $dateConsultation; return $this; }

}
