<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">CREATINA MICRONIZADA EM PÓ</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/on.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                A ON Creatina é uma linha de produtos compostos por aminoácidos que contribuem no ciclo de geração de energia, permitindo mais energia e mais força em seus treinos. Além disso, ela facilita a entrada de água no músculo, permitindo também maior aporte de nutrientes e consequente hipertrofia. Quando administrada como creatina exógena, os estoques musculares e cerebrais de creatina e seu derivado fosforilado, a fosfocreatina, se tornam elevados. A ON Creatina também fornece o aumento nos estoques musculares, oferecendo benefício terapêutico, prevenindo depleção de ATP, estimulando a síntese de proteína ou reduzindo sua degradação. Ela também possui 5g da mais pura Creatina Mono-hidratada, que não possui sabor, odor e que se mistura facilmente à água ou ao suco da sua preferência. Se você deseja uma explosão de força em seus treinos, você precisa de um dos suplementos mais estudados para auxiliar na reposição de ATP durante atividades físicas, então, experimente, o quanto antes, a nossa linha completa ON CREATINA! SUGESTÃO DE USO Adicione uma colher de café de ON Creatina em 200ml de água ou suco e misture até que o pó seja dissolvido. Ingerir junto à refeição ou conforme orientação nutricional. BENEFÍCIOS • Aumento de força e energia; • Ganho de volume muscular; • 5g da mais pura creatina micro-hidratada; INGREDIENTE Creatina Mono-hidratada. NÃO CONTÉM GLÚTEN. ESTE PRODUTO NÃO DEVE SER CONSUMIDO POR GESTANTES, LACTANTES E CRIANÇAS.
            </p>
            <div class="sabor">
                <h3>Sem sabor</h3>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 22,22</h2>

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
            CREATINA EM PÓ. Apoia o desenvolvimento muscular, recuperação, desempenho, força e potência quando usado diariamente, ao longo do tempo e combinado com exercícios.<br>
            TRABALHE O MÚSCULO. Pode apoiar os esforços de recuperação muscular.<br>
            APROVEITE A QUALQUER MOMENTO. Adicione Creatina em Pó aos seus batidos antes ou depois do exercício.<br>
            PADRÕES DE QUALIDADE. Enquanto você cuida do seu corpo, ajudamos você a se cuidar. Tomamos medidas de controle de qualidade rigorosas, razão pela qual nossa proteína em pó é uma substância aprovada.
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