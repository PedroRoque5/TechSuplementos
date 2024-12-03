<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Whey-Protein Concentrado Max Titanium Pro</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/whey.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                Whey Protein Concentrado Max Titanium Pro - 1kg<br>
                Benefícios do Whey ProAuxílio para o ganho de massa muscular;<br>Auxílio para recuperação muscular;<br>Prevenção da perda e manutenção de massa muscular;<br>Destaques do Whey Pro15g de proteína por dose;3,4g de BCAA;<br>+ de 10g de Aminoácidos Essenciais;<br>Não contém carboidrato adicionado à formulação;<br>Excelente palatabilidade;<br>Não contém Glúten;
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Chocolate</option>
                    <option value="baunilha">Baunilha</option>
                    <option value="morango">Morango</option>
                    <option value="cookies">Vitamina de frutas</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 109,90</h2>

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
        <p>O Whey Concentrado é conhecido como um dos melhores aliados para a construção de músculos devido à sua alta concentração de proteínas completas.<br>
            Após um treino intenso, o consumo do Whey ajuda a reparar as fibras musculares danificadas, acelerando a recuperação e reduzindo dores musculares.<br>
            Rico em aminoácidos de cadeia ramificada (BCAA), essenciais para reduzir a fadiga durante o treino e proteger os músculos.<br>
            É uma fonte prática e rápida de proteína de alta qualidade, ideal para quem tem uma rotina agitada e não consegue consumir a quantidade de proteínas necessária apenas com alimentos.<br>
            Além de ser nutritivo, o produto possui uma textura cremosa e sabores agradáveis que tornam o consumo prazeroso.<br>
            Não é apenas para atletas; o Whey Protein também pode ser usado para ajudar na manutenção da saúde óssea, imunidade e até controle de peso.<br>
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