<?php

namespace App\Controller;

use App\Entity\Attendance;
use App\Entity\Seance;
use App\Entity\User;
use App\Repository\AttendanceRepository;
use App\Repository\SeanceRepository;
use App\Repository\UserRepository;
use App\Service\AttendanceApiService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/attendance')]
final class AttendanceController extends AbstractController
{
    public function __construct(
        private readonly AttendanceApiService    $api,
        private readonly EntityManagerInterface  $em,
        private readonly AttendanceRepository    $attendanceRepo,
        private readonly SeanceRepository        $seanceRepo,
        private readonly UserRepository          $userRepo,
    ) {}

    // ─────────────────────────────────────────────────────────────────────────
    //  PROF / ADMIN : Générer le QR d'une séance (une seule fois, permanent)
    // ─────────────────────────────────────────────────────────────────────────
    #[Route('/seance/{id}/generate-qr', name: 'app_attendance_generate_qr', methods: ['POST'])]
    public function generateQr(Seance $seance, Request $request): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var User $user */
        $user = $this->getUser();

        // Ne pas régénérer si déjà existant
        if ($seance->getQrToken() !== null) {
            return $this->json([
                'success' => true,
                'qrToken' => $seance->getQrToken(),
                'qrUrl'   => $seance->getQrUrl(),
            ]);
        }

        try {
            $result = $this->api->generateQrToken($seance, $user);

            if (!isset($result['qrToken'])) {
                return $this->json(['success' => false, 'message' => 'Échec génération QR'], 500);
            }

            $seance->setQrToken($result['qrToken']);
            $seance->setQrExpiresAt(null);
            $seance->setQrUrl($result['qrUrl'] ?? null);
            $this->em->flush();

            return $this->json([
                'success' => true,
                'qrToken' => $result['qrToken'],
                'qrUrl'   => $result['qrUrl'],
            ]);
        } catch (\Throwable $e) {
            return $this->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    // ─────────────────────────────────────────────────────────────────────────
    //  PROF / ADMIN : Page affichage QR (impression / projection)
    // ─────────────────────────────────────────────────────────────────────────
    #[Route('/seance/{id}/qr-display', name: 'app_attendance_qr_display', methods: ['GET'])]
    public function qrDisplay(Seance $seance): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // Générer le token une seule fois (permanent)
        /** @var User $user */
        $user = $this->getUser();
        if ($seance->getQrToken() === null) {
            $result = $this->api->generateQrToken($seance, $user);
            if (isset($result['qrToken'])) {
                $seance->setQrToken($result['qrToken']);
                $seance->setQrExpiresAt(null);
                $seance->setQrUrl($result['qrUrl'] ?? null);
                $this->em->flush();
            }
        }

        return $this->render('attendance/qr_display.html.twig', [
            'seance' => $seance,
        ]);
    }

    // ─────────────────────────────────────────────────────────────────────────
    //  AJAX : Liste des présences en temps réel (polling dashboard)
    // ─────────────────────────────────────────────────────────────────────────
    #[Route('/seance/{id}/live', name: 'app_attendance_live', methods: ['GET'])]
    public function liveAttendances(Seance $seance): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $attendances    = $this->attendanceRepo->findBySeance($seance);
        $stats          = $this->attendanceRepo->getStatsBySeance($seance);
        $allStudents    = $this->userRepo->findBy(['classe' => $seance->getClasse()]);
        $scannedIds     = array_map(fn(Attendance $a) => $a->getStudent()?->getId(), $attendances);
        $absentStudents = array_filter($allStudents, fn(User $u) => !in_array($u->getId(), $scannedIds, true));

        $rows = [];
        foreach ($attendances as $a) {
            $rows[] = [
                'id'         => $a->getId(),
                'name'       => $a->getStudent()?->getFullName() ?? 'N/A',
                'email'      => $a->getStudent()?->getEmail() ?? '',
                'avatar'     => $a->getStudent()?->getProfilePicUrl() ?? '/assets/images/faces/face15.jpg',
                'status'     => $a->getStatus(),
                'scannedAt'  => $a->getScannedAt()?->format('H:i:s') ?? '–',
                'minutesLate'=> $a->getMinutesLate(),
            ];
        }

        $absents = [];
        foreach (array_values($absentStudents) as $u) {
            $absents[] = [
                'name'   => $u->getFullName(),
                'email'  => $u->getEmail(),
                'avatar' => $u->getProfilePicUrl() ?? '/assets/images/faces/face15.jpg',
            ];
        }

