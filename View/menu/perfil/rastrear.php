<link href="<?= ASSETS ?>css/rastrear.css" rel="stylesheet">
<div class="tracking-container">
        <h2>Rastrear Pedido</h2>
        <p>Insira o número do pedido para verificar o status.</p>

        <form id="trackForm">
            <input type="text" id="orderNumber" placeholder="Número do pedido" required>
            <button type="button" class="btn" onclick="trackOrder()">Rastrear</button>
        </form>

        <div class="tracking-status" id="trackingStatus">
        </div>
    </div>
