# Smart Room AI - Système de Prédiction d'Assiduité et Recommandation de Salles

Un projet complet de Machine Learning pour prédire le nombre d'étudiants présents à une séance et recommander la salle optimale.

## 🎯 Fonctionnalités

- **Prédiction d'assiduité** : Modèle de régression qui prédit le nombre réel d'étudiants présents
- **Recommandation de salles** : Suggestion de la salle optimale en fonction de la prédiction
- **API FastAPI** : Endpoints RESTful pour l'intégration
- **Dataset réaliste** : Génération automatique de données d'entraînement
- **Évaluation complète** : Métriques détaillées et visualisations

## 📋 Prérequis

- Python 3.10+
- pip ou conda

## 🚀 Installation

1. **Cloner le projet** (si applicable) ou naviguer vers le répertoire `smart_room_ai`

2. **Créer un environnement virtuel** :
   ```bash
   python -m venv venv
   
   # Windows
   venv\Scripts\activate
   
   # Linux/Mac
   source venv/bin/activate
   ```

3. **Installer les dépendances** :
   ```bash
   pip install -r requirements.txt
   ```

## 📊 Structure du Projet

```
smart_room_ai/
├── app/
│   ├── main.py                 # Application FastAPI
│   ├── schemas.py              # Modèles Pydantic
│   ├── services/
│   │   ├── model_service.py    # Service ML
│   │   ├── recommendation_service.py  # Service de recommandation
│   │   └── feature_engineering.py     # Utilitaires
│   └── data/
│       ├── rooms.json          # Salles disponibles
│       └── sample_dataset.csv  # Dataset d'entraînement
├── training/
│   ├── generate_dataset.py     # Génération du dataset
│   ├── train_model.py          # Entraînement du modèle
│   └── evaluate.py             # Évaluation du modèle
├── models/
│   ├── attendance_model.joblib # Modèle entraîné
│   └── metadata.json           # Métadonnées
├── plots/                      # Visualisations (générées)
└── requirements.txt            # Dépendances Python
```

## 🔧 Utilisation

### 1. Générer le dataset

Si vous n'avez pas de données, générez un dataset réaliste :

```bash
python training/generate_dataset.py
```

Cela crée un fichier `app/data/sample_dataset.csv` avec 2500 séances réalistes.

### 2. Entraîner le modèle

```bash
python training/train_model.py
```

Le script va :
- Charger et prétraiter les données
- Entraîner plusieurs modèles (RandomForest, LinearRegression)
- Sélectionner le meilleur modèle
- Sauvegarder le modèle dans `models/attendance_model.joblib`
- Générer les métadonnées dans `models/metadata.json`

### 3. Évaluer le modèle (optionnel)

```bash
python training/evaluate.py
```

Génère un rapport d'évaluation complet avec :
- Métriques détaillées (MAE, RMSE, R²)
- Validation croisée
- Analyse des erreurs
- Importance des features
- Visualisations dans le répertoire `plots/`

### 4. Lancer l'API

```bash
uvicorn app.main:app --reload
```

L'API sera accessible sur `http://localhost:8000`

## 📡 API Endpoints

### Health Check
```http
GET http://localhost:8000/
```

### Prédiction d'assiduité
```http
POST http://localhost:8000/predict_attendance
Content-Type: application/json

{
  "jour_semaine": 1,
  "heure_debut": 14,
  "duree_min": 120,
  "type_seance": "TD",
  "mode": "presentiel",
  "matiere": "Maths",
  "groupe": "L1",
  "salle_capacite_initiale": 25,
  "moy_presence_groupe_30j": 0.8,
  "taux_absence_groupe_30j": 0.2,
  "presence_moyenne_matiere": 0.75,
  "presence_moyenne_creneau": 0.8
}
```

**Réponse** :
```json
{
  "predicted_attendance": 20,
  "confidence": 0.85,
  "explain": [
    "Créneau 14h => bonne présence attendue",
    "Mode présentiel => bonne présence attendue",
    "TD => présence modérée (travaux dirigés)",
    "Moyenne groupe élevée (0.80) => hausse attendue"
  ]
}
```

### Recommandation de salle
```http
POST http://localhost:8000/recommend_room
Content-Type: application/json

{
  "seance": {
    "jour_semaine": 1,
    "heure_debut": 14,
    "duree_min": 120,
    "type_seance": "TD",
    "mode": "presentiel",
    "matiere": "Maths",
    "groupe": "L1",
    "salle_capacite_initiale": 25,
    "moy_presence_groupe_30j": 0.8,
    "taux_absence_groupe_30j": 0.2,
    "presence_moyenne_matiere": 0.75,
    "presence_moyenne_creneau": 0.8
  },
  "available_rooms": [
    {"id": "B204", "bloc": "B", "etage": 2, "capacite": 25, "is_available": true},
    {"id": "C301", "bloc": "C", "etage": 3, "capacite": 20, "is_available": true}
  ],
  "margin_ratio": 0.10
}
```

