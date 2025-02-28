<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Gold Standard 100% Whey 2.2kg Optimum Nutrition</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/goldstandard.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                O Whey Protein que definiu o padrão Gold de qualidade. Proteína mais vendida e premiada do mundo. Ideal para suporte e recuperação muscular<br>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Chocolate</option>
                    <option value="baunilha">Baunilha</option>
                    <option value="morango">Morango</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 480,85</h2>

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
        <p>Gold Standard 100% Whey 2.2kg Baunilha Optimum Nutrition
            O 100% Whey Gold Standard Optimum Nutrition oferece 24 g de proteina do soro do leite com altíssimo valor biológico. Este potenciador de proteínas é ideal para atletas e adultos em movimento, pois ajuda na recuperação, manutenção e ganho de massa muscular. Cada porção de Whey Gold Standard possui uma mistura de Whey Protein Isolado, Whey Protein Concentrado, Whey Peptídios e 5,5g de Aminoácidos de Cadeia Ramificada (BCAAs) que ajudam a construir massa magra. Misture 01 dosador em 150ml de água ou sua bebida preferida e tome uma vez ao dia, de preferência após a atividade física, ou conforme a orientação de um nutricionista.<br>
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