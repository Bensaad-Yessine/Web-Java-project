<?php

namespace App\Entity;

use App\Repository\AttendanceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AttendanceRepository::class)]
#[ORM\Table(name: 'attendance')]
#[ORM\UniqueConstraint(name: 'unique_attendance', columns: ['seance_id', 'student_id'])]
class Attendance
{
    public const STATUS_PRESENT  = 'PRESENT';
    public const STATUS_LATE     = 'LATE';
    public const STATUS_REJECTED = 'REJECTED';
    public const STATUS_ABSENT   = 'ABSENT';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Seance::class)]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?Seance $seance = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?User $student = null;

    #[ORM\Column(length: 20)]
    private string $status = self::STATUS_ABSENT;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $scannedAt = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $deviceId = null;

    #[ORM\Column(nullable: true)]
    private ?float $gpsLat = null;

    #[ORM\Column(nullable: true)]
    private ?float $gpsLng = null;

    #[ORM\Column(nullable: true)]
    private ?int $minutesLate = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $rejectionReason = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int { return $this->id; }

    public function getSeance(): ?Seance { return $this->seance; }
    public function setSeance(?Seance $seance): static { $this->seance = $seance; return $this; }

    public function getStudent(): ?User { return $this->student; }
    public function setStudent(?User $student): static { $this->student = $student; return $this; }

    public function getStatus(): string { return $this->status; }
    public function setStatus(string $status): static { $this->status = $status; return $this; }

    public function getScannedAt(): ?\DateTimeInterface { return $this->scannedAt; }
    public function setScannedAt(?\DateTimeInterface $scannedAt): static { $this->scannedAt = $scannedAt; return $this; }

    public function getDeviceId(): ?string { return $this->deviceId; }
    public function setDeviceId(?string $deviceId): static { $this->deviceId = $deviceId; return $this; }

    public function getGpsLat(): ?float { return $this->gpsLat; }
    public function setGpsLat(?float $gpsLat): static { $this->gpsLat = $gpsLat; return $this; }

    public function getGpsLng(): ?float { return $this->gpsLng; }
    public function setGpsLng(?float $gpsLng): static { $this->gpsLng = $gpsLng; return $this; }

    public function getMinutesLate(): ?int { return $this->minutesLate; }
    public function setMinutesLate(?int $minutesLate): static { $this->minutesLate = $minutesLate; return $this; }

    public function getRejectionReason(): ?string { return $this->rejectionReason; }
    public function setRejectionReason(?string $rejectionReason): static { $this->rejectionReason = $rejectionReason; return $this; }

    public function getCreatedAt(): ?\DateTimeImmutable { return $this->createdAt; }
    public function setCreatedAt(?\DateTimeImmutable $createdAt): static { $this->createdAt = $createdAt; return $this; }

    public function isPresent(): bool { return $this->status === self::STATUS_PRESENT; }
    public function isLate(): bool { return $this->status === self::STATUS_LATE; }
    public function isAbsent(): bool { return $this->status === self::STATUS_ABSENT; }
}
