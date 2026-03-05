<?php

namespace App\Entity;

use App\Repository\SeanceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

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
        choices: ["Cours", "TD", "TP"],
        message: "Veuillez écrire Cours, TD ou TP."
    )]
    private ?string $typeSeance = null;

    #[ORM\Column(length: 25)]
    #[Assert\NotBlank(message: "Le mode est obligatoire.")]
    #[Assert\Choice(
        choices: ["Présentiel", "Distanciel", "Hybride"],
        message: "Veuillez écrire Présentiel, Distanciel ou Hybride."
    )]
    private ?string $mode = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "La salle est obligatoire.")]
    private ?Salle $salle = null;

    // CHANGE THESE FROM DATE_MUTABLE TO DATETIME_MUTABLE
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotNull(message: "L'heure de début est obligatoire.")]
    private ?\DateTimeInterface $heureDebut = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotNull(message: "L'heure de fin est obligatoire.")]
    private ?\DateTimeInterface $heureFin = null;

    #[ORM\ManyToOne(inversedBy: 'seances')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "La matière est obligatoire.")]
    private ?MatiereClasse $matiere = null;

    #[ORM\ManyToOne(inversedBy: 'seances')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "La classe est obligatoire.")]
    private ?Classe $classe = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(length: 512, nullable: true)]
    private ?string $qrToken = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $qrExpiresAt = null;

    #[ORM\Column(length: 1024, nullable: true)]
    private ?string $qrUrl = null;

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

    #[Assert\Callback]
    public function validateSchedule(ExecutionContextInterface $context): void
    {
        // début ne peut pas être dans le passé
        if ($this->heureDebut instanceof \DateTimeInterface) {
            $now = new \DateTimeImmutable();
            if ($this->heureDebut < $now) {
                $context->buildViolation('La date de début doit être dans le futur.')
                    ->atPath('heureDebut')
                    ->addViolation();
            }
        }

        if ($this->heureDebut instanceof \DateTimeInterface && $this->heureFin instanceof \DateTimeInterface) {
            // durée au moins 1h30
            $interval = $this->heureFin->getTimestamp() - $this->heureDebut->getTimestamp();
            if ($interval < 90 * 60) {
                $context->buildViolation('La date de fin doit être au moins 1h30 après le début.')
                    ->atPath('heureFin')
                    ->addViolation();
            }

            // horaires autorisés
            $allowed = [
                ['09:00', '10:30'],
                ['10:45', '12:15'],
                ['13:30', '15:00'],
                ['15:15', '16:45'],
            ];
            $hd = $this->heureDebut->format('H:i');
            $hf = $this->heureFin->format('H:i');
            $valid = false;
            foreach ($allowed as [$a, $b]) {
                if ($hd === $a && $hf === $b) {
                    $valid = true;
                    break;
                }
            }
            if (!$valid) {
                $context->buildViolation('L’horaire choisi n’est pas autorisé. Utilisez l’une des plages suivantes : 09:00-10:30, 10:30-12:15, 13:30-15:00 ou 15:15-16:45.')
                    ->atPath('heureDebut')
                    ->addViolation();
            }
        }
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

    public function getQrToken(): ?string { return $this->qrToken; }
    public function setQrToken(?string $qrToken): static { $this->qrToken = $qrToken; return $this; }

    public function getQrExpiresAt(): ?\DateTimeInterface { return $this->qrExpiresAt; }
    public function setQrExpiresAt(?\DateTimeInterface $qrExpiresAt): static { $this->qrExpiresAt = $qrExpiresAt; return $this; }

    public function getQrUrl(): ?string { return $this->qrUrl; }
    public function setQrUrl(?string $qrUrl): static { $this->qrUrl = $qrUrl; return $this; }

    public function isQrValid(): bool
    {
        return $this->qrToken !== null;
    }
    
}