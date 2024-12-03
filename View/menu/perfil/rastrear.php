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
<script>
    // Função para rastrear o pedido
    function trackOrder() {
        const orderNumber = document.getElementById('orderNumber').value.trim();
        const statusMessage = document.getElementById('trackingStatus');

        // Simulação de dados de rastreamento
        const orders = {
            '12345': {
                status: 'Em Processamento',
                estimatedDelivery: '30/11/2024'
            },
            '67890': {
                status: 'Enviado',
                estimatedDelivery: '28/11/2024'
            },
            '11121': {
                status: 'Entregue',
                estimatedDelivery: '25/11/2024'
            },
        };

        if (orderNumber in orders) {
            const order = orders[orderNumber];
            statusMessage.innerHTML = `
                    <h3>Status do Pedido: ${order.status}</h3>
                    <p><strong>Data Estimada de Entrega:</strong> ${order.estimatedDelivery}</p>
                `;
        } else {
            statusMessage.innerHTML = '<p style="color: red;">Pedido não encontrado. Verifique o número do pedido e tente novamente.</p>';
        }
    }
</script>