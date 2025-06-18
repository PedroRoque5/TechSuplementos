<?php
// Sessão já é iniciada no index.php, não é necessário iniciar novamente

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
                    <td>${item.sabor || '-'}</td>
                    <td>R$ ${parseFloat(item.price).toFixed(2)}</td>
                    <td>
                        <input type="number" value="${item.quantity}" min="1" onchange="updateQuantity(${index}, this.value)">
                    </td>
                    <td>R$ ${(parseFloat(item.price) * parseInt(item.quantity)).toFixed(2)}</td>
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
            const total = cartItems.reduce((sum, item) => sum + (parseFloat(item.price) * parseInt(item.quantity)), 0);
            document.getElementById('cartTotal').textContent = total.toFixed(2);
        }

        // Função para limpar o carrinho
        function limparCarrinho() {
            localStorage.removeItem('cartItems');
            atualizarCarrinho();
        }

        // Função para validar e corrigir o carrinho
        function validarCarrinho() {
            let carrinho = JSON.parse(localStorage.getItem('cartItems')) || [];
            let carrinhoCorrigido = [];
            let itensProcessados = new Set();

            carrinho.forEach(item => {
                // Se o item não tem ID, tenta encontrar pelo nome
                if (!item.id) {
                    const itemExistente = carrinhoCorrigido.find(i => i.name === item.name && i.sabor === item.sabor);
                    if (itemExistente) {
                        itemExistente.quantity += item.quantity;
                    } else {
                        console.error('Item sem ID encontrado:', item);
                        // Remove o item sem ID
                        return;
                    }
                } else {
                    // Verifica se o item já foi processado
                    const chave = `${item.id}-${item.sabor || 'sem-sabor'}`;
                    if (!itensProcessados.has(chave)) {
                        itensProcessados.add(chave);
                        carrinhoCorrigido.push({
                            id: parseInt(item.id),
                            name: item.name,
                            price: parseFloat(item.price),
                            quantity: parseInt(item.quantity),
                            sabor: item.sabor || null
                        });
                    } else {
                        // Atualiza a quantidade do item existente
                        const itemExistente = carrinhoCorrigido.find(i => i.id === item.id && i.sabor === item.sabor);
                        if (itemExistente) {
                            itemExistente.quantity += parseInt(item.quantity);
                        }
                    }
                }
            });

            // Atualiza o carrinho com os dados corrigidos
            localStorage.setItem('cartItems', JSON.stringify(carrinhoCorrigido));
            return carrinhoCorrigido;
        }

        // Função para obter dados do carrinho
        function getCarrinho() {
            const carrinho = validarCarrinho();
            console.log('Carrinho validado:', carrinho);
            return carrinho;
        }

        // Função para finalizar a compra
        function finalizarCompra() {
            const usuarioLogado = <?= json_encode($usuario_logado); ?>;
            
            if (!usuarioLogado) {
                alert('Você precisa estar logado para finalizar a compra!');
                window.location.href = '<?= URL ?>index.php?pg=login';
                return;
            }

            const carrinho = getCarrinho();
            if (carrinho.length === 0) {
                alert('Seu carrinho está vazio!');
                return;
            }

            // Verifica se todos os itens têm ID
            const itensInvalidos = carrinho.filter(item => !item.id);
            if (itensInvalidos.length > 0) {
                console.error('Itens inválidos encontrados:', itensInvalidos);
                alert('Existem itens inválidos no carrinho. Por favor, remova-os e tente novamente.');
                return;
            }

            // Verificar estoque antes de finalizar
            verificarEstoque(carrinho);
        }

        // Função para verificar estoque
        async function verificarEstoque(carrinho) {
            try {
                const response = await fetch('<?= URL ?>verificar_estoque.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ carrinho: carrinho })
                });

                const data = await response.json();
                
                if (data.sucesso) {
                    // Estoque OK, prosseguir para pagamento
                    window.location.href = '<?= URL ?>index.php?pg=pagamento';
                } else {
                    // Estoque insuficiente
                    alert('Erro de estoque: ' + data.mensagem);
                }
            } catch (error) {
                console.error('Erro ao verificar estoque:', error);
                // Em caso de erro, prosseguir para pagamento (o servidor vai verificar novamente)
                window.location.href = '<?= URL ?>index.php?pg=pagamento';
            }
        }

        // Função para adicionar ao carrinho
        function adicionarAoCarrinho(id, nome, preco, quantidade = 1, sabor = null) {
            console.log('Adicionando ao carrinho:', { id, nome, preco, quantidade, sabor }); // Log dos dados
            let carrinho = JSON.parse(localStorage.getItem('cartItems')) || [];
            
            // Verifica se o item já existe no carrinho
            const itemExistente = carrinho.find(item => item.id === id && item.sabor === sabor);
            
            if (itemExistente) {
                itemExistente.quantity += quantidade;
            } else {
                carrinho.push({
                    id: id,
                    name: nome,
                    price: preco,
                    quantity: quantidade,
                    sabor: sabor
                });
            }
            
            localStorage.setItem('cartItems', JSON.stringify(carrinho));
            console.log('Carrinho atualizado:', carrinho); // Log do carrinho atualizado
            atualizarCarrinho();
        }

        // Função para atualizar a exibição do carrinho
        function atualizarCarrinho() {
            const carrinho = getCarrinho();
            const carrinhoContainer = document.getElementById('carrinho-container');
            const totalElement = document.getElementById('total');
            
            if (carrinho.length === 0) {
                carrinhoContainer.innerHTML = '<p>Seu carrinho está vazio</p>';
                totalElement.textContent = 'Total: R$ 0,00';
                return;
            }

            let html = '';
            let total = 0;

            carrinho.forEach(item => {
                const itemTotal = item.preco * item.quantidade;
                total += itemTotal;
                
                html += `
                    <div class="item-carrinho">
                        <span>${item.nome}</span>
                        <span>R$ ${item.preco.toFixed(2)}</span>
                        <span>
                            <button onclick="alterarQuantidade('${item.id}', ${item.quantidade - 1})">-</button>
                            ${item.quantidade}
                            <button onclick="alterarQuantidade('${item.id}', ${item.quantidade + 1})">+</button>
                        </span>
                        <span>R$ ${itemTotal.toFixed(2)}</span>
                        <button onclick="removerItem('${item.id}')">Remover</button>
                    </div>
                `;
            });

            carrinhoContainer.innerHTML = html;
            totalElement.textContent = `Total: R$ ${total.toFixed(2)}`;
        }

        // Função para alterar quantidade
        function alterarQuantidade(id, novaQuantidade) {
            console.log('Alterando quantidade:', { id, novaQuantidade }); // Log da alteração
            if (novaQuantidade < 1) {
                removerItem(id);
                return;
            }

            let carrinho = JSON.parse(localStorage.getItem('cartItems')) || [];
            const item = carrinho.find(item => item.id === id);
            
            if (item) {
                item.quantity = novaQuantidade;
                localStorage.setItem('cartItems', JSON.stringify(carrinho));
                console.log('Carrinho após alteração:', carrinho); // Log do carrinho
                atualizarCarrinho();
            }
        }

        // Função para remover item
        function removerItem(id) {
            console.log('Removendo item:', id); // Log da remoção
            let carrinho = JSON.parse(localStorage.getItem('cartItems')) || [];
            carrinho = carrinho.filter(item => item.id !== id);
            localStorage.setItem('cartItems', JSON.stringify(carrinho));
            console.log('Carrinho após remoção:', carrinho); // Log do carrinho
            atualizarCarrinho();
        }

        // Exibe os itens do carrinho quando a página carregar
        window.onload = displayCartItems;
    </script>
</body>

</html>