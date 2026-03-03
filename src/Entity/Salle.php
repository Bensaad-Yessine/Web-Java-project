<?php

namespace App\Entity;

use App\Repository\SalleRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: SalleRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Salle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Bloc obligatoire: A..K
    #[ORM\Column(length: 1)]
    #[Assert\NotBlank(message: "Le bloc est obligatoire.")]
    #[Assert\Choice(
        choices: ["A","B","C","D","E","F","G","H","I","J","K"],
        message: "Bloc invalide. Choisir un bloc entre A et K."
    )]
    private ?string $block = null;

    // Numéro de salle : 1..9 (pour chaque étage)
    #[ORM\Column]
    #[Assert\NotNull(message: "Le numéro est obligatoire.")]
    #[Assert\Positive(message: "Le numéro doit être positif.")]
    #[Assert\Range(
        min: 1,
        max: 9,
        notInRangeMessage: "Le numéro doit être entre {{ min }} et {{ max }}."
    )]
    private ?int $number = null;

    // Nom dérivé automatiquement : bloc + étage + numéro (ex : A37 pour bloc A, étage 3, numéro 7)
    #[ORM\Column(length: 10)]
    private ?string $name = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;


    #[ORM\Column]
    #[Assert\NotNull(message: "L'étage est obligatoire.")]
    #[Assert\Range(
        min: 0,
        max: 4,
        notInRangeMessage: "L'étage doit être entre {{ min }} et {{ max }}."
    )]
    private ?int $etage = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "La capacité est obligatoire.")]
    #[Assert\Regex(
        pattern: "/^\d+$/",
        message: "Veuillez n'utiliser que des chiffres pour la capacité."
    )]
    #[Assert\Range(
        min: 1,
        max: 30,
        notInRangeMessage: "La capacité doit être entre {{ min }} et {{ max }}."
    )]
    private $capacite = null;

    #[ORM\Column(type: 'boolean', options: ['default' => true])]
    private ?bool $disponibilite = true;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }


    public function getBlock(): ?string
    {
        return $this->block;
    }

    public function setBlock(?string $block): static
    {
        $this->block = $block;
        $this->updateName();
        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): static
    {
        $this->number = $number;
        $this->updateName();
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    // On ne laisse pas l'utilisateur modifier name manuellement
    private function setName(?string $name): static
    {
        $this->name = $name;
        return $this;
    }

    // ✅ Génère automatiquement le nom (bloc + étage + numéro, ex: A37)
    private function updateName(): void
    {
        if ($this->block !== null && $this->etage !== null && $this->number !== null) {
            $this->name = $this->block . $this->etage . $this->number;
        }
    }

    // ✅ Assure que name est toujours correct avant INSERT/UPDATE et gère les timestamps
    #[ORM\PrePersist]
    #[ORM\PreUpdate]
    public function onSave(): void
    {
        $this->updateName();
        if ($this->createdAt === null) {
            $this->createdAt = new \DateTimeImmutable();
        }
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
    public function __toString(): string
    {
        return $this->name ?? 'Salle';
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite($capacite): static
    {
        $this->capacite = $capacite;

        return $this;
    }


    public function getEtage(): ?int
    {
        return $this->etage;
    }

    public function setEtage(int $etage): static
    {
        $this->etage = $etage;

        return $this;
    }

    public function isDisponibilite(): ?bool
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(?bool $disponibilite): static
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }
}
