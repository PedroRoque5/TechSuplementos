<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Barra De Proteína Supino</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/semgluten.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                Barra nutritiva e proteica.
                Ideal como lanche saudável ou pré/ pós-treino.
                Contém Whey + Albumina + Colágeno.
                Possui 16g de proteína por unidade.
                Sem adição de açúcares, conservantes e corantes.
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="amendoim">Amendoim e caramelo</option>
                    <option value="baunilha">Baunilha com Crispies</option>
                    <option value="capuccino">Capuccino</option>
                    <option value="chocolate">Chocolate</option>
                    <option value="coco">Coco com chocolate branco</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 4,45</h2>

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
        Um dos principais benefícios dos produtos Supino Protein é a contribuição para o desenvolvimento e a manutenção da massa muscular magra. As barras proteicas oferecidas pela marca são ricas em aminoácidos essenciais, fundamentais para a síntese proteica e o crescimento muscular. Esses produtos ajudam a suprir as necessidades proteicas do corpo, especialmente após os treinos, quando a demanda por nutrientes é maior. O consumo adequado de proteínas contribui para a recuperação muscular, o ganho de massa magra e a redução do catabolismo.
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