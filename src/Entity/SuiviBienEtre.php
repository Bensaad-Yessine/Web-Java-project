<?php

namespace App\Entity;

use App\Repository\SuiviBienEtreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use App\Entity\ObjectifSante;

#[ORM\Entity(repositoryClass: SuiviBienEtreRepository::class)]
#[Assert\Callback('validateDateSaisie')]
class SuiviBienEtre
{
    // ==================== PROPERTIES ====================

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // === Relations ===
    
    #[ORM\ManyToOne(inversedBy: 'suivis')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: "Objectif obligatoire")]
    private ?ObjectifSante $objectif = null;

    // === Core Fields ===
    
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: "Date de saisie obligatoire")]
    private ?\DateTimeInterface $dateSaisie = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Humeur obligatoire")]
    #[Assert\Length(max: 255)]
    private ?string $humeur = null;

    // === Health Indicators (0-10 scale) ===
    
    #[ORM\Column]
    #[Assert\NotNull(message: "Qualité du sommeil obligatoire")]
    #[Assert\Range(min: 0, max: 10, notInRangeMessage: "La qualité du sommeil doit être entre 0 et 10")]
    private ?int $qualiteSommeil = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "Niveau d'énergie obligatoire")]
    #[Assert\Range(min: 0, max: 10, notInRangeMessage: "Le niveau d'énergie doit être entre 0 et 10")]
    private ?int $niveauEnergie = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "Niveau de stress obligatoire")]
    #[Assert\Range(min: 0, max: 10, notInRangeMessage: "Le niveau de stress doit être entre 0 et 10")]
    private ?int $niveauStress = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "Qualité de l'alimentation obligatoire")]
    #[Assert\Range(min: 0, max: 10, notInRangeMessage: "La qualité de l'alimentation doit être entre 0 et 10")]
    private ?int $qualiteAlimentation = null;

    // === Metadata ===
    
    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Assert\Length(max: 2000)]
    private ?string $notesLibres = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Range(min: 0, max: 100)]
    private ?float $score = 0;

    // ==================== CONSTRUCTOR ====================

    public function __construct()
    {
    }

    // ==================== GETTERS & SETTERS ====================

    public function getId(): ?int 
    { 
        return $this->id; 
    }

    public function getObjectif(): ?ObjectifSante 
    { 
        return $this->objectif; 
    }

    public function setObjectif(?ObjectifSante $objectif): self 
    { 
        $this->objectif = $objectif;
        return $this;
    }

    public function getDateSaisie(): ?\DateTimeInterface 
    { 
        return $this->dateSaisie; 
    }

    public function setDateSaisie(?\DateTimeInterface $dateSaisie): self 
    { 
        $this->dateSaisie = $dateSaisie;
        return $this;
    }

    public function getHumeur(): ?string 
    { 
        return $this->humeur; 
    }

    public function setHumeur(?string $humeur): self 
    { 
        $this->humeur = $humeur;
        return $this;
    }

    public function getQualiteSommeil(): ?int 
    { 
        return $this->qualiteSommeil; 
    }

    public function setQualiteSommeil(?int $qualiteSommeil): self 
    { 
        $this->qualiteSommeil = $qualiteSommeil;
        return $this;
    }

    public function getNiveauEnergie(): ?int 
    { 
        return $this->niveauEnergie; 
    }

    public function setNiveauEnergie(?int $niveauEnergie): self 
    { 
        $this->niveauEnergie = $niveauEnergie;
        return $this;
    }

    public function getNiveauStress(): ?int 
    { 
        return $this->niveauStress; 
    }

    public function setNiveauStress(?int $niveauStress): self 
    { 
        $this->niveauStress = $niveauStress;
        return $this;
    }

    public function getQualiteAlimentation(): ?int 
    { 
        return $this->qualiteAlimentation; 
    }

    public function setQualiteAlimentation(?int $qualiteAlimentation): self 
    { 
        $this->qualiteAlimentation = $qualiteAlimentation;
        return $this;
    }

    public function getNotesLibres(): ?string 
    { 
        return $this->notesLibres; 
    }

    public function setNotesLibres(?string $notesLibres): self 
    { 
        $this->notesLibres = $notesLibres;
        return $this;
    }

    public function getScore(): ?float 
    { 
        return $this->score; 
    }

    public function setScore(?float $score): self 
    { 
        $this->score = $score;
        return $this;
    }

    // ==================== VALIDATION ====================

    /**
     * Validates dateSaisie:
     * - Must not be in the future
     * - Must be within objective's date range (if objective has dates)
     */
    public function validateDateSaisie(ExecutionContextInterface $context): void
    {
        if ($this->dateSaisie === null) {
            return;
        }

        try {
            // Normalize to date only (time = 00:00:00)
            $saisieDate = new \DateTime($this->dateSaisie->format('Y-m-d'));
            $todayDate = new \DateTime();
            $todayDate->setTime(0, 0, 0);

            // Check: dateSaisie must not be in the future
            if ($saisieDate > $todayDate) {
                $context->buildViolation('La date de saisie ne peut pas être dans le futur.')
                    ->atPath('dateSaisie')
                    ->addViolation();
                return;
            }

            // Check: dateSaisie must be within objective date range (if objective has start date)
            if ($this->objectif && $this->objectif->getDateDebut()) {
                $debutDate = new \DateTime($this->objectif->getDateDebut()->format('Y-m-d'));
                $debutDate->setTime(0, 0, 0);
                
                if ($saisieDate < $debutDate) {
                    $context->buildViolation('La date de saisie doit être après le {{ debut }}')
                        ->atPath('dateSaisie')
                        ->setParameter('{{ debut }}', $this->objectif->getDateDebut()->format('d/m/Y'))
                        ->addViolation();
                    return;
                }
            }

            // Check: dateSaisie must be within objective date range (if objective has end date)
            if ($this->objectif && $this->objectif->getDateFin()) {
                $finDate = new \DateTime($this->objectif->getDateFin()->format('Y-m-d'));
                $finDate->setTime(0, 0, 0);
                
                if ($saisieDate > $finDate) {
                    $context->buildViolation('La date de saisie doit être avant le {{ fin }}')
                        ->atPath('dateSaisie')
                        ->setParameter('{{ fin }}', $this->objectif->getDateFin()->format('d/m/Y'))
                        ->addViolation();
                }
            }
        } catch (\Exception $e) {
            // If date parsing fails, let other validators handle it
            return;
        }
    }

    // ==================== HELPER METHODS ====================

    /**
     * Calculates weighted score based on objective type.
     * Higher weight to the primary indicator, equal weight to others.
     */
    public function calculerScore(): float
    {
        // Normalize all indicators to 0-100 scale
        $sommeilScore = ($this->qualiteSommeil / 10) * 100;
        $energieScore = ($this->niveauEnergie / 10) * 100;
        $alimentationScore = ($this->qualiteAlimentation / 10) * 100;
        $stressScore = ((10 - $this->niveauStress) / 10) * 100; // Inverted: lower is better

        // Weighted scoring based on objective type
        if ($this->objectif && $this->objectif->getType() === 'SOMMEIL') {
            // SOMMEIL: 50% sleep quality, 16.67% each for others
            $score = ($sommeilScore * 0.50) + 
                     ($energieScore * 0.1667) + 
                     ($alimentationScore * 0.1667) + 
                     ($stressScore * 0.1667);
        } elseif ($this->objectif && $this->objectif->getType() === 'SPORT') {
            // SPORT: 50% energy level, 16.67% each for others
            $score = ($energieScore * 0.50) + 
                     ($sommeilScore * 0.1667) + 
                     ($alimentationScore * 0.1667) + 
                     ($stressScore * 0.1667);
        } elseif ($this->objectif && $this->objectif->getType() === 'ALIMENTATION') {
            // ALIMENTATION: 50% nutrition quality, 16.67% each for others
            $score = ($alimentationScore * 0.50) + 
                     ($sommeilScore * 0.1667) + 
                     ($energieScore * 0.1667) + 
                     ($stressScore * 0.1667);
        } else {
            // Default: equal weight to all
            $score = ($sommeilScore + $energieScore + $alimentationScore + $stressScore) / 4;
        }

        return round($score, 2);
    }
}
