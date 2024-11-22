<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Nitro Whey 5 Kg</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/nitrowhey.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                É uma proteína à base de soro de leite de alta qualidade, de rápida absorção e fácil digestão e que fornece os aminoácidos essenciais que os músculos necessitam para se recuperarem após o treino e promoverem o desenvolvimento da massa muscular. NITRO WHEY é um excelente produto elaborado com o melhor whey instantâneo, que nos fornece proteínas e aminoácidos de alto valor biológico.<br>

                NITRO WHEY contém glutamina, um componente proteico que promove a recuperação muscular após desportos de alta intensidade. Este produto foi desenvolvido para todos os tipos de atletas ou pessoas que realizam grande esforço físico, atletas de alto rendimento, fisiculturistas e fitness.
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Chocolate</option>
                    <option value="baunilha"> Baunilha</option>
                    <option value="morango">cookies</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 239,90</h2>

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
        Feito com soro de leite de rápida absorção e fácil digestão, ideal para recuperação e desenvolvimento muscular.<br>
        Fornece todos os aminoácidos que os músculos precisam para se regenerar após treinos intensos.<br>
        Contém glutamina, que ajuda na recuperação muscular após exercícios de alta intensidade.<br>
        Desenvolvido para fisiculturistas, praticantes de fitness e pessoas que realizam grande esforço físico.<br>
        Produzido com whey instantâneo, que garante alta solubilidade e facilidade no preparo.<br>
        Indicado para atletas de alto rendimento e também para quem busca melhorar a performance em treinos regulares.<br>
        Repleto de proteínas e aminoácidos que promovem o máximo de eficiência no ganho de massa muscular.<br>
        </p>
    </section>


    <section class="reviews">
        <h3>Avaliações dos Clientes</h3>
        <ul>
            <li>⭐ ⭐ ⭐ ⭐ ⭐ - "Excelente qualidade, percebi os resultados em poucas semanas!"</li>
            <li>⭐ ⭐ ⭐ ⭐ - "Ótimo custo-benefício, recomendo!"</li>
            <li>⭐ ⭐ ⭐ ⭐ - "Sabor muito bom, dissolve fácil!"</li>
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