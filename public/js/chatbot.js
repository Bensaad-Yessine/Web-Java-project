(() => {
  const widget = document.getElementById('chatbot-widget');
  if (!widget) return;

  const toggle = document.getElementById('chatbot-toggle');
  const panel = document.getElementById('chatbot-panel');
  const messagesEl = document.getElementById('chatbot-messages');
  const input = document.getElementById('chatbot-input');
  const sendBtn = document.getElementById('chatbot-send');
  const confirmBtn = document.getElementById('chatbot-confirm');

  let conversationHistory = [];
  let pendingProposition = null;

  const getGroupId = () => {
    const raw = widget.getAttribute('data-groupe-id');
    return raw ? parseInt(raw, 10) : null;
  };

  const getMessageUrl = () => widget.getAttribute('data-message-url') || '/api/chatbot/message';
  const getConfirmUrl = () => widget.getAttribute('data-confirm-url') || '/api/chatbot/confirm';


  const scrollToBottom = () => {
    messagesEl.scrollTop = messagesEl.scrollHeight;
  };

  const appendMessage = (text, role) => {
    const bubble = document.createElement('div');
    bubble.textContent = text;
    bubble.style.padding = '10px 12px';
    bubble.style.borderRadius = '12px';
    bubble.style.fontSize = '13px';
    bubble.style.lineHeight = '1.4';
    bubble.style.maxWidth = '80%';
    bubble.style.alignSelf = role === 'user' ? 'flex-end' : 'flex-start';
    bubble.style.background = role === 'user' ? '#667eea' : '#ffffff';
    bubble.style.color = role === 'user' ? 'white' : '#1e293b';
    bubble.style.boxShadow = '0 4px 10px rgba(15, 23, 42, 0.08)';
    messagesEl.appendChild(bubble);
    scrollToBottom();
    return bubble;
  };

  const setTyping = (enabled) => {
    const existing = document.getElementById('chatbot-typing');
    if (enabled) {
      if (existing) return;
      const bubble = document.createElement('div');
      bubble.id = 'chatbot-typing';
      bubble.textContent = 'Assistant écrit...';
      bubble.style.padding = '10px 12px';
      bubble.style.borderRadius = '12px';
      bubble.style.fontSize = '12px';
      bubble.style.color = '#475569';
      bubble.style.background = '#e2e8f0';
      bubble.style.alignSelf = 'flex-start';
      messagesEl.appendChild(bubble);
      scrollToBottom();
    } else if (existing) {
      existing.remove();
    }
  };

  const togglePanel = () => {
    const isOpen = panel.style.display === 'flex';
    panel.style.display = isOpen ? 'none' : 'flex';
  };

  const sendMessage = async () => {
    const text = input.value.trim();
    if (!text) return;

    appendMessage(text, 'user');
    input.value = '';
    pendingProposition = null;
    confirmBtn.style.display = 'none';

    conversationHistory.push({
      role: 'user',
      parts: [{ text }]
    });

    setTyping(true);

    try {
      const response = await fetch(getMessageUrl(), {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-Requested-With': 'XMLHttpRequest',
          'Accept': 'application/json'
        },
        body: JSON.stringify({
          message: text,
          conversationHistory,
          groupeId: getGroupId()
        })
      });

      let data = null;
      const contentType = response.headers.get('content-type') || '';
      if (contentType.includes('application/json')) {
        data = await response.json();
      } else {
        const textBody = await response.text();
        data = { reply: textBody };
      }

      setTyping(false);

      if (!response.ok) {
        const statusText = response.status ? `HTTP ${response.status}` : 'Erreur';
        appendMessage(data.reply || statusText, 'bot');
        return;
      }


      appendMessage(data.reply || 'Je suis prêt à continuer.', 'bot');
      conversationHistory.push({
        role: 'model',
        parts: [{ text: data.reply || '' }]
      });

      if (data.readyToCreate && data.propositionData) {
        pendingProposition = data.propositionData;
        confirmBtn.style.display = 'block';
      }
    } catch (error) {
      setTyping(false);
      appendMessage('Erreur réseau, veuillez réessayer.', 'bot');
    }
  };

  const confirmCreation = async () => {
    if (!pendingProposition) return;
    confirmBtn.disabled = true;
    confirmBtn.textContent = 'Création...';

    try {
      const response = await fetch(getConfirmUrl(), {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-Requested-With': 'XMLHttpRequest',
          'Accept': 'application/json'
        },
        body: JSON.stringify({
          propositionData: pendingProposition
        })
      });

      let data = null;
      const contentType = response.headers.get('content-type') || '';
      if (contentType.includes('application/json')) {
        data = await response.json();
      } else {
        const textBody = await response.text();
        data = { message: textBody };
      }

      if (response.ok && data.redirectUrl) {
        window.location.href = data.redirectUrl;
        return;
      }

      appendMessage(data.message || 'Impossible de créer la proposition.', 'bot');
    } catch (error) {
      appendMessage('Erreur réseau lors de la confirmation.', 'bot');
    } finally {
      confirmBtn.disabled = false;
      confirmBtn.textContent = 'Confirmer la création';
    }
  };

  toggle.addEventListener('click', togglePanel);
  sendBtn.addEventListener('click', sendMessage);
  input.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
      event.preventDefault();
      sendMessage();
    }
  });
  confirmBtn.addEventListener('click', confirmCreation);
})();
