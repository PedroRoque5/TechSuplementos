<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Pré-treino Açaí Com Guaraná 200G</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/pre_oficialFarma.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                Os suplementos de pré-treino servem para trazer ao indivíduo aqueles nutrientes que ele mais precisa para poder fazer um bom treino e conquistar aqueles resultados que ele tanto sonha. A alimentação é um dos pilares de enorme importância para chegar até a hipertrofia. Sem ela, atingir esse objetivo fica impossível. Os dias estão cada vez mais corridos e muitas pessoas acabam não conseguindo se alimentar corretamente antes dos treinos. É aí que entram os suplementos de pré-treino. Os suplementos para pré treino garantem os nutrientes necessários para que você tenha a quantidade ideal de energia durante o treinamento. Dessa maneira, fica bem mais fácil focar em seus objetivos e superar qualquer tipo de obstáculo. O Pré Treino da Oficial Farma conta com ativos importantes para um treino de qualidade, além de aumentar a energia e a disposição.<br>

                A Arginina participa de diversas reações que ocorrem no organismo, como na produção de energia; na recuperação das células; na liberação do hormônio do crescimento e na formação do óxido nítrico. A N-acetilcisteína é um precursor do aminoácido L-cisteína e, consequentemente, do antioxidante glutationa (um dos mais importantes e potentes antioxidantes). A Cafeína é um estimulante em todos os níveis do SNC. É indicada para estados de fadiga e cansaço mental. A Taurina é um aminoácido que está relacionado com uma série de funções fisiológicas e biológicas no sistema nervoso central.<br>
                <strong>ANTES DE COMPRAR CONSULTE UM CARDIOLOGISTA</strong>
            </p>
            <div class="sabor">
                <h3>Sabor: Açai com guaraná</h3>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 105,15</h2>

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
            QUAIS SÃO OS BENEFÍCIOS DO PRÉ-TREINO AÇAÍ COM GUARANÁ?<br>
            Garante mais força nos treinos;<br>

            Ajuda a dar mais resistência;<br>

            Aumenta a energia;<br>

            Evita a perda de massa muscular;<br>

            Oferece nutrientes que o corpo precisa durante a musculação.<br>
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