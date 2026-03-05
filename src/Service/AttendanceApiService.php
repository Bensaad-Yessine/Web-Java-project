<?php

namespace App\Service;

use App\Entity\Seance;
use App\Entity\User;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;

/**
 * Service d'intégration avec l'API externe de présence.
 *
 * Quand l'API externe n'est pas disponible (mode démo / offline),
 * le service génère lui-même un token HMAC signé localement.
 */
class AttendanceApiService
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly LoggerInterface     $logger,
        private readonly string              $apiBaseUrl,
        private readonly string              $apiKey,
        private readonly string              $hmacSecret,
        private readonly bool                $offlineMode = false,
    ) {}

    // ─────────────────────────────────────────────────────────────────────────
    //  1. Générer (ou renouveler) le QR token d'une séance
    // ─────────────────────────────────────────────────────────────────────────
    /**
     * Appelle POST /api/v1/sessions/{id}/qr/generate
     * Retourne ['qrToken'=>'...', 'expiresAt'=>'...', 'qrUrl'=>'...']
     * ou lève une \RuntimeException en cas d'erreur.
     */
    public function generateQrToken(Seance $seance, User $issuedBy): array
    {
        if ($this->offlineMode) {
            return $this->generateLocalQrToken($seance);
        }

        try {
            $response = $this->httpClient->request('POST', sprintf(
                '%s/api/v1/sessions/%d/qr/generate',
                rtrim($this->apiBaseUrl, '/'),
                $seance->getId()
            ), [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type'  => 'application/json',
                    'Accept'        => 'application/json',
                ],
                'json' => [
                    'startsAt' => $seance->getHeureDebut()?->format(\DateTimeInterface::ATOM),
                    'endsAt'   => $seance->getHeureFin()?->format(\DateTimeInterface::ATOM),
                    'roomId'   => $seance->getSalle()?->getId(),
                    'groupId'  => $seance->getClasse()?->getId(),
                    'issuedBy' => $issuedBy->getId(),
                ],
                'timeout' => 10,
            ]);

            $data = $response->toArray();
            return [
                'qrToken'   => $data['qrToken']   ?? null,
                'expiresAt' => $data['expiresAt']  ?? null,
                'qrUrl'     => $data['qrUrl']      ?? null,
            ];
        } catch (\Throwable $e) {
            $this->logger->error('[AttendanceAPI] generateQrToken failed: ' . $e->getMessage());
            // Fallback local si l'API est indisponible
            return $this->generateLocalQrToken($seance);
        }
    }

    // ─────────────────────────────────────────────────────────────────────────
    //  2. Valider un scan étudiant (appelé depuis le contrôleur Symfony)
    // ─────────────────────────────────────────────────────────────────────────
    /**
     * Valide le token QR scanné par un étudiant.
     * Retourne ['status'=>'PRESENT|LATE|REJECTED', 'message'=>'...', ...]
     */
    public function validateScan(string $qrToken, User $student, ?string $deviceId, ?float $lat, ?float $lng): array
    {
        if ($this->offlineMode) {
            return $this->validateLocalScan($qrToken, $student);
        }

        try {
            $body = ['qrToken' => $qrToken];
            if ($deviceId) { $body['deviceId'] = $deviceId; }
            if ($lat !== null && $lng !== null) { $body['gps'] = ['lat' => $lat, 'lng' => $lng]; }

            $response = $this->httpClient->request('POST', sprintf(
                '%s/api/v1/attendance/scan',
                rtrim($this->apiBaseUrl, '/')
            ), [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->getStudentAuthToken($student),
                    'Content-Type'  => 'application/json',
                    'Accept'        => 'application/json',
                ],
                'json'    => $body,
                'timeout' => 10,
            ]);

            $statusCode = $response->getStatusCode();
            $data = $response->toArray(false);

            if ($statusCode >= 200 && $statusCode < 300) {
                return $data;
            }

            return [
                'status'  => 'REJECTED',
                'reason'  => $data['reason'] ?? 'API_ERROR',
                'message' => $data['message'] ?? 'Erreur API',
            ];
        } catch (\Throwable $e) {
            $this->logger->error('[AttendanceAPI] validateScan failed: ' . $e->getMessage());
            return $this->validateLocalScan($qrToken, $student);
        }
    }

    // ─────────────────────────────────────────────────────────────────────────
    //  3. Récupérer la liste des présences d'une séance depuis l'API
    // ─────────────────────────────────────────────────────────────────────────
    public function getAttendanceForSeance(int $seanceId): array
    {
        if ($this->offlineMode) {
            return [];
        }

        try {
            $response = $this->httpClient->request('GET', sprintf(
                '%s/api/v1/sessions/%d/attendance',
                rtrim($this->apiBaseUrl, '/'),
                $seanceId
            ), [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Accept'        => 'application/json',
                ],
                'timeout' => 10,
            ]);

            return $response->toArray(false)['data'] ?? [];
        } catch (\Throwable $e) {
            $this->logger->error('[AttendanceAPI] getAttendanceForSeance failed: ' . $e->getMessage());
            return [];
        }
    }

    // ─────────────────────────────────────────────────────────────────────────
    //  Helpers locaux (mode offline / fallback)
    // ─────────────────────────────────────────────────────────────────────────

    /**
     * Génère un token HMAC-SHA256 permanent basé uniquement sur l'ID de séance.
     * Le token ne change jamais : il est généré une seule fois par séance.
     * Format payload: seanceId|classeId|salleId|startsAt|endsAt
     */
    public function generateLocalQrToken(Seance $seance): array
    {
        $payload = implode('|', [
            $seance->getId(),
            $seance->getClasse()?->getId() ?? 0,
            $seance->getSalle()?->getId() ?? 0,
            $seance->getHeureDebut()?->format(\DateTimeInterface::ATOM) ?? '',
            $seance->getHeureFin()?->format(\DateTimeInterface::ATOM) ?? '',
        ]);

        $signature = hash_hmac('sha256', $payload, $this->hmacSecret);
        $token     = base64_encode($payload . '.' . $signature);

        // URL de scan Symfony (page mobile étudiante)
        $qrUrl = '/attendance/scan?token=' . urlencode($token);

        return [
            'qrToken'   => $token,
            'expiresAt' => null,
            'qrUrl'     => $qrUrl,
        ];
    }

    /**
     * Vérifie un token généré localement (HMAC permanent).
     * Pas de vérification d'expiration ni de fenêtre horaire.
     */
    public function validateLocalScan(string $qrToken, User $student): array
    {
        try {
            $decoded = base64_decode($qrToken, true);
            if ($decoded === false) {
                return ['status' => 'REJECTED', 'reason' => 'TOKEN_INVALID'];
            }

            $lastDot = strrpos($decoded, '.');
            if ($lastDot === false) {
                return ['status' => 'REJECTED', 'reason' => 'TOKEN_INVALID'];
            }

            $payload   = substr($decoded, 0, $lastDot);
            $signature = substr($decoded, $lastDot + 1);

            // Vérification signature HMAC uniquement
            $expected = hash_hmac('sha256', $payload, $this->hmacSecret);
            if (!hash_equals($expected, $signature)) {
                return ['status' => 'REJECTED', 'reason' => 'TOKEN_FALSIFIED'];
            }

            // Décoder les champs (format: seanceId|classeId|salleId|startsAt|endsAt)
            // Rétrocompatibilité : anciens tokens à 6 champs (avec expiresAt en 6ème position)
            $parts = explode('|', $payload);
            if (count($parts) < 5) {
                return ['status' => 'REJECTED', 'reason' => 'TOKEN_INVALID'];
            }

            [$seanceId, $classeId, $salleId, $startsAt, $endsAt] = $parts;

            $now         = new \DateTime();
            $starts      = new \DateTime($startsAt);
            $status      = 'PRESENT';
            $minutesLate = null;

            // Calculer le retard si après l'heure de début
            if ($now > $starts) {
                $minutesLate = (int) round(($now->getTimestamp() - $starts->getTimestamp()) / 60);
                if ($minutesLate > 10) {
                    $status = 'LATE';
                }
            }

            $result = [
                'status'    => $status,
                'message'   => $status === 'PRESENT' ? 'Présence enregistrée' : 'Présence enregistrée en retard',
                'seanceId'  => (int) $seanceId,
                'studentId' => $student->getId(),
                'scannedAt' => $now->format(\DateTimeInterface::ATOM),
            ];
            if ($minutesLate !== null) {
                $result['minutesLate'] = $minutesLate;
            }
            return $result;

        } catch (\Throwable $e) {
            $this->logger->error('[AttendanceAPI] validateLocalScan: ' . $e->getMessage());
            return ['status' => 'REJECTED', 'reason' => 'SERVER_ERROR'];
        }
    }

    /**
     * Vérifie la signature d'un webhook entrant.
     */
    public function verifyWebhookSignature(string $payload, string $receivedSignature): bool
    {
        $expected = hash_hmac('sha256', $payload, $this->hmacSecret);
        return hash_equals($expected, $receivedSignature);
    }

    private function getStudentAuthToken(User $student): string
    {
        // En production : récupérer le JWT de l'étudiant stocké en session.
        // Ici on génère un token minimal signé localement.
        $payload = $student->getId() . '|' . $student->getEmail() . '|' . time();
        $sig     = hash_hmac('sha256', $payload, $this->hmacSecret);
        return base64_encode($payload . '.' . $sig);
    }
}
