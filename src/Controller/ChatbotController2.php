<?php

namespace App\Controller;

use App\Entity\PropositionReunion;
use App\Repository\GroupeProjetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ChatbotController2 extends AbstractController
{
    private HttpClientInterface $httpClient;
    private GroupeProjetRepository $groupeProjetRepository;
    private EntityManagerInterface $entityManager;
    private UrlGeneratorInterface $urlGenerator;
    private string $geminiApiKey;

    public function __construct(
        HttpClientInterface $httpClient,
        GroupeProjetRepository $groupeProjetRepository,
        EntityManagerInterface $entityManager,
        UrlGeneratorInterface $urlGenerator,
        #[Autowire('%env(GEMINI_API_KEY)%')] string $geminiApiKey
    ) {
        $this->httpClient = $httpClient;
        $this->groupeProjetRepository = $groupeProjetRepository;
        $this->entityManager = $entityManager;
        $this->urlGenerator = $urlGenerator;
        $this->geminiApiKey = $geminiApiKey;
    }

    #[Route('/api/chatbot/message', name: 'api_chatbot_message', methods: ['POST'])]
    public function message(Request $request): JsonResponse
    {
        try {
            // Check authentication first
            if (!$this->isGranted('ROLE_USER')) {
                return new JsonResponse([
                    'reply' => 'Vous devez être connecté pour utiliser le chatbot.',
                    'readyToCreate' => false,
                ], 403);
            }
            
            $payload = json_decode($request->getContent(), true);

        if (!is_array($payload)) {
            return new JsonResponse(['reply' => 'Requête invalide.', 'readyToCreate' => false], 400);
        }

        $message = trim((string)($payload['message'] ?? ''));
        $history = $payload['conversationHistory'] ?? [];
        $groupeId = $payload['groupeId'] ?? null;

        if ($message === '') {
            return new JsonResponse(['reply' => 'Message vide.', 'readyToCreate' => false], 400);
        }

        if (trim($this->geminiApiKey) === '') {
            return new JsonResponse([
                'reply' => 'GEMINI_API_KEY manquante côté serveur.',
                'readyToCreate' => false,
            ], 500);
        }

        $groups = $this->groupeProjetRepository->findAll();
        $groupLines = array_map(static function ($group) {
            return sprintf('%d: %s', $group->getId(), $group->getNomProjet());
        }, $groups);


        $systemPrompt = $this->buildSystemPrompt($groupLines, $groupeId);

        $contents = is_array($history) ? $history : [];
        
        // ALWAYS include system instructions with EVERY message
        $currentMessage = $message;
        if (!empty($contents)) {
            // Add reminder in the user message if conversation already started
            $currentMessage = "[RAPPEL: Utilise valeurs par défaut et génère JSON rapidement]\n\n" . $message;
        } else {
            // First message: establish the rules
            $contents[] = [
                'role' => 'user',
                'parts' => [['text' => $systemPrompt]],
            ];
            $contents[] = [
                'role' => 'model',
                'parts' => [['text' => 'Compris. Je crée des réunions automatiquement avec le minimum de questions.']],
            ];
        }
        
        $contents[] = [
            'role' => 'user',
            'parts' => [
                ['text' => $currentMessage],
            ],
        ];

        try {
            $response = $this->httpClient->request('POST', 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent', [
                'query' => [
                    'key' => $this->geminiApiKey,
                ],
                'json' => [
                    'contents' => $contents,
                ],
            ]);

            $status = $response->getStatusCode();
            $rawContent = $response->getContent(false);

            if ($status >= 400) {
                return new JsonResponse([
                    'reply' => 'Gemini API error: ' . $rawContent,
                    'readyToCreate' => false,
                ], $status);
            }

            $data = json_decode($rawContent, true);
            if (!is_array($data)) {
                return new JsonResponse([
                    'reply' => 'Réponse Gemini invalide.',
                    'readyToCreate' => false,
                ], 500);
            }
        } catch (\Throwable $e) {
            return new JsonResponse([
                'reply' => 'Erreur Gemini: ' . $e->getMessage(),
                'readyToCreate' => false,
            ], 500);
        }

        $replyText = $this->extractReplyText($data);

        [$propositionData, $cleanReply] = $this->extractJsonBlock($replyText);

        // If groupeId is missing, try to find it from the groupe name in the conversation
        if (is_array($propositionData) && empty($propositionData['groupeId'])) {
            // Try to find groupe name in the original message or reply
            $textToSearch = strtolower($message . ' ' . $replyText);
            foreach ($groups as $groupe) {
                $groupeName = strtolower($groupe->getNomProjet());
                if (strpos($textToSearch, $groupeName) !== false) {
                    $propositionData['groupeId'] = $groupe->getId();
                    break;
                }
            }
            
            // If still no group found and groupeId context exists, use it
            if (empty($propositionData['groupeId']) && $groupeId) {
                $propositionData['groupeId'] = (int) $groupeId;
            }
        }

        if (is_array($propositionData) && $groupeId && empty($propositionData['groupeId'])) {
            $propositionData['groupeId'] = (int) $groupeId;
        }

        $readyToCreate = is_array($propositionData) ? $this->isReadyToCreate($propositionData) : false;


        return new JsonResponse([
            'reply' => $cleanReply !== '' ? $cleanReply : $replyText,
            'propositionData' => $propositionData,
            'readyToCreate' => $readyToCreate,
        ]);
        } catch (\Throwable $e) {
            return new JsonResponse([
                'reply' => 'Erreur serveur: ' . $e->getMessage(),
                'readyToCreate' => false,
            ], 500);
        }
    }


    #[Route('/api/chatbot/confirm', name: 'api_chatbot_confirm', methods: ['POST'])]
    public function confirm(Request $request): JsonResponse
    {
        try {
            // Check authentication first
            if (!$this->isGranted('ROLE_USER')) {
                return new JsonResponse([
                    'success' => false,
                    'message' => 'Vous devez être connecté.',
                ], 403);
            }
            
            $payload = json_decode($request->getContent(), true);

        if (!is_array($payload)) {
            return new JsonResponse(['success' => false, 'message' => 'Requête invalide.'], 400);
        }

        $data = $payload['propositionData'] ?? null;
        if (!is_array($data)) {
            return new JsonResponse(['success' => false, 'message' => 'Données manquantes.'], 400);
        }

        if (!$this->isReadyToCreate($data)) {
            return new JsonResponse(['success' => false, 'message' => 'Données incomplètes.'], 400);
        }

        $groupeId = (int) $data['groupeId'];
        $groupe = $this->groupeProjetRepository->find($groupeId);
        if (!$groupe) {
            return new JsonResponse(['success' => false, 'message' => 'Groupe introuvable.'], 404);
        }

        $dateReunion = \DateTime::createFromFormat('Y-m-d', (string) $data['dateReunion']);
        $heureDebut = \DateTime::createFromFormat('H:i', (string) $data['heureDebut']);
        $heureFin = \DateTime::createFromFormat('H:i', (string) $data['heureFin']);

        if (!$dateReunion || !$heureDebut || !$heureFin) {
            return new JsonResponse(['success' => false, 'message' => 'Format de date ou heure invalide.'], 400);
        }

        $proposition = new PropositionReunion();
        $proposition->setIdGroupe($groupe);
        $proposition->setTitre((string) $data['titre']);
        $proposition->setDescription((string) $data['description']);
        $proposition->setLieu((string) $data['lieu']);
        $proposition->setDateReunion($dateReunion);
        $proposition->setHeureDebut($heureDebut);
        $proposition->setHeureFin($heureFin);
        $proposition->setStatus('proposed');
        $proposition->setDateCreation(new \DateTime());

        // Fin du vote = dateReunion à heureDebut - 1 heure
        $dateFinVote = (clone $dateReunion)->setTime(
            (int) $heureDebut->format('H'),
            (int) $heureDebut->format('i'),
            0
        )->modify('-1 hour');
        $proposition->setDateFinVote($dateFinVote);
        $proposition->setPropositionId(0);
        $proposition->setCreatedAt(new \DateTimeImmutable());

        $this->entityManager->persist($proposition);
        $this->entityManager->flush();

        $redirectUrl = $this->urlGenerator->generate('front_proposition_reunion_show', [
            'id' => $proposition->getId(),
        ]);

        return new JsonResponse([
            'success' => true,
            'propositionId' => $proposition->getId(),
            'redirectUrl' => $redirectUrl,
        ]);
        } catch (\Throwable $e) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Erreur serveur: ' . $e->getMessage(),
            ], 500);
        }
    }


    private function buildSystemPrompt(array $groupLines, $groupeId): string
    {
        $groupList = implode("\n", array_map(static function ($line) {
            return '- ' . $line;
        }, $groupLines));

        $groupeHint = $groupeId ? "\nGroupe actuel: {$groupeId}" : '';

        // Build dynamic date hints for the next 7 days
        $today = new \DateTime();
        $todayStr = $today->format('Y-m-d');
        $tomorrowStr = (clone $today)->modify('+1 day')->format('Y-m-d');

        // Map French day names to upcoming dates
        $frDays = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
        $dayNumbers = [1, 2, 3, 4, 5, 6, 0]; // PHP: 0=Sunday, 1=Monday...
        $dateHints = [];
        for ($i = 0; $i <= 7; $i++) {
            $d = (clone $today)->modify("+{$i} days");
            $dow = (int)$d->format('w'); // 0=Sunday
            $frIndex = array_search($dow, $dayNumbers);
            if ($frIndex !== false) {
                $frName = $frDays[$frIndex];
                if (!isset($dateHints[$frName])) {
                    $dateHints[$frName] = $d->format('Y-m-d');
                }
            }
        }

        $dateLines = "- \"aujourd'hui\" → {$todayStr}\n- \"demain\" → {$tomorrowStr}";
        foreach ($dateHints as $frName => $dateVal) {
            $dateLines .= "\n- \"{$frName}\" → {$dateVal}";
        }

        return <<<PROMPT
ASSISTANT DE CRÉATION AUTOMATIQUE DE RÉUNIONS

❌ NE GÉNÈRE JAMAIS de JSON en markdown (```json)
✅ UTILISE UNIQUEMENT LE FORMAT: ##JSON## {...} ##END##

VALEURS PAR DÉFAUT (utilise-les TOUJOURS si info manquante):
- titre: "Réunion [sujet ou jour]"
- description: "Discussion et planification"
- heureFin: +2h après heureDebut
- lieu: "En ligne" si réunion en ligne, sinon "À définir"

DATES (on est le {$todayStr}):
{$dateLines}

HEURES:
- "matin" → 10:00
- "après-midi" → 14:00
- "soir" → 19:00
- "10h" → 10:00
- "14h30" → 14:30

GROUPES DISPONIBLES:
{$groupList}
{$groupeHint}

EXEMPLE DE RÉPONSE CORRECTE:
User: "réunion samedi 10h groupe Math en ligne"
Assistant: "##JSON## {\"titre\":\"Réunion Math\",\"description\":\"Discussion et planification\",\"dateReunion\":\"2026-02-28\",\"heureDebut\":\"10:00\",\"heureFin\":\"12:00\",\"lieu\":\"En ligne\",\"groupeId\":1} ##END##"

RÈGLE ABSOLUE:
Si tu as toutes les infos (date, heure, groupe) → GÉNÈRE ##JSON##...##END## IMMÉDIATEMENT
Sinon → demande UNE SEULE question manquante

⚠️ CRITIQUE: N'utilise JAMAIS ```json ou du markdown. UNIQUEMENT ##JSON##...##END##
PROMPT;
    }





    private function extractReplyText(array $data): string
    {
        $candidates = $data['candidates'][0]['content']['parts'] ?? [];
        if (!is_array($candidates) || empty($candidates)) {
            return 'Je n\'ai pas pu comprendre la réponse.';
        }


        $texts = [];
        foreach ($candidates as $part) {
            if (isset($part['text'])) {
                $texts[] = $part['text'];
            }
        }

        return trim(implode("\n", $texts));
    }

    private function extractJsonBlock(string $replyText): array
    {
        // Try ##JSON##...##END## format first
        if (preg_match('/##JSON##(.*?)##END##/s', $replyText, $matches)) {
            $jsonRaw = trim($matches[1]);
            $decoded = json_decode($jsonRaw, true);

            if (is_array($decoded)) {
                $allowedKeys = ['titre', 'description', 'dateReunion', 'heureDebut', 'heureFin', 'lieu', 'groupeId'];
                $filtered = array_intersect_key($decoded, array_flip($allowedKeys));
                $cleanReply = trim(preg_replace('/##JSON##.*?##END##/s', '', $replyText));
                return [$filtered, $cleanReply];
            }
        }

        // Fallback: try to extract JSON from markdown code blocks
        if (preg_match('/```json\s*(.*?)\s*```/s', $replyText, $matches)) {
            $jsonRaw = trim($matches[1]);
            $decoded = json_decode($jsonRaw, true);

            if (is_array($decoded)) {
                // Map common JSON keys to our expected format
                $mapped = [];
                
                // Map title/titre
                $mapped['titre'] = $decoded['titre'] ?? $decoded['title'] ?? 'Réunion';
                
                // Map description
                $mapped['description'] = $decoded['description'] ?? 'Discussion';
                
                // Map date
                $mapped['dateReunion'] = $decoded['dateReunion'] ?? $decoded['date'] ?? date('Y-m-d');
                
                // Map start time
                $mapped['heureDebut'] = $decoded['heureDebut'] ?? $decoded['start_time'] ?? '10:00';
                
                // Map end time
                $mapped['heureFin'] = $decoded['heureFin'] ?? $decoded['end_time'] ?? '12:00';
                
                // Map location
                $mapped['lieu'] = $decoded['lieu'] ?? $decoded['location'] ?? 'À définir';
                
                // Map groupeId - try to find first available group if not specified
                $mapped['groupeId'] = $decoded['groupeId'] ?? null;
                
                $cleanReply = trim(preg_replace('/```json.*?```/s', '', $replyText));
                return [$mapped, $cleanReply];
            }
        }

        return [null, trim($replyText)];
    }


    private function isReadyToCreate(array $data): bool
    {
        $required = ['titre', 'description', 'dateReunion', 'heureDebut', 'heureFin', 'lieu', 'groupeId'];
        foreach ($required as $key) {
            if (!isset($data[$key]) || trim((string) $data[$key]) === '') {
                return false;
            }
        }

        return true;
    }
}
