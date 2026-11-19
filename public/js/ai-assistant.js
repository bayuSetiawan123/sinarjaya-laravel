(() => {
    const root = document.getElementById('aiAssistantWidget');
    if (!root) return;

    const panel = document.getElementById('aiAssistantPanel');
    const toggle = document.getElementById('aiAssistantToggle');
    const close = document.getElementById('aiAssistantClose');
    const form = document.getElementById('aiAssistantForm');
    const input = document.getElementById('aiAssistantInput');
    const send = document.getElementById('aiAssistantSend');
    const messages = document.getElementById('aiAssistantMessages');
    const endpoint = root.dataset.endpoint;
    const csrf = root.dataset.csrf;
    const userTemplate = document.getElementById('aiAssistantUserTemplate');
    const replyTemplate = document.getElementById('aiAssistantReplyTemplate');

    const history = [];
    let busy = false;

    function setOpen(open) {
        panel.classList.toggle('hidden', !open);
        toggle.setAttribute('aria-expanded', String(open));
        if (open) input.focus();
        else toggle.focus();
    }

    function appendMessage(role, text) {
        const template = role === 'user' ? userTemplate : replyTemplate;
        const node = template.content.firstElementChild.cloneNode(true);
        node.textContent = text;
        messages.appendChild(node);
        messages.scrollTop = messages.scrollHeight;
        return node;
    }

    function appendError(text) {
        appendMessage('assistant', text);
    }

    toggle.addEventListener('click', () => setOpen(panel.classList.contains('hidden')));
    close.addEventListener('click', () => setOpen(false));

    document.addEventListener('keydown', event => {
        if (event.key === 'Escape' && !panel.classList.contains('hidden')) {
            setOpen(false);
        }
    });

    root.querySelectorAll('[data-ai-prompt]').forEach(button => {
        button.addEventListener('click', () => {
            input.value = button.dataset.aiPrompt || '';
            input.focus();
        });
    });

    form.addEventListener('submit', async event => {
        event.preventDefault();
        const message = input.value.trim();
        if (!message || busy) return;

        const previousHistory = history.slice(-8);
        history.push({ role: 'user', content: message });
        appendMessage('user', message);
        input.value = '';
        busy = true;
        send.disabled = true;
        send.textContent = '...';
        const loading = appendMessage('assistant', 'Sedang menyiapkan jawaban...');

        try {
            const response = await fetch(endpoint, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrf,
                },
                body: JSON.stringify({ message, history: previousHistory }),
            });

            const data = await response.json().catch(() => ({}));
            if (!response.ok) {
                throw new Error(data.message || `Permintaan gagal (${response.status}).`);
            }
            if (typeof data.reply !== 'string' || !data.reply.trim()) {
                throw new Error('AI belum memberikan jawaban. Silakan coba lagi.');
            }

            loading.textContent = data.reply;
            history.push({ role: 'assistant', content: data.reply });
            if (history.length > 8) history.splice(0, history.length - 8);
        } catch (error) {
            loading.textContent = error.message || 'Terjadi kendala saat menghubungi AI.';
        } finally {
            busy = false;
            send.disabled = false;
            send.textContent = 'Kirim';
            messages.scrollTop = messages.scrollHeight;
            input.focus();
        }
    });
})();