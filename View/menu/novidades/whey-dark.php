<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Whey Protein Concentrado 1KG - Dark Lab</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/whey-dark.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                O Whey Protein é um suplemento alimentar derivado do soro do leite, que é uma fonte rica em proteínas de alta qualidade. É amplamente utilizado por atletas e entusiastas de fitness para auxiliar na recuperação muscular, ganho de massa muscular e suporte nutricional.<br>

                Experimente o melhor, entre para o Team Dark Lab!<br>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Chocolate</option>
                    <option value="chocolate">Chocolate Branco</option>
                    <option value="baunilha">Baunilha</option>
                    <option value="morango">Morango</option>
                    <option value="morango">Cookies N Cream</option>
                    <option value="cookies">Doce de leite</option>
                    <option value="cookies">Paçoca</option>
                    <option value="cookies">Banana</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 94,90</h2>

    <div class="actions">
        < <a href="<?= URL . 'index.php?pg=pagamento' ?>">
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
            BENEFÍCIOS DO WHEY PROTEIN CONCENTRADO:<br>

            ✔ Aumento da Síntese proteica<br>

            ✔ Recuperação muscular acelerada<br>

            ✔ Aumento da Massa Muscular<br>

            ✔ Saciedade e Controle de Peso<br>

            ✔ Suporte ao Sistema imunológico<br>
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