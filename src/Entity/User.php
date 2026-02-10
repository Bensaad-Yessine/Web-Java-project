<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[UniqueEntity(
    fields: ['email'],
    message: 'Cet email est déjà utilisé. Veuillez en choisir un autre.'
)]
#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    #[Assert\NotBlank(message: 'L\'email est obligatoire')]
    #[Assert\Email(message: 'Veuillez entrer une adresse email valide')]
    #[Assert\Length(max: 180, maxMessage: 'L\'email ne doit pas dépasser {{ limit }} caractères')]
    private ?string $email = null;

    // Colonne EXISTANTE en base
    #[ORM\Column(type: 'string', length: 50)]
    private ?string $role = 'ROLE_USER';

    #[ORM\Column(type: 'string')]
    private ?string $password = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\NotBlank(message: 'Le prénom est obligatoire')]
    #[Assert\Length(
        min: 2,
        max: 255,
        minMessage: 'Le prénom doit contenir au moins {{ limit }} caractères',
        maxMessage: 'Le prénom ne doit pas dépasser {{ limit }} caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-ZÀ-ÿ\s-]*$/',
        message: 'Le prénom ne doit contenir que des lettres, espaces ou tirets'
    )]
    private ?string $prenom = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\NotBlank(message: 'Le nom est obligatoire')]
    #[Assert\Length(
        min: 2,
        max: 255,
        minMessage: 'Le nom doit contenir au moins {{ limit }} caractères',
        maxMessage: 'Le nom ne doit pas dépasser {{ limit }} caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-ZÀ-ÿ\s-]*$/',
        message: 'Le nom ne doit contenir que des lettres, espaces ou tirets'
    )]
    private ?string $nom = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $profilePic = null;

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    private ?string $numTel = null;

    #[ORM\Column(type: 'date', nullable: true)]
    #[Assert\NotBlank(message: 'La date de naissance est obligatoire')]
    #[Assert\Range(
        min: 'today -50 years',
        max: 'today -18 years',
        notInRangeMessage: 'Vous devez avoir entre 18 et 50 ans'
    )]
    private ?\DateTimeInterface $dateDeNaissance = null;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    #[Assert\NotBlank(message: 'Le sexe est obligatoire')]
    #[Assert\Choice(
        choices: ['Homme', 'Femme'],
        message: 'Le sexe sélectionné n\'est pas valide'
    )]
    private ?string $sexe = null;

    #[ORM\ManyToOne(targetEntity: Classe::class)]
    #[ORM\JoinColumn(nullable: true)]
    #[Assert\NotNull(message: 'Une classe doit être sélectionnée')]
    private ?Classe $classe = null;

    // ================= GETTERS & SETTERS =================

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Identifiant unique (Symfony Security)
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * Symfony exige un tableau de rôles
     */
    public function getRoles(): array
    {
        return [$this->role ?? 'ROLE_USER'];
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;
        return $this;
    }

    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function eraseCredentials(): void
    {
        // Rien à nettoyer
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getProfilePic(): ?string
    {
        return $this->profilePic;
    }

    public function setProfilePic(?string $profilePic): self
    {
        $this->profilePic = $profilePic;
        return $this;
    }

    public function getNumTel(): ?string
    {
        return $this->numTel;
    }

    public function setNumTel(?string $numTel): self
    {
        $this->numTel = $numTel;
        return $this;
    }

    public function getDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->dateDeNaissance;
    }

    public function setDateDeNaissance(?\DateTimeInterface $dateDeNaissance): self
    {
        $this->dateDeNaissance = $dateDeNaissance;
        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(?string $sexe): self
    {
        $this->sexe = $sexe;
        return $this;
    }

    public function getClasse(): ?Classe
    {
        return $this->classe;
    }

    public function setClasse(?Classe $classe): self
    {
        $this->classe = $classe;
        return $this;
    }
}

