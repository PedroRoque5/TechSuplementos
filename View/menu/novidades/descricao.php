<?php
require_once './TechSuplementos/DAO/Conexao.php';

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

<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">

<main>

    <h1 class="produto"><?= htmlspecialchars($produto['nome']) ?></h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= URL ?>View/cadastro/produto/uploads/<?= htmlspecialchars($produto['imagem']) ?>" alt="<?= htmlspecialchars($produto['nome']) ?>">

        <div class="descreve">
            <p class="descrição"><?= nl2br(htmlspecialchars($produto['descricao'])) ?></p>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></h2>

    <div class="actions">
        <a href="<?= URL . 'index.php?pg=pagamento&nome=' . urlencode($produto['nome']) ?>">
            <button class="buy-button">Comprar Agora</button>
        </a>
        <button class="cart-button" id="cart-button">
            <i class="fas fa-shopping-cart"></i> Adicionar ao Carrinho
        </button>
    </div>

    <div class="quantity-controls" id="quantity-controls" style="display: none;">
        <button id="decrease-quantity" class="quantity-button">-</button>
        <span id="quantity-display">1</span>
        <button id="increase-quantity" class="quantity-button">+</button>
        <button id="confirm-cart-button" class="confirm-button">Confirmar</button>
    </div>


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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        loadComments();
        initCarrinho();
    });
</script>
