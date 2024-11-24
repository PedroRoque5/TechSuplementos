<link rel="stylesheet" href="<?= ASSETS ?>css/privacidade.css" rel="stylesheet">
<div class="privacy-container">
        <h2>Configurações de Privacidade</h2>
        <p>Gerencie suas preferências de privacidade para personalizar sua experiência em nosso site.</p>
        <form id="privacyForm">
            <div class="privacy-group">
                <label for="purchaseHistory">
                    <input type="checkbox" id="purchaseHistory" name="purchaseHistory" checked>
                    Permitir uso do histórico de compras para recomendações
                </label>
            </div>
            <div class="privacy-group">
                <label for="trackingCookies">
                    <input type="checkbox" id="trackingCookies" name="trackingCookies">
                    Ativar cookies de rastreamento para melhorar a experiência de navegação
                </label>
            </div>
            <div class="privacy-group">
                <label for="emailMarketing">
                    <input type="checkbox" id="emailMarketing" name="emailMarketing" checked>
                    Receber ofertas e promoções por e-mail
                </label>
            </div>
            <div class="privacy-group">
                <label for="dataSharingPartners">
                    <input type="checkbox" id="dataSharingPartners" name="dataSharingPartners">
                    Compartilhar dados com parceiros para promoções exclusivas
                </label>
            </div>
            <div class="privacy-status" id="statusMessage"></div>
            <button type="button" class="btn" onclick="savePrivacySettings()">Salvar Configurações</button>
        </form>
    </div>
