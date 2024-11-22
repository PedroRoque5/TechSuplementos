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
                    <option value="chocolate">Capuccino</option>
                    <option value="baunilha">Pasta de amendoim</option>
                    <option value="morango">Frutas vermelhas</option>
                    <option value="morango">Banana</option>
                    <option value="cookies">Baunilha</option>
                    <option value="cookies">Chocolate</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 24,24</h2>

    <div class="actions">
        <button class="payment-button">Outras formas de pagamento</button>
        <button class="buy-button">Comprar Agora</button>
        <button class="cart-button">
            <i class="fas fa-shopping-cart"></i> Adicionar ao Carrinho
        </button>
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


    <section class="reviews">
        <h3>Avaliações dos Clientes</h3>
        <ul>
            <li>⭐ ⭐ ⭐ ⭐ ⭐ - "Excelente qualidade, percebi os resultados em poucas semanas!"</li>
            <li>⭐ ⭐ ⭐ ⭐ - "Ótimo custo-benefício, recomendo!"</li>
            <li>⭐ ⭐ ⭐ ⭐ - "Sabor muito bom!"</li>
        </ul>
    </section>
    <section class="comentarios">
        <h3>Adicione seu comentário</h3>
        <form class="form-comentario">
            <div class="avaliacao">
                <label for="estrela-5">
                    <input type="radio" name="estrela" id="estrela-5" value="5">
                    ⭐ ⭐ ⭐ ⭐ ⭐
                </label>
                <label for="estrela-4">
                    <input type="radio" name="estrela" id="estrela-4" value="4">
                    ⭐ ⭐ ⭐ ⭐
                </label>
                <label for="estrela-3">
                    <input type="radio" name="estrela" id="estrela-3" value="3">
                    ⭐ ⭐ ⭐
                </label>
                <label for="estrela-2">
                    <input type="radio" name="estrela" id="estrela-2" value="2">
                    ⭐ ⭐
                </label>
                <label for="estrela-1">
                    <input type="radio" name="estrela" id="estrela-1" value="1">
                    ⭐
                </label>
            </div>
            <textarea name="comentario" id="comentario" placeholder="Escreva seu comentário aqui..." rows="5" required></textarea>
            <button type="submit" class="submit-button">Enviar Comentário</button>
        </form>
    </section>
</main>