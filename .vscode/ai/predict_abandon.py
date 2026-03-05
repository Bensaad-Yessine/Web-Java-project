import joblib
import pandas as pd

def risk_text(risk_percent: int):
    if risk_percent >= 70:
        return {
            "riskLevel": "HIGH",
            "messageTitle": "Risque d’abandon élevé",
            "message": "Ta régularité baisse et ta progression est négative. Fais une action simple aujourd’hui (ex: petit suivi) et planifie une routine pour demain."
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

# Charger le modèle
model = joblib.load("abandon_model.pkl")

# 🔽 Exemple de features (tu remplaceras par les valeurs calculées depuis Symfony)
sample = pd.DataFrame([{
    "nb_jours_total": 30,
    "nb_suivis": 6,
    "regularite": 0.20,
    "score_moyen": 5.40,
    "score_debut": 6.00,
    "score_fin": 4.80,
    "progression": -1.20,
    "std_score": 1.10
}])

# Probabilité d’abandon (classe 1)
proba_abandon = model.predict_proba(sample)[0, 1]
risk_percent = round(proba_abandon * 100)

txt = risk_text(risk_percent)

result = {
    "riskPercent": risk_percent,
    **txt
}

print(result)