<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">CREATINE - CREATINA MONOHIDRATADA - 300G</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/blackscull.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                100% Creatina Monohidratada entregando 3000mg por dose.
                A CREATINE™ da BLACKSKULL USA™ é um produto composto 100% por creatina monoidratada que irá fornecer mais energia para melhorar o desempenho físico durante exercícios repetidos de curta duração e alta intensidade, contribuindo para a hipertrofia muscular.
            </p>
            <div class="sabor">
                <h3>Sem sabor</h3>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 89,90</h2>

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
            A creatina é um composto produzido pelos rins, fígado e pâncreas e é armazenada, em sua maior parte, nas fibras musculares. Ela também pode ser encontrada em carnes e peixes. A cada 1kg de carne vermelha, encontra-se 5g de creatina. O papel primário da creatina nos músculos é fornecer energia para as células musculares durante exercícios de resistência e sprint de alta intensidade.<br>
            A creatina monohidratada é um dos ativos mais estudados pela ciência nos últimos anos. Além dos benefícios conhecidos para o esporte, seu consumo apresentou efeitos anti-inflamatórios melhorando a saúde de forma geral e a melhoria da performance cerebral por atuar como neuroprotetora, diminuindo a demanda cerebral por oxigênio.<br>
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