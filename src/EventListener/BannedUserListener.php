<?php

namespace App\EventListener;

use App\Entity\User;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Http\Event\CheckPassportEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class BannedUserListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            CheckPassportEvent::class => ['onCheckPassport', 10],
        ];
    }

    public function onCheckPassport(CheckPassportEvent $event): void
    {
        $passport = $event->getPassport();
        
        if (null === $user = $passport->getUser()) {
            return;
        }

        if (!$user instanceof User) {
            return;
        }

        // Check if user is banned
        if ($user->isBanned()) {
            $banReason = $user->getBanReason() ?? 'Raison non spécifiée';
            $bannedAt = $user->getBannedAt()?->format('d/m/Y à H:i') ?? 'Date inconnue';
            
            throw new CustomUserMessageAuthenticationException(
                "Votre compte a été banni le $bannedAt.\n\nRaison: $banReason\n\nVeuillez contacter l'administration pour plus d'informations."
            );
        }
    }
}
