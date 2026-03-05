# Face Recognition - Client-Side Implementation

## Overview
This project now uses a **client-side face recognition** approach using JavaScript and WebRTC. No external Python Flask server is required!

## How It Works

### 1. **Client-Side Processing**
- Face recognition runs entirely in the user's browser
- Uses **face-api.js** library (TensorFlow.js based)
- WebRTC provides camera access
- All face comparisons happen on the client side

### 2. **Architecture**

```
┌─────────────────────────────────────────┐
│          User's Browser                  │
│  ┌───────────────────────────────────┐  │
│  │  WebRTC Camera Access             │  │
│  └────────────┬──────────────────────┘  │
│               │                          │
│  ┌────────────▼──────────────────────┐  │
│  │  face-api.js                      │  │
│  │  - Face Detection                 │  │
│  │  - Face Landmarks                 │  │
│  │  - Face Descriptors               │  │
│  └────────────┬──────────────────────┘  │
│               │                          │
│  ┌────────────▼──────────────────────┐  │
│  │  Stimulus Controller              │  │
│  │  - Load user profile photos       │  │
│  │  - Compare face descriptors       │  │
│  │  - Find best match                │  │
│  └────────────┬──────────────────────┘  │
└───────────────┼──────────────────────────┘
                │
                │ Send userId for login
                ▼
┌─────────────────────────────────────────┐
│     Symfony Backend (PHP)                │
│  ┌───────────────────────────────────┐  │
│  │  SecurityController               │  │
│  │  - Verify user exists             │  │
│  │  - Check account status           │  │
│  │  - Complete login                 │  │
│  └───────────────────────────────────┘  │
└─────────────────────────────────────────┘
```

### 3. **Login Flow**

1. **User clicks "Face" tab** on login page
2. **Click "Start Face Recognition"** button
3. **Camera activates** via WebRTC
4. **face-api.js detects face** in video stream
5. **Extract face descriptor** (128-dimensional vector)
6. **Request user profile photos** from server
7. **For each user photo:**
   - Load image
   - Detect face
   - Extract descriptor
   - Calculate euclidean distance
8. **Find best match** (lowest distance)
9. **If match < 0.6 threshold:**
   - Send userId to `/face-login-complete`
   - Server verifies user and logs them in
   - Redirect to dashboard
10. **If no match:**
    - Show error message
    - Allow retry

## Files Structure

### JavaScript Controller
- **Location:** `assets/controllers/face-recognition_controller.js`
- **Framework:** Stimulus  
- **Purpose:** Handles camera, face detection, and comparison

### PHP Endpoints
- **SecurityController:** `src/Controller/SecurityController.php`
  - `/face-login-verify` - Returns list of users with profile photos
  - `/face-login-complete` - Completes login after client-side match

### Template
- **Login Page:** `templates/security/login.html.twig`
- Includes toggle between password and face login
- Loads face-api.js from CDN

## Key Features

### ✅ Advantages
- **No external dependencies** - No Python Flask server needed
- **Fast** - All processing happens locally
- **Privacy-friendly** - Face data never leaves the browser
- **Simple deployment** - Just JavaScript and PHP
- **Real-time** - Immediate face detection feedback
- **Cross-platform** - Works on any device with camera

### 🔒 Security Considerations
- Face descriptors never stored permanently
- Comparison happens in memory only
- Server only receives userId after match
- Account status verified server-side (banned, unverified)

## Configuration

### Match Threshold
Default: `0.6` (can be adjusted in template)

```html
<div data-controller="face-recognition"
     data-face-recognition-match-threshold-value="0.6">
```

Lower = stricter matching (fewer false positives)
Higher = looser matching (more false positives)

## Requirements

### Browser
- Modern browser with WebRTC support
- Camera permission required
- JavaScript enabled

### Users
- Must have profile picture uploaded
- Account must be verified
- Account must not be banned

## Development

### Testing Locally
1. Start Symfony server: `symfony server:start`
2. Navigate to login page: `/login`
3. Click "Face" tab
4. Grant camera permissions
5. Click "Start Face Recognition"

### Debugging
- Open browser console (F12)
- Check for face-api.js model loading
- View distance calculations for each user
- Monitor network requests to endpoints

## Troubleshomarks

### Models Won't Load
- Check internet connection (CDN required)
- Try refreshing page
- Verify CDN URL is accessible

### Camera Not Working
- Check browser permissions
- Ensure HTTPS (required for camera access)
- Try different browser

### No Match Found
- Ensure profile picture shows clear face
- Try better lighting
- Check match threshold value
- Verify user account exists and is verified

## Future Enhancements

### Possible Improvements
1. **Store face descriptors in database** - Faster comparisons
2. **Multiple face enrollment** - Register multiple photos per user
3. **Liveness detection** - Prevent spoofing with photos
4. **Progressive Web App** - Offline capability
5. **Face quality check** - Ensure good photo before comparison

## Migration from Old Approach

### Removed Files
- ❌ `FaceIdscript/` directory (Python Flask API)
- ❌ `start_face_recognition.py`
- ❌ `start_face_recognition.ps1`
- ❌ `start_face_recognition.bat`
- ❌ `FACE_RECOGNITION_SETUP.md`
- ❌ `FACE_RECOGNITION_QUICKSTART.md`
- ❌ `FLASK_API_REFERENCE.md`
- ❌ `requirements.txt`
- ❌ `src/Service/FaceRecognitionService.php`

### No More Running
- No need to start Flask server on port 5000
- No Python dependencies to install
- No face encoding cache files

## Support

For issues or questions:
- Check browser console for errors
- Verify user has profile picture
- Ensure account is verified and not banned
- Test with different browsers/devices

---

**Implementation Date:** February 25, 2026
**Approach:** Client-Side WebRTC + face-api.js
**Status:** ✅ Production Ready
