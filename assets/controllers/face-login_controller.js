import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static targets = ['video', 'canvas', 'status', 'startButton'];

    connect() {
        console.log('✓ Face login controller connected');
        console.log('Targets available:', {
            video: this.hasVideoTarget,
            canvas: this.hasCanvasTarget,
            status: this.hasStatusTarget,
            startButton: this.hasStartButtonTarget
        });
        this.stream = null;
        this.isCapturing = false;
        
        if (this.hasStartButtonTarget) {
            this.startButtonTarget.disabled = false;
            console.log('✓ Start button enabled');
        } else {
            console.error('❌ Start button target not found!');
        }
    }

    disconnect() {
        this.stopCamera();
    }

    async startFaceLogin() {
        console.log('🔵 startFaceLogin() called!');
        try {
            this.updateStatus('📸 Starting camera...', 'info');
            
            if (this.hasStartButtonTarget) {
                this.startButtonTarget.disabled = true;
            }
            
            // Get camera stream with higher resolution
            this.stream = await navigator.mediaDevices.getUserMedia({
                video: { 
                    facingMode: 'user', 
                    width: { ideal: 1280 },
                    height: { ideal: 720 }
                }
            });
            
            this.videoTarget.srcObject = this.stream;
            this.videoTarget.style.display = 'block';
            
            this.updateStatus('📷 Camera active! Position your face in the center...', 'info');
            
            // Wait longer for camera to stabilize and user to position face
            await new Promise(resolve => setTimeout(resolve, 2000));
            
            // Start capturing attempts
            this.attemptCapture();
            
        } catch (error) {
            console.error('Camera error:', error);
            this.updateStatus('❌ Camera access denied. Please allow camera access.', 'error');
            if (this.hasStartButtonTarget) {
                this.startButtonTarget.disabled = false;
            }
        }
    }

    async attemptCapture() {
        let attempts = 0;
        const maxAttempts = 5;
        
        while (attempts < maxAttempts) {
            attempts++;
            this.updateStatus(`🔍 Analyzing face... (Attempt ${attempts}/${maxAttempts})`, 'info');
            
            const result = await this.captureAndRecognize();
            
            if (result === 'success') {
                return; // Login successful, stop trying
            } else if (result === 'no_face') {
                // Wait before retry
                await new Promise(resolve => setTimeout(resolve, 1500));
            } else {
                // Other errors (banned, unverified, etc.) - stop trying
                return;
            }
        }
        
        // All attempts failed
        this.updateStatus('❌ Could not detect face clearly. Please try again with better lighting.', 'error');
        setTimeout(() => {
            this.stopCamera();
            if (this.hasStartButtonTarget) {
                this.startButtonTarget.disabled = false;
            }
        }, 3000);
    }

    async captureAndRecognize() {
        try {
            // Draw video frame to canvas
            const canvas = this.canvasTarget;
            const video = this.videoTarget;
            
            // Make sure video is ready
            if (video.readyState !== video.HAVE_ENOUGH_DATA) {
                console.log('Video not ready yet, waiting...');
                return 'no_face';
            }
            
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            
            const context = canvas.getContext('2d');
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
            
            // Convert canvas to base64 with better quality
            const imageData = canvas.toDataURL('image/jpeg', 0.95);
            
            console.log('📤 Sending image to Flask API...');
            
            // Send to backend
            const response = await fetch('/face-login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ image: imageData })
            });
            
            const result = await response.json();
            console.log('📥 Flask response:', result);
            
            if (response.ok && result.success) {
                this.updateStatus(`✅ Welcome ${result.user_name}! Logging in...`, 'success');
                this.stopCamera();
                
                // Redirect after short delay
                setTimeout(() => {
                    window.location.href = result.redirect_url || '/';
                }, 1500);
                
                return 'success';
                
            } else if (result.status === 'no_face') {
                console.log('⚠️ No face detected, will retry...');
                return 'no_face';
                
            } else if (result.status === 'unknown') {
                this.updateStatus('❌ Face not recognized. Please try password login.', 'error');
                this.stopCamera();
                setTimeout(() => {
                    if (this.hasStartButtonTarget) {
                        this.startButtonTarget.disabled = false;
                    }
                }, 3000);
                return 'unknown';
                
            } else if (result.status === 'banned') {
                this.updateStatus('❌ Your account has been banned.', 'error');
                this.stopCamera();
                return 'banned';
                
            } else if (result.status === 'unverified') {
                this.updateStatus('⚠️ Your account is not verified. Please check your email.', 'warning');
                this.stopCamera();
                return 'unverified';
                
            } else {
                this.updateStatus('❌ ' + (result.message || 'Recognition failed'), 'error');
                this.stopCamera();
                setTimeout(() => {
                    if (this.hasStartButtonTarget) {
                        this.startButtonTarget.disabled = false;
                    }
                }, 3000);
                return 'error';
            }
            
        } catch (error) {
            console.error('Recognition error:', error);
            this.updateStatus('❌ Connection error. Make sure Flask API is running.', 'error');
            this.stopCamera();
            setTimeout(() => {
                if (this.hasStartButtonTarget) {
                    this.startButtonTarget.disabled = false;
                }
            }, 3000);
            return 'error';
        }
    }

    stopCamera() {
        if (this.stream) {
            this.stream.getTracks().forEach(track => track.stop());
            this.stream = null;
        }
        
        if (this.hasVideoTarget) {
            this.videoTarget.srcObject = null;
            this.videoTarget.style.display = 'none';
        }
    }

    updateStatus(message, type = 'info') {
        if (!this.hasStatusTarget) return;
        
        const colors = {
            info: '#0d6efd',
            success: '#198754',
            error: '#dc3545',
            warning: '#ffc107'
        };
        
        this.statusTarget.textContent = message;
        this.statusTarget.style.color = colors[type] || colors.info;
        this.statusTarget.style.fontWeight = 'bold';
    }
}