        return $this->json([
            'total'       => count($allStudents),
            'present'     => $stats['PRESENT'] ?? 0,
            'late'        => $stats['LATE'] ?? 0,
            'absent'      => count($absentStudents),
            'attendances' => $rows,
            'absents'     => $absents,
        ]);
    }

    // ─────────────────────────────────────────────────────────────────────────
    //  ÉTUDIANT : Page de scan (mobile)
    // ─────────────────────────────────────────────────────────────────────────
    #[Route('/scan', name: 'app_attendance_scan_page', methods: ['GET'])]
    public function scanPage(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $token = $request->query->get('token', '');

        return $this->render('attendance/scan.html.twig', [
            'prefillToken' => $token,
        ]);
    }

    // ─────────────────────────────────────────────────────────────────────────
    //  ÉTUDIANT : Traitement du scan (POST JSON)
    // ─────────────────────────────────────────────────────────────────────────
    #[Route('/scan/submit', name: 'app_attendance_scan_submit', methods: ['POST'])]
    public function scanSubmit(Request $request): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var User $student */
        $student = $this->getUser();

        $data     = json_decode($request->getContent(), true) ?? [];
        $qrToken  = trim($data['qrToken']  ?? $request->request->get('qrToken', ''));
        $deviceId = $data['deviceId'] ?? $request->request->get('deviceId');
        $lat      = isset($data['gps']['lat'])  ? (float) $data['gps']['lat']  : null;
        $lng      = isset($data['gps']['lng'])  ? (float) $data['gps']['lng']  : null;

        if (empty($qrToken)) {
            return $this->json(['success' => false, 'message' => 'Token QR manquant.'], 400);
        }

        // Appel validation API
        $apiResult = $this->api->validateScan($qrToken, $student, $deviceId, $lat, $lng);
        $status    = $apiResult['status'] ?? 'REJECTED';

        // Trouver la séance via le token stocké en DB
        $seance = $this->seanceRepo->findOneBy(['qrToken' => $qrToken]);

        if ($seance === null && isset($apiResult['seanceId'])) {
            $seance = $this->seanceRepo->find((int) $apiResult['seanceId']);
        }

        // Fallback : chercher par seanceId extrait du token local (mode offline)
        if ($seance === null && isset($apiResult['seanceId']) && (int)$apiResult['seanceId'] > 0) {
            $seance = $this->seanceRepo->find((int) $apiResult['seanceId']);
        }

        // Dernier recours : décoder le token pour extraire l'ID de séance
        if ($seance === null) {
            try {
                $decoded = base64_decode($qrToken, true);
                if ($decoded !== false) {
                    $lastDot = strrpos($decoded, '.');
                    if ($lastDot !== false) {
                        $payload = substr($decoded, 0, $lastDot);
                        $parts   = explode('|', $payload);
                        if (!empty($parts[0]) && is_numeric($parts[0])) {
                            $seance = $this->seanceRepo->find((int) $parts[0]);
                        }
                    }
                }
            } catch (\Throwable) {}
        }

        if ($seance === null) {
            return $this->json([
                'success' => false,
                'status'  => 'REJECTED',
                'reason'  => 'SEANCE_NOT_FOUND',
                'message' => 'Séance introuvable. Token reçu : ' . substr($qrToken, 0, 30) . '…',
            ], 404);
        }

        if ($status === 'REJECTED') {
            return $this->json([
                'success' => false,
                'status'  => 'REJECTED',
                'reason'  => $apiResult['reason']  ?? 'UNKNOWN',
                'message' => $apiResult['message'] ?? 'Présence refusée.',
            ]);
        }

        // Vérifier double scan local
        $existing = $this->attendanceRepo->findOneBySeanceAndStudent($seance, $student);
        if ($existing !== null && in_array($existing->getStatus(), ['PRESENT', 'LATE'], true)) {
            return $this->json([
                'success' => false,
                'status'  => 'REJECTED',
                'reason'  => 'ALREADY_SCANNED',
                'message' => 'Vous avez déjà marqué votre présence pour cette séance.',
            ]);
        }

        // Enregistrement local
        $attendance = $existing ?? new Attendance();
        $attendance->setSeance($seance);
        $attendance->setStudent($student);
        $attendance->setStatus($status);
        $attendance->setScannedAt(new \DateTime($apiResult['scannedAt'] ?? 'now'));
        $attendance->setDeviceId($deviceId);
        $attendance->setGpsLat($lat);
        $attendance->setGpsLng($lng);
        if (isset($apiResult['minutesLate'])) {
            $attendance->setMinutesLate((int) $apiResult['minutesLate']);
        }

        $this->em->persist($attendance);
        $this->em->flush();

        return $this->json([
            'success'     => true,
            'status'      => $status,
            'message'     => $apiResult['message'] ?? 'Présence enregistrée.',
            'minutesLate' => $apiResult['minutesLate'] ?? null,
            'seance'      => [
                'id'      => $seance->getId(),
                'matiere' => $seance->getMatiere()?->getNom(),
                'salle'   => $seance->getSalle()?->getName(),
                'debut'   => $seance->getHeureDebut()?->format('H:i'),
            ],
        ]);
    }

    // ─────────────────────────────────────────────────────────────────────────
    //  WEBHOOK : Réception depuis l'API externe
    // ─────────────────────────────────────────────────────────────────────────
    #[Route('/webhook', name: 'app_attendance_webhook', methods: ['POST'])]
    public function webhook(Request $request): JsonResponse
    {
        $rawBody  = $request->getContent();
        $sig      = $request->headers->get('X-Attendance-Signature', '');

        // Vérifier la signature HMAC du webhook
        if (!empty($sig) && !$this->api->verifyWebhookSignature($rawBody, $sig)) {
            return $this->json(['error' => 'Invalid signature'], 403);
        }

        $data      = json_decode($rawBody, true) ?? [];
        $seanceId  = (int) ($data['seanceId']  ?? 0);
        $studentId = (int) ($data['studentId'] ?? 0);
        $status    = $data['status']    ?? 'REJECTED';
        $scannedAt = $data['scannedAt'] ?? null;

        $seance  = $this->seanceRepo->find($seanceId);
        $student = $this->userRepo->find($studentId);

        if ($seance === null || $student === null) {
            return $this->json(['error' => 'Unknown seance or student'], 404);
        }

        $attendance = $this->attendanceRepo->findOneBySeanceAndStudent($seance, $student)
            ?? new Attendance();

        $attendance->setSeance($seance);
        $attendance->setStudent($student);
        $attendance->setStatus($status);
        if ($scannedAt) {
            $attendance->setScannedAt(new \DateTime($scannedAt));
        }
        if (isset($data['minutesLate'])) {
            $attendance->setMinutesLate((int) $data['minutesLate']);
        }

        $this->em->persist($attendance);
        $this->em->flush();

        return $this->json(['success' => true]);
    }

    // ─────────────────────────────────────────────────────────────────────────
    //  PROF / ADMIN : Dashboard présences d'une séance
    // ─────────────────────────────────────────────────────────────────────────
    #[Route('/seance/{id}/dashboard', name: 'app_attendance_dashboard', methods: ['GET'])]
    public function dashboard(Seance $seance): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $attendances = $this->attendanceRepo->findBySeance($seance);
        $stats       = $this->attendanceRepo->getStatsBySeance($seance);

        // Construire la liste des étudiants absents (dans la classe mais sans attendance PRESENT/LATE)
        $allStudents   = $this->userRepo->findBy(['classe' => $seance->getClasse()]);
        $scannedIds    = array_map(fn(Attendance $a) => $a->getStudent()?->getId(), $attendances);
        $absentStudents = array_filter($allStudents, fn(User $u) => !in_array($u->getId(), $scannedIds, true));

        return $this->render('attendance/dashboard.html.twig', [
            'seance'          => $seance,
            'attendances'     => $attendances,
            'stats'           => $stats,
            'absentStudents'  => array_values($absentStudents),
            'totalStudents'   => count($allStudents),
        ]);
    }

    // ─────────────────────────────────────────────────────────────────────────
    //  ÉTUDIANT : Mon historique de présences
    // ─────────────────────────────────────────────────────────────────────────
    #[Route('/my-history', name: 'app_attendance_my_history', methods: ['GET'])]
    public function myHistory(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var User $student */
        $student     = $this->getUser();
        $attendances = $this->attendanceRepo->findByStudent($student);

        return $this->render('attendance/my_history.html.twig', [
            'attendances' => $attendances,
        ]);
    }

    // ─────────────────────────────────────────────────────────────────────────
    //  Export CSV
    // ─────────────────────────────────────────────────────────────────────────
    #[Route('/seance/{id}/export-csv', name: 'app_attendance_export_csv', methods: ['GET'])]
    public function exportCsv(Seance $seance): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $attendances = $this->attendanceRepo->findBySeance($seance);

        $rows   = [];
        $rows[] = ['Étudiant', 'Email', 'Statut', 'Scanné à', 'Retard (min)'];
        foreach ($attendances as $a) {
            $rows[] = [
                $a->getStudent()?->getFullName() ?? 'N/A',
                $a->getStudent()?->getEmail() ?? 'N/A',
                $a->getStatus(),
                $a->getScannedAt()?->format('Y-m-d H:i:s') ?? '',
                $a->getMinutesLate() ?? '',
            ];
        }

        $csv = '';
        foreach ($rows as $row) {
            $csv .= implode(';', array_map(fn($v) => '"' . str_replace('"', '""', (string)$v) . '"', $row)) . "\r\n";
        }

        return new Response($csv, 200, [
            'Content-Type'        => 'text/csv; charset=utf-8',
            'Content-Disposition' => sprintf(
                'attachment; filename="presences_seance_%d_%s.csv"',
                $seance->getId(),
                date('Y-m-d')
            ),
        ]);
    }
}
