"""
Script d'évaluation du modèle de prédiction d'assiduité.
"""

import os
import json
import pandas as pd
import numpy as np
import joblib
import matplotlib.pyplot as plt
import seaborn as sns
from typing import Dict, Any, List, Tuple

from sklearn.model_selection import cross_val_score, KFold
from sklearn.metrics import (
    mean_absolute_error, mean_squared_error, r2_score,
    mean_absolute_percentage_error
)


class ModelEvaluator:
    """Classe pour évaluer le modèle de prédiction d'assiduité."""
    
    def __init__(self, model_path: str = "models/attendance_model.joblib",
                 metadata_path: str = "models/metadata.json",
                 data_path: str = "app/data/sample_dataset.csv"):
        self.model_path = model_path
        self.metadata_path = metadata_path
        self.data_path = data_path
        
        self.model = None
        self.metadata = None
        self.data = None
        
        self._load_model()
        self._load_data()
    
    def _load_model(self) -> None:
        """Charge le modèle et ses métadonnées."""
        if not os.path.exists(self.model_path):
            raise FileNotFoundError(f"Modèle non trouvé: {self.model_path}")
        
        if not os.path.exists(self.metadata_path):
            raise FileNotFoundError(f"Métadonnées non trouvées: {self.metadata_path}")
        
        self.model = joblib.load(self.model_path)
        
        with open(self.metadata_path, 'r') as f:
            self.metadata = json.load(f)
        
        print(f"Modèle chargé: {self.metadata['model_type']}")
        print(f"Date d'entraînement: {self.metadata['training_date']}")
        print(f"MAE entraînement: {self.metadata['metrics']['mae']:.2f}")
    
    def _load_data(self) -> None:
        """Charge les données de test."""
        if not os.path.exists(self.data_path):
            raise FileNotFoundError(f"Données non trouvées: {self.data_path}")
        
        self.data = pd.read_csv(self.data_path)
        print(f"Données chargées: {len(self.data)} lignes")
    
    def evaluate_on_test_split(self, test_size: float = 0.2) -> Dict[str, Any]:
        """Évalue le modèle sur un jeu de test."""
        print(f"\nÉvaluation sur split test ({test_size:.0%})...")
        
        from sklearn.model_selection import train_test_split
        
        # Préparer les données
        feature_columns = self.metadata['categorical_features'] + self.metadata['numerical_features']
        X = self.data[feature_columns]
        y = self.data['attendance_real']
        
        # Diviser
        X_train, X_test, y_train, y_test = train_test_split(
            X, y, test_size=test_size, random_state=42
        )
        
        # Prédictions
        y_pred = self.model.predict(X_test)
        
        # Métriques
        mae = mean_absolute_error(y_test, y_pred)
        rmse = np.sqrt(mean_squared_error(y_test, y_pred))
        r2 = r2_score(y_test, y_pred)
        mape = mean_absolute_percentage_error(y_test, y_pred)
        
        results = {
            'mae': mae,
            'rmse': rmse,
            'r2': r2,
            'mape': mape,
            'predictions': y_pred,
            'actual': y_test.values,
            'sample_size': len(y_test)
        }
        
        print(f"  MAE: {mae:.2f}")
        print(f"  RMSE: {rmse:.2f}")
        print(f"  R²: {r2:.3f}")
        print(f"  MAPE: {mape:.2%}")
        
        return results
    
    def cross_validation_evaluation(self, cv_folds: int = 5) -> Dict[str, Any]:
        """Évaluation par validation croisée."""
        print(f"\nValidation croisée ({cv_folds} folds)...")
        
        feature_columns = self.metadata['categorical_features'] + self.metadata['numerical_features']
        X = self.data[feature_columns]
        y = self.data['attendance_real']
        
        # Configuration de la validation croisée
        cv = KFold(n_splits=cv_folds, shuffle=True, random_state=42)
        
        # Scores
        mae_scores = -cross_val_score(self.model, X, y, cv=cv, 
                                     scoring='neg_mean_absolute_error')
        rmse_scores = np.sqrt(-cross_val_score(self.model, X, y, cv=cv,
                                               scoring='neg_mean_squared_error'))
        r2_scores = cross_val_score(self.model, X, y, cv=cv, scoring='r2')
        
        results = {
            'mae_mean': mae_scores.mean(),
            'mae_std': mae_scores.std(),
            'rmse_mean': rmse_scores.mean(),
            'rmse_std': rmse_scores.std(),
            'r2_mean': r2_scores.mean(),
            'r2_std': r2_scores.std(),
            'mae_scores': mae_scores,
            'rmse_scores': rmse_scores,
            'r2_scores': r2_scores
        }
        
        print(f"  MAE: {results['mae_mean']:.2f} ± {results['mae_std']:.2f}")
        print(f"  RMSE: {results['rmse_mean']:.2f} ± {results['rmse_std']:.2f}")
        print(f"  R²: {results['r2_mean']:.3f} ± {results['r2_std']:.3f}")
        
        return results
    
    def feature_importance_analysis(self) -> Dict[str, Any]:
        """Analyse de l'importance des features."""
        print("\nAnalyse de l'importance des features...")
        
        feature_names = self.metadata['feature_columns']
        
        # Importance des features (si disponible)
        if hasattr(self.model.named_steps['regressor'], 'feature_importances_'):
            importances = self.model.named_steps['regressor'].feature_importances_
            
            # Créer un DataFrame
            importance_df = pd.DataFrame({
                'feature': feature_names,
                'importance': importances
            }).sort_values('importance', ascending=False)
            
            print("Top 10 features les plus importantes:")
            for _, row in importance_df.head(10).iterrows():
                print(f"  {row['feature']}: {row['importance']:.4f}")
            
            return {
                'importances': importance_df.to_dict('records'),
                'top_features': importance_df.head(10)['feature'].tolist()
            }
        else:
            print("Le modèle ne supporte pas l'analyse d'importance des features")
            return {'error': 'Feature importance not supported'}
    
    def error_analysis(self, y_true: np.ndarray, y_pred: np.ndarray) -> Dict[str, Any]:
        """Analyse détaillée des erreurs."""
        print("\nAnalyse des erreurs...")
        
        errors = np.abs(y_true - y_pred)
        relative_errors = errors / np.maximum(y_true, 1)
        
        # Statistiques des erreurs
        results = {
            'mean_error': np.mean(errors),
            'median_error': np.median(errors),
            'std_error': np.std(errors),
            'max_error': np.max(errors),
            'min_error': np.min(errors),
            'mean_relative_error': np.mean(relative_errors),
            'median_relative_error': np.median(relative_errors),
            'large_errors_count': np.sum(errors > 10),
            'small_errors_count': np.sum(errors <= 3)
        }
        
        print(f"  Erreur moyenne: {results['mean_error']:.2f}")
        print(f"  Erreur médiane: {results['median_error']:.2f}")
        print(f"  Erreur max: {results['max_error']:.2f}")
        print(f"  Erreur relative moyenne: {results['mean_relative_error']:.2%}")
        print(f"  Grandes erreurs (>10): {results['large_errors_count']}")
        print(f"  Petites erreurs (<=3): {results['small_errors_count']}")
        
        return results
    
    def generate_evaluation_report(self) -> Dict[str, Any]:
        """Génère un rapport d'évaluation complet."""
        print("=" * 60)
        print("RAPPORT D'ÉVALUATION COMPLET")
        print("=" * 60)
        
        # Évaluation sur split test
        test_results = self.evaluate_on_test_split()
        
        # Validation croisée
        cv_results = self.cross_validation_evaluation()
        
        # Importance des features
        feature_results = self.feature_importance_analysis()
        
        # Analyse des erreurs
        error_results = self.error_analysis(test_results['actual'], test_results['predictions'])
        
        # Rapport complet
        report = {
            'model_info': {
                'type': self.metadata['model_type'],
                'training_date': self.metadata['training_date'],
                'features_count': len(self.metadata['feature_columns'])
            },
            'test_evaluation': {
                'mae': test_results['mae'],
                'rmse': test_results['rmse'],
                'r2': test_results['r2'],
                'mape': test_results['mape']
            },
            'cross_validation': {
                'mae_mean': cv_results['mae_mean'],
                'mae_std': cv_results['mae_std'],
                'rmse_mean': cv_results['rmse_mean'],
                'r2_mean': cv_results['r2_mean']
            },
            'error_analysis': error_results,
            'feature_importance': feature_results,
            'training_vs_test_comparison': {
                'training_mae': self.metadata['metrics']['mae'],
                'test_mae': test_results['mae'],
                'mae_difference': test_results['mae'] - self.metadata['metrics']['mae']
            }
        }
        
        # Sauvegarder le rapport
        report_path = "models/evaluation_report.json"
        with open(report_path, 'w', encoding='utf-8') as f:
            json.dump(report, f, indent=2, ensure_ascii=False)
        
        print(f"\nRapport sauvegardé: {report_path}")
        
        # Conclusion
        print("\n" + "=" * 60)
        print("CONCLUSION")
        print("=" * 60)
        
        mae_diff = report['training_vs_test_comparison']['mae_difference']
        if abs(mae_diff) < 1:
            print("✅ Le modèle généralise bien (différence MAE < 1)")
        elif abs(mae_diff) < 2:
            print("⚠️  Le modèle généralise moyennement (différence MAE entre 1 et 2)")
        else:
            print("❌ Le modèle semble overfitter (différence MAE > 2)")
        
        if test_results['r2'] > 0.7:
            print("✅ Bon pouvoir explicatif (R² > 0.7)")
        elif test_results['r2'] > 0.5:
            print("⚠️  Pouvoir explicatif moyen (R² entre 0.5 et 0.7)")
        else:
            print("❌ Faible pouvoir explicatif (R² < 0.5)")
        
        return report
    
    def create_visualizations(self) -> None:
        """Crée des visualisations pour l'analyse."""
        print("\nCréation des visualisations...")
        
        # Évaluation sur test pour obtenir les prédictions
        test_results = self.evaluate_on_test_split()
        
        # Créer le répertoire plots
        os.makedirs("plots", exist_ok=True)
        
        # 1. Scatter plot predictions vs actual
        plt.figure(figsize=(10, 6))
        plt.scatter(test_results['actual'], test_results['predictions'], alpha=0.6)
        plt.plot([0, max(test_results['actual'])], [0, max(test_results['actual'])], 'r--')
        plt.xlabel('Présence réelle')
        plt.ylabel('Présence prédite')
        plt.title('Prédictions vs Réalité')
        plt.grid(True, alpha=0.3)
        plt.savefig('plots/predictions_vs_actual.png', dpi=300, bbox_inches='tight')
        plt.close()
        
        # 2. Distribution des erreurs
        errors = test_results['actual'] - test_results['predictions']
        plt.figure(figsize=(10, 6))
        plt.hist(errors, bins=30, alpha=0.7, edgecolor='black')
        plt.xlabel('Erreur (réel - prédit)')
        plt.ylabel('Fréquence')
        plt.title('Distribution des erreurs de prédiction')
        plt.grid(True, alpha=0.3)
        plt.savefig('plots/error_distribution.png', dpi=300, bbox_inches='tight')
        plt.close()
        
        # 3. Feature importance (si disponible)
        feature_results = self.feature_importance_analysis()
        if 'importances' in feature_results:
            importance_df = pd.DataFrame(feature_results['importances'])
            top_features = importance_df.head(10)
            
            plt.figure(figsize=(12, 8))
            plt.barh(range(len(top_features)), top_features['importance'])
            plt.yticks(range(len(top_features)), top_features['feature'])
            plt.xlabel('Importance')
            plt.title('Top 10 des features les plus importantes')
            plt.tight_layout()
            plt.savefig('plots/feature_importance.png', dpi=300, bbox_inches='tight')
            plt.close()
        
        print("Visualisations sauvegardées dans le répertoire 'plots/'")


def main():
    """Fonction principale."""
    try:
        evaluator = ModelEvaluator()
        
        # Rapport complet
        report = evaluator.generate_evaluation_report()
        
        # Visualisations
        evaluator.create_visualizations()
        
        print("\nÉvaluation terminée avec succès!")
        print("Fichiers générés:")
        print("  - models/evaluation_report.json")
        print("  - plots/predictions_vs_actual.png")
        print("  - plots/error_distribution.png")
        print("  - plots/feature_importance.png")
        
    except Exception as e:
        print(f"Erreur lors de l'évaluation: {e}")
        raise


if __name__ == "__main__":
    main()