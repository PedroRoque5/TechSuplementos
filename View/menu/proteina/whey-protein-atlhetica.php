<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">100% Pure Whey Protein - Atlhetica Evolution Series</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/BLACKWHEY.png" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                100% Pure Whey da Atlhetica Nutrition, é um suplemento alimentar formulado com proteínas de alto valor biológico, matéria-prima importada dos EUA e extraída do soro do leite por processo de filtração (Whey Protein Concentrada).<br>

                Fornece 24g de proteínas por porção e possui alto teor de aminoácidos essenciais, entre eles os BCAAs, necessários para um melhor rendimento e máxima construção muscular.<br>

                É ideal para suplementar a dieta proteica de atletas que sofrem grandes desgastes nos treinos.
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Chocolate</option>
                    <option value="baunilha">Baunilha</option>
                    <option value="morango">Morango</option>
                    <option value="cookies">Cookies N Cream</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 148,73</h2>

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
        <p>Produzido com proteínas de alto valor biológico, importadas diretamente dos EUA.<br>
    Cada porção fornece 24g de proteínas, ideal para atender às demandas dos treinos mais intensos.<br>
    Feito a partir do soro do leite utilizando técnicas modernas para manter a pureza e a qualidade.<br>
    Contém alto teor de BCAAs, fundamentais para a recuperação e o crescimento muscular.<br>
    Especialmente formulado para suprir as necessidades de atletas que enfrentam grandes desgastes nos treinos.<br>
    Pode ser usado como um pós-treino ou como um complemento em receitas, garantindo praticidade no dia a dia.<br>
    Fabricado pela Atlhetica Nutrition, referência em suplementos de alta performance.<br>
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