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
    #[Assert\NotBlank(message: "Le nom de la classe est obligatoire.")]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: "Le nom doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le niveau est obligatoire.")]
    private ?string $niveau = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: "L'année universitaire est obligatoire.")]
    #[Assert\Regex(
        pattern: "/^\d{4}-\d{4}$/",
        message: "Le format doit être AAAA-AAAA (ex: 2024-2025)."
    )]
    private ?string $anneeuniversitaire = null;

    #[ORM\OneToMany(mappedBy: 'classe', targetEntity: MatiereClasse::class)]
    private Collection $matiereClasses;

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
    public function getMatiereClasses(): Collection
    {
        return $this->matiereClasses;
    }

    public function addMatiereClass(MatiereClasse $matiereClass): static
    {
        if (!$this->matiereClasses->contains($matiereClass)) {
            $this->matiereClasses->add($matiereClass);
            $matiereClass->setClasse($this);
        }

        return $this;
    }

    public function removeMatiereClass(MatiereClasse $matiereClass): static
    {
        if ($this->matiereClasses->removeElement($matiereClass)) {
            // set the owning side to null (unless already changed)
            if ($matiereClass->getClasse() === $this) {
                $matiereClass->setClasse(null);
            }
        }

        return $this;
    }

    public function getFormattedNiveau(): string
    {
        $niveaux = [
            '1ère année' => '1ère année',
            '2ème année' => '2ème année', 
            '3ème année' => '3ème année',
            '4ème année' => '4ème année',
            '5ème année' => '5ème année',
            'Licence 1' => 'Licence 1',
            'Licence 2' => 'Licence 2',
            'Licence 3' => 'Licence 3',
            'Master 1' => 'Master 1',
            'Master 2' => 'Master 2',
        ];

        return $niveaux[$this->niveau] ?? $this->niveau;
    }

    public function getDisplayName(): string
    {
        return $this->nom . ' - ' . $this->getFormattedNiveau() . ' (' . $this->anneeuniversitaire . ')';
    }

    public function __toString(): string
    {
        return $this->getDisplayName();
    }

    // Méthodes utilitaires
    public function getNombreMatieres(): int
    {
        return $this->matiereClasses->count();
    }

    public function getChargeHoraireTotale(): int
    {
        $total = 0;
        foreach ($this->matiereClasses as $matiereClasse) {
            $total += $matiereClasse->getChargehoraire();
        }
        return $total;
    }

    public function getCoefficientMoyen(): float
    {
        $total = 0;
        $count = $this->matiereClasses->count();
        
        if ($count === 0) {
            return 0;
        }

        foreach ($this->matiereClasses as $matiereClasse) {
            $total += $matiereClasse->getCoefficient();
        }

        return round($total / $count, 2);
    }
}