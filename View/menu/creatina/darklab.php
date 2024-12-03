<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Creatina Pura 300g - Dark Lab</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/darklab.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            A Creatina Pura Dark Lab é a escolha número 1 para atletas e praticantes de musculação que buscam melhores resultados. Com 300g de poder puro, a Creatina Pura Dark Lab é a solução para aqueles que buscam aumentar sua força, resistência e explosão muscular. Produzida com a mais alta qualidade e pureza, a creatina é rapidamente absorvida pelo corpo, proporcionando benefícios incríveis. Com a Creatina Pura Dark Lab, você tem a garantia da mais alta pureza do mercado, com uma variação mínima de apenas 1.9%, totalizando 98,1% de pureza na matéria-prima. Isso significa que você está consumindo a melhor creatina disponível no Brasil. 
            </p>
            <div class="sabor">
                <h3>Sem sabor</h3>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 60,00</h2>

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
        ✔️ Aumento da força e da resistência muscular;<br>
        ✔️ Melhora da recuperação muscular;<br>
        ✔️ Aumento da energia e da disposição;<br>
        ✔️ Auxílio no ganho de massa muscular magra.<br>
        ✔️ Matéria-prima de alta qualidade;<br>
        ✔️ Ingrediente puro.<br>
        ✔️ Gluten Free.<br>
        Este produto não é um medicamento. Mantenha fora do alcance de crianças. Não exceder a recomendação diária de consumo indicada na embalagem. Produto indicado para adultos. Este produto não deve ser consumido por gestantes, lactantes e crianças.Conservar este produto fechado, distante da luz, calor e umidade. Após aberto, consumir preferencialmente em 90 dias.<br>
        ALÉRGICOS: PODE CONTER AMENDOIM, LEITE, SOJA E OVO
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