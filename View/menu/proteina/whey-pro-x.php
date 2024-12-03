<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">WHEY PRO-X GOURMET (900g) REFIL - DCX NUTRITION</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/wheysac.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            WHEY PRO-X GOURMET é um suplemento Ideal para atletas que buscam o aporte completo de proteínas, Whey Pro DCX é um suplemento hiperproteico que possui um excelente perfil de aminoácidos. Auxilia na recuperação e ganho de massa muscular, além de evitar o catabolismo e fortalecer o sistema imunológico.<br>
        Proteína de alta qualidade,com 15G DE PROTEÍNA, 2,6G DE BCAAS, matéria prima importada e agora na versão gourmet, trazendo ainda mais sabor.<br>
            Ingredientes<br>
            Proteína concentrada do soro de leite, cacau, aromatizantes: idênticos ao natural, edulcorante: stevia, espessante: goma xantana. NÃO CONTÉM GLÚTEN. CONTÉM LACTOSE. ALÉRGICOS: CONTÉM DERIVADOS DE LEITE E SOJA. PODE CONTER DERIVADOS DE OVO.<br>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Chocolate</option>
                    <option value="chocolate">Chocolate Branco</option>
                    <option value="baunilha">Sorvete de Baunilha</option>
                    <option value="morango">Morango</option>
                    <option value="morango">Beijinho de coco</option>
                    <option value="cookies">Leite ninho</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 69,90</h2>

    <div class="actions">
    < <a href="<?= URL . 'index.php?pg=pagamento' ?>">
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
        <p>
       Ideal para quem busca um suplemento hiperproteico para auxiliar no ganho e na recuperação muscular.<br>
       Cada porção contém 15g de proteína e 2,6g de BCAAs, essenciais para evitar o catabolismo e promover o crescimento muscular.<br>
       Agora disponível na versão gourmet, combinando alta performance com um sabor irresistível.<br>
       Feito com proteína concentrada do soro do leite, cacau e edulcorante natural (stevia), garantindo pureza e qualidade.<br>
       Além de fortalecer a imunidade, é uma ótima opção para atletas que exigem suplementação de alta performance.<br>
       Formulado com ingredientes importados e processados para manter o máximo de qualidade nutricional.<br>
       Apesar de conter lactose, o produto é seguro para quem possui intolerância ao glúten.<br>
       Contém derivados de leite e soja, podendo conter traços de ovo.<br>
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