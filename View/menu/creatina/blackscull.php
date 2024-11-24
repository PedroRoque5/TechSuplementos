<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">CREATINE - CREATINA MONOHIDRATADA - 300G</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/blackscull.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                100% Creatina Monohidratada entregando 3000mg por dose.
                A CREATINE™ da BLACKSKULL USA™ é um produto composto 100% por creatina monoidratada que irá fornecer mais energia para melhorar o desempenho físico durante exercícios repetidos de curta duração e alta intensidade, contribuindo para a hipertrofia muscular.
            </p>
            <div class="sabor">
                <h3>Sem sabor</h3>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 89,90</h2>

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
            A creatina é um composto produzido pelos rins, fígado e pâncreas e é armazenada, em sua maior parte, nas fibras musculares. Ela também pode ser encontrada em carnes e peixes. A cada 1kg de carne vermelha, encontra-se 5g de creatina. O papel primário da creatina nos músculos é fornecer energia para as células musculares durante exercícios de resistência e sprint de alta intensidade.<br>
            A creatina monohidratada é um dos ativos mais estudados pela ciência nos últimos anos. Além dos benefícios conhecidos para o esporte, seu consumo apresentou efeitos anti-inflamatórios melhorando a saúde de forma geral e a melhoria da performance cerebral por atuar como neuroprotetora, diminuindo a demanda cerebral por oxigênio.<br>
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