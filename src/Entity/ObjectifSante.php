<?php

namespace App\Entity;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\ObjectifSanteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\SuiviBienEtre;

#[ORM\Entity(repositoryClass: ObjectifSanteRepository::class)]
class ObjectifSante
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Type de l'objectif : SOMMEIL | STRESS | SPORT | ALIMENTATION
    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message: "Type obligatoire")]
    #[Assert\Choice(choices: ['SOMMEIL','STRESS','SPORT','ALIMENTATION'], message: "Type invalide")]
    private ?string $type = null;

    // Valeur cible (dépend du type)
    #[ORM\Column]
    #[Assert\NotNull(message: "Valeur cible obligatoire")]
    #[Assert\Range(min: 0, max: 24, notInRangeMessage: "Valeur cible invalide")]
    private ?int $valeurCible = null;

    #[ORM\Column(type: \Doctrine\DBAL\Types\Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: "Date début obligatoire")]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: \Doctrine\DBAL\Types\Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: "Date fin obligatoire")]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column(length: 20)]
    #[Assert\Choice(choices: ['EN_COURS','ATTEINT','ABANDONNE'], message: "Statut invalide")]
    private string $statut = 'EN_COURS';

    #[ORM\Column(length: 10, nullable: true)]
    #[Assert\Choice(choices: ['BASSE','MOYENNE','HAUTE'], message: "Priorité invalide")]
    private ?string $priorite = 'MOYENNE';

    #[ORM\Column(nullable: true)]
    #[Assert\Range(min: 0, max: 100, notInRangeMessage: "Progression doit être entre 0 et 100")]
    private ?float $progression = 0;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: 'Le titre est obligatoire.')]
    #[Assert\Length(
        min: 3,
        max: 100,
        minMessage: 'Le titre doit contenir au moins {{ limit }} caractères.',
        maxMessage: 'Le titre ne doit pas dépasser {{ limit }} caractères.'
    )]
    private ?string $titre = null;

    // ✅ Relation : 1 Objectif a plusieurs Suivis
    #[ORM\OneToMany(mappedBy: 'objectif', targetEntity: SuiviBienEtre::class, orphanRemoval: true, cascade: ['persist','remove'])]
    private Collection $suivis;

    #[ORM\ManyToOne(inversedBy: 'objectifSantes')]
    private ?User $user = null;

    public function __construct()
    {
        $this->suivis = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }

    public function getType(): ?string { return $this->type; }
    public function setType(string $type): self { $this->type = $type; return $this; }

    public function getValeurCible(): ?int { return $this->valeurCible; }
    public function setValeurCible(int $valeurCible): self { $this->valeurCible = $valeurCible; return $this; }

    public function getDateDebut(): ?\DateTimeInterface { return $this->dateDebut; }
    public function setDateDebut(\DateTimeInterface $dateDebut): self { $this->dateDebut = $dateDebut; return $this; }

    public function getDateFin(): ?\DateTimeInterface { return $this->dateFin; }
    public function setDateFin(\DateTimeInterface $dateFin): self { $this->dateFin = $dateFin; return $this; }

    public function getStatut(): string { return $this->statut; }
    public function setStatut(string $statut): self { $this->statut = $statut; return $this; }

    public function getPriorite(): ?string { return $this->priorite; }
    public function setPriorite(?string $priorite): self { $this->priorite = $priorite; return $this; }

    public function getProgression(): ?float { return $this->progression; }
    public function setProgression(?float $progression): self { $this->progression = $progression; return $this; }

    public function getTitre(): ?string { return $this->titre; }
    public function setTitre(string $titre): self { $this->titre = $titre; return $this; }

    /** @return Collection<int, SuiviBienEtre> */
    public function getSuivis(): Collection
    {
        return $this->suivis;
    }

    public function addSuivi(SuiviBienEtre $suivi): self
    {
        if (!$this->suivis->contains($suivi)) {
            $this->suivis->add($suivi);
            $suivi->setObjectif($this);
        }
        return $this;
    }

    public function removeSuivi(SuiviBienEtre $suivi): self
    {
        if ($this->suivis->removeElement($suivi)) {
            if ($suivi->getObjectif() === $this) {
                $suivi->setObjectif(null);
            }
        }
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}
