<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\EmailVerifier;
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
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class RegistrationController extends AbstractController
{
    public function __construct(private EmailVerifier $emailVerifier)
    {
    }

    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var string $plainPassword */
            $plainPassword = $form->get('plainPassword')->getData();

            // encode the plain password
            $user->setPassword($userPasswordHasher->hashPassword($user, $plainPassword));

            // assign a default role if not set
            if (!$user->getRole()) {
                $user->setRole('ROLE_USER');
            }

            // Handle profile picture upload
            /** @var UploadedFile $profilePicFile */
            $profilePicFile = $form->get('profilePic')->getData();
            if ($profilePicFile) {
                $originalFilename = pathinfo($profilePicFile->getClientOriginalName(), PATHINFO_FILENAME);
                // Sanitize the filename
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $profilePicFile->guessExtension();

                try {
                    $profilePicFile->move(
                        $this->getParameter('profile_pics_directory'),
                        $newFilename
                    );
                    $user->setProfilePic($newFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de la photo: ' . $e->getMessage());
                }
            }

            $entityManager->persist($user);
            $entityManager->flush();

            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('yassinebensaad567@gmail.com', 'ESPRITFlow'))
                    ->to($user->getEmail())
                    ->subject('Confirmez votre adresse email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );

            $this->addFlash('success', 'Inscription réussie! Veuillez confirmer votre email.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, TranslatorInterface $translator): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        try {
            /** @var User $user */
            $user = $this->getUser();
            $this->emailVerifier->handleEmailConfirmation($request, $user);
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('app_register');
        }

        $this->addFlash('success', 'Your email address has been verified.');

        return $this->redirectToRoute('app_register');
    }
}
