<?php

namespace App\Entity;

use App\Repository\GroupeProjetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: GroupeProjetRepository::class)]
#[Vich\Uploadable]
class GroupeProjet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le nom du projet est obligatoire.')]
    #[Assert\Length(
        min: 3,
        max: 20,
        minMessage: 'Le nom du projet doit contenir au moins {{ limit }} caractères.',
        maxMessage: 'Le nom du projet ne peut pas dépasser {{ limit }} caractères.'
    )]
    private ?string $nomProjet = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'La matière est obligatoire.')]
    private ?string $matiere = null;

    /**
     * @var Collection<int, User>
     */
    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'idGroupe')]
    #[Assert\Count(
        min: 1,
        minMessage: 'Vous devez sélectionner au moins {{ limit }} membre.'
    )]
    private Collection $idUser;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $createdBy = null;

    /**
     * @var Collection<int, PropositionReunion>
     */
    #[ORM\OneToMany(targetEntity: PropositionReunion::class, mappedBy: 'idGroupe', cascade: ['persist','remove'], orphanRemoval: true)]
    private Collection $idReunion;

    #[ORM\Column(nullable: true)]
    #[Assert\NotBlank(message: 'Le nombre de membres est obligatoire.')]
    #[Assert\Range(
        min: 2,
        max: 10,
        notInRangeMessage: 'Le nombre de membres doit être entre {{ min }} et {{ max }}.'
    )]
    private ?int $nbrMembre = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(
        min: 10,
        minMessage: 'La description doit contenir au moins {{ limit }} caractères.'
    )]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $CreatedAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message: 'Le statut est obligatoire.')]
    private ?string $statut = null;

    #[Vich\UploadableField(mapping: 'groupe_logo', fileNameProperty: 'logoImageName')]
    private ?File $logoImageFile = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $logoImageName = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $niveauGroupe = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $objectifGroupe = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $styleGroupe = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private ?array $disponibilites = null;

    public function __construct()
    {
        $this->idUser = new ArrayCollection();
        $this->idReunion = new ArrayCollection();
    }

    public function getCreatedBy(): ?User
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?User $createdBy): static
    {
        $this->createdBy = $createdBy;

        return $this;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

   

    public function getNomProjet(): ?string
    {
        return $this->nomProjet;
    }

    public function setNomProjet(string $nomProjet): static
    {
        $this->nomProjet = $nomProjet;

        return $this;
    }

    public function getMatiere(): ?string
    {
        return $this->matiere;
    }

    public function setMatiere(string $matiere): static
    {
        $this->matiere = $matiere;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getIdUser(): Collection
    {
        return $this->idUser;
    }

    public function addIdUser(User $idUser): static
    {
        if (!$this->idUser->contains($idUser)) {
            $this->idUser->add($idUser);
        }

        return $this;
    }

    public function removeIdUser(User $idUser): static
    {
        $this->idUser->removeElement($idUser);

        return $this;
    }

    /**
     * @return Collection<int, PropositionReunion>
     */
    public function getIdReunion(): Collection
    {
        return $this->idReunion;
    }

    public function addIdReunion(PropositionReunion $idReunion): static
    {
        if (!$this->idReunion->contains($idReunion)) {
            $this->idReunion->add($idReunion);
            $idReunion->setIdGroupe($this);
        }

        return $this;
    }

    public function removeIdReunion(PropositionReunion $idReunion): static
    {
        if ($this->idReunion->removeElement($idReunion)) {
            // set the owning side to null (unless already changed)
            if ($idReunion->getIdGroupe() === $this) {
                $idReunion->setIdGroupe(null);
            }
        }

        return $this;
    }

    public function getNbrMembre(): ?int
    {
        return $this->nbrMembre;
    }

    public function setNbrMembre(?int $nbrMembre): static
    {
        $this->nbrMembre = $nbrMembre;

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

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->CreatedAt;
    }

    public function setCreatedAt(?\DateTimeImmutable $CreatedAt): static
    {
        $this->CreatedAt = $CreatedAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getLogoImageFile(): ?File
    {
        return $this->logoImageFile;
    }

    public function setLogoImageFile(?File $logoImageFile): static
    {
        $this->logoImageFile = $logoImageFile;

        return $this;
    }

    public function getLogoImageName(): ?string
    {
        return $this->logoImageName;
    }

    public function setLogoImageName(?string $logoImageName): static
    {
        $this->logoImageName = $logoImageName;

        return $this;
    }

    public function getNiveauGroupe(): ?string
    {
        return $this->niveauGroupe;
    }

    public function setNiveauGroupe(?string $niveauGroupe): static
    {
        $this->niveauGroupe = $niveauGroupe;
        return $this;
    }

    public function getObjectifGroupe(): ?string
    {
        return $this->objectifGroupe;
    }

    public function setObjectifGroupe(?string $objectifGroupe): static
    {
        $this->objectifGroupe = $objectifGroupe;
        return $this;
    }

    public function getStyleGroupe(): ?string
    {
        return $this->styleGroupe;
    }

    public function setStyleGroupe(?string $styleGroupe): static
    {
        $this->styleGroupe = $styleGroupe;
        return $this;
    }

    public function getDisponibilites(): ?array
    {
        return $this->disponibilites;
    }

    public function setDisponibilites(?array $disponibilites): static
    {
        $this->disponibilites = $disponibilites;
        return $this;
    }
}
