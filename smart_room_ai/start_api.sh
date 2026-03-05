#!/bin/bash

# Script de démarrage pour l'API Smart Room AI
echo "🚀 Démarrage de l'API Smart Room AI..."
echo "================================"

# Vérifier si Python est installé
if ! command -v python3 &> /dev/null; then
    echo "❌ Python 3 n'est pas installé. Veuillez installer Python 3.10+."
    exit 1
fi

# Vérifier si uvicorn est installé
if ! command -v uvicorn &> /dev/null; then
    echo "⚠️  uvicorn n'est pas trouvé. Installation des dépendances..."
    pip install -r requirements.txt
fi

# Vérifier si le modèle existe
if [ ! -f "models/attendance_model.joblib" ]; then
    echo "⚠️  Modèle non trouvé. Lancement de l'entraînement..."
    echo "Cela peut prendre plusieurs minutes..."
    python training/train_model.py
    if [ $? -ne 0 ]; then
        echo "❌ Erreur lors de l'entraînement du modèle."
        exit 1
    fi
fi

# Vérifier si le dataset existe
if [ ! -f "app/data/sample_dataset.csv" ]; then
    echo "⚠️  Dataset non trouvé. Génération..."
    python training/generate_dataset.py
fi

echo "✅ Configuration validée!"
echo "🔥 Démarrage de l'API sur http://localhost:8000"
echo "📖 Documentation disponible sur http://localhost:8000/docs"
echo "🛑 Arrêter avec Ctrl+C"
echo ""

# Démarrer l'API
uvicorn app.main:app --reload --host 0.0.0.0 --port 8000