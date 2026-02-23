<?php 
namespace App\Security;

use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user): void
    {
        // This runs before authentication
        if (!$user instanceof \App\Entity\User) {
            return;
        }

        if (!$user->isVerified()) {
            // Stop login with a message
            throw new CustomUserMessageAuthenticationException(
                'Your account is not verified yet. Please check your email.'
            );
        }
    }

    public function checkPostAuth(UserInterface $user): void
    {
        // Can add post-auth checks if needed
    }
}


?>