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

    <h2 class="preco" id="produto-preco">R$ 148,73</h2>

    <div class="actions">
    <a href="<?= URL . 'index.php?pg=pagamento' ?>">
    <button class="buy-button">Comprar Agora</button>
        </a>
        <button class="cart-button"  id="cart-button">
            <i class="fas fa-shopping-cart"></i> Adicionar ao Carrinho
        </button>
    </div>
    <div class="quantity-controls" id="quantity-controls" style="display: none;">
    <button id="decrease-quantity" class="quantity-button">-</button>
    <span id="quantity-display">1</span>
    <button id="increase-quantity" class="quantity-button">+</button>
    <button id="confirm-cart-button" class="confirm-button">Confirmar</button>
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

    <main>
    <section class="comentarios">
    <h3>Avalie este produto:</h3>
    <div class="avaliacao" id="avaliacao">
        <span class="estrela" data-value="1">⭐</span>
        <span class="estrela" data-value="2">⭐</span>
        <span class="estrela" data-value="3">⭐</span>
        <span class="estrela" data-value="4">⭐</span>
        <span class="estrela" data-value="5">⭐</span>
    </div>
    <textarea name="comentario" id="comentario" placeholder="Escreva seu comentário aqui..." rows="5" required></textarea>
    <button type="button" class="submit-button" id="submit-button">Enviar Comentário</button>
</section>

        <!-- Lista de Avaliações -->
        <section class="reviews">
            <h3>Avaliações dos Clientes:</h3>
            <ul id="reviews-list">
                <!-- Comentários serão carregados aqui -->
            </ul>
        </section>
    </main>

    <script src="<?= CONTROLLER ?>descricao.js">
   loadComments();
   initCarrinho();
   </script>