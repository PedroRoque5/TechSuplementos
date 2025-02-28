<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Pré-Treino Venom Underground Pre Workout 300g - Dark Lab</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/pre_darklab.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                Venom é um pré-treino feito para maximizar seu treino e alcançar seus objetivos, contendo cafeína, taurina, beta-alanina e outros ingredientes que ajudam a aumentar o fluxo sanguíneo, melhorando a resistência muscular e reduzindo a fadiga. Descubra a energia explosiva do melhor e mais forte pré-treino do mercado, com uma combinação exclusiva de ingredientes, Venom proporciona uma explosão de energia e foco, melhorando a força, resistência e a intensidade dos treinos. Com Venom, você terá o suporte necessário para superar seus limites e alcançar os melhores resultados. Experimente o poder desse pré-treino e supere seus objetivos.<br>
                <strong>ANTES DE COMPRAR CONSULTE UM CARDIOLOGISTA</strong>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="limao">Limão</option>
                    <option value="maca">Maça verde</option>
                    <option value="vermelha">Frutas vermelhas</option>
                    <option value="manga">Manga</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 87,90</h2>

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
            BENEFÍCIOS:<br>

            ✔️ Aumento da energia e disposição para treinar;<br>
            ✔️ Melhora do desempenho físico e aumento da resistência muscular;<br>
            ✔️ Maior concentração mental e foco.<br>

            QUALIDADE DARK LAB:<br>

            ✔️ Matéria-prima de alta qualidade;<br>
            ✔️ Ingrediente puro.<br>
            ✔️ Gluten Free.<br>
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