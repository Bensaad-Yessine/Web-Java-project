<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Si l'utilisateur est déjà connecté
        if ($this->getUser()) {
            $roles = $this->getUser()->getRoles();

            // Admin
            if (in_array('ROLE_ADMIN', $roles)) {
                return $this->redirectToRoute('app_user_index');
            }

            // User normal - redirect to profile/dashboard
            if (in_array('ROLE_USER', $roles)) {
                return $this->redirectToRoute('app_user_profile');
            }
        }

        // Erreur de connexion
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method is intercepted by Symfony.');
    }
}
