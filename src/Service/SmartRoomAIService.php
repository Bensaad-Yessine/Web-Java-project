<?php

namespace App\Service;

use App\Entity\Seance;
use App\Entity\Salle;
use App\Entity\Classe;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;

/**
 * Service d'intégration avec l'API Smart Room AI pour la prédiction d'assiduité
 * et la recommandation de salles optimales.
 */
class SmartRoomAIService
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly LoggerInterface     $logger,
        private readonly string              $apiBaseUrl = 'http://localhost:8001',
        private readonly bool                $enabled = true
    ) {}

    // ─────────────────────────────────────────────────────────────────────────
    //  1. Prédiction d'assiduité pour une séance
    // ─────────────────────────────────────────────────────────────────────────
    
    /**
     * Prédit le nombre d'étudiants présents pour une séance donnée.
     * 
     * @param Seance $seance La séance à analyser
     * @return array|null Retourne null si le service est indisponible, sinon :
     * [
     *     'predicted_attendance' => int,
     *     'confidence' => float (0..1),
     *     'explain' => string[],
     * ]
     */
    public function predictAttendance(Seance $seance): ?array
    {
        if (!$this->enabled) {
            return null;
        }

        try {
            $payload = $this->buildSeancePayload($seance);
            
            $response = $this->httpClient->request('POST', $this->apiBaseUrl . '/predict_attendance', [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
                'json' => $payload,
                'timeout' => 5,
            ]);

            $data = $response->toArray();
            
            return [
                'predicted_attendance' => $data['predicted_attendance'] ?? 0,
                'confidence' => $data['confidence'] ?? 0,
                'explain' => $data['explain'] ?? [],
            ];

        } catch (\Throwable $e) {
            $this->logger->error('[SmartRoomAI] predictAttendance failed: ' . $e->getMessage());
            return null;
        }
    }

    // ─────────────────────────────────────────────────────────────────────────
    //  2. Recommandation de salle optimale
    // ─────────────────────────────────────────────────────────────────────────
    
    /**
     * Recommande la meilleure salle pour une séance.
     * 
     * @param Seance $seance La séance à optimiser
     * @param Salle[] $availableRooms Liste des salles disponibles
     * @param float $marginRatio Ratio de marge de sécurité (défaut 0.10 = 10%)
     * @return array|null Retourne null si le service est indisponible, sinon :
     * [
     *     'predicted_attendance' => int,
     *     'capacity_required' => int,
     *     'recommended_room' => array|null,
     *     'alternatives' => array[],
     *     'message' => string
     * ]
     */
    public function recommendRoom(Seance $seance, array $availableRooms, float $marginRatio = 0.10): ?array
    {
        if (!$this->enabled || empty($availableRooms)) {
            return null;
        }

        try {
            $seancePayload = $this->buildSeancePayload($seance);
            $roomsPayload = array_map(fn(Salle $room) => [
                'id' => $room->getName() ?? $room->getId(),
                'bloc' => $room->getBloc() ?? 'A',
                'etage' => $room->getEtage() ?? 1,
                'capacite' => $room->getCapacite() ?? 20,
                'is_available' => true, // Par défaut, les salles fournies sont disponibles
            ], $availableRooms);

            $payload = [
                'seance' => $seancePayload,
                'available_rooms' => $roomsPayload,
                'margin_ratio' => $marginRatio,
            ];

            $response = $this->httpClient->request('POST', $this->apiBaseUrl . '/recommend_room', [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
                'json' => $payload,
                'timeout' => 8,
            ]);

            $data = $response->toArray();
            
            return [
                'predicted_attendance' => $data['predicted_attendance'] ?? 0,
                'capacity_required' => $data['capacity_required'] ?? 0,
                'recommended_room' => $data['recommended_room'],
                'alternatives' => $data['alternatives'] ?? [],
                'message' => $data['message'] ?? '',
            ];

        } catch (\Throwable $e) {
            $this->logger->error('[SmartRoomAI] recommendRoom failed: ' . $e->getMessage());
            return null;
        }
    }

    // ─────────────────────────────────────────────────────────────────────────
    //  3. Vérification de la santé du service
    // ─────────────────────────────────────────────────────────────────────────
    
    /**
     * Vérifie si l'API Smart Room AI est disponible.
     */
    public function isHealthy(): bool
    {
        if (!$this->enabled) {
            return false;
        }

        try {
            $response = $this->httpClient->request('GET', $this->apiBaseUrl . '/health', [
                'timeout' => 3,
            ]);
            
            $data = $response->toArray();
            return ($data['status'] ?? '') === 'healthy' && 
                   ($data['model_loaded'] ?? false) === true;

        } catch (\Throwable $e) {
            $this->logger->error('[SmartRoomAI] Health check failed: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Retourne les informations sur le modèle ML.
     */
    public function getModelInfo(): ?array
    {
        if (!$this->enabled) {
            return null;
        }

        try {
            $response = $this->httpClient->request('GET', $this->apiBaseUrl . '/model/info', [
                'timeout' => 3,
            ]);
            
            return $response->toArray();

        } catch (\Throwable $e) {
            $this->logger->error('[SmartRoomAI] getModelInfo failed: ' . $e->getMessage());
            return null;
        }
    }

    // ─────────────────────────────────────────────────────────────────────────
    //  4. Helpers pour construire les payloads
    // ─────────────────────────────────────────────────────────────────────────
    
    /**
     * Construit le payload pour l'API Smart Room AI à partir d'une séance.
     */
    private function buildSeancePayload(Seance $seance): array
    {
        $heureDebut = $seance->getHeureDebut();
        $heureDebutInt = $heureDebut ? (int)$heureDebut->format('H') : 14; // Défaut 14h
        
        $duree = 0;
        if ($seance->getHeureDebut() && $seance->getHeureFin()) {
            $duree = ($seance->getHeureFin()->getTimestamp() - $seance->getHeureDebut()->getTimestamp()) / 60;
        }
        
        // Gérer le jour de la semaine (chaîne ou DateTime)
        $jour = $seance->getJour();
        if (is_string($jour)) {
            // Convertir le jour français en numéro
            $jourMap = ['Lundi' => 1, 'Mardi' => 2, 'Mercredi' => 3, 'Jeudi' => 4, 'Vendredi' => 5, 'Samedi' => 6, 'Dimanche' => 0];
            $jourSemaine = $jourMap[$jour] ?? 1;
        } else {
            // Si c'est une DateTime, utiliser format('w')
            $jourSemaine = $heureDebut ? (int)$heureDebut->format('w') : 1;
        }
        
        $salleCapacite = $seance->getSalle()?->getCapacite() ?? 20;
        
        return [
            'seance_id' => $seance->getId(),
            'jour_semaine' => $jourSemaine,
            'heure_debut' => $heureDebutInt,
            'duree_min' => max(60, (int)$duree), // Minimum 60 min
            'type_seance' => $seance->getTypeSeance() ?? 'COURS',
            'mode' => $seance->getMode() ?? 'presentiel',
            'matiere' => $seance->getMatiere()?->getNom() ?? 'Inconnue',
            'groupe' => $seance->getClasse()?->getNom() ?? 'Groupe1',
            'salle_capacite_initiale' => $salleCapacite,
            // Features historiques (valeurs simulées si non disponibles)
            'moy_presence_groupe_30j' => $this->getHistoricalPresence($seance->getClasse(), 'groupe'),
            'taux_absence_groupe_30j' => $this->getHistoricalAbsence($seance->getClasse(), 'groupe'),
            'presence_moyenne_matiere' => $this->getHistoricalPresence($seance->getMatiere(), 'matiere'),
            'presence_moyenne_creneau' => $this->getHistoricalPresence($heureDebutInt, 'creneau'),
        ];
    }

    /**
     * Calcule les moyennes historiques de présence.
     * En production, ces données viendraient de la base de données.
     * Pour l'instant, on utilise des heuristiques simples.
     */
    private function getHistoricalPresence($entity, string $type): float
    {
        // Valeurs par défaut selon le type
        switch ($type) {
            case 'groupe':
                // Les groupes L1/L2 sont généralement plus assidus
                if ($entity && method_exists($entity, 'getNom')) {
                    $nom = strtolower($entity->getNom());
                    if (str_contains($nom, 'l1') || str_contains($nom, '1a')) return 0.85;
                    if (str_contains($nom, 'l2') || str_contains($nom, '2a')) return 0.80;
                    if (str_contains($nom, 'l3') || str_contains($nom, '3a')) return 0.75;
                    if (str_contains($nom, 'm1') || str_contains($nom, 'm2')) return 0.90;
                }
                return 0.78; // Par défaut
                
            case 'matiere':
                // Matières techniques vs générales
                if ($entity && method_exists($entity, 'getNom')) {
                    $nom = strtolower($entity->getNom());
                    if (in_array($nom, ['informatique', 'mathématiques', 'physique', 'chimie'])) return 0.85;
                    if (in_array($nom, ['français', 'anglais', 'histoire'])) return 0.70;
                    if (in_array($nom, ['sport', 'arts'])) return 0.90;
                }
                return 0.75;
                
            case 'creneau':
                // Selon l'heure de la journée
                if (is_numeric($entity)) {
                    $heure = (int)$entity;
                    if ($heure <= 9) return 0.65; // Tôt le matin
                    if ($heure >= 17) return 0.70; // Fin de journée
                    if (in_array($heure, [10, 11, 14, 15, 16])) return 0.80; // Créneaux optimaux
                }
                return 0.75;
                
            default:
                return 0.75;
        }
    }

    /**
     * Calcule les taux d'absence historiques.
     */
    private function getHistoricalAbsence($entity, string $type): float
    {
        $presence = $this->getHistoricalPresence($entity, $type);
        return max(0.05, 1.0 - $presence); // Minimum 5% d'absence
    }

    // ─────────────────────────────────────────────────────────────────────────
    //  5. Utilitaires pour l'interface utilisateur
    // ─────────────────────────────────────────────────────────────────────────
    
    /**
     * Formate le score de confiance pour l'affichage.
     */
    public function formatConfidence(float $confidence): string
    {
        if ($confidence >= 0.8) return 'Très fiable';
        if ($confidence >= 0.6) return 'Fiable';
        if ($confidence >= 0.4) return 'Modérée';
        return 'Faible';
    }

    /**
     * Retourne une icône selon le niveau de confiance.
     */
    public function getConfidenceIcon(float $confidence): string
    {
        if ($confidence >= 0.8) return '✅';
        if ($confidence >= 0.6) return '🟢';
        if ($confidence >= 0.4) return '🟡';
        return '🔴';
    }

    /**
     * Génère un message explicatif pour la recommandation.
     */
    public function formatRecommendationMessage(array $recommendation): string
    {
        if (empty($recommendation['recommended_room'])) {
            return '❌ ' . $recommendation['message'];
        }
        
        $room = $recommendation['recommended_room'];
        $predicted = $recommendation['predicted_attendance'];
        $capacity = $room['capacite'];
        $utilization = ($predicted / $capacity) * 100;
        
        return sprintf(
            '🎯 Salle recommandée : <strong>%s</strong> (Bloc %s%d, capacité %d) pour %d étudiants prévus (taux d\'occupation : %.0f%%)',
            $room['id'],
            $room['bloc'],
            $room['etage'],
            $capacity,
            $predicted,
            $utilization
        );
    }
}