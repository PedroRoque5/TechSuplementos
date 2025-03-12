<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Arginine 3000mg (90 tabs) - Integralmedica</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/arginine.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                Supere as barreiras de fadiga e desempenho com a Arginina 3000MG da Integralmedica. Este suplemento essencial é projetado para atletas que buscam melhorar significativamente a circulação sanguínea, a oxigenação muscular e a entrega de nutrientes. Com 3000mg de L-arginina de alta potência por dose, ele é perfeito para quem deseja maximizar a vasodilatação, aumentar a força e acelerar a recuperação após o treino.<br>
                <strong>Consulte um profissional de saúde antes de iniciar o uso.</strong>
            </p>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 119,90</h2>

    <div class="actions">
        <a href="<?= URL . 'index.php?pg=pagamento' ?>">
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
    </div>

    <section class="curiosidades">
        <h3>Curiosidades sobre o produto</h3>
        <p>
            Benefícios:<br>

            Melhora a Vasodilatação: Aumenta o fluxo sanguíneo, otimizando a entrega de oxigênio e nutrientes para os músculos.<br>

            Desempenho Aprimorado: Ajuda na redução da fadiga e melhora a capacidade de treinamento.<br>

            Recuperação Muscular: Facilita uma recuperação mais rápida e eficaz após sessões intensas de treino.<br>
        </p>
    </section>


    <main>
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

        <!-- Lista de Avaliações -->
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