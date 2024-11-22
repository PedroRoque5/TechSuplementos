<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Barra De Proteína Growth Supplements</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/barra.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                A Growth Protein Bar é uma opção saudável de barra de proteína com um Blend Protéico de alto valor biológico composto por: Proteína Isolada do Soro do Leite, Proteína Concentrada do Soro do Leite e Caseinato de Cálcio.<br>

                A barra de proteína é prática e pequena, facilitando o alcance das metas de proteína diária da dieta. Oferece uma variedade de sabores para todos os gostos e é uma alternativa para lanches entre as principais refeições. Sua composição conta com fibras, proteína e baixa quantidade de carboidratos.
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Chocolate</option>
                    <option value="baunilha">Churros</option>
                    <option value="morango">Morango</option>
                    <option value="morango">Morango com Chocolate</option>
                    <option value="cookies">Cookies N Cream</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 7,90</h2>

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
            A Growth Protein Bar não possui Glúten!<br>
            Fornece proteína de fonte de qualidade, alta quantidade de Fibras, sacia a fome e fornece bons nutrientes. Alta concentração de aminoácidos essenciais e de cadeia ramificada oferecidos pelas fontes proteicas trazem benefícios ao desempenho esportivo.<br>

            Barra de Proteína e controle de peso
            Rica em proteínas e fibras, auxilia na manutenção de massa muscular e na saciedade, sendo uma escolha adequada para dietas de redução de gorduras.<br>

            Além de ser um lanche repleto de nutrientes importantes, repõe as energias do corpo e ajuda a evitar o catabolismo.<br>

            Aviso legal<br>
            • Idade mínima recomendada: 18 anos.<br>
            • Consumir junto com alimentos para facilitar sua assimilação.<br>
            • Este produto é um suplemento dietético, não um medicamento. Suplementa dietas<br> insuficientes. Consulte o seu médico e/ou farmacêutico.<br>
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