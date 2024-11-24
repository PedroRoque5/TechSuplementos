<link rel="stylesheet" href="<?= ASSETS ?>css/carrinho.css" rel="stylesheet">
<div class="cart-container">
        <h2>Carrinho de Compras</h2>
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Total</th>
                    <th>Remover</th>
                </tr>
            </thead>
            <tbody id="cartItems">
            </tbody>
        </table>
        <div class="cart-summary">
            <p><strong>Total:</strong> R$ <span id="cartTotal">0.00</span></p>
            <button class="btn" onclick="finalizarCompra()">Finalizar Compra</button>
        </div>
    </div>
    <script>
        // Exemplo de itens do carrinho (normalmente viria de um backend)
        let cartItems = [
            { name: 'Produto 1', price: 99.90, quantity: 1 },
            { name: 'Produto 2', price: 49.99, quantity: 2 },
            { name: 'Produto 3', price: 149.90, quantity: 1 },
        ];

        // Função para exibir os itens no carrinho
        function displayCartItems() {
            const cartTableBody = document.getElementById('cartItems');
            cartTableBody.innerHTML = '';

            cartItems.forEach((item, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.name}</td>
                    <td>R$ ${item.price.toFixed(2)}</td>
                    <td>
                        <input type="number" value="${item.quantity}" min="1" onchange="updateQuantity(${index}, this.value)">
                    </td>
                    <td>R$ ${(item.price * item.quantity).toFixed(2)}</td>
                    <td><button onclick="removeItem(${index})">Remover</button></td>
                `;
                cartTableBody.appendChild(row);
            });

            updateCartTotal();
        }

        // Função para atualizar a quantidade de um item
        function updateQuantity(index, newQuantity) {
            cartItems[index].quantity = parseInt(newQuantity);
            displayCartItems();
        }

        // Função para remover um item do carrinho
        function removeItem(index) {
            cartItems.splice(index, 1);
            displayCartItems();
        }

        // Função para calcular o total do carrinho
        function updateCartTotal() {
            const total = cartItems.reduce((sum, item) => sum + item.price * item.quantity, 0);
            document.getElementById('cartTotal').textContent = total.toFixed(2);
        }

        // Função para simular o processo de finalizar a compra
        function finalizarCompra() {
            if (cartItems.length > 0) {
                alert('Compra finalizada com sucesso!');
            } else {
                alert('O carrinho está vazio!');
            }
        }

        // Exibir os itens do carrinho quando a página carregar
        window.onload = displayCartItems;
    </script>