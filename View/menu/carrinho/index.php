<?php
session_start();

// Verifica se o usuário está logado
$usuario_logado = isset($_SESSION['usuario_id']);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="<?= ASSETS ?>css/carrinho.css">
</head>

<body>
    <div class="cart-container">
        <h2>Carrinho de Compras</h2>
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Sabor</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Total</th>
                    <th>Remover</th>
                </tr>
            </thead>
            <tbody id="cartItems"></tbody>
        </table>
        <div class="cart-summary">
            <p><strong>Total:</strong> R$ <span id="cartTotal">0.00</span></p>
            <button class="btn" onclick="finalizarCompra()">Finalizar Compra</button>
        </div>
    </div>

    <script>
        let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

        // Função para exibir os itens do carrinho
        function displayCartItems() {
            const cartTableBody = document.getElementById('cartItems');
            cartTableBody.innerHTML = '';

            cartItems.forEach((item, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.name}</td>
                    <td>${item.sabor}</td>
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

        // Função para atualizar a quantidade
        function updateQuantity(index, newQuantity) {
            cartItems[index].quantity = parseInt(newQuantity);
            localStorage.setItem('cartItems', JSON.stringify(cartItems));
            displayCartItems();
        }

        // Função para remover item do carrinho
        function removeItem(index) {
            cartItems.splice(index, 1);
            localStorage.setItem('cartItems', JSON.stringify(cartItems));
            displayCartItems();
        }

        // Função para calcular o total do carrinho
        function updateCartTotal() {
            const total = cartItems.reduce((sum, item) => sum + item.price * item.quantity, 0);
            document.getElementById('cartTotal').textContent = total.toFixed(2);
        }

        // Função para finalizar a compra
        function finalizarCompra() {
            const usuarioLogado = <?= json_encode($usuario_logado); ?>; // Converte a variável PHP para JavaScript

            if (!usuarioLogado) {
                alert("Você precisa estar logado para finalizar a compra.");
                window.location.href = '<?= URL . 'index.php?pg=login' ?>'; // Redireciona para login
                return;
            }

            if (cartItems.length > 0) {
                alert("Redirecionando para a página de pagamento...");
                window.location.href = '<?= URL . 'index.php?pg=pagamento' ?>';
            } else {
                alert("O carrinho está vazio!");
            }
        }



        // Função para adicionar produtos ao carrinho
        function adicionarAoCarrinho(nome, preco) {
            // Pega o sabor selecionado do produto (o select dentro da div com a classe 'sabor')
            const saborElemento = document.querySelector(`#${nome} .sabor .sabores`);
            const saborProduto = saborElemento ? saborElemento.value : 'Sem sabor'; // Se o sabor não for selecionado, coloca 'Sem sabor'

            // Verifica se o item já existe no carrinho, considerando o nome e o sabor
            let existingItem = cartItems.find(item => item.name === nome && item.sabor === saborProduto);

            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cartItems.push({
                    name: nome,
                    sabor: saborProduto,
                    price: preco,
                    quantity: 1
                });
            }

            localStorage.setItem('cartItems', JSON.stringify(cartItems)); // Salva no localStorage
            displayCartItems(); // Atualiza a exibição dos itens no carrinho
            alert(`${nome} (${saborProduto}) foi adicionado ao carrinho!`);
        }

        // Exibe os itens do carrinho quando a página carregar
        window.onload = displayCartItems;
    </script>
</body>

</html>