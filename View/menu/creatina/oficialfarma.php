<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Creatina Monohidratada 200g - 100% Pura</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/oficialfarma.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            Descubra o poder da creatina, um dos suplementos mais estudados e utilizados no mundo inteiro, ideal para quem busca melhorar o desempenho físico, cognitivo e aumentar a massa muscular de forma eficiente e segura.<br>

            ✅ Aumenta a força e o desempenho físico;<br>

            ✅ Facilita a recuperação muscular pós-treino;<br>

            ✅ Potencializa a hipertrofia muscular;<br>

            ✅ Melhora a resistência em atividades de alta intensidade;<br>

            ✅ 100% pura e segura.<br>
            </p>
            <div class="sabor">
                <h3>Sem sabor</h3>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 90,93</h2>

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
            Creatina é o suplemento mais estudado do mundo, com resultados cientificamente comprovados para melhorar força, energia, recuperação muscular e funções cognitivas.<br>
            A creatina tem sua eficácia comprovada em melhorar a força muscular, função cognitiva, aumentar o volume de massa magra e otimizar o desempenho em atividades de alta intensidade. Seja você um atleta ou alguém que busca melhorar a disposição no dia a dia, a creatina é um suplemento com benefícios validados para todas as idades e níveis de atividade física. Seu uso seguro, faz com que seja a escolha ideal para melhorar a saúde muscular e cognitiva de maneira natural e comprovada.<br>
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