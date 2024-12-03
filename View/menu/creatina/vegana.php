<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Creatina Monohidratada em Pó Creapure, Vegan Keto Sem Glúten</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/vegana_musclefeast.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                Certificado vegano e sem glúten, Creatina Monohidratada em Pó Creapure melhora a força, potência, massa muscular e resistência.<br>

                Vegano e sem glúten<br>
                Creatina mais bem avaliada no Labdoor<br>
                Melhora a força, potência e massa muscular<br>
            </p>
            <div class="sabor">
                <h3>Sem sabor</h3>
            </div>
        </div>
        <div class="quantity-controls" id="quantity-controls" style="display: none;">
            <button id="decrease-quantity" class="quantity-button">-</button>
            <span id="quantity-display">1</span>
            <button id="increase-quantity" class="quantity-button">+</button>
            <button id="confirm-cart-button" class="confirm-button">Confirmar</button>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 232,43</h2>

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
            Auxilia no aumento de força e potência muscular, sendo perfeita para atletas que buscam melhorar seu desempenho em atividades de alta intensidade.<br>
            Favorece o ganho de massa muscular magra ao aumentar os níveis de ATP (energia celular).<br>
            Compatível com dietas veganas, keto (cetogênica) e sem glúten.<br>
            Livre de aditivos ou ingredientes artificiais, focando na pureza e eficácia.<br>
            Além de auxiliar no ganho de força e potência, também melhora a resistência muscular, ajudando em treinos prolongados.
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

    <script src="<?= CONTROLLER ?>descricao.js">
        loadComments();
        initCarrinho();
    </script>