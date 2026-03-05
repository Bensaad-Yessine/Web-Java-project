<?php

namespace App\Entity;

use App\Repository\QuizAttemptDetailRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuizAttemptDetailRepository::class)]
class QuizAttemptDetail
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: QuizAttempt::class)]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?QuizAttempt $attempt = null;

    #[ORM\ManyToOne(targetEntity: QuizQuestion::class)]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?QuizQuestion $question = null;

    #[ORM\Column(length: 1, nullable: true)]
    private ?string $userAnswer = null;

    #[ORM\Column(length: 1)]
    private string $correctAnswer;

    #[ORM\Column(type: 'boolean')]
    private bool $isCorrect = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAttempt(): ?QuizAttempt
    {
        return $this->attempt;
    }

    public function setAttempt(QuizAttempt $attempt): self
    {
        $this->attempt = $attempt;

        return $this;
    }

    public function getQuestion(): ?QuizQuestion
    {
        return $this->question;
    }

    public function setQuestion(QuizQuestion $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getUserAnswer(): ?string
    {
        return $this->userAnswer;
    }

    public function setUserAnswer(?string $userAnswer): self
    {
        $this->userAnswer = $userAnswer;

        return $this;
    }

    public function getCorrectAnswer(): string
    {
        return $this->correctAnswer;
    }

    public function setCorrectAnswer(string $correctAnswer): self
    {
        $this->correctAnswer = strtoupper($correctAnswer);

        return $this;
    }

    public function isCorrect(): bool
    {
        return $this->isCorrect;
    }

    public function setIsCorrect(bool $isCorrect): self
    {
        $this->isCorrect = $isCorrect;

        return $this;
    }
}
