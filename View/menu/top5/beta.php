<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Beta HD Pre Workout Uva com Morango</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/BetaHD.png" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            O Pré-HD Elite é um suplemento pré-treino desenvolvido para potencializar seu desempenho físico e mental durante os treinos. Formulado com uma combinação estratégica de ingredientes, ele oferece energia, foco e resistência, tudo isso de forma equilibrada e com segurança.<br>
            <strong>ANTES DE COMPRAR CONSULTE UM CARDIOLOGISTA</strong>
            </p>
            <div class="sabor">
                <h3>sabor: Uva com Morango</h3>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 70,00</h2>

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
        <p>Principais Benefícios:<br>
        Energia Sustentada: Contém cafeína para fornecer energia de longa duração, ajudando você a encarar treinos intensos.<br>
        Melhora da Resistência Muscular: A beta-alanina reduz a fadiga muscular, permitindo que você treine por mais tempo e com maior intensidade.<br>
        Foco Mental Afiado: Com taurina e tirosina, melhora a concentração e a conexão mente-músculo, essencial para desempenho otimizado.<br>
        Bombeamento Muscular (Pump): Inclui componentes vasodilatadores que promovem maior fluxo sanguíneo, resultando em mais nutrientes e oxigênio para os músculos.<br>
        Composição-Chave:<br>
        Cafeína: Fornece energia e aumenta o estado de alerta.
        Beta-Alanina: Combate o acúmulo de ácido lático, retardando a fadiga muscular.
        Taurina e Tirosina: Melhora o foco mental e a resistência ao estresse.<br>
        Arginina: Ajuda no pump muscular, otimizando a vasodilatação.<br>
        Por que escolher o Pré-HD Elite?<br>
        O Pré-HD Elite é ideal para quem busca uma fórmula equilibrada, que oferece energia e desempenho sem exageros nos estimulantes. É uma ótima opção tanto para iniciantes no uso de pré-treinos quanto para atletas intermediários que precisam de um reforço consistente e seguro.<br>
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