**Réponse** :
```json
{
  "predicted_attendance": 20,
  "capacity_required": 22,
  "recommended_room": {
    "id": "B204",
    "bloc": "B", 
    "etage": 2,
    "capacite": 25,
    "is_available": true
  },
  "alternatives": [],
  "message": "Salle recommandée: B204 (capacité: 25, bloc: B2) pour 20 étudiants prévus (marge: 10%)"
}
```

## 🧪 Exemples curl

### Prédiction
```bash
curl -X POST "http://localhost:8000/predict_attendance" \
     -H "Content-Type: application/json" \
     -d '{
       "jour_semaine": 3,
       "heure_debut": 10,
       "duree_min": 90,
       "type_seance": "TP",
       "mode": "presentiel", 
       "matiere": "Informatique",
       "groupe": "L2",
       "salle_capacite_initiale": 20,
       "moy_presence_groupe_30j": 0.9,
       "taux_absence_groupe_30j": 0.1,
       "presence_moyenne_matiere": 0.85,
       "presence_moyenne_creneau": 0.75
     }'
```

### Recommandation
```bash
curl -X POST "http://localhost:8000/recommend_room" \
     -H "Content-Type: application/json" \
     -d '{
       "seance": {
         "jour_semaine": 3,
         "heure_debut": 10,
         "duree_min": 90,
         "type_seance": "TP",
         "mode": "presentiel",
         "matiere": "Informatique", 
         "groupe": "L2",
         "salle_capacite_initiale": 20,
         "moy_presence_groupe_30j": 0.9,
         "taux_absence_groupe_30j": 0.1,
         "presence_moyenne_matiere": 0.85,
         "presence_moyenne_creneau": 0.75
       },
       "available_rooms": [
         {"id": "A101", "bloc": "A", "etage": 1, "capacite": 15, "is_available": false},
         {"id": "A102", "bloc": "A", "etage": 1, "capacite": 20, "is_available": true},
         {"id": "B204", "bloc": "B", "etage": 2, "capacite": 25, "is_available": true}
       ],
       "margin_ratio": 0.15
     }'
```

## 📈 Caractéristiques du Modèle

### Features utilisées
- **Temporelles** : `jour_semaine`, `heure_debut`, `duree_min`
- **Contextuelles** : `type_seance`, `mode`, `matiere`, `groupe`
- **Capacité** : `salle_capacite_initiale`
- **Historiques** : `moy_presence_groupe_30j`, `taux_absence_groupe_30j`
- **Tendances** : `presence_moyenne_matiere`, `presence_moyenne_creneau`

### Algorithmes
- **Principal** : RandomForestRegressor (meilleures performances)
- **Baseline** : LinearRegression (pour comparaison)

### Métriques typiques
- **MAE** : 2-4 étudiants (erreur moyenne absolue)
- **R²** : 0.7-0.85 (pouvoir explicatif)
- **RMSE** : 3-5 étudiants (erreur quadratique moyenne)

## 🛠️ Personnalisation

### Ajouter de nouvelles features
1. Modifier `training/generate_dataset.py` pour inclure les nouvelles colonnes
2. Mettre à jour `feature_columns` dans `training/train_model.py`
3. Relancer l'entraînement

### Modifier l'algorithme
Dans `training/train_model.py`, modifier la section `models = {...}` pour ajouter d'autres algorithmes.

### Ajuster les salles
Modifier `app/data/rooms.json` pour ajouter ou modifier les salles disponibles.

## 🐛 Dépannage

### Erreur "Modèle non disponible"
Solution : Exécutez d'abord `python training/train_model.py`

### Erreur "Dataset non trouvé"
Solution : Exécutez `python training/generate_dataset.py`

### Performances faibles
- Vérifiez la qualité des données
- Essayez différents hyperparamètres dans `train_model.py`
- Ajoutez plus de données ou de features pertinentes

## 📝 License

Ce projet est fourni à des fins éducatives et de démonstration.

## 🤝 Contribuer

Les contributions sont bienvenues ! N'hésitez pas à proposer des améliorations ou à signaler des problèmes.

---

**Développé pour l'application Student Assistant - Gestion Séance / Salle**