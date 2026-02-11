<?php

namespace App\Entity;

use App\Repository\PropositionReunionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[ORM\Entity(repositoryClass: PropositionReunionRepository::class)]
class PropositionReunion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $propositionId = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateReunion = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTime $heureDebut = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTime $heureFin = null;

    #[ORM\Column(length: 255)]
    private ?string $lieu = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column]
    private ?\DateTime $dateCreation = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbrVoteAccept = null;

    #[ORM\ManyToOne(inversedBy: 'idReunion')]
    #[ORM\JoinColumn(nullable: false)]
    private ?GroupeProjet $idGroupe = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTime $updatedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPropositionId(): ?int
    {
        return $this->propositionId;
    }

    public function setPropositionId(int $propositionId): static
    {
        $this->propositionId = $propositionId;

        return $this;
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

    public function getDateReunion(): ?\DateTime
    {
        return $this->dateReunion;
    }

    public function setDateReunion(\DateTime $dateReunion): static
    {
        $this->dateReunion = $dateReunion;

        return $this;
    }

    public function getHeureDebut(): ?\DateTime
    {
        return $this->heureDebut;
    }

    public function setHeureDebut(\DateTime $heureDebut): static
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    public function getHeureFin(): ?\DateTime
    {
        return $this->heureFin;
    }

    public function setHeureFin(\DateTime $heureFin): static
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): static
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getDateCreation(): ?\DateTime
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTime $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getNbrVoteAccept(): ?int
    {
        return $this->nbrVoteAccept;
    }

    public function setNbrVoteAccept(?int $nbrVoteAccept): static
    {
        $this->nbrVoteAccept = $nbrVoteAccept;

        return $this;
    }

    public function getIdGroupe(): ?GroupeProjet
    {
        return $this->idGroupe;
    }

    public function setIdGroupe(?GroupeProjet $idGroupe): static
    {
        $this->idGroupe = $idGroupe;

        return $this;
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

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTime $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Form-level validation for meeting times.
     * Ensures start is at least 1 hour from now, end is after start,
     * and duration is at least 30 minutes.
     *
     * @Assert\Callback
     */
    public function validateDates(ExecutionContextInterface $context): void
    {
        if (!$this->dateReunion || !$this->heureDebut || !$this->heureFin) {
            return;
        }

        // Build full DateTime for start and end
        $start = (clone $this->dateReunion)->setTime((int)$this->heureDebut->format('H'), (int)$this->heureDebut->format('i'), 0);
        $end = (clone $this->dateReunion)->setTime((int)$this->heureFin->format('H'), (int)$this->heureFin->format('i'), 0);

        // Ensure the date is not in the past (at least today)
        $today = (new \DateTime())->setTime(0, 0, 0);
        $dateOnly = (clone $this->dateReunion)->setTime(0, 0, 0);
        if ($dateOnly < $today) {
            $context->buildViolation('La date de la proposition ne peut pas être dans le passé. Choisissez au minimum aujourd\'hui.')
                ->atPath('dateReunion')
                ->addViolation();
            // no need to continue if the date itself is invalid
            return;
        }

        $now = new \DateTime();
        // If the proposition is for today, require start >= now + 1 hour
        if ($dateOnly == $today) {
            $minStart = (clone $now)->modify('+1 hour');
            if ($start < $minStart) {
                $context->buildViolation('Pour aujourd\'hui, l\'heure de début doit être au moins une heure après maintenant.')
                    ->atPath('heureDebut')
                    ->addViolation();
            }
        }

        if ($end <= $start) {
            $context->buildViolation('L\'heure de fin doit être après l\'heure de début.')
                ->atPath('heureFin')
                ->addViolation();
        } else {
            $diffMinutes = (int)(($end->getTimestamp() - $start->getTimestamp()) / 60);
            if ($diffMinutes < 30) {
                $context->buildViolation('La durée doit être au moins de 30 minutes.')
                    ->atPath('heureFin')
                    ->addViolation();
            }

            // Maximum duration: 3 hours (180 minutes)
            if ($diffMinutes > 180) {
                $context->buildViolation('La durée maximale autorisée est de 3 heures.')
                    ->atPath('heureFin')
                    ->addViolation();
            }
        }
    }
}
