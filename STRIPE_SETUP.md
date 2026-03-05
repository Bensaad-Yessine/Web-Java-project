# Stripe Payment Integration Setup

## 📝 Overview
Your payment page is ready with Stripe integration! The system uses Stripe Elements for secure card processing.

## 🔑 Getting Your Stripe API Keys

1. **Create a Stripe Account** (if you haven't already):
   - Go to https://stripe.com
   - Sign up for a free account

2. **Get Your Test Keys**:
   - Go to https://dashboard.stripe.com/test/apikeys
   - You'll see two keys:
     - **Publishable key** (starts with `pk_test_`)
     - **Secret key** (starts with `sk_test_`)

3. **Update Your .env File**:
   ```env
   STRIPE_PUBLIC_KEY=pk_test_YOUR_ACTUAL_KEY_HERE
   STRIPE_SECRET_KEY=sk_test_YOUR_ACTUAL_KEY_HERE
   ```

4. **Clear Cache**:
   ```bash
   php bin/console cache:clear
   ```

## 🧪 Testing the Payment

### Test Card Numbers (Stripe provides these):

**Successful Payment:**
- Card: `4242 4242 4242 4242`
- Expiry: Any future date (e.g., `12/34`)
- CVC: Any 3 digits (e.g., `123`)
- ZIP: Any 5 digits (e.g., `12345`)

**Declined Payment:**
- Card: `4000 0000 0000 0002`
- Use to test error handling

**Requires Authentication (3D Secure):**
- Card: `4000 0025 0000 3155`
- Tests SCA (Strong Customer Authentication)

More test cards: https://stripe.com/docs/testing#cards

## 🚀 How It Works

1. **Page Load**: Creates a PaymentIntent on Stripe with the order amount
2. **User Fills Card**: Stripe Elements securely collects card information
3. **Submit Payment**: Card data is sent directly to Stripe (never touches your server)
4. **Success**: User is redirected to success page
5. **Backend Confirmation**: Your server receives confirmation and can update database

## 📁 Files Created/Modified

### Controllers
- `src/Controller/PaymentController.php`
  - `/payment/checkout` - Main payment page
  - `/payment/create-intent` - Creates Stripe PaymentIntent (API)
  - `/payment/confirm` - Confirms payment (API)
  - `/payment/webhook` - Handles Stripe webhooks
  - `/payment/success` - Success page

### Templates
- `templates/payment/checkout.html.twig` - Payment form with Stripe Elements
- `templates/payment/success.html.twig` - Success confirmation page

### Configuration
- `.env` - Stripe API keys added

## 🎨 Design Features

The payment page follows your profile.html.twig theme:
- ✅ Red/orange gradient color scheme
- ✅ Card-based layout with hover animations
- ✅ Responsive design
- ✅ Stripe Elements integrated for secure card input
- ✅ Real-time validation
- ✅ Loading states

## 🔒 Security Features

1. **PCI Compliance**: Card data never touches your server (handled by Stripe Elements)
2. **3D Secure**: Automatic authentication for supported cards
3. **Fraud Detection**: Stripe's built-in Radar
4. **Encryption**: All data encrypted in transit (TLS)

## 🪝 Setting Up Webhooks (Optional but Recommended)

Webhooks notify your server about payment events:

1. **Add Webhook Secret to .env**:
   ```env
   STRIPE_WEBHOOK_SECRET=whsec_YOUR_WEBHOOK_SECRET
   ```

2. **Register Webhook URL** in Stripe Dashboard:
   ```
   https://yourdomain.com/payment/webhook
   ```

3. **Select Events to Listen For**:
   - `payment_intent.succeeded`
   - `payment_intent.payment_failed`

## 💰 Customizing the Amount

In `checkout.html.twig`, the amount is hardcoded to €47.98:

```javascript
body: JSON.stringify({
    amount: 4798, // Amount in cents (€47.98)
}),
```

To make it dynamic:
1. Pass the amount from controller to template
2. Update the JavaScript to use that value

## 🌐 Going Live

When ready for production:

1. Get your **Live API keys** from https://dashboard.stripe.com/apikeys
2. Update `.env` with live keys (starting with `pk_live_` and `sk_live_`)
3. Never commit API keys to git
4. Use environment variables on your production server

## 🛠️ Troubleshooting

**"Stripe is not defined" error:**
- Make sure you're connected to the internet (Stripe.js loads from CDN)
- Check browser console for loading errors

**Payment not processing:**
- Verify your Stripe keys are correct
- Check that cache is cleared
- Look at browser console for JavaScript errors
- Check Stripe Dashboard logs

**Testing locally:**
- Use `http://localhost` or `https://` (required by Stripe)
- Stripe test mode works with localhost

## 📚 Resources

- [Stripe Documentation](https://stripe.com/docs)
- [Stripe PHP Library](https://github.com/stripe/stripe-php)
- [Stripe Elements](https://stripe.com/docs/stripe-js)
- [Test Cards](https://stripe.com/docs/testing)

