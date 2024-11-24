<link href="<?= ASSETS ?>css/historico.css" rel="stylesheet">
<div class="history-container">
        <h2>Histórico de Compras</h2>
        <p>Veja suas compras anteriores e o status de cada pedido.</p>
        
        <table class="history-table">
            <thead>
                <tr>
                    <th>Pedido</th>
                    <th>Data</th>
                    <th>Status</th>
                    <th>Valor Total</th>
                    <th>Detalhes</th>
                </tr>
            </thead>
            <tbody id="historyItems">
            </tbody>
        </table>
    </div>

    <script>
        // Exemplo de dados de histórico de compras (normalmente viria de um backend)
        const purchaseHistory = [
            {
                orderNumber: '12345',
                orderDate: '15/11/2024',
                status: 'Entregue',
                totalValue: 299.90,
                details: [
                    { name: 'Produto 1', price: 99.90, quantity: 2 },
                    { name: 'Produto 2', price: 99.90, quantity: 1 }
                ]
            },
            {
                orderNumber: '67890',
                orderDate: '01/11/2024',
                status: 'Enviado',
                totalValue: 150.00,
                details: [
                    { name: 'Produto 3', price: 50.00, quantity: 3 }
                ]
            },
            {
                orderNumber: '11121',
                orderDate: '20/10/2024',
                status: 'Em Processamento',
                totalValue: 120.00,
                details: [
                    { name: 'Produto 4', price: 120.00, quantity: 1 }
                ]
            }
        ];

        // Função para exibir o histórico de compras
        function displayPurchaseHistory() {
            const historyTableBody = document.getElementById('historyItems');
            historyTableBody.innerHTML = '';

            purchaseHistory.forEach(order => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${order.orderNumber}</td>
                    <td>${order.orderDate}</td>
                    <td>${order.status}</td>
                    <td>R$ ${order.totalValue.toFixed(2)}</td>
                    <td><button onclick="showOrderDetails(${purchaseHistory.indexOf(order)})">Ver Detalhes</button></td>
                `;
                historyTableBody.appendChild(row);
            });
        }

        // Função para exibir os detalhes de um pedido
        function showOrderDetails(index) {
            const order = purchaseHistory[index];
            alert(`Detalhes do Pedido ${order.orderNumber}:\n` +
                  order.details.map(item => `${item.name} - R$ ${item.price.toFixed(2)} x ${item.quantity}`).join('\n') + 
                  `\nTotal: R$ ${order.totalValue.toFixed(2)}`);
        }

        // Exibir o histórico de compras quando a página carregar
        window.onload = displayPurchaseHistory;
    </script>
