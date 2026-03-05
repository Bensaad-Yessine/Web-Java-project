<?php

namespace App\Service;

use App\Entity\User;
use App\Repository\TacheRepository;
use App\Repository\ObjectifSanteRepository;
use App\Repository\GroupeProjetRepository;
use App\Repository\SuiviBienEtreRepository;

class StudentChatbotService
{
    private string $ollamaUrl;
    private string $ollamaModel = 'llama3.1';
    private TacheRepository $tacheRepository;
    private ObjectifSanteRepository $objectifSanteRepository;
    private GroupeProjetRepository $groupeProjetRepository;
    private SuiviBienEtreRepository $suiviBienEtreRepository;
    private ?string $lastErrorDetail = null;

    public function __construct(
        TacheRepository $tacheRepository,
        ObjectifSanteRepository $objectifSanteRepository,
        GroupeProjetRepository $groupeProjetRepository,
        SuiviBienEtreRepository $suiviBienEtreRepository
    ) {
        $this->ollamaUrl = $_ENV['OLLAMA_URL'] ?? 'http://localhost:11434';
        $this->tacheRepository = $tacheRepository;
        $this->objectifSanteRepository = $objectifSanteRepository;
        $this->groupeProjetRepository = $groupeProjetRepository;
        $this->suiviBienEtreRepository = $suiviBienEtreRepository;
    }

    /**
     * Génère une réponse contextualisée basée sur les données de l'étudiant
     */
    public function chat(User $user, string $userMessage): array
    {
        // Récupère le contexte de l'étudiant
        $context = $this->buildStudentContext($user);

        // Crée le prompt avec contexte
        $prompt = $this->buildPrompt($userMessage, $context);

        // Appelle l'API Ollama
        $response = $this->callOllamaApi($prompt);

        if (!empty($response)) {
            return [
                'success' => true,
                'message' => $response,
                'response' => $response
            ];
        }

        $debug = $this->lastErrorDetail ?? null;
        $env = $_ENV['APP_ENV'] ?? 'prod';
        $errorMessage = 'Une erreur s\'est produite';

        if ($env === 'dev' && !empty($debug)) {
            $errorMessage .= ' (' . $debug . ')';
        }

        return [
            'success' => false,
            'message' => $errorMessage,
            'response' => null
        ];
    }

    /**
     * Construit le contexte personnalisé de l'étudiant
     */
    private function buildStudentContext(User $user): array
    {
        $tasks = $this->tacheRepository->findBy(['user' => $user]);
        $objectives = $this->objectifSanteRepository->findBy(['user' => $user]);
        $groups = $this->groupeProjetRepository->findByMember($user);

        $pendingTasks = array_filter($tasks, fn($t) => in_array($t->getStatut(), ['A_FAIRE', 'EN_COURS', 'EN_RETARD']));
        $highPriorityTasks = array_filter($tasks, fn($t) => $t->getPriorite() === 'ELEVEE');

        return [
            'name' => $user->getPrenom() . ' ' . $user->getNom(),
            'email' => $user->getEmail(),
            'role' => implode(', ', $user->getRoles()),
            'classe' => $user->getClasse() ? $user->getClasse()->getNom() : 'Non assignée',
            'stats' => [
                'total_tasks' => count($tasks),
                'pending_tasks' => count($pendingTasks),
                'high_priority_tasks' => count($highPriorityTasks),
                'completed_tasks' => count(array_filter($tasks, fn($t) => $t->getStatut() === 'TERMINE')),
                'health_objectives' => count($objectives),
                'project_groups' => count($groups),
            ],
            'recent_tasks' => array_slice(
                array_map(fn($t) => [
                    'titre' => $t->getTitre(),
                    'statut' => $t->getStatut(),
                    'priorite' => $t->getPriorite(),
                    'dateEcheance' => $t->getDateEcheance()?->format('Y-m-d')
                ], $pendingTasks),
                0,
                5
            )
        ];
    }

    /**
     * Construit le prompt avec contexte étudiant
     */
    private function buildPrompt(string $userMessage, array $context): string
    {
        $contextStr = json_encode($context, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        return <<<PROMPT
Tu es ESPRIT, un assistant IA éducatif pour les étudiants. Tu es un expert dans:
- Mathématiques, algèbre, géométrie, calcul
- Informatique et programmation (Python, PHP, JavaScript, etc)
- Sciences (physique, chimie, biologie)
- Langues et littérature
- Histoire et géographie
- Gestion de projets et productivité
- Bien-être et conseils d'étude

CONTEXTE DE L'ÉTUDIANT:
$contextStr

INSTRUCTIONS PRINCIPALES:
1. Réponds TOUJOURS en français, quelle que soit la langue de la question
2. Si la question est simple (math, définition, code), réponds directement et concisément
3. Si c'est une question éducative plus complexe, personnalise en utilisant le contexte étudiant
4. Sois amical, encourageant et professionnel
5. Pour les ejercices, donne des explications pas simplement les réponses
6. Maintiens les réponses concises (2-5 phrases pour simple questions, plus pour complexes)
7. Ne donne jamais d'informations sensibles (email, données privées)

TYPES DE QUESTIONS QUE TU PEUX TRAITER:
• Mathématiques: "Résous 2x + 5 = 13" → Explique étape par étape
• Programmation: "Comment faire une boucle en Python?" → Code avec exemple
• Définitions: "C'est quoi la photosynthèse?" → Explication clair
• Concept: "Explique les variables" → Concept + exemple
• Tâches: Si l'étudiant parle de ses tâches → Utilisez le contexte

MESSAGE DE L'ÉTUDIANT:
$userMessage

Réponds de manière utile, clair et éducative. Si c'est une simple question, soyez directe. Si c'est sur les études/productivité de l'étudiant, personalisez la réponse:
PROMPT;
    }

    /**
     * Appelle l'API Ollama
     */
    private function callOllamaApi(string $prompt): ?string
    {
        $this->lastErrorDetail = null;
        $url = $this->ollamaUrl . '/api/generate';

        $ch = curl_init($url);

        if (!$ch) {
            $this->lastErrorDetail = 'cURL init failed';
            error_log('Failed to initialize cURL in StudentChatbotService (Ollama)');
            return null;
        }

        curl_setopt_array($ch, [
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
            ],
            CURLOPT_POSTFIELDS => json_encode([
                'model' => $this->ollamaModel,
                'prompt' => $prompt,
                'stream' => false,
            ]),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 120,
            CURLOPT_CONNECTTIMEOUT => 10,
        ]);

        $response = curl_exec($ch);
        $error = curl_error($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($error) {
            $this->lastErrorDetail = 'cURL error: ' . $error;
            error_log('cURL error in StudentChatbotService (Ollama): ' . $error);
            return null;
        }

        if ($httpCode !== 200) {
            $this->lastErrorDetail = 'HTTP ' . $httpCode . ': ' . substr($response, 0, 200);
            error_log('Ollama API error ' . $httpCode . ' in StudentChatbotService: ' . substr($response, 0, 500));
            return null;
        }

        $decoded = json_decode($response, true);
        if (!is_array($decoded)) {
            $this->lastErrorDetail = 'Invalid JSON response';
            return null;
        }

        return $decoded['response'] ?? null;
    }
}
