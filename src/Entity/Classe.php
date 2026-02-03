<?php

namespace App\Entity;

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

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $niveau = null;

    #[ORM\Column(length: 255)]
    private ?string $anneeuniversitaire = null;

    /**
     * @var Collection<int, MatiereClasse>
     */
    #[ORM\OneToMany(targetEntity: MatiereClasse::class, mappedBy: 'Classe', orphanRemoval: true)]
    private Collection $matiereclasses;

    public function __construct()
    {
        $this->matiereclasses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(?string $niveau): static
    {
        $this->niveau = $niveau;

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

    /**
     * @return Collection<int, MatiereClasse>
     */
    public function getMatiereclasses(): Collection
    {
        return $this->matiereclasses;
    }

    public function addMatiereclass(MatiereClasse $matiereclass): static
    {
        if (!$this->matiereclasses->contains($matiereclass)) {
            $this->matiereclasses->add($matiereclass);
            $matiereclass->setClasse($this);
        }

        return $this;
    }

    public function removeMatiereclass(MatiereClasse $matiereclass): static
    {
        if ($this->matiereclasses->removeElement($matiereclass)) {
            // set the owning side to null (unless already changed)
            if ($matiereclass->getClasse() === $this) {
                $matiereclass->setClasse(null);
            }
        }

        return $this;
    }
}
