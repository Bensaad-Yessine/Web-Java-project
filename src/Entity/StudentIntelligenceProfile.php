<?php

namespace App\Entity;

use App\Repository\StudentIntelligenceProfileRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\User;

#[ORM\Entity(repositoryClass: StudentIntelligenceProfileRepository::class)]
#[ORM\Table(name: "student_intelligence_profile")]
class StudentIntelligenceProfile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // ========================
    // Identity / Metadata
    // ========================
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false, onDelete: "CASCADE")]
    private ?User $user = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $analyzedAt = null;

    // ========================
    // Behavior Metrics
    // ========================
    #[ORM\Column(type: Types::FLOAT, nullable: true)]
    private ?float $abandonmentRate = null;

    #[ORM\Column(type: Types::FLOAT, nullable: true)]
    private ?float $completionRate = null;

    #[ORM\Column(type: Types::FLOAT, nullable: true)]
    private ?float $averageStartDelayMinutes = null;

    #[ORM\Column(type: Types::FLOAT, nullable: true)]
    private ?float $averageCompletionDurationMinutes = null;

    #[ORM\Column(type: Types::FLOAT, nullable: true)]
    private ?float $pauseFrequency = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $mostProductiveHour = null; // 0–23

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $mostProductiveDayOfWeek = null; // 1–7

    // ========================
    // Task-Type Metrics (JSON)
    // ========================
    #[ORM\Column(type: Types::JSON, nullable: true)]
    private ?array $abandonmentRateByType = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private ?array $completionRateByType = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private ?array $averageStartDelayByType = null;

    // ========================
    // Predictive Indicators
    // ========================
    #[ORM\Column(type: Types::FLOAT, nullable: true)]
    private ?float $globalRiskTrend = null;

    #[ORM\Column(type: Types::FLOAT, nullable: true)]
    private ?float $forgottenTaskProbability = null;

    #[ORM\Column(type: Types::FLOAT, nullable: true)]
    private ?float $overdueProbability = null;

    // ========================
    // AI Insights
    // ========================
    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $weeklyProductivitySummary = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $behavioralAdvice = null;

    // ========================
    // Getters & Setters
    // ========================
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): static
    {
        $this->user = $user;
        return $this;
    }

    public function getAnalyzedAt(): ?\DateTimeInterface
    {
        return $this->analyzedAt;
    }

    public function setAnalyzedAt(\DateTimeInterface $analyzedAt): static
    {
        $this->analyzedAt = $analyzedAt;
        return $this;
    }

    public function getAbandonmentRate(): ?float
    {
        return $this->abandonmentRate;
    }

    public function setAbandonmentRate(?float $abandonmentRate): static
    {
        $this->abandonmentRate = $abandonmentRate;
        return $this;
    }

    public function getCompletionRate(): ?float
    {
        return $this->completionRate;
    }

    public function setCompletionRate(?float $completionRate): static
    {
        $this->completionRate = $completionRate;
        return $this;
    }

    public function getAverageStartDelayMinutes(): ?float
    {
        return $this->averageStartDelayMinutes;
    }

    public function setAverageStartDelayMinutes(?float $averageStartDelayMinutes): static
    {
        $this->averageStartDelayMinutes = $averageStartDelayMinutes;
        return $this;
    }

    public function getAverageCompletionDurationMinutes(): ?float
    {
        return $this->averageCompletionDurationMinutes;
    }

    public function setAverageCompletionDurationMinutes(?float $averageCompletionDurationMinutes): static
    {
        $this->averageCompletionDurationMinutes = $averageCompletionDurationMinutes;
        return $this;
    }

    public function getPauseFrequency(): ?float
    {
        return $this->pauseFrequency;
    }

    public function setPauseFrequency(?float $pauseFrequency): static
    {
        $this->pauseFrequency = $pauseFrequency;
        return $this;
    }

    public function getMostProductiveHour(): ?int
    {
        return $this->mostProductiveHour;
    }

    public function setMostProductiveHour(?int $mostProductiveHour): static
    {
        $this->mostProductiveHour = $mostProductiveHour;
        return $this;
    }

    public function getMostProductiveDayOfWeek(): ?int
    {
        return $this->mostProductiveDayOfWeek;
    }

    public function setMostProductiveDayOfWeek(?int $mostProductiveDayOfWeek): static
    {
        $this->mostProductiveDayOfWeek = $mostProductiveDayOfWeek;
        return $this;
    }

    public function getAbandonmentRateByType(): ?array
    {
        return $this->abandonmentRateByType;
    }

    public function setAbandonmentRateByType(?array $abandonmentRateByType): static
    {
        $this->abandonmentRateByType = $abandonmentRateByType;
        return $this;
    }

    public function getCompletionRateByType(): ?array
    {
        return $this->completionRateByType;
    }

    public function setCompletionRateByType(?array $completionRateByType): static
    {
        $this->completionRateByType = $completionRateByType;
        return $this;
    }

    public function getAverageStartDelayByType(): ?array
    {
        return $this->averageStartDelayByType;
    }

    public function setAverageStartDelayByType(?array $averageStartDelayByType): static
    {
        $this->averageStartDelayByType = $averageStartDelayByType;
        return $this;
    }

    public function getGlobalRiskTrend(): ?float
    {
        return $this->globalRiskTrend;
    }

    public function setGlobalRiskTrend(?float $globalRiskTrend): static
    {
        $this->globalRiskTrend = $globalRiskTrend;
        return $this;
    }

    public function getForgottenTaskProbability(): ?float
    {
        return $this->forgottenTaskProbability;
    }

    public function setForgottenTaskProbability(?float $forgottenTaskProbability): static
    {
        $this->forgottenTaskProbability = $forgottenTaskProbability;
        return $this;
    }

    public function getOverdueProbability(): ?float
    {
        return $this->overdueProbability;
    }

    public function setOverdueProbability(?float $overdueProbability): static
    {
        $this->overdueProbability = $overdueProbability;
        return $this;
    }

    public function getWeeklyProductivitySummary(): ?string
    {
        return $this->weeklyProductivitySummary;
    }

    public function setWeeklyProductivitySummary(?string $weeklyProductivitySummary): static
    {
        $this->weeklyProductivitySummary = $weeklyProductivitySummary;
        return $this;
    }

    public function getBehavioralAdvice(): ?string
    {
        return $this->behavioralAdvice;
    }

    public function setBehavioralAdvice(?string $behavioralAdvice): static
    {
        $this->behavioralAdvice = $behavioralAdvice;
        return $this;
    }
}
