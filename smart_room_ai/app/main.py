"""
Application FastAPI pour la prédiction d'assiduité et recommandation de salles.
"""

import os
import sys
from fastapi import FastAPI, HTTPException, status
from fastapi.middleware.cors import CORSMiddleware
from typing import List

# Ajouter le répertoire parent au path pour les imports
sys.path.append(os.path.dirname(os.path.dirname(os.path.abspath(__file__))))

from app.schemas import (
    SeanceFeatures, 
    PredictionResponse, 
    RecommendationRequest, 
    RecommendationResponse, 
    Room
)
from app.services.model_service import ModelService
from app.services.recommendation_service import RecommendationService

# Initialiser l'application FastAPI
app = FastAPI(
    title="Smart Room AI API",
    description="API pour la prédiction d'assiduité et recommandation de salles optimales",
    version="1.0.0"
)

# Configuration CORS
app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

# Initialiser les services
model_service = ModelService()
recommendation_service = RecommendationService(model_service)


@app.get("/")
async def root():
    """Route racine pour vérifier que l'API fonctionne."""
    return {
        "message": "Smart Room AI API",
        "version": "1.0.0",
        "status": "running",
        "model_available": model_service.is_model_available()
    }


@app.get("/health")
async def health_check():
    """Vérification de santé de l'API."""
    return {
        "status": "healthy",
        "model_loaded": model_service.is_model_available(),
        "services": {
            "model_service": "ok" if model_service.is_model_available() else "not_loaded",
            "recommendation_service": "ok"
        }
    }


@app.get("/model/info")
async def get_model_info():
    """Retourne les informations sur le modèle ML."""
    try:
        return model_service.get_model_info()
    except Exception as e:
        raise HTTPException(
            status_code=status.HTTP_500_INTERNAL_SERVER_ERROR,
            detail=f"Erreur lors de la récupération des infos du modèle: {str(e)}"
        )


@app.post("/predict_attendance", response_model=PredictionResponse)
async def predict_attendance(seance: SeanceFeatures):
    """
    Prédit le nombre d'étudiants présents à une séance.
    
    Args:
        seance: Caractéristiques de la séance
        
    Returns:
        PredictionResponse: Nombre prédit de présents avec confiance et explications
    """
    try:
        if not model_service.is_model_available():
            raise HTTPException(
                status_code=status.HTTP_503_SERVICE_UNAVAILABLE,
                detail="Modèle non disponible. Veuillez d'abord entraîner le modèle avec 'python training/train_model.py'"
            )
        
        prediction = model_service.predict_attendance(seance)
        return prediction
        
    except ValueError as e:
        raise HTTPException(
            status_code=status.HTTP_400_BAD_REQUEST,
            detail=str(e)
        )
    except Exception as e:
        raise HTTPException(
            status_code=status.HTTP_500_INTERNAL_SERVER_ERROR,
            detail=f"Erreur lors de la prédiction: {str(e)}"
        )


@app.post("/recommend_room", response_model=RecommendationResponse)
async def recommend_room(request: RecommendationRequest):
    """
    Recommande la salle optimale pour une séance.
    
    Args:
        request: Requête contenant la séance et les salles disponibles
        
    Returns:
        RecommendationResponse: Salle recommandée avec alternatives
    """
    try:
        if not model_service.is_model_available():
            raise HTTPException(
                status_code=status.HTTP_503_SERVICE_UNAVAILABLE,
                detail="Modèle non disponible. Veuillez d'abord entraîner le modèle avec 'python training/train_model.py'"
            )
        
        # Valider qu'il y a des salles disponibles
        if not request.available_rooms:
            raise HTTPException(
                status_code=status.HTTP_400_BAD_REQUEST,
                detail="Aucune salle fournie dans available_rooms"
            )
        
        recommendation = recommendation_service.recommend_room(request)
        return recommendation
        
    except ValueError as e:
        raise HTTPException(
            status_code=status.HTTP_400_BAD_REQUEST,
            detail=str(e)
        )
    except Exception as e:
        raise HTTPException(
            status_code=status.HTTP_500_INTERNAL_SERVER_ERROR,
            detail=f"Erreur lors de la recommandation: {str(e)}"
        )


@app.post("/batch_predict_attendance")
async def batch_predict_attendance(seances: List[SeanceFeatures]):
    """
    Prédit l'assiduité pour plusieurs séances en batch.
    
    Args:
        seances: Liste des caractéristiques des séances
        
    Returns:
        List[PredictionResponse]: Liste des prédictions
    """
    try:
        if not model_service.is_model_available():
            raise HTTPException(
                status_code=status.HTTP_503_SERVICE_UNAVAILABLE,
                detail="Modèle non disponible. Veuillez d'abord entraîner le modèle"
            )
        
        if len(seances) > 100:
            raise HTTPException(
                status_code=status.HTTP_400_BAD_REQUEST,
                detail="Maximum 100 séances par batch"
            )
        
        predictions = []
        for seance in seances:
            try:
                prediction = model_service.predict_attendance(seance)
                predictions.append(prediction)
            except ValueError as e:
                predictions.append({
                    "error": str(e),
                    "seance_id": getattr(seance, 'seance_id', None)
                })
        
        return {"predictions": predictions, "total": len(seances)}
        
    except Exception as e:
        raise HTTPException(
            status_code=status.HTTP_500_INTERNAL_SERVER_ERROR,
            detail=f"Erreur lors du traitement batch: {str(e)}"
        )


if __name__ == "__main__":
    import uvicorn
    uvicorn.run(app, host="0.0.0.0", port=8000, reload=True)