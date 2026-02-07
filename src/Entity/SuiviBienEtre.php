<?php

namespace App\Entity;

use App\Repository\SuiviBienEtreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: SuiviBienEtreRepository::class)]
class SuiviBienEtre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // ✅ Relation: plusieurs suivis appartiennent à 1 objectif
    #[ORM\ManyToOne(inversedBy: 'suivis')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: "Objectif obligatoire")]
    private ?ObjectifSante $objectif = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: "Date de saisie obligatoire")]
    private ?\DateTimeInterface $dateSaisie = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Humeur obligatoire")]
    #[Assert\Length(max: 255)]
    private ?string $humeur = null;

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\Range(min: 0, max: 10, notInRangeMessage: "Qualité du sommeil doit être entre 0 et 10.")]
    private ?int $qualiteSommeil = null;

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\Range(min: 0, max: 10, notInRangeMessage: "Niveau d'énergie doit être entre 0 et 10.")]
    private ?int $niveauEnergie = null;

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\Range(min: 0, max: 10, notInRangeMessage: "Niveau de stress doit être entre 0 et 10.")]
    private ?int $niveauStress = null;

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\Range(min: 0, max: 10, notInRangeMessage: "Qualité de l'alimentation doit être entre 0 et 10.")]
    private ?int $qualiteAlimentation = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Assert\Length(max: 2000)]
    private ?string $notesLibres = null;

    // ✅ Score calculé (0..100)
    #[ORM\Column(nullable: true)]
    #[Assert\Range(min: 0, max: 100)]
    private ?float $score = 0;

    public function getId(): ?int { return $this->id; }

    public function getObjectif(): ?ObjectifSante { return $this->objectif; }
    public function setObjectif(?ObjectifSante $objectif): self { $this->objectif = $objectif; return $this; }

    public function getDateSaisie(): ?\DateTimeInterface { return $this->dateSaisie; }
    public function setDateSaisie(\DateTimeInterface $dateSaisie): self { $this->dateSaisie = $dateSaisie; return $this; }

    public function getHumeur(): ?string { return $this->humeur; }
    public function setHumeur(string $humeur): self { $this->humeur = $humeur; return $this; }

    public function getQualiteSommeil(): ?int { return $this->qualiteSommeil; }
    public function setQualiteSommeil(int $qualiteSommeil): self { $this->qualiteSommeil = $qualiteSommeil; return $this; }

    public function getNiveauEnergie(): ?int { return $this->niveauEnergie; }
    public function setNiveauEnergie(int $niveauEnergie): self { $this->niveauEnergie = $niveauEnergie; return $this; }

    public function getNiveauStress(): ?int { return $this->niveauStress; }
    public function setNiveauStress(int $niveauStress): self { $this->niveauStress = $niveauStress; return $this; }

    public function getQualiteAlimentation(): ?int { return $this->qualiteAlimentation; }
    public function setQualiteAlimentation(int $qualiteAlimentation): self { $this->qualiteAlimentation = $qualiteAlimentation; return $this; }

    public function getNotesLibres(): ?string { return $this->notesLibres; }
    public function setNotesLibres(?string $notesLibres): self { $this->notesLibres = $notesLibres; return $this; }

    public function getScore(): ?float { return $this->score; }
    public function setScore(?float $score): self { $this->score = $score; return $this; }

    // ✅ calcul score (simple et clair)
    public function calculerScore(): float
    {
        // sommeil + énergie + alimentation (positifs) + stress (inverse)
        // chaque item sur 10 => score final sur 100
        $positif = ($this->qualiteSommeil + $this->niveauEnergie + $this->qualiteAlimentation); // max 30
        $stressInverse = (10 - $this->niveauStress); // max 10
        $totalSur40 = $positif + $stressInverse; // max 40
        return round(($totalSur40 / 40) * 100, 2);
    }
}
