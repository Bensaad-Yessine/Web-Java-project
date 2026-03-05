import { startStimulusApp } from '@symfony/stimulus-bundle';
import FaceLoginController from './controllers/face-login_controller.js';

const app = startStimulusApp();
app.register('face-login', FaceLoginController);
window.stimulusApp = app;

// Controllers are auto-discovered from assets/controllers/*_controller.js
 