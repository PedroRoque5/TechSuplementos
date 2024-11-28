<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Whey Protein Concentrado 1KG - Dark Lab</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/whey-dark.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                O Whey Protein é um suplemento alimentar derivado do soro do leite, que é uma fonte rica em proteínas de alta qualidade. É amplamente utilizado por atletas e entusiastas de fitness para auxiliar na recuperação muscular, ganho de massa muscular e suporte nutricional.<br>

                Experimente o melhor, entre para o Team Dark Lab!<br>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Chocolate</option>
                    <option value="chocolate">Chocolate Branco</option>
                    <option value="baunilha">Baunilha</option>
                    <option value="morango">Morango</option>
                    <option value="morango">Cookies N Cream</option>
                    <option value="cookies">Doce de leite</option>
                    <option value="cookies">Paçoca</option>
                    <option value="cookies">Banana</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 94,90</h2>

    <div class="actions">
        < <a href="<?= URL . 'index.php?pg=pagamento' ?>">
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
            BENEFÍCIOS DO WHEY PROTEIN CONCENTRADO:<br>

            ✔ Aumento da Síntese proteica<br>

            ✔ Recuperação muscular acelerada<br>

            ✔ Aumento da Massa Muscular<br>

            ✔ Saciedade e Controle de Peso<br>

            ✔ Suporte ao Sistema imunológico<br>
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