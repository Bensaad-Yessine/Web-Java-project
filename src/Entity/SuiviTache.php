<?php

namespace App\Entity;

use App\Repository\SuiviTacheRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Tache;

#[ORM\Entity(repositoryClass: SuiviTacheRepository::class)]
class SuiviTache
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Tache::class, inversedBy: 'suivis')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'La tâche est obligatoire.')]
    private ?Tache $tache = null;

    #[ORM\Column(type: 'datetime')]
    #[Assert\NotNull(message: 'La date de l\'action est obligatoire.')]
    #[Assert\LessThanOrEqual('now', message: 'La date d\'action ne peut pas être dans le futur.')]
    private ?\DateTimeInterface $dateAction = null;

    #[ORM\Column(length: 50, nullable: true)] // DB-level nullable
    #[Assert\Choice(
        choices: ['A_FAIRE', 'EN_COURS', 'TERMINEE', 'EN_RETARD', 'PAUSED', 'ABANDONNEE'],
        message: "Choisissez un statut valide pour ancienStatut."
    )]
    private ?string $ancienStatut = null;


    #[ORM\Column(length: 50, nullable: true)]
    #[Assert\Choice(
        choices: ['A_FAIRE', 'EN_COURS', 'TERMINEE', 'EN_RETARD', 'PAUSED', 'ABANDONNEE'],
        message: 'Choisissez un statut valide pour nouveauStatut.'
    )]
    private ?string $nouveauStatut = null;

    #[ORM\Column(type: 'text', nullable: true)]
    #[Assert\Length(
        max: 500,
        maxMessage: 'Le commentaire ne peut pas dépasser {{ limit }} caractères.'
    )]
    private ?string $commentaire = null;

    // --------- Getters & Setters ---------

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTache(): ?Tache
    {
        return $this->tache;
    }

    public function setTache(?Tache $tache): self
    {
        $this->tache = $tache;
        return $this;
    }

    public function getDateAction(): ?\DateTimeInterface
    {
        return $this->dateAction;
    }

    public function setDateAction(\DateTimeInterface $dateAction): self
    {
        $this->dateAction = $dateAction;
        return $this;
    }

    public function getAncienStatut(): ?string
    {
        return $this->ancienStatut;
    }

    public function setAncienStatut(?string $ancienStatut): self
    {
        $this->ancienStatut = $ancienStatut;
        return $this;
    }

    public function getNouveauStatut(): ?string
    {
        return $this->nouveauStatut;
    }

    public function setNouveauStatut(string $nouveauStatut): self
    {
        $this->nouveauStatut = $nouveauStatut;
        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;
        return $this;
    }
}
