<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Growth Supplements
        HOT Termogênico (60 Comprimidos) - Growth Supplements</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/termo_growth.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                Desenvolvida para otimizar a termogênese, queima de gordura e controle de peso.<br>
                <strong>ANTES DE COMPRAR CONSULTE UM CARDIOLOGISTA</strong>
            </p>
        </div>
    </div>

    <h2 class="preco">R$ 37,80</h2>

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
            Metabolismo é o nome dado ao conjunto de complexas transformações que as substâncias nutricionais e não nutricionais sofrem em nosso organismo. A taxa metabólica é uma forma de nos referirmos a velocidade com que acontecem estas transformações e esta velocidade pode variar de pessoa para pessoa de acordo com a prática de atividade física, porte físico e também de acordo com uso de suplementos quem contem cafeína. Esta classe de suplementos é capaz de aumentar a temperatura corporal e, por isso, aumenta a necessidade de calorias. O Hot da Growth Supplements trata-se de uma estratégia que pode auxiliar quem está buscando redução de peso, em especial redução de gorduras.<br>
            Assim funciona: o seu corpo naturalmente precisa de calorias, e essa necessidade pode ser ampliada com a prática de exercícios e a ingestão de termogênicos. O Hot Growth Supplements é fabricado com uma mistura especial de ingredientes que pode intensificar a demanda calórica do indivíduo, potencializando a redução de gordura. O HOT estimula o metabolismo, aumentando a necessidade de energia, e esse efeito é conhecido como termogênese.<br>
        </p>
    </section>


    <section class="reviews">
        <h3>Avaliações dos Clientes</h3>
        <ul>
            <li>⭐ ⭐ ⭐ ⭐ ⭐ - "Excelente qualidade!"</li>
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