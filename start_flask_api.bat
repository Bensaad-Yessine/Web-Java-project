@echo off
echo ========================================
echo Starting Flask Face Recognition API
echo ========================================
echo.
echo Using Conda Environment: faceenv
echo.
call conda activate faceenv
if errorlevel 1 (
    echo Failed to activate conda environment
    echo Trying with system Python...
    cd /d "%~dp0FaceIdscript"
    python main.py
) else (
    echo Environment activated successfully
    cd /d "%~dp0FaceIdscript"
    python main.py
)
pause
