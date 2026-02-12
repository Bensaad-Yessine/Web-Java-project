<?php

namespace App\Entity;

use App\Entity\User;
use App\Repository\ObjectifSanteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use App\Entity\SuiviBienEtre;

#[ORM\Entity(repositoryClass: ObjectifSanteRepository::class)]
class ObjectifSante
{
    // ==================== PROPERTIES ====================

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // === Core Fields ===
    
    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: 'Le titre est obligatoire.')]
    #[Assert\Length(min: 3, max: 100)]
    private ?string $titre = null;

    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message: "Type obligatoire")]
    #[Assert\Choice(choices: ['SOMMEIL','SPORT','ALIMENTATION'])]
    private ?string $type = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "Valeur cible obligatoire")]
    #[Assert\Type('integer')]
    private ?int $valeurCible = null;

    #[ORM\Column(type: 'date')]
    #[Assert\NotNull(message: "Date début obligatoire")]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: 'date')]
    #[Assert\NotNull(message: "Date fin obligatoire")]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column(length: 20)]
    #[Assert\Choice(choices: ['EN_COURS','ATTEINT','ABANDONNE'])]
    private string $statut = 'EN_COURS';

    #[ORM\Column(length: 10, nullable: true)]
    #[Assert\Choice(choices: ['BASSE','MOYENNE','HAUTE'])]
    private ?string $priorite = 'MOYENNE';

    // === Relations ===
    
    #[ORM\OneToMany(mappedBy: 'objectif', targetEntity: SuiviBienEtre::class, orphanRemoval: true, cascade: ['persist','remove'])]
    private Collection $suivis;

    #[ORM\ManyToOne(inversedBy: 'objectifSantes')]
    private ?User $user = null;

    #[ORM\Column(nullable: true)]
    private ?int $progression = null;

    // ==================== CONSTRUCTOR ====================

    public function __construct()
    {
        $this->suivis = new ArrayCollection();
    }

    // ==================== GETTERS & SETTERS ====================

    public function getId(): ?int 
    { 
        return $this->id; 
    }

    public function getTitre(): ?string 
    { 
        return $this->titre; 
    }

    public function setTitre(string $titre): self 
    { 
        $this->titre = $titre;
        return $this;
    }

    public function getType(): ?string 
    { 
        return $this->type; 
    }

    public function setType(string $type): self 
    { 
        $this->type = $type;
        return $this;
    }

    public function getValeurCible(): ?int 
    { 
        return $this->valeurCible; 
    }

    public function setValeurCible(int $valeurCible): self 
    { 
        $this->valeurCible = $valeurCible;
        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface 
    { 
        return $this->dateDebut; 
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): self 
    { 
        $this->dateDebut = $dateDebut;
        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface 
    { 
        return $this->dateFin; 
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self 
    { 
        $this->dateFin = $dateFin;
        return $this;
    }

    public function getStatut(): string 
    { 
        return $this->statut; 
    }

    public function setStatut(string $statut): self 
    { 
        $this->statut = $statut;
        return $this;
    }

    public function getPriorite(): ?string 
    { 
        return $this->priorite; 
    }

    public function setPriorite(?string $priorite): self 
    { 
        $this->priorite = $priorite;
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

    // ==================== VALIDATION ====================

    #[Assert\Callback]
    public function validateValeurCible(ExecutionContextInterface $context): void
    {
        if ($this->valeurCible === null || $this->type === null) {
            return;
        }

        $ranges = [
            'SOMMEIL' => [1, 16],           // heures/nuit
            'SPORT' => [0, 300],            // minutes/jour
            'ALIMENTATION' => [1, 6],       // repas/jour
        ];

        $units = [
            'SOMMEIL' => 'heures/nuit',
            'SPORT' => 'minutes/jour',
            'ALIMENTATION' => 'repas sains/jour',
        ];

        if (isset($ranges[$this->type])) {
            [$min, $max] = $ranges[$this->type];
            if ($this->valeurCible < $min || $this->valeurCible > $max) {
                $unit = $units[$this->type];
                $context->buildViolation(sprintf('La valeur cible pour %s doit être entre %d et %d %s.', $this->type, $min, $max, $unit))
                    ->atPath('valeurCible')
                    ->addViolation();
            }
        }
    }

    #[Assert\Callback]
    public function validateDates(ExecutionContextInterface $context): void
    {
        if ($this->dateDebut === null || $this->dateFin === null) {
            return;
        }

        if ($this->dateDebut >= $this->dateFin) {
            $context->buildViolation('La date fin doit être postérieure à la date début.')
                ->atPath('dateFin')
                ->addViolation();
        }
    }

    // ==================== HELPER METHODS ====================

    public function getUnitLabel(): string
    {
        return match($this->type) {
            'SOMMEIL' => 'heures/nuit',
            'SPORT' => 'minutes/jour',
            'ALIMENTATION' => 'repas sains/jour',
            default => '',
        };
    }

    public function getValeurCibleAvecUnite(): string
    {
        if ($this->valeurCible === null) {
            return 'Non définie';
        }
        return $this->valeurCible . ' ' . $this->getUnitLabel();
    }

    public function getScoreMoyen(): ?float
    {
        $count = $this->suivis->count();
        if ($count === 0) {
            return 0.0;
        }

        $sum = 0.0;
        foreach ($this->suivis as $suivi) {
            $sum += $suivi->getScore() ?? 0;
        }

        return round($sum / $count, 1);
    }

    public function getProgression(): ?int
    {
        return $this->progression;
    }

    public function setProgression(?int $progression): static
    {
        $this->progression = $progression;

        return $this;
    }
}
