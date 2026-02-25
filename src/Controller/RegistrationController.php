<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\EmailVerifier;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class RegistrationController extends AbstractController
{
    public function __construct(private EmailVerifier $emailVerifier)
    {
    }

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var string $plainPassword */
            $plainPassword = $form->get('plainPassword')->getData();

            // encode the plain password
            $user->setPassword($userPasswordHasher->hashPassword($user, $plainPassword));
            
            // Generate verification token
            $verificationToken = bin2hex(random_bytes(32));
            $user->setVerificationToken($verificationToken);

            $entityManager->persist($user);
            $entityManager->flush();

            // Send verification email with token
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('yassinebensaad567@gmail.com', 'ESPRITFlow'))
                    ->to((string) $user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form,
        ]);
    }

    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, TranslatorInterface $translator, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        try {
            // Get token from URL
            $token = $request->query->get('token');
            
            if (!$token) {
                $this->addFlash('verify_email_error', 'Missing verification token. URL: ' . $request->getUri());
                return $this->redirectToRoute('app_login');
            }

            // Find user by verification token (stored during registration)
            $user = $userRepository->findOneBy(['verificationToken' => $token]);
            
            if (!$user) {
                // Debug: Check all request parameters
                $allParams = $request->query->all();
                $this->addFlash('verify_email_error', 'Invalid verification token: ' . substr($token, 0, 20) . '... Params: ' . json_encode(array_keys($allParams)));
                return $this->redirectToRoute('app_login');
            }

            // Mark user as verified
            $user->setIsVerified(true);
            $user->setVerificationToken(null); // Clear the token
            
            $entityManager->persist($user);
            $entityManager->flush();
            
            // Verify it was updated
            $entityManager->refresh($user);
            $verifiedStatus = $user->isVerified() ? 'YES' : 'NO';
            
            $this->addFlash('success', 'Your email address has been verified successfully! Status: ' . $verifiedStatus . '. You can now log in.');
            return $this->redirectToRoute('app_login');
            
        } catch (\Exception $e) {
            $this->addFlash('verify_email_error', 'An error occurred: ' . $e->getMessage() . ' | ' . $e->getFile() . ':' . $e->getLine());
            return $this->redirectToRoute('app_login');
        }
    }
}
