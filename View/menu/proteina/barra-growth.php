<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Barra De Proteína Growth Supplements</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/barra.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                A Growth Protein Bar é uma opção saudável de barra de proteína com um Blend Protéico de alto valor biológico composto por: Proteína Isolada do Soro do Leite, Proteína Concentrada do Soro do Leite e Caseinato de Cálcio.<br>

                A barra de proteína é prática e pequena, facilitando o alcance das metas de proteína diária da dieta. Oferece uma variedade de sabores para todos os gostos e é uma alternativa para lanches entre as principais refeições. Sua composição conta com fibras, proteína e baixa quantidade de carboidratos.
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Chocolate</option>
                    <option value="churros">Churros</option>
                    <option value="morango">Morango</option>
                    <option value="morango">Morango com Chocolate</option>
                    <option value="cookies">Cookies N Cream</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 7,90</h2>

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
            A Growth Protein Bar não possui Glúten!<br>
            Fornece proteína de fonte de qualidade, alta quantidade de Fibras, sacia a fome e fornece bons nutrientes. Alta concentração de aminoácidos essenciais e de cadeia ramificada oferecidos pelas fontes proteicas trazem benefícios ao desempenho esportivo.<br>

            Barra de Proteína e controle de peso
            Rica em proteínas e fibras, auxilia na manutenção de massa muscular e na saciedade, sendo uma escolha adequada para dietas de redução de gorduras.<br>

            Além de ser um lanche repleto de nutrientes importantes, repõe as energias do corpo e ajuda a evitar o catabolismo.<br>

            Aviso legal<br>
            • Idade mínima recomendada: 18 anos.<br>
            • Consumir junto com alimentos para facilitar sua assimilação.<br>
            • Este produto é um suplemento dietético, não um medicamento. Suplementa dietas<br> insuficientes. Consulte o seu médico e/ou farmacêutico.<br>
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