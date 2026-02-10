<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    private ?string $sexe = null;

    #[ORM\ManyToOne]
    private ?Classe $classe = null;

    /**
     * @var Collection<int, GroupeProjet>
     */
    #[ORM\ManyToMany(targetEntity: GroupeProjet::class, mappedBy: 'idUser')]
    private Collection $idGroupe;

    /**
     * @var Collection<int, ObjectifSante>
     */
    #[ORM\OneToMany(targetEntity: ObjectifSante::class, mappedBy: 'user')]
    private Collection $objectifSantes;

    /**
     * @var Collection<int, Tache>
     */
    #[ORM\OneToMany(targetEntity: Tache::class, mappedBy: 'user')]
    private Collection $taches;

    #[ORM\Column(nullable: true)]
    private ?bool $isVerified = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $createdAt = null;

    public function __construct()
    {
        $this->idGroupe = new ArrayCollection();
        $this->objectifSantes = new ArrayCollection();
        $this->taches = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, GroupeProjet>
     */
    public function getIdGroupe(): Collection
    {
        return $this->idGroupe;
    }

    public function addIdGroupe(GroupeProjet $idGroupe): self
    {
        if (!$this->idGroupe->contains($idGroupe)) {
            $this->idGroupe->add($idGroupe);
            $idGroupe->addIdUser($this);
        }
        return $this;
    }

    public function removeIdGroupe(GroupeProjet $idGroupe): self
    {
        if ($this->idGroupe->removeElement($idGroupe)) {
            $idGroupe->removeIdUser($this);
        }
        return $this;
    }

    /**
     * @return Collection<int, ObjectifSante>
     */
    public function getObjectifSantes(): Collection
    {
        return $this->objectifSantes;
    }

    public function addObjectifSante(ObjectifSante $objectifSante): self
    {
        if (!$this->objectifSantes->contains($objectifSante)) {
            $this->objectifSantes->add($objectifSante);
            $objectifSante->setUser($this);
        }
        return $this;
    }

    public function removeObjectifSante(ObjectifSante $objectifSante): self
    {
        if ($this->objectifSantes->removeElement($objectifSante)) {
            if ($objectifSante->getUser() === $this) {
                $objectifSante->setUser(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, Tache>
     */
    public function getTaches(): Collection
    {
        return $this->taches;
    }

    public function addTache(Tache $tache): self
    {
        if (!$this->taches->contains($tache)) {
            $this->taches->add($tache);
            $tache->setUser($this);
        }
        return $this;
    }

    public function removeTache(Tache $tache): self
    {
        if ($this->taches->removeElement($tache)) {
            if ($tache->getUser() === $this) {
                $tache->setUser(null);
            }
        }
        return $this;
    }

    public function isVerified(): ?bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(?bool $isVerified): static
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
