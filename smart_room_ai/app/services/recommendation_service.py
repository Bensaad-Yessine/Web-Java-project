"""
Service de recommandation de salles basé sur la prédiction d'assiduité.
"""

import math
from typing import List, Optional
from ..schemas import SeanceFeatures, Room, RecommendationRequest, RecommendationResponse
from .model_service import ModelService


class RecommendationService:
    """Service pour recommander des salles optimales."""
    
    def __init__(self, model_service: ModelService):
        self.model_service = model_service
    
    def recommend_room(self, request: RecommendationRequest) -> RecommendationResponse:
        """
        Recommande la meilleure salle pour une séance.
        
        Args:
            request: Requête de recommandation avec séance et salles disponibles
            
        Returns:
            RecommendationResponse: Résultat de la recommandation
        """
        # Obtenir la prédiction d'assiduité
        try:
            prediction_response = self.model_service.predict_attendance(request.seance)
            predicted_attendance = prediction_response.predicted_attendance
        except Exception as e:
            raise ValueError(f"Erreur lors de la prédiction d'assiduité: {str(e)}")
        
        # Calculer la capacité requise avec marge
        capacity_required = math.ceil(predicted_attendance * (1 + request.margin_ratio))
        
        # Filtrer les salles disponibles avec capacité suffisante
        suitable_rooms = [
            room for room in request.available_rooms 
            if room.is_available and room.capacite >= capacity_required
        ]
        
        # Si aucune salle n'est disponible
        if not suitable_rooms:
            return RecommendationResponse(
                predicted_attendance=predicted_attendance,
                capacity_required=capacity_required,
                recommended_room=None,
                alternatives=[],
                message=f"Aucune salle disponible pour {capacity_required} personnes avec marge de {request.margin_ratio:.0%}"
            )
        
        # Trier les salles par capacité la plus proche du requis
        sorted_rooms = sorted(
            suitable_rooms, 
            key=lambda room: room.capacite - capacity_required
        )
        
        # La meilleure salle est la première
        recommended_room = sorted_rooms[0]
        
        # Alternatives (top 3)
        alternatives = sorted_rooms[1:4]
        
        # Générer le message
        message = (f"Salle recommandée: {recommended_room.id} "
                  f"(capacité: {recommended_room.capacite}, bloc: {recommended_room.bloc}{recommended_room.etage}) "
                  f"pour {predicted_attendance} étudiants prévus (marge: {request.margin_ratio:.0%})")
        
        return RecommendationResponse(
            predicted_attendance=predicted_attendance,
            capacity_required=capacity_required,
            recommended_room=recommended_room,
            alternatives=alternatives,
            message=message
        )
    
    def get_room_utilization_stats(self, rooms: List[Room], 
                                   predicted_attendance: int) -> dict:
        """
        Calcule les statistiques d'utilisation des salles.
        
        Args:
            rooms: Liste des salles
            predicted_attendance: Nombre prédit de présents
            
        Returns:
            dict: Statistiques d'utilisation
        """
        stats = {
            "total_rooms": len(rooms),
            "available_rooms": len([r for r in rooms if r.is_available]),
            "suitable_rooms": len([r for r in rooms if r.is_available and r.capacite >= predicted_attendance]),
            "capacity_stats": {
                "min_capacity": min(r.capacite for r in rooms) if rooms else 0,
                "max_capacity": max(r.capacite for r in rooms) if rooms else 0,
                "avg_capacity": sum(r.capacite for r in rooms) / len(rooms) if rooms else 0
            }
        }
        
        return stats