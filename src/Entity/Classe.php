<?php

namespace App\Entity;
use App\Entity\MatiereClasse;
use App\Repository\ClasseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClasseRepository::class)]
class Classe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $niveau = null;

    /**
     * @var Collection<int, MatiereClasse>
     */
    #[ORM\ManyToMany(targetEntity: MatiereClasse::class, mappedBy: 'classes')]
    private Collection $matiereClasses;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'Classe')]
#[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
private ?User $user = null;


    #[ORM\Column(length: 255)]
private ?string $anneeuniversitaire = "2025/2026";

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    /**
     * @var Collection<int, Seance>
     */
    #[ORM\OneToMany(targetEntity: Seance::class, mappedBy: 'classe')]
    private Collection $seances;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $filiere = null;

    public function __construct()
    {
        $this->matiereClasses = new ArrayCollection();
        $this->seances = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(string $niveau): static
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * @return Collection<int, MatiereClasse>
     */
    public function getMatiereClasses(): Collection
    {
        return $this->matiereClasses;
    }

    public function addMatiereClass(MatiereClasse $matiereClass): static
    {
        if (!$this->matiereClasses->contains($matiereClass)) {
            $this->matiereClasses->add($matiereClass);
            $matiereClass->addClasse($this);
        }

        return $this;
    }

    public function removeMatiereClass(MatiereClasse $matiereClass): static
    {
        if ($this->matiereClasses->removeElement($matiereClass)) {
            $matiereClass->removeClasse($this);
        }

        return $this;
    }

    public function getAnneeuniversitaire(): ?string
    {
        return $this->anneeuniversitaire;
    }

    public function setAnneeuniversitaire(string $anneeuniversitaire): static
    {
        $this->anneeuniversitaire = $anneeuniversitaire;

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
        $seance->setClasse($this);
    }

    return $this;
}

public function removeSeance(Seance $seance): static
{
    if ($this->seances->removeElement($seance)) {
        // set the owning side to null (unless already changed)
        if ($seance->getClasse() === $this) {
            $seance->setClasse(null);
        }
    }

    return $this;
}
public function __toString(): string
{
    return $this->nom ?? 'Classe';
}

public function getFiliere(): ?string
{
    return $this->filiere;
}

public function setFiliere(?string $filiere): static
{
    $this->filiere = $filiere;

    return $this;
}

}