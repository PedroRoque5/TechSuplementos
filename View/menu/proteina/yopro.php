<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Yopro Shake 15g Proteína Danone 250ml </h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/yopro.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                YoPRO 15g de proteínas que ajudam na recuperação e no ganho de massa muscular¹. Contém Whey + Caseína, 9 aminoácidos, zero lactose, zero adição de açúcares², cálcio e baixo teor de gorduras. Seu pré e pós-treino!
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Baunilha</option>
                    <option value="baunilha">Chocolate</option>
                    <option value="morango">Morango</option>
                    <option value="morango">Banana</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 15,11</h2>

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
            YoPRO é a marca especialista em criar produtos com alto teor de proteínas, práticos e deliciosos para quem busca uma rotina ativa e saudável. YoPRO é proteína, sabor e praticidade para sua rotina.<br>
            O YoPRO Shake Proteico 250ml contém 15g de proteínas, que proporcionam saciedade e auxiliam na construção e recuperação muscular¹, Whey e Caseína, também é zero lactose, zero adição de açúcares², tem baixo teor de gorduras e é fonte de cálcio.<br>
            Você pode consumir seu YoPRO Shake Proteico UHT 15g de proteínas a qualquer momento, seja como parte do seu café da manhã, como lanche entre as refeições ou antes e depois dos treinos. Sua fórmula prática e deliciosa permite que você o leve para onde quiser, seja na academia ou no trabalho.<br>
            É essencial para você que busca um estilo de vida ativo e saudável, além de com o seu consumo de proteínas diárias, é um aliado para sua performance física e seu bem-estar, complementando a sua rotina de forma saudável e saborosa.<br>
            YoPRO É MAIS PROTEÍNA, SABOR E PRATICIDADE PARA SUA ROTINA.<br>
            Experimente e vá além!<br>
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