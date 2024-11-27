<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Creatina Monohidratada 250g - Growth Supplements</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/growth.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                Quimicamente, a creatina monohidratada é chamada de amina, um composto derivado de aminoácidos que pode ser obtido por meio da dieta (alimentos), da síntese feita por nosso próprio organismo ou da suplementação. A creatina suplemento garante uma quantidade excelente desse nutriente no seu dia a dia. Isso faz com que o seu corpo tenha todas as necessidades supridas, com toda a energia para crescer e não perder a massa muscular conquistada nos treinos.<br>

                A creatina produzida em nosso corpo, é sintetizada nos rins, fígado e no pâncreas, e secretada na corrente sanguínea até o tecido muscular. Já quando o assunto é o suplemento alimentar de creatina, sua fabricação é feita por meio de métodos avançados da tecnologia dos alimentos. Uma de suas características é que seu sabor não é acentuado e, por isso, ela pode ser diluída no líquido de sua preferência.<br>
            </p>
            <div class="sabor">
                <h3>Sem sabor</h3>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 79,92</h2>

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
        A creatina monohidratada é um dos suplementos mais populares do mercado. Além disso, é o suplemento mais estudado pela ciência esportiva. Ela é usada por atletas de diversas modalidades, incluindo fisiculturistas profissionais. O foco da sua aplicação na dieta é o ganho de massa muscular, garantindo a energia que seu músculo precisa para crescer cada vez mais. Entre os seus benefícios, a creatina aumenta a capacidade do músculo de gerar força. Ajuda diretamente na hipertrofia muscular, aumenta sua capacidade de treino, previne o catabolismo e influencia a transcrição gênica.<br>

        Caso o seu objetivo seja atingir a hipertrofia, o melhor a fazer é comprar Creatina Monohidratada da Growth Supplements, procurar um nutricionista de sua confiança e começar a tomá-la de forma estratégica.

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