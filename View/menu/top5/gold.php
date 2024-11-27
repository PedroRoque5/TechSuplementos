<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Gold Standard 100% Whey 2.2kg Optimum Nutrition</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/goldstandard.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            O Whey Protein que definiu o padrão Gold de qualidade. Proteína mais vendida e premiada do mundo. Ideal para suporte e recuperação muscular<br>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Chocolate</option>
                    <option value="baunilha">Baunilha</option>
                    <option value="morango">Morango</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 480,85</h2>

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
        <p>Gold Standard 100% Whey 2.2kg Baunilha Optimum Nutrition
        O 100% Whey Gold Standard Optimum Nutrition oferece 24 g de proteina do soro do leite com altíssimo valor biológico. Este potenciador de proteínas é ideal para atletas e adultos em movimento, pois ajuda na recuperação, manutenção e ganho de massa muscular. Cada porção de Whey Gold Standard possui uma mistura de Whey Protein Isolado, Whey Protein Concentrado, Whey Peptídios e 5,5g de Aminoácidos de Cadeia Ramificada (BCAAs) que ajudam a construir massa magra. Misture 01 dosador em 150ml de água ou sua bebida preferida e tome uma vez ao dia, de preferência após a atividade física, ou conforme a orientação de um nutricionista.<br>
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