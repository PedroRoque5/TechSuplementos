
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