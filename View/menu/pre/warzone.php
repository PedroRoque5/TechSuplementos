<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">WARZONE</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/pre_underLabz.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                WARZONE COM PUMP MATRIX™ - O pré treino em 2 estágios. É o primeiro e único pré treino do Brasil com PUMP MATRIX™ Um pré treino inteligente de efeito prolongado que funciona em 2 estágios. 🧠<br>



                → Estágio 01<br>

                No primeiro estágio ele faz você atingir o ápice de energia dos estimulantes te colocando em um nível de alto rendimento.<br>



                → Estágio 02<br>

                Quando isso acontece, de forma inteligente o estágio 02 é ativado com a Pump Matrix™ liberando mais potência muscular ao intensificar o fluxo sanguíneo.<br>

                Ele ultrapassa os limites dos estimulantes, te colocando em um nível prolongado de ultra performance.<br>
                <strong>ANTES DE COMPRAR CONSULTE UM CARDIOLOGISTA</strong>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Blood battle</option>
                    <option value="baunilha">Purple heart punch</option>
                    <option value="morango">Green Bomb</option>
                    <option value="morango">Passion & Fury</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 149,90</h2>

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

            → Hiperfoco durante o treino<br>

            → Aumento do fluxo sanguíneo para o músculo alvo garantindo maior poder anabólico e recuperação muscular.<br>

            → Aumento da resistência à dor deixando o treino mais intenso<br>
        </p>
    </section>


    <section class="reviews">
        <h3>Avaliações dos Clientes</h3>
        <ul>
            <li>⭐ ⭐ ⭐ ⭐ ⭐ - "Excelente qualidade!"</li>
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