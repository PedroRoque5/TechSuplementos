<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Growth Supplements
        HOT Termogênico (60 Comprimidos) - Growth Supplements</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/termo_growth.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                Desenvolvida para otimizar a termogênese, queima de gordura e controle de peso.<br>
                <strong>ANTES DE COMPRAR CONSULTE UM CARDIOLOGISTA</strong>
            </p>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 37,80</h2>

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
            Metabolismo é o nome dado ao conjunto de complexas transformações que as substâncias nutricionais e não nutricionais sofrem em nosso organismo. A taxa metabólica é uma forma de nos referirmos a velocidade com que acontecem estas transformações e esta velocidade pode variar de pessoa para pessoa de acordo com a prática de atividade física, porte físico e também de acordo com uso de suplementos quem contem cafeína. Esta classe de suplementos é capaz de aumentar a temperatura corporal e, por isso, aumenta a necessidade de calorias. O Hot da Growth Supplements trata-se de uma estratégia que pode auxiliar quem está buscando redução de peso, em especial redução de gorduras.<br>
            Assim funciona: o seu corpo naturalmente precisa de calorias, e essa necessidade pode ser ampliada com a prática de exercícios e a ingestão de termogênicos. O Hot Growth Supplements é fabricado com uma mistura especial de ingredientes que pode intensificar a demanda calórica do indivíduo, potencializando a redução de gordura. O HOT estimula o metabolismo, aumentando a necessidade de energia, e esse efeito é conhecido como termogênese.<br>
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