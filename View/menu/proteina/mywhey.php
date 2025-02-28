<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">My Whey Pronto (250ml) - Integralmédica</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/bebida_whey.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                O MY WHEY da INTEGRALMÉDICA é uma bebida proteica pronta para o consumo, ideal para te acompanhar na correria do dia a dia.<br>

                Ele elaborado com uma formula premium que possui proteínas de alta qualidade, sendo 20g por porção. Além disso ele também contém uma ótima quantidade de aminoácidos essenciais.<br>

                Está com certeza é a opção que você procurava para lhe ajudar no aporte proteico, pois além de ser muito prático, também é saudável!<br>

                O MY WHEY é muito saboroso e ainda é um produto sem lactose, rico em fibras, com baixo teor de gorduras e carboidratos e zero adição açúcar.<br>

                Disponível em quatro sabores: Banana, chocolate, coco e morango.<br>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Chocolate</option>
                    <option value="baunilha">Baunilha</option>
                    <option value="morango">Morango</option>
                    <option value="banana">Banana</option>
                    <option value="coco">Coco</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 13,19</h2>

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
            - pronto para o consumo;<br>

            - zero adição açúcar;<br>

            - formula premium;<br>

            - rico em fibras;<br>

            - contém 9 aminoácidos essenciais;<br>

            - 20g de proteína por porção;<br>

            - sem lactose;<br>

            - baixo teor de gorduras e carboidratos;<br>

            - praticidade no consumo.<br>
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