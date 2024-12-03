<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Termogênico Therma Burn 120 Capsulas - Dark Lab</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/termo_darkLab.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                Therma Burn é um suplemento termogênico que auxilia na queima de gordura e na perda de peso. Sua fórmula exclusiva contém ingredientes que ajudam a acelerar o metabolismo e aumentar a termogênese, resultando em um maior gasto calórico durante as atividades físicas e no repouso. Além disso, Therma Burn auxilia no controle do apetite e na melhora da disposição e energia durante os treinos. Combinado com uma dieta equilibrada e um programa de exercícios físicos, o uso de Therma Burn pode contribuir para a obtenção de resultados mais rápidos e eficazes na busca por um corpo saudável e em forma.<br>
                <strong>ANTES DE COMPRAR CONSULTE UM CARDIOLOGISTA</strong>
            </p>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 49,90</h2>

    <div class="actions">
        <a href="<?= URL . 'index.php?pg=pagamento' ?>">
            <button class="buy-button">Comprar Agora</button>
        </a>
        <button class="cart-button"  id="cart-button">
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

            ✔️ Queima de gordura;<br>
            ✔️ Melhora do desempenho físico;<br>
            ✔️ Aumento da energia e disposição.<br>

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