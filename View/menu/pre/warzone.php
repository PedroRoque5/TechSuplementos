<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">WARZONE</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/pre_underLabz.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                WARZONE COM PUMP MATRIX™ - O pré treino em 2 estágios. É o primeiro e único pré treino do Brasil com PUMP MATRIX™ Um pré treino inteligente de efeito prolongado que funciona em 2 estágios. 🧠<br>



                → Estágio 01<br>

                No primeiro estágio ele faz você atingir o ápice de energia dos estimulantes te colocando em um nível de alto rendimento.<br>



                → Estágio 02<br>

                Quando isso acontece, de forma inteligente o estágio 02 é ativado com a Pump Matrix™ liberando mais potência muscular ao intensificar o fluxo sanguíneo.<br>

                Ele ultrapassa os limites dos estimulantes, te colocando em um nível prolongado de ultra performance.<br>
                <strong>ANTES DE COMPRAR CONSULTE UM CARDIOLOGISTA</strong>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="blood">Blood battle</option>
                    <option value="purple">Purple heart punch</option>
                    <option value="green">Green Bomb</option>
                    <option value="passion">Passion & Fury</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 149,90</h2>

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

            → Hiperfoco durante o treino<br>

            → Aumento do fluxo sanguíneo para o músculo alvo garantindo maior poder anabólico e recuperação muscular.<br>

            → Aumento da resistência à dor deixando o treino mais intenso<br>
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