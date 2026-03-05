<?php

namespace App\Entity;

use App\Repository\VoteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: VoteRepository::class)]
#[ORM\Table(name: 'vote', uniqueConstraints: [new ORM\UniqueConstraint(name: 'uniq_vote_user_proposition', columns: ['user_id', 'proposition_id'])])]
#[UniqueEntity(fields: ['proposition', 'user'], message: 'Vous avez déjà voté pour cette proposition.')]
class Vote
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'votes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?PropositionReunion $proposition = null;

    #[ORM\ManyToOne(inversedBy: 'votes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le vote est obligatoire.')]
    #[Assert\Choice(choices: ['pour', 'contre', 'abstention'], message: 'Vote invalide.')]
    private ?string $vote = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'La date du vote est obligatoire.')]
    private ?\DateTime $votedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProposition(): ?PropositionReunion
    {
        return $this->proposition;
    }

    public function setProposition(?PropositionReunion $proposition): static
    {
        $this->proposition = $proposition;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getVote(): ?string
    {
        return $this->vote;
    }

    public function setVote(string $vote): static
    {
        $this->vote = $vote;

        return $this;
    }

    public function getVotedAt(): ?\DateTime
    {
        return $this->votedAt;
    }

    public function setVotedAt(\DateTime $votedAt): static
    {
        $this->votedAt = $votedAt;

        return $this;
    }
}
