<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Creatina 100% Pura 1050g</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/ronnie.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">

                Seja você um atleta, fisiculturista ou praticante regular de exercícios, a inclusão da Creatina Pura em sua rotina pode promover ganhos significativos de massa muscular, resistência e recuperação pós-exercício. Fatos recentes atribuem a Creatina melhoras também na parte cognitiva e de foco.<br>


                Escolha a qualidade Ronnie Coleman e potencialize seus resultados com a Creatina - a aliada perfeita para alcançar seus objetivos de forma eficaz e segura. Transforme seu treinamento e conquiste seu melhor desempenho com esse suplemento essencial.<br>
            </p>
            <div class="sabor">
                <h3>Sem sabor</h3>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 232,70</h2>

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
            A Creatina é um suplemento nutricional amplamente reconhecido por sua eficácia em impulsionar o desempenho físico e mental bem como a força muscular. Composta por aminoácidos essenciais, a creatina desempenha um papel crucial no fornecimento rápido de energia durante atividades de alta intensidade.<br>


            Essa substância natural é fundamental para a ressíntese de ATP, a principal fonte de energia celular. Ao optar por Creatina, você garante a pureza do suplemento, sem aditivos desnecessários.<br>
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