<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/TechSuplementos/DAO/Conexao.php';

use TechSuplementos\DAO\Conexao;

$id = $_GET['id'] ?? null;

if (!$id) {
    echo "Produto não encontrado.";
    exit;
}

$conexao = new Conexao();
$produto = $conexao->buscar("SELECT * FROM produtos WHERE id = :id", [':id' => $id]);

if (empty($produto)) {
    echo "Produto não encontrado.";
    exit;
}

$produto = $produto[0];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="produto-id" content="<?= $produto['id'] ?>">
    <title><?= htmlspecialchars($produto['nome']) ?></title>
    <link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
</head>

<main>

    <h1 class="produto"><?= htmlspecialchars($produto['nome']) ?></h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= URL ?>View/cadastro/produto/uploads/<?= htmlspecialchars($produto['imagem']) ?>" alt="<?= htmlspecialchars($produto['nome']) ?>">

        <div class="descreve">
            <p class="descrição"><?= nl2br(htmlspecialchars($produto['descricao'])) ?></p>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></h2>

    <div class="quantity-control">
        <button type="button" onclick="decrementQuantity()">-</button>
        <span id="quantity-display">1</span>
        <button type="button" onclick="incrementQuantity()">+</button>
    </div>

    <div class="actions">
        <a href="<?= URL . 'index.php?pg=pagamento&nome=' . urlencode($produto['nome']) ?>">
            <button class="buy-button">Comprar Agora</button>
        </a>
        <button type="button" class="cart-button" onclick="adicionarAoCarrinho()">
            <i class="fas fa-shopping-cart"></i> Adicionar ao Carrinho
        </button>
    </div>

    <div class="quantity-controls" id="quantity-controls" style="display: none;">
        <button id="decrease-quantity" class="quantity-button">-</button>
        <span id="quantity-display">1</span>
        <button id="increase-quantity" class="quantity-button">+</button>
        <button id="confirm-cart-button" class="confirm-button">Confirmar</button>
    </div>

    <script>
        let quantidade = 1;

        function incrementQuantity() {
            quantidade++;
            document.getElementById('quantity-display').textContent = quantidade;
        }

        function decrementQuantity() {
            if (quantidade > 1) {
                quantidade--;
                document.getElementById('quantity-display').textContent = quantidade;
            }
        }

        function adicionarAoCarrinho() {
            console.log('Função adicionarAoCarrinho chamada');
            
            // Obter dados do produto
            const produtoId = document.querySelector('meta[name="produto-id"]').content;
            console.log('ID do produto:', produtoId);
            
            const produtoNome = document.querySelector('.produto').textContent;
            console.log('Nome do produto:', produtoNome);
            
            const precoText = document.querySelector('.preco').textContent;
            console.log('Texto do preço:', precoText);
            
            const produtoPreco = parseFloat(precoText.replace('R$ ', '').replace(',', '.'));
            console.log('Preço convertido:', produtoPreco);
            
            const quantidadeText = document.querySelector('#quantity-display').textContent;
            console.log('Texto da quantidade:', quantidadeText);
            
            const quantidade = parseInt(quantidadeText);
            console.log('Quantidade convertida:', quantidade);
            
            const sabor = document.querySelector('#sabor')?.value || null;
            console.log('Sabor:', sabor);

            // Validar dados
            if (!produtoId || !produtoNome || isNaN(produtoPreco) || isNaN(quantidade)) {
                console.error('Dados do produto inválidos:', { produtoId, produtoNome, produtoPreco, quantidade });
                alert('Erro ao adicionar produto ao carrinho. Dados inválidos.');
                return;
            }

            // Criar item do carrinho
            const item = {
                id: parseInt(produtoId),
                name: produtoNome,
                price: produtoPreco,
                quantity: quantidade,
                sabor: sabor
            };
            console.log('Item a ser adicionado:', item);

            // Obter carrinho atual
            let carrinho = [];
            try {
                const carrinhoStr = localStorage.getItem('cartItems');
                console.log('Carrinho do localStorage:', carrinhoStr);
                carrinho = carrinhoStr ? JSON.parse(carrinhoStr) : [];
            } catch (error) {
                console.error('Erro ao ler carrinho do localStorage:', error);
                carrinho = [];
            }
            console.log('Carrinho atual:', carrinho);
            
            // Verificar se o item já existe no carrinho
            const itemExistente = carrinho.find(i => i.id === item.id && i.sabor === item.sabor);
            
            if (itemExistente) {
                console.log('Atualizando item existente');
                itemExistente.quantity += item.quantity;
            } else {
                console.log('Adicionando novo item');
                carrinho.push(item);
            }

            // Salvar carrinho atualizado
            try {
                localStorage.setItem('cartItems', JSON.stringify(carrinho));
                console.log('Carrinho atualizado:', carrinho);
                alert('Produto adicionado ao carrinho!');
            } catch (error) {
                console.error('Erro ao salvar carrinho:', error);
                alert('Erro ao salvar no carrinho. Tente novamente.');
            }
        }
    </script>

    <style>
        .quantity-control {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
            gap: 10px;
        }

        .quantity-control button {
            width: 30px;
            height: 30px;
            border: 1px solid #ccc;
            background: #fff;
            cursor: pointer;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .quantity-control button:hover {
            background: #f0f0f0;
        }

        #quantity-display {
            font-size: 18px;
            min-width: 30px;
            text-align: center;
        }
    </style>

    <section class="comentarios">
        <h3>Avalie este produto:</h3>
        <div class="avaliacao" id="avaliacao">
            <span class="estrela" data-value="1">⭐</span>
            <span class="estrela" data-value="2">⭐</span>
            <span class="estrela" data-value="3">⭐</span>
            <span class="estrela" data-value="4">⭐</span>
            <span class="estrela" data-value="5">⭐</span>
        </div>
        <textarea name="comentario" id="comentario" placeholder="Escreva seu comentário aqui..." rows="5" required></textarea>
        <button type="button" class="submit-button" id="submit-button">Enviar Comentário</button>
    </section>

    <section class="reviews">
        <h3>Avaliações dos Clientes:</h3>
        <ul id="reviews-list">
            <!-- Comentários serão carregados aqui -->
        </ul>
    </section>

</main>

<script src="<?= CONTROLLER ?>descricao.js" defer></script>
