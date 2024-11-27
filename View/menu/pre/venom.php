<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Pré-Treino Venom Underground Pre Workout 300g - Dark Lab</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/pre_darklab.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            Venom é um pré-treino feito para maximizar seu treino e alcançar seus objetivos, contendo cafeína, taurina, beta-alanina e outros ingredientes que ajudam a aumentar o fluxo sanguíneo, melhorando a resistência muscular e reduzindo a fadiga. Descubra a energia explosiva do melhor e mais forte pré-treino do mercado, com uma combinação exclusiva de ingredientes, Venom proporciona uma explosão de energia e foco, melhorando a força, resistência e a intensidade dos treinos. Com Venom, você terá o suporte necessário para superar seus limites e alcançar os melhores resultados. Experimente o poder desse pré-treino e supere seus objetivos.<br>
            <strong>ANTES DE COMPRAR CONSULTE UM CARDIOLOGISTA</strong>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Limão</option>
                    <option value="baunilha">Maça verde</option>
                    <option value="morango">Frutas vermelhas</option>
                    <option value="morango">Manga</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 87,90</h2>

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
        BENEFÍCIOS:<br>

✔️ Aumento da energia e disposição para treinar;<br>
✔️ Melhora do desempenho físico e aumento da resistência muscular;<br>
✔️ Maior concentração mental e foco.<br>

QUALIDADE DARK LAB:<br>

✔️ Matéria-prima de alta qualidade;<br>
✔️ Ingrediente puro.<br>
✔️ Gluten Free.<br>
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