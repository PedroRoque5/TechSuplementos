<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Creatina Monohidratada 1Kg 100% Pura - Importada - Soldiers Nutrition</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/soldier.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                A creatina é um composto naturalmente encontrado no corpo humano e também pode ser obtida através de fontes alimentares, como carne e peixe. Ela desempenha um papel fundamental na produção de energia nas células musculares, sendo especialmente benéfica para atividades.
            </p>
            <div class="sabor">
                <h3>Sem sabor</h3>
            </div>
        </div>
        <div class="quantity-controls" id="quantity-controls" style="display: none;">
            <button id="decrease-quantity" class="quantity-button">-</button>
            <span id="quantity-display">1</span>
            <button id="increase-quantity" class="quantity-button">+</button>
            <button id="confirm-cart-button" class="confirm-button">Confirmar</button>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 232,66</h2>

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
            A Creatina é um esteroide anabolizante?<br>
            A creatina não é um esteroide anabolizante. É um composto naturalmente encontrado no corpo humano e também pode ser obtido através de fontes alimentares. A suplementação de creatina não está relacionada ao uso de esteroides anabolizantes.<br>
            A Creatina causa danos nos rins?<br>
            Vários estudos científicos têm demonstrado que a suplementação de creatina não causa danos nos rins em indivíduos saudáveis. Pessoas com problemas renais preexistentes devem consultar um médico antes de usar a creatina. É importante manter-se bem hidratado ao usar a creatina para minimizar qualquer possível estresse nos rins..<br>
            É necessário fazer ciclos de Creatina?<br>
            Não é necessário fazer ciclos de creatina. Diferente de certos suplementos, como esteroides anabolizantes, a creatina pode ser usada continuamente sem a necessidade de períodos de interrupção. A dosagem recomendada pode variar, mas geralmente é seguro usar creatina a longo prazo, desde que você siga as orientações adequadas.
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