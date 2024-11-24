
    <link rel="stylesheet" href="<?= ASSETS ?>css/notificacoes.css" rel="stylesheet">
    <div class="notifications-container">
        <h2>Configurações de Notificações</h2>
        <p>Escolha como deseja receber notificações sobre seu uso na loja.</p>
        <form id="notificationsForm">
            <div class="notification-group">
                <label for="promoEmails">
                    <input type="checkbox" id="promoEmails" name="promoEmails" checked>
                    Receber promoções e descontos por e-mail
                </label>
            </div>
            <div class="notification-group">
                <label for="orderStatus">
                    <input type="checkbox" id="orderStatus" name="orderStatus" checked>
                    Atualizações sobre status do pedido
                </label>
            </div>
            <div class="notification-group">
                <label for="smsAlerts">
                    <input type="checkbox" id="smsAlerts" name="smsAlerts">
                    Notificações por SMS para ofertas especiais
                </label>
            </div>
            <div class="notification-status" id="statusMessage"></div>
            <button type="button" class="btn" onclick="saveNotificationSettings()">Salvar Configurações</button>
        </form>
    </div>
    <script>
        function saveNotificationSettings() {
            const promoEmails = document.getElementById('promoEmails').checked;
            const orderStatus = document.getElementById('orderStatus').checked;
            const smsAlerts = document.getElementById('smsAlerts').checked;

            const statusMessage = document.getElementById('statusMessage');

            statusMessage.textContent = "Salvando configurações...";
            setTimeout(() => {
                statusMessage.textContent = `
                    Configurações salvas: 
                    E-mails Promocionais: ${promoEmails ? 'Ativado' : 'Desativado'}, 
                    Status do Pedido: ${orderStatus ? 'Ativado' : 'Desativado'}, 
                    SMS: ${smsAlerts ? 'Ativado' : 'Desativado'}, 
                `;
            }, 1000);
        }
    </script>