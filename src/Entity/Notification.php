<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\NotificationRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: NotificationRepository::class)]
#[ORM\Table(name: "notification")]
class Notification
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: "App\Entity\User")]
    #[ORM\JoinColumn(nullable: false, onDelete: "CASCADE")]
    #[Assert\NotNull(message: "User is required.")]
    private ?User $user = null;

    #[ORM\ManyToOne(targetEntity: "App\Entity\Tache")]
    #[ORM\JoinColumn(nullable: true, onDelete: "CASCADE")]
    private ?Tache $tache = null;

    #[ORM\Column(type: "text")]
    #[Assert\NotBlank(message: "Message cannot be blank.")]
    private ?string $message = null;

    #[ORM\Column(type: "string", length: 20)]
    #[Assert\NotBlank(message: "Type is required.")]
    #[Assert\Choice(choices: ["INFO", "WARNING", "RISK"], message: "Choose a valid type.")]
    private ?string $type = "INFO";

    #[ORM\Column(type: "boolean")]
    private bool $isRead = false;

    #[ORM\Column(type: "datetime")]
    #[Assert\NotNull(message: "CreatedAt is required.")]
    private \DateTimeInterface $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime(); // default current timestamp
        $this->isRead = false;
    }

    // ------------------- Getters & Setters -------------------

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getTache(): ?Tache
    {
        return $this->tache;
    }

    public function setTache(?Tache $tache): self
    {
        $this->tache = $tache;
        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        if (!in_array($type, ["INFO", "WARNING", "RISK"])) {
            throw new \InvalidArgumentException("Invalid notification type.");
        }
        $this->type = $type;
        return $this;
    }

    public function getIsRead(): bool
    {
        return $this->isRead;
    }

    public function setIsRead(bool $isRead): self
    {
        $this->isRead = $isRead;
        return $this;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}