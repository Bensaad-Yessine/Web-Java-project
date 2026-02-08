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

    // Number: 1..40 (1er étage 1..10, 2ème 11..20, 3ème 21..30, 4ème 31..40)
    #[ORM\Column]
    #[Assert\NotNull(message: "Le numéro est obligatoire.")]
    #[Assert\Positive(message: "Le numéro doit être positif.")]
    #[Assert\Range(
        min: 1,
        max: 40,
        notInRangeMessage: "Le numéro doit être entre {{ min }} et {{ max }}."
    )]
    private ?int $number = null;

    // Name dérivé: block + number (ex: J38)
    #[ORM\Column(length: 10)]
    private ?string $name = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

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

    // ✅ Génère automatiquement le name (ex: J38)
    private function updateName(): void
    {
        if ($this->block !== null && $this->number !== null) {
            $this->name = $this->block . $this->number;
        }
    }

    // ✅ Assure que name est toujours correct avant INSERT/UPDATE
    #[ORM\PrePersist]
    #[ORM\PreUpdate]
    public function onSave(): void
    {
        $this->updateName();
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }
    #[ORM\PrePersist]
    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }
     #[ORM\PreUpdate]
    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
