<?php

namespace App\Controller;

use App\Entity\SubscriptionPack;
use App\Repository\SubscriptionPackRepository;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Stripe\Exception\ApiErrorException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PaymentController extends AbstractController
{
    private string $stripeSecretKey;
    private string $stripePublicKey;

    public function __construct()
    {
        $this->stripeSecretKey = $_ENV['STRIPE_SECRET_KEY'] ?? '';
        $this->stripePublicKey = $_ENV['STRIPE_PUBLIC_KEY'] ?? '';
    }

    #[Route('/payment/packs', name: 'app_payment_packs')]
    public function packs(SubscriptionPackRepository $packRepository): Response
    {
        $packs = $packRepository->findAllActive();
        
        return $this->render('payment/packs.html.twig', [
            'packs' => $packs,
        ]);
    }

    #[Route('/payment/checkout/{id}', name: 'app_payment_checkout')]
    public function checkout(SubscriptionPack $pack): Response
    {
        try {
            Stripe::setApiKey($this->stripeSecretKey);

            // Create Stripe Checkout Session
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => strtolower($pack->getCurrency()),
                        'unit_amount' => $pack->getPriceInCents(),
                        'product_data' => [
                            'name' => $pack->getName(),
                            'description' => $pack->getDescription(),
                        ],
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => $this->generateUrl('app_payment_success', [
                    'session_id' => '{CHECKOUT_SESSION_ID}',
                    'pack_id' => $pack->getId()
                ], UrlGeneratorInterface::ABSOLUTE_URL),
                'cancel_url' => $this->generateUrl('app_payment_packs', [], UrlGeneratorInterface::ABSOLUTE_URL),
                'metadata' => [
                    'pack_id' => $pack->getId(),
                ],
            ]);

            // Redirect to Stripe Checkout
            return $this->redirect($session->url);

        } catch (ApiErrorException $e) {
            $this->addFlash('error', 'Payment error: ' . $e->getMessage());
            return $this->redirectToRoute('app_payment_packs');
        }
    }

    #[Route('/payment/success', name: 'app_payment_success')]
    public function success(Request $request, SubscriptionPackRepository $packRepository): Response
    {
        $sessionId = $request->query->get('session_id');
        $packId = $request->query->get('pack_id');

        $pack = null;
        if ($packId) {
            $pack = $packRepository->find($packId);
        }

        // Verify the session with Stripe
        try {
            Stripe::setApiKey($this->stripeSecretKey);
            $session = Session::retrieve($sessionId);

            if ($session->payment_status === 'paid') {
                // Payment successful - here you can:
                // - Update user subscription in database
                // - Send confirmation email
                // - Grant access to premium features
                
                return $this->render('payment/success.html.twig', [
                    'session' => $session,
                    'pack' => $pack,
                ]);
            }
        } catch (\Exception $e) {
            $this->addFlash('error', 'Could not verify payment');
        }

        return $this->redirectToRoute('app_payment_packs');
    }

    #[Route('/payment/webhook', name: 'app_payment_webhook', methods: ['POST'])]
    public function webhook(Request $request): Response
    {
        // This endpoint handles Stripe webhook events
        $payload = $request->getContent();
        $sigHeader = $request->headers->get('Stripe-Signature');
        $webhookSecret = $_ENV['STRIPE_WEBHOOK_SECRET'] ?? '';

        try {
            if ($webhookSecret) {
                $event = \Stripe\Webhook::constructEvent(
                    $payload,
                    $sigHeader,
                    $webhookSecret
                );
            } else {
                $event = json_decode($payload, true);
            }

            // Handle the event
            switch ($event['type']) {
                case 'checkout.session.completed':
                    $session = $event['data']['object'];
                    // Handle successful payment
                    // Update database, send confirmation email, etc.
                    break;

                case 'checkout.session.expired':
                    $session = $event['data']['object'];
                    // Handle expired session
                    break;

                default:
                    // Unexpected event type
                    break;
            }

            return new Response('', 200);
        } catch (\Exception $e) {
            return new Response('Webhook error: ' . $e->getMessage(), 400);
        }
    }
}
