<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Arginine 3000mg (90 tabs) - Integralmedica</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/arginine.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                Supere as barreiras de fadiga e desempenho com a Arginina 3000MG da Integralmedica. Este suplemento essencial é projetado para atletas que buscam melhorar significativamente a circulação sanguínea, a oxigenação muscular e a entrega de nutrientes. Com 3000mg de L-arginina de alta potência por dose, ele é perfeito para quem deseja maximizar a vasodilatação, aumentar a força e acelerar a recuperação após o treino.<br>
                <strong>Consulte um profissional de saúde antes de iniciar o uso.</strong>
            </p>
        </div>
    </div>

    <h2 class="preco">R$ 119,90</h2>

    <div class="actions">
        <a href="<?= URL . 'index.php?pg=pagamento' ?>">
            <button class="buy-button">Comprar Agora</button>
        </a>
        <button class="cart-button">
            <i class="fas fa-shopping-cart"></i> Adicionar ao Carrinho
        </button>
    </div>
    </div>

    <section class="curiosidades">
        <h3>Curiosidades sobre o produto</h3>
        <p>
            Benefícios:<br>

            Melhora a Vasodilatação: Aumenta o fluxo sanguíneo, otimizando a entrega de oxigênio e nutrientes para os músculos.<br>

            Desempenho Aprimorado: Ajuda na redução da fadiga e melhora a capacidade de treinamento.<br>

            Recuperação Muscular: Facilita uma recuperação mais rápida e eficaz após sessões intensas de treino.<br>
        </p>
    </section>


    <section class="reviews">
        <h3>Avaliações dos Clientes</h3>
        <ul>
            <li>⭐ ⭐ ⭐ ⭐ ⭐ - "Excelente qualidade, percebi os resultados em poucas semanas!"</li>
            <li>⭐ ⭐ ⭐ ⭐ - "Ótimo custo-benefício, recomendo!"</li>
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