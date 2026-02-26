<?php

namespace App\Entity;

use App\Repository\QuizQuestionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuizQuestionRepository::class)]
class QuizQuestion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: MatiereClasse::class)]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?MatiereClasse $matiere = null;

    #[ORM\Column(length: 255)]
    private ?string $question = null;

    #[ORM\Column(length: 255)]
    private ?string $choiceA = null;

    #[ORM\Column(length: 255)]
    private ?string $choiceB = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $choiceC = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $choiceD = null;

    #[ORM\Column(length: 1)]
    private ?string $correctChoice = 'A';

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $explanation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatiere(): ?MatiereClasse
    {
        return $this->matiere;
    }

    public function setMatiere(MatiereClasse $matiere): static
    {
        $this->matiere = $matiere;
        return $this;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): static
    {
        $this->question = $question;
        return $this;
    }

    public function getChoiceA(): ?string
    {
        return $this->choiceA;
    }

    public function setChoiceA(string $choiceA): static
    {
        $this->choiceA = $choiceA;
        return $this;
    }

    public function getChoiceB(): ?string
    {
        return $this->choiceB;
    }

    public function setChoiceB(string $choiceB): static
    {
        $this->choiceB = $choiceB;
        return $this;
    }

    public function getChoiceC(): ?string
    {
        return $this->choiceC;
    }

    public function setChoiceC(?string $choiceC): static
    {
        $this->choiceC = $choiceC;
        return $this;
    }

    public function getChoiceD(): ?string
    {
        return $this->choiceD;
    }

    public function setChoiceD(?string $choiceD): static
    {
        $this->choiceD = $choiceD;
        return $this;
    }

    public function getCorrectChoice(): ?string
    {
        return $this->correctChoice;
    }

    public function setCorrectChoice(string $correctChoice): static
    {
        $this->correctChoice = strtoupper($correctChoice);
        return $this;
    }

    public function getExplanation(): ?string
    {
        return $this->explanation;
    }

    public function setExplanation(?string $explanation): static
    {
        $this->explanation = $explanation;
        return $this;
    }
}
