<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Vo2 Whey Bar (Barra de Proteína) 30g - Integralmédica</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/barprotein.png" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            VO2 PROTEIN BAR da IntegralMedica é um excelente alimento para dar suporte às suas atividades físicas e atividades do cotidiano, com alto teor de proteínas, vitaminas e minerais. É uma barra com 35% de proteínas em sua composição.
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Chocolate</option>
                    <option value="coco">Coco</option>
                    <option value="morango">Morango</option>
                    <option value="cookies">Cookies N Cream</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 6,90</h2>

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
        É uma excelente opção de lanchinho prático e saboroso antes e/ou do treino, já que essa barrinha é rica em proteínas de alto valor biológico, oferecendo todos os aminoácidos essenciais, aqueles que o nosso corpo não consegue produzir, devendo assim ser obtidos por meio da alimentação e/ou suplementação. Além disso, essa delícia pode ser transportada na mochila, na bolsa e até mesmo no bolso, podendo ser consumida na academia, no serviço, na faculdade, etc. É um alimento para qualquer hora do dia, além de ser prática e nutritiva!
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