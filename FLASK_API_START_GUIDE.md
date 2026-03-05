# Face Recognition Flask API - Quick Start Guide

## ⚠️ Current Status
The Flask API requires some Python packages to be installed in the `faceenv` conda environment.

## 🚀 Quick Start (Manual Method - RECOMMENDED)

### Option 1: Using Anaconda Prompt (Easiest)
1. Open **Anaconda Prompt**
2. Run these commands one by one:
```bash
conda activate faceenv
cd "C:\Users\MSI\Documents\my_project_dev\FaceIdscript"
pip install mysql-connector-python
python main.py
```

###Option 2: Using start_flask_api.bat
1. Double-click `start_flask_api.bat` in the project root
2. Wait for "Face Recognition API Starting..." message
3. Keep the window open while using face login

## ✅ Verify Flask is Running
Once started, you should see:
```
==================================================
Face Recognition API Starting...
Known faces folder: C:\Users\MSI\Documents\my_project_dev\public\uploads\profile_pics
Database: pidev @ 127.0.0.1:3306
Loaded X face encodings
==================================================

 * Running on http://0.0.0.0:5000
```

## 🧪 Test the API
Open browser and visit: http://127.0.0.1:5000/health

You should see:
```json
{
  "service": "running",
  "faces_loaded": X,
  "database": "connected"
}
```

## 🔧 Troubleshooting

### "No module named 'mysql'"
```bash
conda activate faceenv
pip install mysql-connector-python
```

### "CUDA error" or "cudnn_ops64_9.dll"
Already fixed - the environment uses CPU-only mode

### Face recognition not working on login page
1. Make sure Flask API is running (see above)
2. Go to http://localhost:8000/login
3. Click "Face" tab
4. Click "Start Face Login"
5. Check browser console (F12) for errors

## 📝 What's Happening
- JavaScript captures camera image
- Sends to PHP `/face-login`
- PHP forwards to Flask API `http://127.0.0.1:5000/recognize`
- Flask compares face with images in `public/uploads/profile_pics`
- Returns user ID
- PHP logs you in

## 🎯 Next Steps After Starting Flask
1. Start Flask API (steps above)
2. Go to http://localhost:8000/login
3. Click "Face" tab
4. Click "Start Face Login"
5. Allow camera access
6. Position your face → Instant login!
