#!/usr/bin/env python3
"""
Script de test simple pour l'API FastAPI
"""

import requests
import json
import time

def test_api():
    base_url = "http://localhost:8001"
    
    # Test 1: Vérifier si l'API répond
    try:
        response = requests.get(f"{base_url}/")
        if response.status_code == 200:
            print("✅ API répond correctement")
            print(f"   Message: {response.json()}")
        else:
            print(f"❌ API répond avec code {response.status_code}")
            return False
    except requests.exceptions.ConnectionError:
        print("❌ Impossible de se connecter à l'API")
        print("   Assurez-vous que l'API est démarrée avec: uvicorn app.main:app --port 8001 --reload")
        return False
    
    # Test 2: Endpoint de prédiction
    try:
        test_data = {
            "jour_semaine": 1,
            "heure_debut": 8,
            "duree_min": 60,
            "type_seance": "TD",
            "mode": "presentiel",
            "matiere": "Mathematiques",
            "groupe": "GroupeA",
            "salle_capacite_initiale": 30,
            "moy_presence_groupe_30j": 0.75,
            "taux_absence_groupe_30j": 0.25,
            "presence_moyenne_matiere": 0.80,
            "presence_moyenne_creneau": 0.70
        }
        
        response = requests.post(f"{base_url}/predict_attendance", json=test_data)
        if response.status_code == 200:
            print("✅ Endpoint /predict_attendance fonctionne")
            result = response.json()
            print(f"   Prédiction: {result.get('predicted_attendance', 'N/A')} étudiants")
            print(f"   Confiance: {result.get('confidence', 'N/A')}")
        else:
            print(f"❌ Endpoint /predict_attendance erreur {response.status_code}")
            print(f"   Message: {response.text}")
    except Exception as e:
        print(f"❌ Erreur test prédiction: {e}")
    
    return True

if __name__ == "__main__":
    print("🧪 Test de l'API Smart Room AI...")
    test_api()