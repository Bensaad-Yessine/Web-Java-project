from pydantic import BaseModel, Field
from typing import Optional, List, Dict, Any


class SeanceFeatures(BaseModel):
    """Modèle Pydantic pour les caractéristiques d'une séance"""
    seance_id: Optional[int] = Field(None, description="ID de la séance")
    jour_semaine: int = Field(..., ge=0, le=6, description="Jour de la semaine (0=dimanche, 6=samedi)")
    heure_debut: int = Field(..., ge=8, le=18, description="Heure de début (8-18)")
    duree_min: int = Field(..., ge=15, description="Durée en minutes")
    type_seance: str = Field(..., description="Type de séance: TP, TD, COURS")
    mode: str = Field(..., description="Mode: presentiel, hybride, en_ligne")
    matiere: str = Field(..., description="Matière")
    groupe: str = Field(..., description="Groupe")
    salle_capacite_initiale: int = Field(..., ge=1, description="Capacité de la salle initiale")
    moy_presence_groupe_30j: float = Field(..., ge=0, le=1, description="Moyenne présence groupe 30 jours")
    taux_absence_groupe_30j: float = Field(..., ge=0, le=1, description="Taux absence groupe 30 jours")
    presence_moyenne_matiere: float = Field(..., ge=0, le=1, description="Présence moyenne matière")
    presence_moyenne_creneau: float = Field(..., ge=0, le=1, description="Présence moyenne créneau")


class PredictionResponse(BaseModel):
    """Réponse de prédiction d'assiduité"""
    predicted_attendance: int = Field(..., description="Nombre prédit de présents")
    confidence: float = Field(..., ge=0, le=1, description="Confiance de la prédiction")
    explain: List[str] = Field(..., description="Explications de la prédiction")


class Room(BaseModel):
    """Modèle pour une salle"""
    id: str = Field(..., description="ID de la salle")
    bloc: str = Field(..., description="Bloc de la salle")
    etage: int = Field(..., description="Étage de la salle")
    capacite: int = Field(..., ge=1, description="Capacité de la salle")
    is_available: bool = Field(..., description="Disponibilité de la salle")


class RecommendationRequest(BaseModel):
    """Requête de recommandation de salle"""
    seance: SeanceFeatures = Field(..., description="Caractéristiques de la séance")
    available_rooms: List[Room] = Field(..., description="Liste des salles disponibles")
    margin_ratio: float = Field(0.10, ge=0, le=1, description="Marge de sécurité (ratio)")


class RecommendationResponse(BaseModel):
    """Réponse de recommandation de salle"""
    predicted_attendance: int = Field(..., description="Nombre prédit de présents")
    capacity_required: int = Field(..., description="Capacité requise avec marge")
    recommended_room: Optional[Room] = Field(None, description="Salle recommandée")
    alternatives: List[Room] = Field(default_factory=list, description="Salles alternatives")
    message: str = Field(..., description="Message explicatif")