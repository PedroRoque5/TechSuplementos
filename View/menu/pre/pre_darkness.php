<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Évora Pw</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/pre_darkness.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                Évora PW é o suplemento pré-treino da Darkness desenvolvido para favorecer a realização de treinos de força com alta intensidade. Sua fórmula contém ingredientes energéticos e neuroestimulantes capazes de criar as condições físicas adequadas à realização de treinos intensos, retardando o desgaste físico e mantendo o alerta mental até o fim do treino.<br>

                O pré-treino Évora não somente aumenta a sua disposição, mas também ajuda a superar os seus limites com relação à intensidade e à carga de treino, além de melhorar sua capacidade de resistência à fadiga. Tudo isso sem perder o foco durante o treino, o que permite manter-se concentrado na qualidade da execução dos movimentos.<br>
                <strong>ANTES DE COMPRAR CONSULTE UM CARDIOLOGISTA</strong>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="limao">Limão</option>
                    <option value="maca">Maça verde</option>
                    <option value="vermelha">Frutas vermelhas</option>
                    <option value="amarela">Frutas amarelas</option>
                    <option value="uva">Uva</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 79,90</h2>

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
            Évora PW Irá aumentar não somente a sua disposição para o treino, mas também te ajudará a superar os seus limites com relação a intensidade de treinamento, carga de treino, além de aumentar a sua capacidade de resistência à fadiga. Tudo isso sem perder o foco durante o treino, o que permite manter-se concentrado na qualidade da execução dos movimentos.<br>

            Energia Extrema<br>
            Melhora do Foco<br>
            Resistência Muscular<br>
            Redução da Fadiga Muscular<br>
            Alta Performance
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