"""
Service de gestion du modèle ML pour la prédiction d'assiduité.
"""

import os
import json
import numpy as np
import pandas as pd
import joblib
from typing import Dict, Any, Optional, Tuple
from sklearn.compose import ColumnTransformer
from sklearn.preprocessing import OneHotEncoder
from sklearn.pipeline import Pipeline

from ..schemas import SeanceFeatures, PredictionResponse
from .feature_engineering import generate_explanations, calculate_confidence, validate_features


class ModelService:
    """Service pour charger et utiliser le modèle ML."""
    
    def __init__(self, model_path: str = "models/attendance_model.joblib", 
                 metadata_path: str = "models/metadata.json"):
        self.model_path = model_path
        self.metadata_path = metadata_path
        self.model = None
        self.metadata = None
        self.feature_columns = None
        self._load_model()
    
    def _load_model(self) -> None:
        """Charge le modèle et ses métadonnées."""
        try:
            if os.path.exists(self.model_path) and os.path.exists(self.metadata_path):
                self.model = joblib.load(self.model_path)
                with open(self.metadata_path, 'r') as f:
                    self.metadata = json.load(f)
                self.feature_columns = self.metadata.get('feature_columns', [])
                print(f"Modèle chargé avec succès. Features: {len(self.feature_columns)}")
            else:
                print("Modèle non trouvé. Veuillez d'abord entraîner le modèle.")
        except Exception as e:
            print(f"Erreur lors du chargement du modèle: {e}")
    
    def is_model_available(self) -> bool:
        """Vérifie si le modèle est disponible."""
        return self.model is not None and self.metadata is not None
    
    def _prepare_features(self, features_dict: Dict[str, Any]) -> np.ndarray:
        """
        Prépare les caractéristiques pour la prédiction.
        
        Args:
            features_dict: Dictionnaire des caractéristiques
            
        Returns:
            np.ndarray: Caractéristiques préparées pour le modèle
        """
        # Créer un DataFrame avec une seule ligne
        df = pd.DataFrame([features_dict])
        
        # S'assurer que toutes les colonnes requises sont présentes
        for col in self.feature_columns:
            if col not in df.columns:
                df[col] = 0  # Valeur par défaut
        
        # Maintenant utiliser le pipeline complet pour la transformation
        features_transformed = self.model.named_steps['preprocessor'].transform(df)
        
        return features_transformed
    
    def predict_attendance(self, seance_features: SeanceFeatures) -> PredictionResponse:
        """
        Prédit le nombre de présents pour une séance.
        
        Args:
            seance_features: Caractéristiques de la séance
            
        Returns:
            PredictionResponse: Résultat de la prédiction
        """
        if not self.is_model_available():
            raise ValueError("Modèle non disponible. Veuillez d'abord entraîner le modèle.")
        
        # Convertir en dictionnaire
        features_dict = seance_features.model_dump()
        
        # Valider les caractéristiques
        validation_errors = validate_features(features_dict)
        if validation_errors:
            raise ValueError(f"Erreurs de validation: {'; '.join(validation_errors)}")
        
        # Préparer les caractéristiques
        try:
            features_prepared = self._prepare_features(features_dict)
            
            # Faire la prédiction
            prediction = self.model.named_steps['regressor'].predict(features_prepared)[0]
            predicted_attendance = max(0, int(round(prediction)))
            
            # Calculer la confiance
            mae = self.metadata.get('metrics', {}).get('mae', 5.0)
            confidence = calculate_confidence(mae, predicted_attendance)
            
            # Générer les explications
            explanations = generate_explanations(features_dict)
            
            return PredictionResponse(
                predicted_attendance=predicted_attendance,
                confidence=confidence,
                explain=explanations
            )
            
        except Exception as e:
            raise ValueError(f"Erreur lors de la prédiction: {str(e)}")
    
    def get_model_info(self) -> Dict[str, Any]:
        """
        Retourne les informations du modèle.
        
        Returns:
            Dict[str, Any]: Métadonnées du modèle
        """
        if not self.is_model_available():
            return {"error": "Modèle non disponible"}
        
        return {
            "model_type": self.metadata.get("model_type", "Unknown"),
            "version": self.metadata.get("version", "Unknown"),
            "training_date": self.metadata.get("training_date", "Unknown"),
            "features_count": len(self.feature_columns),
            "metrics": self.metadata.get("metrics", {}),
            "feature_columns": self.feature_columns
        }