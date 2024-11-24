<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">My Whey Pronto (250ml) - Integralmédica</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/bebida_whey.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                O MY WHEY da INTEGRALMÉDICA é uma bebida proteica pronta para o consumo, ideal para te acompanhar na correria do dia a dia.<br>

                Ele elaborado com uma formula premium que possui proteínas de alta qualidade, sendo 20g por porção. Além disso ele também contém uma ótima quantidade de aminoácidos essenciais.<br>

                Está com certeza é a opção que você procurava para lhe ajudar no aporte proteico, pois além de ser muito prático, também é saudável!<br>

                O MY WHEY é muito saboroso e ainda é um produto sem lactose, rico em fibras, com baixo teor de gorduras e carboidratos e zero adição açúcar.<br>

                Disponível em quatro sabores: Banana, chocolate, coco e morango.<br>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Chocolate</option>
                    <option value="baunilha">Baunilha</option>
                    <option value="morango">Morango</option>
                    <option value="morango">Banana</option>
                    <option value="cookies">Coco</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 13,19</h2>

    <div class="actions">
    <a href="<?= URL . 'index.php?pg=pagamento' ?>">
        <button class="payment-button">Outras formas de pagamento</button>
        </a>
        <button class="buy-button">Comprar Agora</button>
        <button class="cart-button">
            <i class="fas fa-shopping-cart"></i> Adicionar ao Carrinho
        </button>
    </div>
    </div>

    <section class="curiosidades">
        <h3>Curiosidades sobre o produto</h3>
        <p>
            - pronto para o consumo;<br>

            - zero adição açúcar;<br>

            - formula premium;<br>

            - rico em fibras;<br>

            - contém 9 aminoácidos essenciais;<br>

            - 20g de proteína por porção;<br>

            - sem lactose;<br>

            - baixo teor de gorduras e carboidratos;<br>

            - praticidade no consumo.<br>
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