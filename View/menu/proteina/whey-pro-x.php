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

    <h2 class="preco">R$ 69,90</h2>

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