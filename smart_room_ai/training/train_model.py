"""
Script d'entraînement du modèle de prédiction d'assiduité.
"""

import os
import json
import pandas as pd
import numpy as np
import joblib
from datetime import datetime
from typing import Dict, Any, Tuple

from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestRegressor
from sklearn.linear_model import LinearRegression
from sklearn.compose import ColumnTransformer
from sklearn.preprocessing import OneHotEncoder, StandardScaler
from sklearn.pipeline import Pipeline
from sklearn.metrics import mean_absolute_error, mean_squared_error, r2_score


class ModelTrainer:
    """Classe pour entraîner et évaluer le modèle de prédiction d'assiduité."""
    
    def __init__(self, data_path: str = "app/data/sample_dataset.csv",
                 model_output_path: str = "models/attendance_model.joblib",
                 metadata_output_path: str = "models/metadata.json"):
        self.data_path = data_path
        self.model_output_path = model_output_path
        self.metadata_output_path = metadata_output_path
        
        # Définir les colonnes
        self.target_column = "attendance_real"
        self.id_columns = ["seance_id"]
        
        self.categorical_features = ["type_seance", "mode", "matiere", "groupe"]
        self.numerical_features = [
            "jour_semaine", "heure_debut", "duree_min", "salle_capacite_initiale",
            "moy_presence_groupe_30j", "taux_absence_groupe_30j", 
            "presence_moyenne_matiere", "presence_moyenne_creneau"
        ]
        
        self.feature_columns = self.categorical_features + self.numerical_features
        
        # Créer le répertoire models si nécessaire
        os.makedirs(os.path.dirname(model_output_path), exist_ok=True)
        
    def load_data(self) -> pd.DataFrame:
        """Charge et prépare les données."""
        if not os.path.exists(self.data_path):
            raise FileNotFoundError(f"Fichier de données non trouvé: {self.data_path}")
        
        print(f"Chargement des données depuis: {self.data_path}")
        df = pd.read_csv(self.data_path)
        print(f"Données chargées: {len(df)} lignes, {len(df.columns)} colonnes")
        
        # Vérifier les colonnes requises
        required_columns = self.feature_columns + [self.target_column]
        missing_columns = [col for col in required_columns if col not in df.columns]
        if missing_columns:
            raise ValueError(f"Colonnes manquantes: {missing_columns}")
        
        return df
    
    def preprocess_data(self, df: pd.DataFrame) -> Tuple[pd.DataFrame, pd.Series]:
        """Prétraite les données."""
        print("Prétraitement des données...")
        
        # Supprimer les lignes avec des valeurs manquantes
        df_clean = df.dropna()
        print(f"  Après suppression des NaN: {len(df_clean)} lignes")
        
        # Vérifier les valeurs aberrantes
        print("  Vérification des valeurs aberrantes...")
        
        # Assiduité ne peut pas être négative ni dépasser la capacité
        df_clean = df_clean[
            (df_clean[self.target_column] >= 0) & 
            (df_clean[self.target_column] <= df_clean['salle_capacite_initiale'])
        ]
        print(f"  Après filtrage: {len(df_clean)} lignes")
        
        # Séparer features et target
        X = df_clean[self.feature_columns]
        y = df_clean[self.target_column]
        
        print(f"  Features shape: {X.shape}")
        print(f"  Target shape: {y.shape}")
        
        return X, y
    
    def create_preprocessor(self) -> ColumnTransformer:
        """Crée le préprocesseur pour les features."""
        print("Création du préprocesseur...")
        
        preprocessor = ColumnTransformer(
            transformers=[
                ('num', StandardScaler(), self.numerical_features),
                ('cat', OneHotEncoder(handle_unknown='ignore', sparse_output=False), 
                 self.categorical_features)
            ]
        )
        
        return preprocessor
    
    def train_models(self, X: pd.DataFrame, y: pd.Series) -> Dict[str, Pipeline]:
        """Entraîne plusieurs modèles et retourne le meilleur."""
        print("Entraînement des modèles...")
        
        # Diviser les données
        X_train, X_test, y_train, y_test = train_test_split(
            X, y, test_size=0.2, random_state=42
        )
        print(f"  Train set: {len(X_train)} samples")
        print(f"  Test set: {len(X_test)} samples")
        
        # Créer le préprocesseur
        preprocessor = self.create_preprocessor()
        
        # Définir les modèles
        models = {
            'random_forest': Pipeline([
                ('preprocessor', preprocessor),
                ('regressor', RandomForestRegressor(
                    n_estimators=100, 
                    random_state=42,
                    n_jobs=-1
                ))
            ]),
            'linear_regression': Pipeline([
                ('preprocessor', preprocessor),
                ('regressor', LinearRegression())
            ])
        }
        
        # Entraîner et évaluer chaque modèle
        results = {}
        for name, pipeline in models.items():
            print(f"\n  Entraînement de {name}...")
            pipeline.fit(X_train, y_train)
            
            # Prédictions
            y_pred = pipeline.predict(X_test)
            
            # Métriques
            mae = mean_absolute_error(y_test, y_pred)
            rmse = np.sqrt(mean_squared_error(y_test, y_pred))
            r2 = r2_score(y_test, y_pred)
            
            results[name] = {
                'pipeline': pipeline,
                'mae': mae,
                'rmse': rmse,
                'r2': r2
            }
            
            print(f"    MAE: {mae:.2f}")
            print(f"    RMSE: {rmse:.2f}")
            print(f"    R²: {r2:.3f}")
        
        # Choisir le meilleur modèle (basé sur MAE)
        best_model_name = min(results.keys(), key=lambda k: results[k]['mae'])
        best_model = results[best_model_name]['pipeline']
        best_metrics = {k: v for k, v in results[best_model_name].items() if k != 'pipeline'}
        
        print(f"\nMeilleur modèle: {best_model_name}")
        print(f"  MAE: {best_metrics['mae']:.2f}")
        print(f"  RMSE: {best_metrics['rmse']:.2f}")
        print(f"  R²: {best_metrics['r2']:.3f}")
        
        return best_model, best_metrics, results
    
    def get_feature_names(self, pipeline: Pipeline) -> list:
        """Extrait les noms des features après transformation."""
        # Accéder au préprocesseur
        preprocessor = pipeline.named_steps['preprocessor']
        
        feature_names = []
        
        # Features numériques (passent par StandardScaler)
        numerical_features = preprocessor.transformers_[0][2]
        feature_names.extend(numerical_features)
        
        # Features catégorielles (passent par OneHotEncoder)
        cat_transformer = preprocessor.transformers_[1][1]
        cat_features = preprocessor.transformers_[1][2]
        
        if hasattr(cat_transformer, 'get_feature_names_out'):
            cat_feature_names = cat_transformer.get_feature_names_out(cat_features)
        else:
            # Pour les versions plus anciennes de sklearn
            cat_feature_names = []
            for feature in cat_features:
                categories = cat_transformer.categories_[cat_features.index(feature)]
                for category in categories:
                    cat_feature_names.append(f"{feature}_{category}")
        
        feature_names.extend(cat_feature_names)
        
        return feature_names
    
    def save_model_and_metadata(self, model: Pipeline, metrics: Dict[str, float], 
                                all_results: Dict[str, Any]) -> None:
        """Sauvegarde le modèle et ses métadonnées."""
        print("Sauvegarde du modèle et des métadonnées...")
        
        # Sauvegarder le modèle
        joblib.dump(model, self.model_output_path)
        print(f"  Modèle sauvegardé: {self.model_output_path}")
        
        # Obtenir les noms de features
        feature_names = self.get_feature_names(model)
        
        # Créer les métadonnées
        metadata = {
            "model_type": "RandomForestRegressor" if "random_forest" in str(type(model.named_steps['regressor'])) else "LinearRegression",
            "version": "1.0.0",
            "training_date": datetime.now().isoformat(),
            "feature_columns": feature_names,
            "categorical_features": self.categorical_features,
            "numerical_features": self.numerical_features,
            "metrics": {
                "mae": float(metrics['mae']),
                "rmse": float(metrics['rmse']),
                "r2": float(metrics['r2'])
            },
            "data_path": self.data_path,
            "training_samples": len(pd.read_csv(self.data_path)),
            "all_models_results": {
                name: {
                    'mae': float(result['mae']),
                    'rmse': float(result['rmse']),
                    'r2': float(result['r2'])
                }
                for name, result in all_results.items()
            }
        }
        
        # Sauvegarder les métadonnées
        with open(self.metadata_output_path, 'w', encoding='utf-8') as f:
            json.dump(metadata, f, indent=2, ensure_ascii=False)
        
        print(f"  Métadonnées sauvegardées: {self.metadata_output_path}")
        print(f"  Nombre de features: {len(feature_names)}")
    
    def train(self) -> None:
        """Pipeline complet d'entraînement."""
        print("=" * 60)
        print("DÉBUT DE L'ENTRAÎNEMENT DU MODÈLE")
        print("=" * 60)
        
        try:
            # Charger les données
            df = self.load_data()
            
            # Prétraiter
            X, y = self.preprocess_data(df)
            
            # Entraîner les modèles
            best_model, best_metrics, all_results = self.train_models(X, y)
            
            # Sauvegarder
            self.save_model_and_metadata(best_model, best_metrics, all_results)
            
            print("\n" + "=" * 60)
            print("ENTRAÎNEMENT TERMINÉ AVEC SUCCÈS!")
            print("=" * 60)
            print(f"Modèle disponible: {self.model_output_path}")
            print(f"Métadonnées: {self.metadata_output_path}")
            print("\nVous pouvez maintenant lancer l'API:")
            print("  uvicorn app.main:app --reload")
            
        except Exception as e:
            print(f"\nERREUR lors de l'entraînement: {e}")
            raise


def main():
    """Fonction principale."""
    # Vérifier que le dataset existe
    data_path = os.path.join(os.path.dirname(os.path.dirname(__file__)), "app/data/sample_dataset.csv")
    if not os.path.exists(data_path):
        print("Dataset non trouvé. Génération en cours...")
        from generate_dataset import main as generate_main
        generate_main()
    
    # Entraîner le modèle
    trainer = ModelTrainer(data_path=data_path)
    trainer.train()


if __name__ == "__main__":
    main()