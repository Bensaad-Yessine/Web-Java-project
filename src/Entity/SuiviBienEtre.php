<?php

namespace App\Entity;

use App\Repository\SuiviBienEtreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SuiviBienEtreRepository::class)]
class SuiviBienEtre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
private ?\DateTimeInterface $dateSaisie = null;

    #[ORM\Column(length: 255)]
    private ?string $humeur = null;

    #[ORM\Column]
    private ?int $qualiteSommeil = null;

    #[ORM\Column]
    private ?int $niveauEnergie = null;

    #[ORM\Column]
    private ?int $niveauStress = null;

    #[ORM\Column]
    private ?int $qualiteAlimentation = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)] 
    private ?string $notesLibres = null;
    #[ORM\Column(nullable: true)]
private ?float $dureeSommeil = null;

#[ORM\Column(nullable: true)]
private ?int $niveauAnxiete = null;

#[ORM\Column(nullable: true)]
private ?int $niveauActivitePhysique = null;

#[ORM\Column(nullable: true)]
private ?int $scoreGlobalBienEtre = null;

    /**
     * @var Collection<int, RecommendationBienEtre>
     */
    #[ORM\OneToMany(targetEntity: RecommendationBienEtre::class, mappedBy: 'suiviBienEtre', orphanRemoval: true)]
    private Collection $recommendations;

    #[ORM\ManyToOne(inversedBy: 'suivisBienEtre')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    public function __construct()
    {
        $this->recommendations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

   

   public function getDateSaisie(): ?\DateTimeInterface
{
    return $this->dateSaisie;
}

public function setDateSaisie(?\DateTimeInterface $dateSaisie): static
{
    $this->dateSaisie = $dateSaisie;
    return $this;
}
    public function getHumeur(): ?string
    {
        return $this->humeur;
    }

    public function setHumeur(string $humeur): static
    {
        $this->humeur = $humeur;

        return $this;
    }

    public function getQualiteSommeil(): ?int
    {
        return $this->qualiteSommeil;
    }

    public function setQualiteSommeil(int $qualiteSommeil): static
    {
        $this->qualiteSommeil = $qualiteSommeil;

        return $this;
    }

    public function getNiveauEnergie(): ?int
    {
        return $this->niveauEnergie;
    }

    public function setNiveauEnergie(int $niveauEnergie): static
    {
        $this->niveauEnergie = $niveauEnergie;

        return $this;
    }

    public function getNiveauStress(): ?int
    {
        return $this->niveauStress;
    }

    public function setNiveauStress(int $niveauStress): static
    {
        $this->niveauStress = $niveauStress;

        return $this;
    }

    public function getQualiteAlimentation(): ?int
    {
        return $this->qualiteAlimentation;
    }

    public function setQualiteAlimentation(int $qualiteAlimentation): static
    {
        $this->qualiteAlimentation = $qualiteAlimentation;

        return $this;
    }

    public function getNotesLibres(): ?string
    {
        return $this->notesLibres;
    }

    public function setNotesLibres(string $notesLibres): static
    {
        $this->notesLibres = $notesLibres;

        return $this;
    }
    public function getDureeSommeil(): ?float { return $this->dureeSommeil; }
public function setDureeSommeil(?float $dureeSommeil): self { $this->dureeSommeil = $dureeSommeil; return $this; }

public function getNiveauAnxiete(): ?int { return $this->niveauAnxiete; }
public function setNiveauAnxiete(?int $niveauAnxiete): self { $this->niveauAnxiete = $niveauAnxiete; return $this; }

public function getNiveauActivitePhysique(): ?int { return $this->niveauActivitePhysique; }
public function setNiveauActivitePhysique(?int $niveauActivitePhysique): self { $this->niveauActivitePhysique = $niveauActivitePhysique; return $this; }

public function getScoreGlobalBienEtre(): ?int { return $this->scoreGlobalBienEtre; }
public function setScoreGlobalBienEtre(?int $scoreGlobalBienEtre): self { $this->scoreGlobalBienEtre = $scoreGlobalBienEtre; return $this; }


    /**
     * @return Collection<int, RecommendationBienEtre>
     */
    public function getRecommendations(): Collection
    {
        return $this->recommendations;
    }

    public function addRecommendation(RecommendationBienEtre $recommendation): static
    {
        if (!$this->recommendations->contains($recommendation)) {
            $this->recommendations->add($recommendation);
            $recommendation->setSuiviBienEtre($this);
        }

        return $this;
    }

    public function removeRecommendation(RecommendationBienEtre $recommendation): static
    {
        if ($this->recommendations->removeElement($recommendation)) {
            // set the owning side to null (unless already changed)
            if ($recommendation->getSuiviBienEtre() === $this) {
                $recommendation->setSuiviBienEtre(null);
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
