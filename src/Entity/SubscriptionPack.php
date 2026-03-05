<?php

namespace App\Entity;

use App\Repository\SubscriptionPackRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubscriptionPackRepository::class)]
class SubscriptionPack
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private ?string $price = null;

    #[ORM\Column(length: 10)]
    private ?string $currency = 'EUR';

    #[ORM\Column(type: 'integer')]
    private ?int $durationDays = null;

    #[ORM\Column(type: 'json', nullable: true)]
    private ?array $features = [];

    #[ORM\Column(type: 'boolean')]
    private bool $isActive = true;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $icon = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $color = null;

    #[ORM\Column(type: 'boolean')]
    private bool $isPopular = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
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

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): static
    {
        $this->currency = $currency;
        return $this;
    }

    public function getDurationDays(): ?int
    {
        return $this->durationDays;
    }

    public function setDurationDays(int $durationDays): static
    {
        $this->durationDays = $durationDays;
        return $this;
    }

    public function getFeatures(): ?array
    {
        return $this->features;
    }

    public function setFeatures(?array $features): static
    {
        $this->features = $features;
        return $this;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;
        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(?string $icon): static
    {
        $this->icon = $icon;
        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): static
    {
        $this->color = $color;
        return $this;
    }

    public function isPopular(): bool
    {
        return $this->isPopular;
    }

    public function setIsPopular(bool $isPopular): static
    {
        $this->isPopular = $isPopular;
        return $this;
    }

    public function getPriceInCents(): int
    {
        return (int) ($this->price * 100);
    }

    public function getFormattedPrice(): string
    {
        $symbol = $this->currency === 'EUR' ? '€' : '$';
        return $symbol . number_format((float) $this->price, 2);
    }

    public function getDurationText(): string
    {
        if ($this->durationDays === 30) {
            return '1 Month';
        } elseif ($this->durationDays === 90) {
            return '3 Months';
        } elseif ($this->durationDays === 365) {
            return '1 Year';
        }
        return $this->durationDays . ' Days';
    }
}
