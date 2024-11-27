<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Horus 300g</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/pre_max2.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            HÓRUS é um produto para ser consumido no pré treino.<br>

            Para quem se exercita com intensidade, a fadiga é um dos principais fatores que influenciam o rendimento, por isso desenvolvemos o HÓRUS: com formulação altamente tecnológica e ingredientes de altíssima qualidade, para você ter um treino com muito mais eficiência.<br>
            HÓRUS é um produto para ser consumido no pré treino.

            Para quem se exercita com intensidade, a fadiga é um dos principais fatores que influenciam o rendimento, por isso desenvolvemos o HÓRUS: com formulação altamente tecnológica e ingredientes de altíssima qualidade, para você ter um treino com muito mais eficiência
            <strong>ANTES DE COMPRAR CONSULTE UM CARDIOLOGISTA</strong>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Amora</option>
                    <option value="baunilha">Blue ice</option>
                    <option value="morango">Citrus</option>
                    <option value="morango">Cotton Candy</option>
                    <option value="morango">Frutas vermelhas</option>
                    <option value="morango">Limão Yuzu</option>
                    <option value="morango">Maça verde</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 169,90</h2>

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
        O uso de suplementos nutricionais durante o período pré-treino é bastante comum entre atletas ou praticantes de esportes que desejam melhorar o seu desempenho.<br>

        Geralmente, a composição dos produtos apresenta uma mistura de ingredientes que atuam em conjunto, proporcionando importante papel na melhoria de performance em exercícios agudos, o que pode aumentar adaptações ao treinamento quando utilizado por um longo período (cronicamente) e em conjunto ao treino.
        </p>
    </section>


    <section class="reviews">
        <h3>Avaliações dos Clientes</h3>
        <ul>
            <li>⭐ ⭐ ⭐ ⭐ ⭐ - "Excelente qualidade!"</li>
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