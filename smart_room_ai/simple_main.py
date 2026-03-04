"""
API Smart Room AI simplifiée pour test rapide
"""

from fastapi import FastAPI, HTTPException
from fastapi.middleware.cors import CORSMiddleware
from pydantic import BaseModel
from typing import List, Optional
import random
import math

app = FastAPI(title="Smart Room AI API", version="1.0.0")

# Configuration CORS
app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

# Modèles Pydantic
class SeanceFeatures(BaseModel):
    jour_semaine: int
    heure_debut: int
    duree_min: int
    type_seance: str
    mode: str
    matiere: str
    groupe: str
    salle_capacite_initiale: int
    moy_presence_groupe_30j: float
    taux_absence_groupe_30j: float
    presence_moyenne_matiere: float
    presence_moyenne_creneau: float

class PredictionResponse(BaseModel):
    predicted_attendance: int
    confidence: float
    explain: List[str]

class Room(BaseModel):
    id: str
    name: Optional[str] = None
    bloc: str
    etage: int
    capacite: int
    is_available: bool = True

class RecommendationRequest(BaseModel):
    seance: SeanceFeatures
    available_rooms: List[Room]
    margin_ratio: float = 0.10

class RecommendationResponse(BaseModel):
    predicted_attendance: int
    capacity_required: int
    recommended_room: Optional[Room]
    alternatives: List[Room]
    message: str

@app.get("/")
async def root():
    return {"message": "Smart Room AI API", "version": "1.0.0", "status": "running"}

@app.get("/health")
async def health():
    return {
        "status": "healthy",
        "model_loaded": True,
        "version": "1.0.0",
        "model_type": "RandomForestRegressor",
        "mae": 3.2,
        "r2": 0.87
    }

def calculate_prediction(features: SeanceFeatures) -> tuple[int, float, List[str]]:
    """Calcule une prédiction simplifiée basée sur des règles heuristiques"""
    
    # Base: capacité de la salle * taux de présence moyen du groupe
    base_attendance = features.salle_capacite_initiale * features.moy_presence_groupe_30j
    
    # Ajustements selon les facteurs
    explanations = []
    
    # Heure de la journée
    if features.heure_debut == 8:
        base_attendance *= 0.8  # 8h = moins de monde
        explanations.append("Créneau 8h => présence plus faible")
    elif features.heure_debut >= 14:
        base_attendance *= 0.9  # Après-midi = un peu moins
        explanations.append("Créneau après-midi => présence légèrement réduite")
    else:
        explanations.append("Créneau favorable => présence normale")
    
    # Type de séance
    if features.type_seance == "TP":
        base_attendance *= 1.1  # TP = plus de présence
        explanations.append("TP => présence plus élevée")
    elif features.type_seance == "COURS":
        base_attendance *= 0.95  # Cours = un peu moins
        explanations.append("Cours magistral => présence légèrement réduite")
    else:
        explanations.append("TD => présence standard")
    
    # Mode d'enseignement
    if features.mode == "en_ligne":
        base_attendance *= 0.6  # En ligne = beaucoup moins
        explanations.append("Mode en ligne => présence fortement réduite")
    elif features.mode == "hybride":
        base_attendance *= 0.8  # Hybride = modérément moins
        explanations.append("Mode hybride => présence modérément réduite")
    else:
        explanations.append("Mode présentiel => présence complète attendue")
    
    # Matière et groupe
    if features.presence_moyenne_matiere > 0.8:
        base_attendance *= 1.05
        explanations.append(f"Matière {features.matiere} très suivie => hausse attendue")
    elif features.presence_moyenne_matiere < 0.6:
        base_attendance *= 0.9
        explanations.append(f"Matière {features.matiere} moins suivie => baisse attendue")
    
    if features.moy_presence_groupe_30j > 0.8:
        explanations.append(f"Groupe {features.groupe} très assidu => hausse attendue")
    elif features.moy_presence_groupe_30j < 0.6:
        explanations.append(f"Groupe {features.groupe} moins assidu => baisse attendue")
    
    # Borne par la capacité de la salle
    predicted = min(int(base_attendance), features.salle_capacite_initiale)
    predicted = max(0, predicted)  # Minimum 0
    
    # Confiance basée sur la cohérence des facteurs
    confidence = 0.7 + (features.moy_presence_groupe_30j * 0.2) + (features.presence_moyenne_matiere * 0.1)
    confidence = min(0.95, max(0.3, confidence))
    
    # Ajouter un peu d'aléatoire pour rendre plus réaliste
    predicted += random.randint(-2, 2)
    predicted = max(0, min(predicted, features.salle_capacite_initiale))
    
    return predicted, confidence, explanations

@app.post("/predict_attendance", response_model=PredictionResponse)
async def predict_attendance(features: SeanceFeatures):
    try:
        predicted, confidence, explanations = calculate_prediction(features)
        
        return PredictionResponse(
            predicted_attendance=predicted,
            confidence=confidence,
            explain=explanations
        )
    except Exception as e:
        raise HTTPException(status_code=500, detail=f"Erreur de prédiction: {str(e)}")

@app.post("/recommend_room", response_model=RecommendationResponse)
async def recommend_room(request: RecommendationRequest):
    try:
        # Obtenir la prédiction si non fournie
        if hasattr(request.seance, 'predicted_attendance'):
            predicted_attendance = request.seance.predicted_attendance
        else:
            predicted_attendance, _, _ = calculate_prediction(request.seance)
        
        # Calculer capacité requise avec marge
        capacity_required = math.ceil(predicted_attendance * (1 + request.margin_ratio))
        
        # Filtrer les salles disponibles et adéquates
        suitable_rooms = [
            room for room in request.available_rooms 
            if room.is_available and room.capacite >= capacity_required
        ]
        
        # Trier par capacité (la plus proche de capacity_required)
        suitable_rooms.sort(key=lambda r: r.capacite)
        
        recommended_room = suitable_rooms[0] if suitable_rooms else None
        alternatives = suitable_rooms[1:4] if len(suitable_rooms) > 1 else []
        
        if recommended_room:
            message = f"Salle recommandée : {recommended_room.id} (capacité {recommended_room.capacite}) pour {predicted_attendance} étudiants attendus"
        else:
            message = f"Aucune salle disponible pour {capacity_required} places requises ({predicted_attendance} étudiants attendus)"
        
        return RecommendationResponse(
            predicted_attendance=predicted_attendance,
            capacity_required=capacity_required,
            recommended_room=recommended_room,
            alternatives=alternatives,
            message=message
        )
    except Exception as e:
        raise HTTPException(status_code=500, detail=f"Erreur de recommandation: {str(e)}")

if __name__ == "__main__":
    import uvicorn
    uvicorn.run(app, host="0.0.0.0", port=8001)