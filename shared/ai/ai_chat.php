<?php
/**
 * AI Assistant chat screen — included through shared/dashboard.php via the
 * dispatch map ('AI Assistant' => '../shared/ai/ai_chat.php').
 * Session, role guard, and CSRF token are already active.
 */
$aiToken = xtrac_csrf_token();
$aiSnap = xtrac_ai_usage_snapshot();
?>
<div class="w3-container" style="max-width:900px;">
    <h4 class="w3-text-green"><i class="fa fa-robot fa-fw w3-text-blue-grey" aria-hidden="true" style="font-size:36px;"></i> AI Assistant</h4>
    <p class="w3-text-grey" style="font-size:12px;">
        Answers about your assets, budgets, tickets and reports.
        Quota: <b id="ai-quota"><?php echo (int) $aiSnap['user']; ?>/<?php echo (int) $aiSnap['user_limit']; ?></b> requests today for you,
        <?php echo (int) $aiSnap['global']; ?>/<?php echo (int) $aiSnap['global_limit']; ?> app-wide (resets midnight UTC).
    </p>

    <div id="ai-chat-log" class="w3-panel w3-white w3-border" style="height:420px; overflow-y:auto; padding:12px; font-size:14px;">
        <div class="ai-msg ai-assistant" style="margin-bottom:10px;">
            <b>You:</b> Hi! I'm the xTrac AI Assistant. Ask me anything about this system —
            e.g. "how do I add an asset?", "summarize open tickets", "what is in the budget screen?".
        </div>
    </div>

    <div style="display:flex; gap:8px; margin-top:8px;">
        <input id="ai-chat-input" type="text" class="w3-input w3-border" style="flex:1"
               placeholder="Type a message…" maxlength="4000" autocomplete="off">
        <button id="ai-chat-send" class="w3-button w3-green" type="button">Send</button>
    </div>
    <p id="ai-chat-status" class="w3-text-red" style="font-size:12px; min-height:16px;"></p>
</div>

<script>
(function () {
    var AI_CSRF = <?php echo json_encode($aiToken); ?>;
    var history = [];
    var busy = false;
    var log = document.getElementById('ai-chat-log');
    var input = document.getElementById('ai-chat-input');
    var sendBtn = document.getElementById('ai-chat-send');
    var status = document.getElementById('ai-chat-status');
    var quota = document.getElementById('ai-quota');

    function esc(s) {
        var d = document.createElement('div');
        d.appendChild(document.createTextNode(s));
        return d.innerHTML;
    }
    function addMsg(who, text) {
        var div = document.createElement('div');
        div.className = 'ai-msg ai-' + who;
        div.style.marginBottom = '10px';
        div.innerHTML = '<b>' + (who === 'assistant' ? 'AI' : 'You') + ':</b> ' + esc(text);
        log.appendChild(div);
        log.scrollTop = log.scrollHeight;
    }
    function send() {
        if (busy) return;
        var msg = input.value.replace(/^\s+|\s+$/g, '');
        if (!msg) return;
        busy = true;
        sendBtn.disabled = true;
        status.textContent = '';
        addMsg('user', msg);
        input.value = '';

        var fd = new FormData();
        fd.append('xtrac_csrf', AI_CSRF);
        fd.append('message', msg);
        fd.append('history', JSON.stringify(history.slice(-8)));

        fetch('../shared/ai/ai_chat_backend.php', { method: 'POST', body: fd, credentials: 'same-origin' })
            .then(function (r) { return r.json().then(function (j) { return { status: r.status, j: j }; }); })
            .then(function (res) {
                if (res.j && res.j.ok) {
                    history.push({ role: 'user', content: msg });
                    history.push({ role: 'assistant', content: res.j.reply });
                    addMsg('assistant', res.j.reply);
                    if (quota && res.j.quota) quota.textContent = res.j.quota;
                } else {
                    status.textContent = (res.j && res.j.error) ? res.j.error : ('Request failed (HTTP ' + res.status + ').');
                }
            })
            .catch(function () {
                status.textContent = 'Network error — could not reach the AI endpoint.';
            })
            .then(function () {
                busy = false;
                sendBtn.disabled = false;
                input.focus();
            });
    }
    sendBtn.addEventListener('click', send);
    input.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') { e.preventDefault(); send(); }
    });
    input.focus();
})();
</script>
