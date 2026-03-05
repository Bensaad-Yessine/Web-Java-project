@echo off
echo ==========================================
echo 🔍 Vérification de l'intégration Smart Room AI
echo ==========================================
echo.

echo 1. Vérification de l'API Smart Room AI...
curl -s http://localhost:8000/health >nul 2>&1
if errorlevel 1 (
    echo ❌ API Smart Room AI non démarrée
    echo 💡 Solution: Lancez 'smart_room_ai\start_api.bat'
    set API_STATUS=ERROR
) else (
    echo ✅ API Smart Room AI accessible
    set API_STATUS=OK
)
echo.

echo 2. Vérification du modèle...
curl -s http://localhost:8000/model/info >nul 2>&1
if errorlevel 1 (
    echo ❌ Modèle ML non disponible
    echo 💡 Solution: Lancez l'entraînement 'python smart_room_ai/training/train_model.py'
    set MODEL_STATUS=ERROR
) else (
    echo ✅ Modèle ML disponible
    set MODEL_STATUS=OK
)
echo.

echo 3. Vérification des fichiers d'intégration...
set FILES_OK=1

if not exist "src\Service\SmartRoomAIService.php" (
    echo ❌ SmartRoomAIService.php manquant
    set FILES_OK=0
) else (
    echo ✅ SmartRoomAIService.php trouvé
)

if not exist "templates\seance\optimize.html.twig" (
    echo ❌ optimize.html.twig manquant
    set FILES_OK=0
) else (
    echo ✅ optimize.html.twig trouvé
)

if not exist "smart_room_ai\app\main.py" (
    echo ❌ API Smart Room AI manquante
    set FILES_OK=0
) else (
    echo ✅ API Smart Room AI trouvée
)
echo.

echo 4. Vérification des variables d'environnement...
findstr /C:"SMARTROOM_API_BASE_URL" .env >nul 2>&1
if errorlevel 1 (
    echo ❌ SMARTROOM_API_BASE_URL non configuré
    set ENV_OK=0
) else (
    echo ✅ SMARTROOM_API_BASE_URL configuré
)

findstr /C:"SMARTROOM_ENABLED" .env >nul 2>&1
if errorlevel 1 (
    echo ❌ SMARTROOM_ENABLED non configuré
    set ENV_OK=0
) else (
    echo ✅ SMARTROOM_ENABLED configuré
)
echo.

echo ==========================================
echo 📊 Résumé de l'intégration
echo ==========================================

if "%API_STATUS%"=="OK" echo ✅ API: En ligne
if "%API_STATUS%"=="ERROR" echo ❌ API: Hors ligne

if "%MODEL_STATUS%"=="OK" echo ✅ Modèle: Disponible
if "%MODEL_STATUS%"=="ERROR" echo ❌ Modèle: Indisponible

if "%FILES_OK%"=="1" echo ✅ Fichiers: Complet
if "%FILES_OK%"=="0" echo ❌ Fichents: Incomplet

echo.

if "%API_STATUS%"=="OK" if "%MODEL_STATUS%"=="OK" if "%FILES_OK%"=="1" (
    echo 🎉 Intégration complète ! 
    echo 👉 Accédez à l'application et testez l'optimisation IA
) else (
    echo ⚠️  Intégration incomplète. Veuillez corriger les erreurs ci-dessus.
    echo.
    echo 📖 Documentation: smart_room_ai\INTEGRATION_GUIDE.md
)

echo.
pause