# Face Recognition Troubleshooting Guide

## Testing Steps

### 1. Open Browser Console
1. Go to `/login` page
2. Press `F12` to open Developer Tools
3. Go to "Console" tab

### 2. Switch to Face Login
- Click the "Face" button/tab
- You should see in console:
  ```
  Face recognition controller connected
  Loading face-api models...
  face-api models loaded successfully
  ```

### 3. Start Camera
- Click "Start Face Recognition" button  
- Grant camera permissions when prompted
- You should see in console:
  ```
  Starting camera...
  Camera stream obtained
  Video started playing
  Starting face detection...
  ```

### 4. Face Detection
- Position your face in front of camera
- You should see in console:
  ```
  Face detected successfully
  Face descriptor extracted, length: 128
  Comparing with users...
  Found X users to compare
  Processing user 1, profile pic: /uploads/profile_pics/...
  User 1: distance = 0.XXX
  ```

### 5. Login Success
- If match found (distance < 0.6):
  ```
  New best match: User X with distance 0.XXX
  Match found! Logging in as user X
  Completing face login for user X
  Login complete response status: 200
  Redirecting to: /dashboard
  ```

## Common Issues

### Issue 1: "Face recognition controller connected" NOT appearing
**Problem:** Stimulus controller not loading
**Solution:**
```bash
npm run build
# or
npm run watch
```

### Issue 2: "face-api.js is not loaded!"
**Problem:** CDN script not loaded
**Solution:** Check internet connection, CDN might be blocked

### Issue 3: "No registered users found"
**Problem:** No users have profile pictures
**Solution:** 
- Go to user profile
- Upload a profile picture with clear face
- Try face login again

### Issue 4: Camera permission denied
**Problem:** Browser blocked camera access
**Solution:**
- Click lock icon in address bar
- Allow camera permission
- Refresh page

### Issue 5: "No face detected"
**Problem:** Poor lighting or face not visible
**Solution:**
- Improve lighting
- Look directly at camera
- Remove glasses/hat if needed
- Get closer to camera

### Issue 6: "No match found (distance: 0.XXX)"
**Problem:** Distance above threshold (0.6)
**Solution:**
- Use same profile picture for registration
- Try better lighting
- Look directly at camera
- Lower threshold in code (not recommended for production)

### Issue 7: Login completes but doesn't redirect
**Problem:** Check console for redirect URL
**Solution:**
- Check if `result.redirect` is valid
- Verify user roles (ADMIN vs USER)
- Check SecurityController redirect logic

## Debug Checklist

- [ ] Console shows "Face recognition controller connected"
- [ ] Console shows "face-api models loaded successfully"
- [ ] Status message shows in UI
- [ ] Camera starts and video displays
- [ ] Face detection box appears on video
- [ ] Console shows "Face detected successfully"
- [ ] Console shows comparison with users
- [ ] Console shows distance calculations
- [ ] Console shows "Match found" or "No match"
- [ ] Login complete shows success response
- [ ] Redirect happens automatically

## Manual Test Command

Check if endpoints are working:

```bash
# Test verify endpoint
curl -X POST http://localhost:8000/face-login-verify \
  -H "Content-Type: application/json" \
  -d '{"faceDescriptors": []}'

# Should return list of users with profile pictures
```

## Key Files to Check

1. **JavaScript Controller:** `assets/controllers/face-recognition_controller.js`
2. **PHP Controller:** `src/Controller/SecurityController.php`
3. **Template:** `templates/security/login.html.twig`
4. **Bootstrap:** `assets/bootstrap.js`

## Next Steps if Still Not Working

1. Share console logs
2. Share network tab (check /face-login-verify and /face-login-complete requests)
3. Check if user has profile picture in database
4. Verify camera works in other websites
5. Try different browser (Chrome recommended)
