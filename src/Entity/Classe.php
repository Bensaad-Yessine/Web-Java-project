<?php

namespace App\Entity;

use App\Repository\ClasseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ClasseRepository::class)]
class Classe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom de la classe est obligatoire")]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: "Le nom doit contenir au moins 2 caractères",
        maxMessage: "Le nom ne doit pas dépasser 50 caractères"
    )]
    private ?string $nom = null;

  
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le niveau est obligatoire")]
    private ?string $niveau = null;

    
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "L'année universitaire est obligatoire")]
    #[Assert\Regex(
        pattern: "/^\d{4}-\d{4}$/",
        message: "Format invalide (ex: 2024-2025)"
    )]
    private ?string $anneeuniversitaire = null;

    /**
     * @var Collection<int, MatiereClasse>
     */
    #[ORM\OneToMany(
        targetEntity: MatiereClasse::class,
        mappedBy: 'classe',
        orphanRemoval: true
    )]
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

    public function setAnneeuniversitaire(?string $anneeuniversitaire): static
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
            if ($matiereclass->getClasse() === $this) {
                $matiereclass->setClasse(null);
            }
        }

        return $this;
    }
}
