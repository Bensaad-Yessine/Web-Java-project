from fastapi import FastAPI
from pydantic import BaseModel
import joblib
import pandas as pd

app = FastAPI(title="Abandon Risk API")

# Charger le modèle au démarrage
model = joblib.load("abandon_model.pkl")

class AbandonFeatures(BaseModel):
    nb_jours_total: int
    nb_suivis: int
    regularite: float
    score_moyen: float
    score_debut: float
    score_fin: float
    progression: float
    std_score: float

def risk_text(risk_percent: int):
    if risk_percent >= 70:
        return {
            "riskLevel": "HIGH",
            "messageTitle": "Risque d’abandon élevé",
            "message": "Ta régularité baisse et ta progression est négative. Fais une action simple aujourd’hui et planifie une routine pour demain."
        }
    elif risk_percent >= 40:
        return {
            "riskLevel": "MEDIUM",
            "messageTitle": "Risque d’abandon moyen",
            "message": "Tu es un peu irrégulier. Essaie de faire au moins un suivi aujourd’hui pour garder le rythme."
        }
    else:
        return {
            "riskLevel": "LOW",
            "messageTitle": "Risque d’abandon faible",
            "message": "Tu es sur la bonne voie. Continue avec la même régularité."
        }

@app.post("/predict-abandon")
def predict_abandon(features: AbandonFeatures):
    sample = pd.DataFrame([features.model_dump()])

    proba_abandon = model.predict_proba(sample)[0, 1]
    risk_percent = round(proba_abandon * 100)

    txt = risk_text(risk_percent)

    return {
        "riskPercent": risk_percent,
        **txt
    }