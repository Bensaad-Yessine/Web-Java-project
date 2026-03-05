<?php

namespace App\Service;

use App\Entity\Seance;
use App\Entity\User;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class AttendanceApiService
{
    private UrlGeneratorInterface $router;
    private string $appSecret;

    public function __construct(
        UrlGeneratorInterface $router,
        #[Autowire('%kernel.secret%')] string $appSecret
    ) {
        $this->router = $router;
        $this->appSecret = $appSecret;
    }

    public function generateQrToken(Seance $seance, User $user): array
    {
        $payload = sprintf(
            '%d|%d|%s',
            $seance->getId(),
            $user->getId(),
            (new \DateTimeImmutable())->format('YmdHis')
        );
        $token = base64_encode($payload . '.' . $this->sign($payload));

        $qrUrl = $this->router->generate('app_attendance_scan_page', [
            'token' => $token,
        ], UrlGeneratorInterface::ABSOLUTE_URL);

        return [
            'qrToken' => $token,
            'qrUrl' => $qrUrl,
        ];
    }

    public function validateScan(
        string $qrToken,
        User $student,
        ?string $deviceId = null,
        ?float $lat = null,
        ?float $lng = null
    ): array {
        $decoded = base64_decode($qrToken, true);
        if ($decoded === false) {
            return $this->reject('INVALID_TOKEN', 'Token invalide.');
        }

        $lastDot = strrpos($decoded, '.');
        if ($lastDot === false) {
            return $this->reject('INVALID_TOKEN', 'Token invalide.');
        }

        $payload = substr($decoded, 0, $lastDot);
        $sig = substr($decoded, $lastDot + 1);
        if (!hash_equals($this->sign($payload), $sig)) {
            return $this->reject('INVALID_SIGNATURE', 'Signature invalide.');
        }

        $parts = explode('|', $payload);
        $seanceId = isset($parts[0]) ? (int) $parts[0] : 0;
        if ($seanceId <= 0) {
            return $this->reject('INVALID_SEANCE', 'Seance introuvable.');
        }

        return [
            'status' => 'PRESENT',
            'seanceId' => $seanceId,
            'scannedAt' => (new \DateTimeImmutable())->format(DATE_ATOM),
            'minutesLate' => 0,
            'message' => 'Presence enregistree.',
        ];
    }

    public function verifyWebhookSignature(string $rawBody, string $signature): bool
    {
        if ($signature === '') {
            return false;
        }

        $expected = hash_hmac('sha256', $rawBody, $this->appSecret);
        return hash_equals($expected, $signature);
    }

    private function sign(string $payload): string
    {
        return hash_hmac('sha256', $payload, $this->appSecret);
    }

    private function reject(string $reason, string $message): array
    {
        return [
            'status' => 'REJECTED',
            'reason' => $reason,
            'message' => $message,
        ];
    }
}
