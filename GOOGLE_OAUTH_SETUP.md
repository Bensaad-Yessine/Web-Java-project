# Google OAuth Login Setup Guide

## Overview
Your application now supports "Login with Gmail" and "Sign up with Gmail" functionality using Google OAuth2.

## Features
- ✅ One-click login with Google account
- ✅ Automatic user creation on first login
- ✅ Email verification not required (Google accounts are pre-verified)
- ✅ Seamless integration with existing password login
- ✅ Available on both Login and Registration pages

## Setup Instructions

### 1. Create Google OAuth Credentials

1. Go to [Google Cloud Console](https://console.cloud.google.com/)
2. Create a new project or select an existing one
3. Navigate to **APIs & Services** → **Credentials**
4. Click **Create Credentials** → **OAuth client ID**
5. Choose **Web application** as application type
6. Set the following:
   - **Name**: Your app name (e.g., "ESPRIT Student Portal")
   - **Authorized JavaScript origins**: 
     ```
     http://localhost:8000
     http://127.0.0.1:8000
     ```
   - **Authorized redirect URIs**:
     ```
     http://localhost:8000/connect/google/check
     http://127.0.0.1:8000/connect/google/check
     ```
7. Click **Create**
8. Copy your **Client ID** and **Client Secret**

### 2. Configure Your Application

Open your `.env` file and update the Google OAuth credentials:

```env
###> knpuniversity/oauth2-client-bundle ###
GOOGLE_CLIENT_ID=your_actual_client_id_here
GOOGLE_CLIENT_SECRET=your_actual_client_secret_here
###< knpuniversity/oauth2-client-bundle ###
```

### 3. Test the Integration

1. Start your development server: `symfony server:start` or `php -S localhost:8000 -t public`
2. Navigate to `/login` or `/register`
3. Click **"Continue with Gmail"** or **"Sign up with Gmail"**
4. Authorize the application with your Google account
5. You'll be automatically logged in and redirected to your dashboard

## How It Works

### First-Time Users
- When a user clicks "Continue with Gmail", they're redirected to Google
- After authorization, the application receives their email, name, and profile info
- A new user account is created automatically with:
  - Email from Google
  - First and last name extracted from Google profile
  - `isVerified` set to `true` (no email verification needed)
  - Random password (not used for OAuth login)
  - Default date of birth (-18 years) and gender

### Existing Users
- If a user with the same email already exists, they're simply logged in
- No duplicate accounts are created

## Files Modified

### Configuration Files
- `config/packages/knpu_oauth2_client.yaml` - OAuth client configuration
- `config/packages/security.yaml` - Added GoogleAuthenticator
- `config/bundles.php` - Registered KnpUOAuth2ClientBundle
- `.env` - Added Google OAuth credentials

### PHP Files
- `src/Security/GoogleAuthenticator.php` - Custom authenticator handling OAuth flow
- `src/Controller/GoogleController.php` - OAuth redirect and callback routes

### Templates
- `templates/security/login.html.twig` - Added "Continue with Gmail" button
- `templates/registration/register.html.twig` - Added "Sign up with Gmail" button

## Routes

| Route Name | Path | Description |
|------------|------|-------------|
| `connect_google` | `/connect/google` | Initiates OAuth flow |
| `connect_google_check` | `/connect/google/check` | OAuth callback (handled by authenticator) |

## Troubleshooting

### Error: "redirect_uri_mismatch"
- Verify your redirect URI in Google Console exactly matches: `http://localhost:8000/connect/google/check`
- Check that the port matches your development server

### Error: "invalid_client"
- Check that `GOOGLE_CLIENT_ID` and `GOOGLE_CLIENT_SECRET` in `.env` are correct
- Ensure there are no extra spaces or quotes

### User not redirected after login
- Clear Symfony cache: `php bin/console cache:clear`
- Check that routes `app_dashboard` and `app_user_index` exist

### Want to add more OAuth providers?
You can add Facebook, GitHub, etc. by:
1. Installing the provider: `composer require league/oauth2-facebook`
2. Adding configuration in `knpu_oauth2_client.yaml`
3. Creating a similar authenticator
4. Adding buttons to login/register pages

## Production Deployment

When deploying to production:

1. Add your production domain to **Authorized JavaScript origins**:
   ```
   https://yourdomain.com
   ```

2. Add production redirect URI:
   ```
   https://yourdomain.com/connect/google/check
   ```

3. Update `.env.prod` with production credentials

4. Never commit `.env` files with real credentials to version control

## Security Notes

- OAuth tokens are handled by the bundle and not stored in the database
- User passwords for OAuth accounts are randomly generated and cannot be used for login
- Users can still set a password later if they want to enable password login
- Google automatically handles rate limiting and security

## Support

For more information:
- [KnpUOAuth2ClientBundle Documentation](https://github.com/knpuniversity/oauth2-client-bundle)
- [Google OAuth2 Documentation](https://developers.google.com/identity/protocols/oauth2)
