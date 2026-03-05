<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Psr\Log\LoggerInterface;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Redirect already logged in users
        if ($this->getUser()) {
            $roles = $this->getUser()->getRoles();

            if (in_array('ROLE_ADMIN', $roles)) {
                return $this->redirectToRoute('app_user_index'); // back-office
            }

            if (in_array('ROLE_USER', $roles) ) {
                return $this->redirectToRoute('app_dashboard'); // user dashboard
            }
        }

        // get login error if there is one
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
        throw new \LogicException('This method will be intercepted by the logout key on your firewall.');
    }

    /**
     * Face login via Flask API
     * Sends camera image to Python Flask API for face recognition
     */
    #[Route(path: '/face-login', name: 'app_face_login', methods: ['POST'])]
    public function faceLogin(
        Request $request,
        UserRepository $userRepository,
        Security $security,
        LoggerInterface $logger
    ): JsonResponse {
        $data = json_decode($request->getContent(), true);
        
        if (!$data || !isset($data['image'])) {
            return $this->json(['success' => false, 'message' => 'No image provided'], 400);
        }

        try {
            $imageData = $data['image'];
            
            // Get Flask API URL from environment
            $flaskApiUrl = $_ENV['FACE_RECOGNITION_API_URL'] ?? 'http://127.0.0.1:5000';
            
            // Send image to Flask API for recognition
            $ch = curl_init($flaskApiUrl . '/recognize');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['image' => $imageData]));
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/x-www-form-urlencoded',
            ]);
            
            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $curlError = curl_error($ch);
            curl_close($ch);
            
            if ($curlError) {
                $logger->error('Flask API connection error', ['error' => $curlError]);
                return $this->json([
                    'success' => false,
                    'message' => 'Face recognition service unavailable. Make sure Flask API is running.'
                ], 503);
            }
            
            $result = json_decode($response, true);
            
            if ($httpCode === 200 && isset($result['status'])) {
                if ($result['status'] === 'success' && isset($result['user_id'])) {
                    // User recognized successfully
                    $user = $userRepository->find($result['user_id']);
                    
                    if (!$user) {
                        return $this->json([
                            'success' => false, 
                            'status' => 'no_user',
                            'message' => 'User not found in database'
                        ], 404);
                    }
                    
                    // Double-check user status
                    if ($user->isBanned()) {
                        return $this->json([
                            'success' => false,
                            'status' => 'banned',
                            'message' => 'Your account has been banned'
                        ], 403);
                    }
                    
                    if (!$user->isVerified()) {
                        return $this->json([
                            'success' => false,
                            'status' => 'unverified',
                            'message' => 'Your account is not verified'
                        ], 403);
                    }
                    
                    // Log in the user using the form_login authenticator
                    $security->login($user, 'security.authenticator.form_login.main');
                    
                    $roles = $user->getRoles();
                    $redirect = $this->generateUrl('app_dashboard');
                    if (in_array('ROLE_ADMIN', $roles, true)) {
                        $redirect = $this->generateUrl('app_user_index');
                    }
                    
                    $logger->info('User logged in via face recognition', [
                        'user_id' => $user->getId(),
                        'distance' => $result['distance'] ?? null
                    ]);
                    
                    return $this->json([
                        'success' => true,
                        'status' => 'success',
                        'user_name' => $user->getFullName(),
                        'redirect_url' => $redirect
                    ]);
                    
                } elseif ($result['status'] === 'unknown') {
                    return $this->json([
                        'success' => false,
                        'status' => 'unknown',
                        'message' => 'Face not recognized. Please try again or use password login.'
                    ]);
                    
                } elseif ($result['status'] === 'banned') {
                    return $this->json([
                        'success' => false,
                        'status' => 'banned',
                        'message' => $result['message'] ?? 'Account banned'
                    ], 403);
                    
                } elseif ($result['status'] === 'unverified') {
                    return $this->json([
                        'success' => false,
                        'status' => 'unverified',
                        'message' => $result['message'] ?? 'Account not verified'
                    ], 403);
                    
                } else {
                    return $this->json([
                        'success' => false,
                        'status' => 'no_face',
                        'message' => $result['message'] ?? 'No faces detected'
                    ]);
                }
            } else {
                $logger->error('Flask API error', ['response' => $result, 'code' => $httpCode]);
                return $this->json([
                    'success' => false,
                    'message' => 'Face recognition failed: ' . ($result['error'] ?? 'Unknown error')
                ], 500);
            }
            
        } catch (\Throwable $e) {
            $logger->error('Face login failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            return $this->json([
                'success' => false,
                'message' => 'Login failed: ' . $e->getMessage()
            ], 500);
        }
    }
}
