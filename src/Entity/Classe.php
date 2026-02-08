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

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $niveau = null;

    /**
     * @var Collection<int, MatiereClasse>
     */
    #[ORM\ManyToMany(targetEntity: MatiereClasse::class, mappedBy: 'Classe')]
    private Collection $matiereClasses;

    #[ORM\Column(length: 255)]
private ?string $anneeuniversitaire = "2025/2026";

    public function __construct()
    {
        $this->matiereClasses = new ArrayCollection();
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
}
