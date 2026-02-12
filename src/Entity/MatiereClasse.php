<?php

namespace App\Entity;

use App\Repository\MatiereClasseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MatiereClasseRepository::class)]
class MatiereClasse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "Le coefficient est obligatoire.")]
    #[Assert\Type(type: 'float', message: "Le coefficient doit être un nombre.")]
    #[Assert\Positive(message: "Le coefficient doit être supérieur à 0.")]
    private ?float $coefficient = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "La charge horaire est obligatoire.")]
    #[Assert\Type(type: 'integer', message: "La charge horaire doit être un entier.")]
    #[Assert\Positive(message: "La charge horaire doit être supérieure à 0.")]
    private ?int $chargehoraire = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "Le score de complexité est obligatoire.")]
    #[Assert\Type(type: 'integer', message: "Le score de complexité doit être un entier.")]
    #[Assert\Range(
        min: 1,
        max: 10,
        notInRangeMessage: "Le score de complexité doit être compris entre {{ min }} et {{ max }}."
    )]
    private ?int $scorecomplexite = null;

    /**
     * @var Collection<int, Classe>
     */
    #[ORM\ManyToMany(targetEntity: Classe::class, inversedBy: 'matiereClasses')]
    private Collection $classes;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotNull(message: "Le nom de la matière est obligatoire.")]
    #[Assert\NotBlank(message: "Le nom de la matière ne peut pas être vide.")]
    #[Assert\Length(
        min: 3,
        max: 50,
        minMessage: "Le nom de la matière doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le nom de la matière ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotNull(message: "La description est obligatoire.")]
    #[Assert\NotBlank(message: "La description ne peut pas être vide.")]
    #[Assert\Length(
        min: 10,
        minMessage: "La description doit contenir au moins {{ limit }} caractères."
    )]
    private ?string $description = null;

    /**
     * @var Collection<int, Seance>
     */
    #[ORM\OneToMany(targetEntity: Seance::class, mappedBy: 'matiere', cascade: ['remove'])]
    private Collection $seances;

    public function __construct()
    {
        $this->classes = new ArrayCollection();
        $this->seances = new ArrayCollection();
    }

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCoefficient(): ?float
    {
        return $this->coefficient;
    }

    public function setCoefficient(float $coefficient): static
    {
        $this->coefficient = $coefficient;
        return $this;
    }

    public function getChargehoraire(): ?int
    {
        return $this->chargehoraire;
    }

    public function setChargehoraire(int $chargehoraire): static
    {
        $this->chargehoraire = $chargehoraire;
        return $this;
    }

    public function getScorecomplexite(): ?int
    {
        return $this->scorecomplexite;
    }

    public function setScorecomplexite(int $scorecomplexite): static
    {
        $this->scorecomplexite = $scorecomplexite;
        return $this;
    }

    /**
     * @return Collection<int, Classe>
     */
    public function getClasses(): Collection
    {
        return $this->classes;
    }

    public function addClass(Classe $classe): static
    {
        if (!$this->classes->contains($classe)) {
            $this->classes->add($classe);
        }

        return $this;
    }

    public function removeClass(Classe $classe): static
    {
        $this->classes->removeElement($classe);

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Seance>
     */
    public function getSeances(): Collection
    {
        return $this->seances;
    }

    public function addSeance(Seance $seance): static
    {
        if (!$this->seances->contains($seance)) {
            $this->seances->add($seance);
            $seance->setMatiere($this);
        }

        return $this;
    }

    public function removeSeance(Seance $seance): static
    {
        if ($this->seances->removeElement($seance)) {
            // set the owning side to null (unless already changed)
            if ($seance->getMatiere() === $this) {
                $seance->setMatiere(null);
            }
        }

        return $this;
    }
  public function __toString(): string
{
    return $this->nom ?? 'Matière';
}

    
}