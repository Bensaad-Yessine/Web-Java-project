<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class BrevoEmailService
{
    public function __construct(
        private HttpClientInterface $client,
        private string $brevoApiKey,
        private string $mailFrom
    ) {}

    /**
     * Envoi avec plusieurs pièces jointes.
     * $attachments = [
     *   ['content' => base64, 'name' => 'file.pdf', 'type' => 'application/pdf'],
     *   ...
     * ]
     */
    public function sendWithAttachments(
        string $toEmail,
        string $subject,
        string $html,
        array $attachments = []
    ): void {
        $payload = [
            'sender' => [
                'email' => $this->mailFrom,
                'name'  => 'Objectif Santé',
            ],
            'to' => [
                ['email' => $toEmail],
            ],
            'subject' => $subject,
            'htmlContent' => $html,
        ];

        if (!empty($attachments)) {
            $payload['attachment'] = $attachments;
        }

        $this->client->request('POST', 'https://api.brevo.com/v3/smtp/email', [
            'headers' => [
                'api-key' => $this->brevoApiKey,
                'accept' => 'application/json',
                'content-type' => 'application/json',
            ],
            'json' => $payload,
        ])->getContent(false);
    }

    // Garde ta méthode actuelle (si tu l'utilises ailleurs)
    public function sendPdfWithQr(
        string $toEmail,
        string $subject,
        string $html,
        string $pdfBinary,
        string $pdfFilename = 'rapport.pdf'
    ): void {
        $this->sendWithAttachments($toEmail, $subject, $html, [
            [
                'content' => base64_encode($pdfBinary),
                'name' => $pdfFilename,
                'type' => 'application/pdf',
            ]
        ]);
    }
}