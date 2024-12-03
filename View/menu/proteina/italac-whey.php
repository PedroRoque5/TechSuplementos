<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Bebida Láctea Whey Protein 15g Zero Lactose </h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/fuel.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                Italac Bebida Láctea Whey Protein 15g Zero Lactose é uma opção prática e saborosa para quem busca uma alimentação saudável e equilibrada, sem abrir mão do sabor. Formulada com whey protein (proteína do soro do leite), cada porção oferece 15g de proteína, contribuindo para o desenvolvimento muscular e recuperação pós-treino.<br>

                Essa bebida é ideal para pessoas que seguem uma dieta rica em proteínas, mas que também têm intolerância à lactose, pois não contém lactose, garantindo maior conforto digestivo.<br>

                Com um sabor agradável e cremoso, a Italac Bebida Láctea Whey Protein Zero Lactose é uma excelente alternativa para quem deseja um lanche rápido ou uma bebida proteica prática durante o dia a dia.<br>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="capuccino">Capuccino</option>
                    <option value="amendoim">Pasta de amendoim</option>
                    <option value="vermelha">Frutas vermelhas</option>
                    <option value="banana">Banana</option>
                    <option value="baunilha">Baunilha</option>
                    <option value="chocolate">Chocolate</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 24,24</h2>

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
            Benefícios:<br>

            15g de proteína por porção, importante para a manutenção e ganho de massa muscular.<br>
            Zero lactose, ideal para quem é intolerante à lactose.<br>
            Prática e fácil de consumir, podendo ser ingerida em qualquer lugar.<br>
            Sabor delicioso e textura cremosa.<br>
            Perfeita para quem busca uma alimentação equilibrada, sem perder o sabor e a praticidade.<br>
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