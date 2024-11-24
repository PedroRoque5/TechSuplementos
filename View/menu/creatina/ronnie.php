<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Creatina 100% Pura 1050g</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/ronnie.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">

            Seja você um atleta, fisiculturista ou praticante regular de exercícios, a inclusão da Creatina Pura em sua rotina pode promover ganhos significativos de massa muscular, resistência e recuperação pós-exercício. Fatos recentes atribuem a Creatina melhoras também na parte cognitiva e de foco.<br>


            Escolha a qualidade Ronnie Coleman e potencialize seus resultados com a Creatina - a aliada perfeita para alcançar seus objetivos de forma eficaz e segura. Transforme seu treinamento e conquiste seu melhor desempenho com esse suplemento essencial.<br>
            </p>
            <div class="sabor">
                <h3>Sem sabor</h3>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 232,70</h2>

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
        A Creatina é um suplemento nutricional amplamente reconhecido por sua eficácia em impulsionar o desempenho físico e mental bem como a força muscular. Composta por aminoácidos essenciais, a creatina desempenha um papel crucial no fornecimento rápido de energia durante atividades de alta intensidade.<br>


        Essa substância natural é fundamental para a ressíntese de ATP, a principal fonte de energia celular. Ao optar por Creatina, você garante a pureza do suplemento, sem aditivos desnecessários.<br>      
        </p>
    </section>


    <section class="reviews">
        <h3>Avaliações dos Clientes</h3>
        <ul>
            <li>⭐ ⭐ ⭐ ⭐ ⭐ - "Excelente qualidade, percebi os resultados em poucas semanas!"</li>
            <li>⭐ ⭐ ⭐ ⭐ - "Ótimo custo-benefício, recomendo!"</li>
            <li>⭐ ⭐ ⭐ ⭐ - "Dissolve muito bem!"</li>
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