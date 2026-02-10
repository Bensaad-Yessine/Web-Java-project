<?php

namespace App\Entity;

use App\Repository\GroupeProjetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
#[ORM\Entity(repositoryClass: GroupeProjetRepository::class)]
class GroupeProjet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    

    #[ORM\Column(length: 255)]
    private ?string $nomProjet = null;

    #[ORM\Column(length: 255)]
    private ?string $matiere = null;

    /**
     * @var Collection<int, User>
     */
    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'idGroupe')]
    private Collection $idUser;

    /**
     * @var Collection<int, PropositionReunion>
     */
    #[ORM\OneToMany(targetEntity: PropositionReunion::class, mappedBy: 'idGroupe', cascade: ['persist','remove'], orphanRemoval: true)]
    private Collection $idReunion;

    #[ORM\Column(nullable: true)]
    private ?int $nbrMembre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $CreatedAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $statut = null;

    public function __construct()
    {
        $this->idUser = new ArrayCollection();
        $this->idReunion = new ArrayCollection();
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
}
