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

    <h2 class="preco">R$ 15,11</h2>

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
            YoPRO é a marca especialista em criar produtos com alto teor de proteínas, práticos e deliciosos para quem busca uma rotina ativa e saudável. YoPRO é proteína, sabor e praticidade para sua rotina.<br>
            O YoPRO Shake Proteico 250ml contém 15g de proteínas, que proporcionam saciedade e auxiliam na construção e recuperação muscular¹, Whey e Caseína, também é zero lactose, zero adição de açúcares², tem baixo teor de gorduras e é fonte de cálcio.<br>
            Você pode consumir seu YoPRO Shake Proteico UHT 15g de proteínas a qualquer momento, seja como parte do seu café da manhã, como lanche entre as refeições ou antes e depois dos treinos. Sua fórmula prática e deliciosa permite que você o leve para onde quiser, seja na academia ou no trabalho.<br>
            É essencial para você que busca um estilo de vida ativo e saudável, além de com o seu consumo de proteínas diárias, é um aliado para sua performance física e seu bem-estar, complementando a sua rotina de forma saudável e saborosa.<br>
            YoPRO É MAIS PROTEÍNA, SABOR E PRATICIDADE PARA SUA ROTINA.<br>
            Experimente e vá além!<br>
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