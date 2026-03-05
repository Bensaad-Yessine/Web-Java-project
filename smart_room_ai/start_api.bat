@echo off
REM Script de démarrage pour l'API Smart Room AI (Windows)

echo ==========================================
echo 🚀 Démarrage de l'API Smart Room AI...
echo ==========================================

REM Vérifier si Python est installé
python --version >nul 2>&1
if errorlevel 1 (
    echo ❌ Python n'est pas installé. Veuillez installer Python 3.10+.
    pause
    exit /b 1
)

REM Vérifier si uvicorn est installé
uvicorn --version >nul 2>&1
if errorlevel 1 (
    echo ⚠️ uvicorn n'est pas trouvé. Installation des dépendances...
    pip install -r requirements.txt
)

REM Vérifier si le modèle existe
if not exist "models\attendance_model.joblib" (
    echo ⚠️ Modèle non trouvé. Lancement de l'entraînement...
    echo Cela peut prendre plusieurs minutes...
    python training\train_model.py
    if errorlevel 1 (
        echo ❌ Erreur lors de l'entraînement du modèle.
        pause
        exit /b 1
    )
)

REM Vérifier si le dataset existe
if not exist "app\data\sample_dataset.csv" (
    echo ⚠️ Dataset non trouvé. Génération...
    python training\generate_dataset.py
)

echo ✅ Configuration validée!
echo 🔥 Démarrage de l'API sur http://localhost:8000
echo 📖 Documentation disponible sur http://localhost:8000/docs
echo 🛑 Arrêter avec Ctrl+C
echo.

REM Démarrer l'API
uvicorn app.main:app --reload --host 0.0.0.0 --port 8000