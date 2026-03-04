"""
Script de génération de dataset d'exemple pour l'entraînement du modèle d'assiduité.
"""

import pandas as pd
import numpy as np
import random
from typing import List, Tuple
import os


class DatasetGenerator:
    """Générateur de dataset réaliste pour la prédiction d'assiduité."""
    
    def __init__(self, num_samples: int = 2000, random_state: int = 42):
        self.num_samples = num_samples
        self.random_state = random_state
        np.random.seed(random_state)
        random.seed(random_state)
        
        # Définition des variables
        self.types_seance = ['TP', 'TD', 'COURS']
        self.modes = ['presentiel', 'hybride', 'en_ligne']
        self.matieres = ['Maths', 'Physique', 'Chimie', 'Informatique', 'Biologie', 
                        'Français', 'Anglais', 'Histoire', 'Économie', 'Sport']
        self.groupes = ['G1A', 'G1B', 'G2A', 'G2B', 'G3A', 'G3B', 'L1', 'L2', 'L3', 'M1', 'M2']
        
    def _generate_heure_debut(self) -> int:
        """Génère une heure de début réaliste avec une distribution."""
        # Heures plus probables: 10h, 14h, 16h
        heures_poids = [8, 9, 10, 11, 14, 15, 16, 17, 18]
        poids = [1, 2, 3, 2, 3, 2, 3, 2, 1]
        return np.random.choice(heures_poids, p=np.array(poids)/sum(poids))
    
    def _calculate_base_attendance(self, features: dict) -> float:
        """
        Calcule une base d'assiduité en fonction des caractéristiques.
        Retourne un ratio entre 0 et 1.
        """
        base = 0.5  # Base neutre
        
        # Impact de l'heure
        heure = features['heure_debut']
        if heure <= 9:
            base -= 0.15  # Tôt le matin
        elif heure >= 17:
            base -= 0.10  # Fin de journée
        elif 10 <= heure <= 12 or 14 <= heure <= 16:
            base += 0.10  # Créneaux optimaux
        
        # Impact du mode
        mode = features['mode']
        if mode == 'en_ligne':
            base -= 0.25
        elif mode == 'hybride':
            base -= 0.10
        else:  # presentiel
            base += 0.05
        
        # Impact du type de séance
        type_seance = features['type_seance']
        if type_seance == 'TP':
            base += 0.20
        elif type_seance == 'TD':
            base += 0.10
        else:  # COURS
            base += 0.00
        
        # Impact de la durée
        duree = features['duree_min']
        if duree >= 180:
            base -= 0.10  # Trop long
        elif duree <= 60:
            base += 0.05  # Court et efficace
        
        # Impact du jour de la semaine
        jour = features['jour_semaine']
        if jour == 1:  # Lundi
            base -= 0.05
        elif jour == 5:  # Vendredi
            base -= 0.10
        elif jour >= 6:  # Week-end
            base -= 0.20
        
        return np.clip(base, 0.1, 0.9)
    
    def _generate_sample(self, index: int) -> dict:
        """Génère un échantillon de données."""
        # Caractéristiques de base
        sample = {
            'seance_id': index + 1,
            'jour_semaine': np.random.randint(0, 7),
            'heure_debut': self._generate_heure_debut(),
            'duree_min': np.random.choice([60, 90, 120, 150, 180], p=[0.2, 0.3, 0.3, 0.1, 0.1]),
            'type_seance': np.random.choice(self.types_seance),
            'mode': np.random.choice(self.modes, p=[0.6, 0.2, 0.2]),
            'matiere': np.random.choice(self.matieres),
            'groupe': np.random.choice(self.groupes),
            'salle_capacite_initiale': np.random.choice([10, 12, 15, 18, 20, 22, 25, 30, 35, 40], 
                                                       p=[0.1, 0.1, 0.15, 0.1, 0.15, 0.1, 0.1, 0.1, 0.05, 0.05])
        }
        
        # Caractéristiques historiques corrélées
        base_attendance = self._calculate_base_attendance(sample)
        
        # Moyennes de présence du groupe (corrélées avec les caractéristiques)
        sample['moy_presence_groupe_30j'] = np.clip(
            np.random.normal(base_attendance, 0.1), 0.1, 0.95
        )
        
        # Taux d'absence (inverse de la présence avec bruit)
        sample['taux_absence_groupe_30j'] = np.clip(
            np.random.normal(1 - sample['moy_presence_groupe_30j'], 0.05), 0.05, 0.9
        )
        
        # Moyennes par matière
        matiere_impact = {
            'Maths': 0.7, 'Physique': 0.75, 'Chimie': 0.8, 'Informatique': 0.85,
            'Biologie': 0.75, 'Français': 0.65, 'Anglais': 0.8, 'Histoire': 0.6,
            'Économie': 0.7, 'Sport': 0.9
        }
        matiere_base = matiere_impact.get(sample['matiere'], 0.7)
        sample['presence_moyenne_matiere'] = np.clip(
            np.random.normal(matiere_base, 0.08), 0.2, 0.95
        )
        
        # Moyennes par créneau
        creneau_impact = 0.5
        if sample['heure_debut'] <= 9:
            creneau_impact = 0.4
        elif 10 <= sample['heure_debut'] <= 12:
            creneau_impact = 0.75
        elif 14 <= sample['heure_debut'] <= 16:
            creneau_impact = 0.8
        elif sample['heure_debut'] >= 17:
            creneau_impact = 0.5
            
        sample['presence_moyenne_creneau'] = np.clip(
            np.random.normal(creneau_impact, 0.1), 0.1, 0.9
        )
        
        # Calcul du nombre réel de présents
        # Combine les facteurs historiques avec les caractéristiques actuelles
        presence_factor = (
            sample['moy_presence_groupe_30j'] * 0.3 +
            (1 - sample['taux_absence_groupe_30j']) * 0.2 +
            sample['presence_moyenne_matiere'] * 0.25 +
            sample['presence_moyenne_creneau'] * 0.15 +
            base_attendance * 0.1
        )
        
        # Ajouter du bruit réaliste
        noise = np.random.normal(0, 0.05)
        final_factor = np.clip(presence_factor + noise, 0.1, 0.95)
        
        # Nombre de présents borné par la capacité de la salle
        max_possible = sample['salle_capacite_initiale']
        predicted = int(round(max_possible * final_factor))
        
        # Ajouter une variabilité réaliste: parfois la salle n'est pas pleine même si capacité grande
        if predicted > max_possible * 0.9 and sample['salle_capacite_initiale'] > 20:
            predicted = int(np.random.normal(predicted * 0.85, 2))
        
        sample['attendance_real'] = np.clip(predicted, 0, max_possible)
        
        return sample
    
    def generate_dataset(self) -> pd.DataFrame:
        """Génère le dataset complet."""
        print(f"Génération de {self.num_samples} échantillons...")
        
        data = []
        for i in range(self.num_samples):
            sample = self._generate_sample(i)
            data.append(sample)
            
            if (i + 1) % 500 == 0:
                print(f"  {i + 1}/{self.num_samples} échantillons générés")
        
        df = pd.DataFrame(data)
        
        # S'assurer que toutes les colonnes sont dans le bon ordre
        columns_order = [
            'seance_id', 'jour_semaine', 'heure_debut', 'duree_min', 'type_seance', 'mode',
            'matiere', 'groupe', 'salle_capacite_initiale', 'moy_presence_groupe_30j',
            'taux_absence_groupe_30j', 'presence_moyenne_matiere', 'presence_moyenne_creneau',
            'attendance_real'
        ]
        df = df[columns_order]
        
        print(f"Dataset généré avec succès: {len(df)} lignes, {len(df.columns)} colonnes")
        return df
    
    def save_dataset(self, df: pd.DataFrame, output_path: str = "app/data/sample_dataset.csv"):
        """Sauvegarde le dataset en CSV."""
        # Créer le répertoire si nécessaire
        os.makedirs(os.path.dirname(output_path), exist_ok=True)
        
        df.to_csv(output_path, index=False)
        print(f"Dataset sauvegardé dans: {output_path}")
        
        # Afficher des statistiques
        print("\nStatistiques du dataset:")
        print(f"  - Nombre de séances: {len(df)}")
        print(f"  - Présence moyenne: {df['attendance_real'].mean():.1f}")
        print(f"  - Capacité moyenne: {df['salle_capacite_initiale'].mean():.1f}")
        print(f"  - Taux de remplissage moyen: {(df['attendance_real'] / df['salle_capacite_initiale']).mean():.2%}")
        print(f"  - Types de séance: {df['type_seance'].value_counts().to_dict()}")
        print(f"  - Modes: {df['mode'].value_counts().to_dict()}")


def main():
    """Fonction principale."""
    generator = DatasetGenerator(num_samples=2500, random_state=42)
    
    # Générer le dataset
    df = generator.generate_dataset()
    
    # Sauvegarder
    output_path = os.path.join(os.path.dirname(os.path.dirname(__file__)), "app/data/sample_dataset.csv")
    generator.save_dataset(df, output_path)
    
    print("\nDataset généré avec succès!")
    print("Vous pouvez maintenant entraîner le modèle avec: python training/train_model.py")


if __name__ == "__main__":
    main()