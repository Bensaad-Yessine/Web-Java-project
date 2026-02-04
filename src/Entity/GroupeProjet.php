<?php

namespace App\Entity;

use App\Repository\GroupeProjetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GroupeProjetRepository::class)]
class GroupeProjet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $groupeId = null;

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
    #[ORM\OneToMany(targetEntity: PropositionReunion::class, mappedBy: 'idGroupe')]
    private Collection $idReunion;

    public function __construct()
    {
        $this->idUser = new ArrayCollection();
        $this->idReunion = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGroupeId(): ?int
    {
        return $this->groupeId;
    }

    public function setGroupeId(int $groupeId): static
    {
        $this->groupeId = $groupeId;

        return $this;
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
}
