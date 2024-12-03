<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Égide 300g</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/pre_max.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            O pré-treino ÉGIDE é seu mais novo aliado para realizar treinos cada vez mais intensos!

            Sua formulação é concentrada e é fonte dos aminoácidos beta-alanina, taurina, cafeína, arginina e tirosina, que atuam em sinergia para auxiliar ainda mais seu desempenho.

           Prepare-se para treinar com muito mais intensidade, concentração e resistência!

           ÉGIDE tem saborização agradável e suave, tornando ainda mais fácil a inclusão do pré-treino em sua rotina.
            <strong>ANTES DE COMPRAR CONSULTE UM CARDIOLOGISTA</strong>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Abacaxi com hortelã</option>
                    <option value="baunilha">Abacaxi e manga</option>
                    <option value="morango">Açai com guaraná</option>
                    <option value="morango">Frutas silvestres</option>
                    <option value="morango">Frutas vermelhas</option>
                    <option value="morango">Limão</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 189,90</h2>

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
        Pré-treino é um termo utilizado para identificar os produtos ou suplementos utilizados para melhorar o desempenho das atividades físicas. É muito usado para aumentar a resistência, a energia e o foco durante o treino. O suplemento HAZE Growth Supplements é um pré-treino pensado e projetado para entregar ao esportista a melhor combinação dos nutrientes que podem ajudar a aumentar a intensidade dos treinos. Treinos com mais intensidade e mais volume!<br>
        Destaques do ÉGIDE<br>
        Uma dose de 6g e 7g (sabor de Abacaxi e Manga) do produto ÉGIDE oferece:<br>
        2.000mg de Beta Alanina;<br>
        1.200mg de Taurina;<br>
        1.000mg de Arginina;<br>
        263mg de Tirosina;<br>
        200mg de Cafeína;<br>
        Não contém Glúten;<br>
        Não contém Lactose.<br>
        Benefícios do ÉGIDE<br>
        Aumento de performance;<br>
        Melhora do rendimento;<br>
        Mais disposição;<br>
        Diminuição da sensação de fadiga;<br>
        Diminuição do cansaço durante o treinamento;<br>
        Maior foco para o treino;<br>
        Aumento de cargas durante a atividade física;<br>
        Melhora do tempo contra-relógio.<br>
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