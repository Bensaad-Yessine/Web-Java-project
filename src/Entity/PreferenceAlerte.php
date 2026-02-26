<?php

namespace App\Entity;
use App\Entity\User;
use App\Repository\PreferenceAlerteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PreferenceAlerteRepository::class)]
#[ORM\Table(name: "preference_alerte")]
#[ORM\HasLifecycleCallbacks]
class PreferenceAlerte
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // ========================
    // User Relation (NOT NULL)
    // ========================

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "preferenceAlertes")]
    #[ORM\JoinColumn(nullable: true, onDelete: "CASCADE")]
    private ?User $etudiant = null;


    // ========================
    // Naming & Status
    // ========================

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le nom de la préférence est obligatoire.")]
    #[Assert\Length(
        max: 50,
        maxMessage: "Le nom ne doit pas dépasser {{ limit }} caractères."
    )]
    private string $nom = 'Default';

    #[ORM\Column]
    private bool $isActive = false;

    #[ORM\Column]
    private bool $isDefault = false;

    // ========================
    // Notification Channels
    // ========================

    #[ORM\Column]
    private bool $emailActif = true;

    #[ORM\Column]
    private bool $pushActif = true;

    #[ORM\Column]
    private bool $siteNotifActive = true;

    // ========================
    // Reminder Delay (minutes)
    // ========================

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le délai de rappel est obligatoire.")]
    #[Assert\Positive(message: "Le délai de rappel doit être positif.")]
    private int $delaiRappelMin = 30;

    // ========================
    // Silence Period (FULL DATETIME)
    // ========================

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: false)]
    #[Assert\NotNull(message: "L'heure de début du silence est obligatoire.")]
    private ?\DateTimeInterface $heureSilenceDebut = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: false)]
    #[Assert\NotNull(message: "L'heure de fin du silence est obligatoire.")]
    private ?\DateTimeInterface $heureSilenceFin = null;

    // ========================
    // Timestamps
    // ========================

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $dateCreation = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $dateMiseAJour = null;

    #[Assert\Callback]
    public function validateSilenceTimes(\Symfony\Component\Validator\Context\ExecutionContextInterface $context)
    {
        if ($this->heureSilenceDebut && $this->heureSilenceFin) {
            if ($this->heureSilenceDebut->format('H:i') === $this->heureSilenceFin->format('H:i')) {
                $context->buildViolation('L’heure de fin doit être différente de l’heure de début.')
                    ->atPath('heureSilenceFin')
                    ->addViolation();
            }
        }
    }


    // ========================
    // Lifecycle Callback (Auto Dates)
    // ========================

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        $now = new \DateTimeImmutable();
        $this->dateCreation = $now;
        $this->dateMiseAJour = $now;
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->dateMiseAJour = new \DateTimeImmutable();
    }

    // ========================
    // Getters & Setters
    // ========================

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtudiant(): ?User
    {
        return $this->etudiant;
    }

    public function setEtudiant(?User $etudiant): static
    {
        $this->etudiant = $etudiant;
        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;
        return $this;
    }

    public function isDefault(): bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(bool $isDefault): static
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    public function isEmailActif(): bool
    {
        return $this->emailActif;
    }

    public function setEmailActif(bool $emailActif): static
    {
        $this->emailActif = $emailActif;
        return $this;
    }

    public function isPushActif(): bool
    {
        return $this->pushActif;
    }

    public function setPushActif(bool $pushActif): static
    {
        $this->pushActif = $pushActif;
        return $this;
    }

    public function isSiteNotifActive(): bool
    {
        return $this->siteNotifActive;
    }

    public function setSiteNotifActive(bool $siteNotifActive): static
    {
        $this->siteNotifActive = $siteNotifActive;
        return $this;
    }

    public function getDelaiRappelMin(): int
    {
        return $this->delaiRappelMin;
    }

    public function setDelaiRappelMin(int $delaiRappelMin): static
    {
        $this->delaiRappelMin = $delaiRappelMin;
        return $this;
    }

    public function getHeureSilenceDebut(): ?\DateTimeInterface
    {
        return $this->heureSilenceDebut;
    }

    public function setHeureSilenceDebut(?\DateTimeInterface $heureSilenceDebut): static
    {
        $this->heureSilenceDebut = $heureSilenceDebut;
        return $this;
    }

    public function getHeureSilenceFin(): ?\DateTimeInterface
    {
        return $this->heureSilenceFin;
    }

    public function setHeureSilenceFin(?\DateTimeInterface $heureSilenceFin): static
    {
        $this->heureSilenceFin = $heureSilenceFin;
        return $this;
    }

    public function getDateCreation(): ?\DateTimeImmutable
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeImmutable $dateCreation): static
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    public function getDateMiseAJour(): ?\DateTimeImmutable
    {
        return $this->dateMiseAJour;
    }

    public function setDateMiseAJour(\DateTimeImmutable $dateMiseAJour): static
    {
        $this->dateMiseAJour = $dateMiseAJour;
        return $this;
    }

    public function __construct()
    {
        $this->dateCreation = new \DateTimeImmutable();
        $this->dateMiseAJour = new \DateTimeImmutable();
    }

    public function getType(): string
    {
        if ($this->emailActif && $this->pushActif) {
            return 'both';
        } elseif ($this->emailActif) {
            return 'email';
        } elseif ($this->pushActif) {
            return 'inapp';
        }
        return 'none';
    }
}
