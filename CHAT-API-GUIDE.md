# Free Chat API Integration Guide

## Overview
This document explains how to set up **free** real-time chat/messaging APIs for your portfolio website, connecting visitors directly to your Messenger, WhatsApp, and Instagram DMs.

---

## 1. Facebook Messenger (Free — Direct Link)

### How to Get Started
1. Go to [facebook.com/messages](https://www.facebook.com/messages/)
2. Open a chat with yourself or find your public username
3. Your Messenger link format: `https://www.facebook.com/messages/t/{your-username}`

### Your Link
```
https://www.facebook.com/messages/t/dammar.khadayat.50
```

### Optional: Facebook Customer Chat SDK (Free)
For a live chat widget embedded on your site:
1. Go to [developers.facebook.com](https://developers.facebook.com/)
2. Create a Facebook App → Select "Business" type
3. Go to **Messenger** → **Customer Chat Setup**
4. Get your Page ID from your Facebook Page settings
5. Add this code before `</body>`:

```html
<!-- Facebook Customer Chat SDK -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml: true,
      version: 'v18.0'
    });
  };
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Your Facebook Page ID -->
<div class="fb-customerchat"
  page_id="YOUR_PAGE_ID"
  theme_color="#B8873B"
  logged_in_greeting="Hi Dammar! I'd like to connect."
  logged_out_greeting="Hi Dammar! Please log in to chat.">
</div>
```

**Status: FREE** — No paid API needed for basic Messenger links.

---

## 2. WhatsApp (Free — Click to Chat API)

### How to Get Started
WhatsApp provides a **free Click to Chat API** — no registration, no API keys needed.

### API Format
```
https://wa.me/{phone_number}?text={url_encoded_message}
```

### Your Link
```
https://wa.me/9779846163732?text=Hi%20Dammar%2C%20I%20found%20your%20portfolio%20and%20would%20like%20to%20connect.
```

### Parameters
| Parameter | Description | Required |
|-----------|-------------|----------|
| `phone` | Full phone number with country code (no + or spaces) | Yes |
| `text` | Pre-filled message (URL encoded) | No |

### Examples
```html
<!-- Simple chat -->
<a href="https://wa.me/9779846163732" target="_blank">Chat on WhatsApp</a>

<!-- With pre-filled message -->
<a href="https://wa.me/9779846163732?text=Hello%20Dammar%2C%20I%20need%20help%20with%20a%20project" target="_blank">Hire Me on WhatsApp</a>

<!-- With pre-filled workshop inquiry -->
<a href="https://wa.me/9779846163732?text=Hi%20Dammar%2C%20I%27d%20like%20to%20invite%20you%20for%20a%20workshop" target="_blank">Invite for Workshop</a>
```

### WhatsApp Business API (Free Tier)
For automated replies and a verified business profile:
1. Go to [business.facebook.com](https://business.facebook.com/)
2. Create a WhatsApp Business account
3. Verify your phone number
4. Use the free tier: **1,000 conversations/month** at no cost
5. Get API token from **WhatsApp** → **API Setup** in Business Manager

```javascript
// Send message via WhatsApp Business API (free tier)
fetch('https://graph.facebook.com/v18.0/YOUR_PHONE_ID/messages', {
  method: 'POST',
  headers: {
    'Authorization': 'Bearer YOUR_ACCESS_TOKEN',
    'Content-Type': 'application/json'
  },
  body: JSON.stringify({
    messaging_product: 'whatsapp',
    to: '9779846163732',
    type: 'text',
    text: { body: 'Thanks for reaching out!' }
  })
});
```

**Status: FREE** — Click to Chat is completely free. Business API free tier: 1,000 conversations/month.

---

## 3. Instagram Direct Messages (Free — Deep Link)

### How to Get Started
Instagram provides a **direct message deep link** — no API keys needed.

### API Format
```
https://www.instagram.com/direct/t/{username}/
```

### Your Link
```
https://www.instagram.com/direct/t/its_dammar/
```

### Alternative Formats
```html
<!-- Direct DM link -->
<a href="https://www.instagram.com/direct/t/its_dammar/" target="_blank">Message on Instagram</a>

<!-- Mobile-friendly (opens Instagram app) -->
<a href="ig://direct?user_id=USER_ID" target="_blank">Open Instagram DM</a>
```

### Instagram Graph API (Free — requires Facebook App)
For programmatic messaging (auto-replies, chatbots):
1. Go to [developers.facebook.com](https://developers.facebook.com/)
2. Create an App → Select "Business" type
3. Add **Instagram Graph API** product
4. Get a Facebook Page connected to your Instagram Business account
5. Generate a long-lived access token

```javascript
// Send DM via Instagram Graph API (requires Instagram Business account)
fetch('https://graph.facebook.com/v18.0/YOUR_PAGE_ID/messages', {
  method: 'POST',
  headers: {
    'Authorization': 'Bearer YOUR_ACCESS_TOKEN',
    'Content-Type': 'application/json'
  },
  body: JSON.stringify({
    recipient: { id: 'RECIPIENT_IG_USER_ID' },
    message: { text: 'Thanks for messaging me on Instagram!' }
  })
});
```

### Instagram Webhook (Free — for chatbot)
```javascript
// Webhook verification (for receiving messages)
app.get('/webhook', (req, res) => {
  const mode = req.query['hub.mode'];
  const token = req.query['hub.verify_token'];
  const challenge = req.query['hub.challenge'];
  if (mode === 'subscribe' && token === 'YOUR_VERIFY_TOKEN') {
    res.status(200).send(challenge);
  }
});

// Receiving messages
app.post('/webhook', (req, res) => {
  const body = req.body;
  if (body.object === 'page') {
    body.entry.forEach(entry => {
      const event = entry.messaging[0];
      const senderId = event.sender.id;
      const messageText = event.message?.text;
      // Process message and auto-reply
    });
  }
  res.sendStatus(200);
});
```

**Status: FREE** — Deep links are free. Graph API requires Instagram Business account (free to create).

---

## 4. Current Implementation (index.html)

### Floating Chat Widget
The website uses a **pure HTML/CSS/JS** floating widget with three buttons:

```html
<!-- Messenger -->
<a href="https://www.facebook.com/messages/t/dammar.khadayat.50" target="_blank">
  Messenger
</a>

<!-- WhatsApp -->
<a href="https://wa.me/9779846163732" target="_blank">
  WhatsApp
</a>

<!-- Instagram DM -->
<a href="https://www.instagram.com/direct/t/its_dammar/" target="_blank">
  Instagram
</a>
```

### How It Works
- Gold floating button in bottom-right corner
- Click to expand: shows Messenger, WhatsApp, Instagram buttons
- Each button links directly to the respective chat platform
- No API keys needed — uses platform deep links

---

## 5. Upgrading to Real-Time Chat (Optional)

### Option A: Tawk.to (100% Free Live Chat)
1. Sign up at [tawk.to](https://www.tawk.to/) (free forever)
2. Get embed code
3. Add to your site:
```html
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/YOUR_PROPERTY_ID';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
```

### Option B: Crisp (Free Tier)
1. Sign up at [crisp.chat](https://crisp.chat/) (free: 2 seats)
2. Get embed code from Settings → Website → Installation
```html
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="YOUR_ID";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
```

### Option C: Tidio (Free Tier)
1. Sign up at [tidio.com](https://www.tidio.com/) (free: 50 conversations/month)
2. Get embed code from Settings → Installation

---

## 6. Summary Table

| Platform | Method | Cost | Setup Time |
|----------|--------|------|------------|
| Messenger | Click to Chat link | FREE | 1 minute |
| Messenger | Customer Chat SDK | FREE | 15 minutes |
| WhatsApp | Click to Chat link | FREE | 1 minute |
| WhatsApp | Business API (free tier) | FREE (1000/mo) | 30 minutes |
| Instagram | Deep link | FREE | 1 minute |
| Instagram | Graph API + Webhook | FREE (Business acct) | 1 hour |
| Live Chat | Tawk.to / Crisp / Tidio | FREE tier | 10 minutes |

---

## 7. Your Contact Details

| Platform | Link | Phone/Username |
|----------|------|----------------|
| WhatsApp | `wa.me/9779846163732` | +977 9846163732 |
| Messenger | `facebook.com/messages/t/dammar.khadayat.50` | dammar.khadayat.50 |
| Instagram | `instagram.com/direct/t/its_dammar/` | its_dammar |
| LinkedIn | `linkedin.com/in/its-dammar/` | its-dammar |
| Email | `dammar.240603@gandakiuniversity.edu.np` | — |

---

*Last updated: July 2026*
