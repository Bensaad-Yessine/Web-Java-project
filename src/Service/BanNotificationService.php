<?php

namespace App\Service;

use App\Entity\User;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class BanNotificationService
{
    public function __construct(private MailerInterface $mailer) {}

    public function sendBanNotification(User $bannedUser, User $adminUser, string $banReason): bool
    {
        try {
            $email = (new Email())
                ->from(getenv('MAILER_FROM_ADDRESS') ?: 'noreply@esprit.tn')
                ->to($bannedUser->getEmail())
                ->subject('Notification: Votre compte a été banni')
                ->html($this->getBanEmailContent($bannedUser, $adminUser, $banReason));

            $this->mailer->send($email);
            return true;
        } catch (\Exception $e) {
            error_log('Error sending ban notification: ' . $e->getMessage());
            return false;
        }
    }

    public function sendUnbanNotification(User $unbannedUser, User $adminUser): bool
    {
        try {
            $email = (new Email())
                ->from(getenv('MAILER_FROM_ADDRESS') ?: 'noreply@esprit.tn')
                ->to($unbannedUser->getEmail())
                ->subject('Bonne nouvelle: Votre compte a été débanni')
                ->html($this->getUnbanEmailContent($unbannedUser, $adminUser));

            $this->mailer->send($email);
            return true;
        } catch (\Exception $e) {
            error_log('Error sending unban notification: ' . $e->getMessage());
            return false;
        }
    }

    private function getBanEmailContent(User $bannedUser, User $adminUser, string $banReason): string
    {
        $bannedDate = new \DateTime('now');
        $bannedDateFormatted = $bannedDate->format('d/m/Y à H:i');
        $adminName = $adminUser->getPrenom() . ' ' . $adminUser->getNom();

        return <<<HTML
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification de bannissement</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
        }
        .header p {
            margin: 5px 0 0;
            font-size: 14px;
            opacity: 0.9;
        }
        .content {
            padding: 40px;
        }
        .alert {
            background-color: #fee2e2;
            border-left: 4px solid #ef4444;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        .alert-title {
            color: #991b1b;
            font-weight: 600;
            margin: 0 0 10px;
        }
        .alert-text {
            color: #7f1d1d;
            margin: 0;
            line-height: 1.6;
        }
        .info-box {
            background-color: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            padding: 20px;
            margin: 20px 0;
        }
        .info-box h3 {
            margin: 0 0 10px;
            color: #111827;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .info-item {
            margin: 10px 0;
            color: #4b5563;
            font-size: 14px;
        }
        .info-label {
            font-weight: 600;
            color: #1f2937;
        }
        .reason-box {
            background-color: #fef3c7;
            border-left: 4px solid #f59e0b;
            padding: 15px;
            margin: 20px 0;
            border-radius: 4px;
        }
        .reason-title {
            color: #92400e;
            font-weight: 600;
            margin: 0 0 10px;
        }
        .reason-text {
            color: #78350f;
            margin: 0;
            line-height: 1.6;
        }
        .footer {
            background-color: #f3f4f6;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #e5e7eb;
        }
        .footer p {
            margin: 5px 0;
            color: #4b5563;
            font-size: 12px;
        }
        .contact-info {
            background-color: #eff6ff;
            border-left: 4px solid #3b82f6;
            padding: 15px;
            margin: 20px 0;
            border-radius: 4px;
        }
        .contact-title {
            color: #1e40af;
            font-weight: 600;
            margin: 0 0 10px;
        }
        .contact-text {
            color: #1e3a8a;
            margin: 0;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>⛔ Notification Importante</h1>
            <p>Votre compte a été suspendu</p>
        </div>
        
        <div class="content">
            <div class="alert">
                <p class="alert-title">Avis de Bannissement</p>
                <p class="alert-text">
                    Nous vous informons que votre compte utilisateur a été banni et est actuellement inaccessible.
                </p>
            </div>

            <div class="info-box">
                <h3>Détails du Bannissement</h3>
                <div class="info-item">
                    <span class="info-label">Utilisateur:</span> {$bannedUser->getPrenom()} {$bannedUser->getNom()}
                </div>
                <div class="info-item">
                    <span class="info-label">Email:</span> {$bannedUser->getEmail()}
                </div>
                <div class="info-item">
                    <span class="info-label">Date de Bannissement:</span> {$bannedDateFormatted}
                </div>
                <div class="info-item">
                    <span class="info-label">Administrateur:</span> {$adminName}
                </div>
            </div>

            <div class="reason-box">
                <p class="reason-title">Raison du Bannissement</p>
                <p class="reason-text">{$banReason}</p>
            </div>

            <div class="contact-info">
                <p class="contact-title">Questions ou Appel?</p>
                <p class="contact-text">
                    Si vous estimez que cette action est une erreur ou si vous avez des questions, 
                    veuillez contacter l'administration ESPRIT à <strong>admin@esprit.tn</strong>
                </p>
            </div>
        </div>

        <div class="footer">
            <p><strong>ESPRIT - École d'Ingénieurs</strong></p>
            <p>Ce message a été envoyé automatiquement. Veuillez ne pas répondre à cet email.</p>
            <p>&copy; {{ 'now'|date('Y') }} ESPRIT. Tous droits réservés.</p>
        </div>
    </div>
</body>
</html>
HTML;
    }

    private function getUnbanEmailContent(User $unbannedUser, User $adminUser): string
    {
        $unbannedDate = new \DateTime('now');
        $unbannedDateFormatted = $unbannedDate->format('d/m/Y à H:i');
        $adminName = $adminUser->getPrenom() . ' ' . $adminUser->getNom();

        return <<<HTML
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Débannissement - Compte Réactivé</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
        }
        .header p {
            margin: 5px 0 0;
            font-size: 14px;
            opacity: 0.9;
        }
        .content {
            padding: 40px;
        }
        .success-box {
            background-color: #f0fdf4;
            border-left: 4px solid #22c55e;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        .success-title {
            color: #166534;
            font-weight: 600;
            margin: 0 0 10px;
        }
        .success-text {
            color: #15803d;
            margin: 0;
            line-height: 1.6;
        }
        .info-box {
            background-color: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            padding: 20px;
            margin: 20px 0;
        }
        .info-box h3 {
            margin: 0 0 10px;
            color: #111827;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .info-item {
            margin: 10px 0;
            color: #4b5563;
            font-size: 14px;
        }
        .info-label {
            font-weight: 600;
            color: #1f2937;
        }
        .action-box {
            background-color: #eff6ff;
            border-left: 4px solid #3b82f6;
            padding: 15px;
            margin: 20px 0;
            border-radius: 4px;
        }
        .action-title {
            color: #1e40af;
            font-weight: 600;
            margin: 0 0 10px;
        }
        .action-text {
            color: #1e3a8a;
            margin: 0;
            line-height: 1.6;
        }
        .footer {
            background-color: #f3f4f6;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #e5e7eb;
        }
        .footer p {
            margin: 5px 0;
            color: #4b5563;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>✓ Bonne Nouvelle!</h1>
            <p>Votre compte a été réactivé</p>
        </div>
        
        <div class="content">
            <div class="success-box">
                <p class="success-title">Débannissement Approuvé</p>
                <p class="success-text">
                    Votre compte a été débanni et est à nouveau accessible. Vous pouvez vous connecter immédiatement.
                </p>
            </div>

            <div class="info-box">
                <h3>Détails de la Réactivation</h3>
                <div class="info-item">
                    <span class="info-label">Utilisateur:</span> {$unbannedUser->getPrenom()} {$unbannedUser->getNom()}
                </div>
                <div class="info-item">
                    <span class="info-label">Email:</span> {$unbannedUser->getEmail()}
                </div>
                <div class="info-item">
                    <span class="info-label">Date de Débannissement:</span> {$unbannedDateFormatted}
                </div>
                <div class="info-item">
                    <span class="info-label">Administrateur:</span> {$adminName}
                </div>
            </div>

            <div class="action-box">
                <p class="action-title">Prêt à Continuer?</p>
                <p class="action-text">
                    Vous pouvez maintenant vous connecter à votre compte avec vos identifiants habituels. 
                    Tous vos données ont été conservées en sécurité.
                </p>
            </div>
        </div>

        <div class="footer">
            <p><strong>ESPRIT - École d'Ingénieurs</strong></p>
            <p>Ce message a été envoyé automatiquement. Veuillez ne pas répondre à cet email.</p>
            <p>&copy; {{ 'now'|date('Y') }} ESPRIT. Tous droits réservés.</p>
        </div>
    </div>
</body>
</html>
HTML;
    }
}
