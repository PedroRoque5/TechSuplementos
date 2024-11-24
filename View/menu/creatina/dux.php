<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">CREATINA (100% Creapure®) - POTE 300g</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/dux.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            100% Creatina importada alemã, monoidratada, sem a adição de qualquer outro ingrediente. Para ganho de força e massa muscular.
            </p>
            <div class="sabor">
                <h3>Sem sabor</h3>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 269,90</h2>

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
        A Creatina Creapure® é um suplemento de alta qualidade, desenvolvido para potencializar seu desempenho físico e melhorar a recuperação muscular. Produzida na Alemanha com matéria-prima super premium, a Creapure® é reconhecida por sua pureza e eficácia excepcionais. Este suplemento é 100% vegano e não contém corantes, açúcares ou adoçantes, garantindo um produto puro e concentrado. A Creatina Creapure® é certificada pela IFS FOOD, um padrão de qualidade reconhecido globalmente pela Global Food Safety Initiative e possui as certificações Halal e Kosher, atendendo aos mais rigorosos requisitos de pureza e adequação dietética.<br>

        A creatina é indicada para pessoas que praticam atividade física, atletas, praticantes de musculação e indivíduos que realizam treinos de alta intensidade e curta duração. Este suplemento é um excelente aliado para potencializar o desempenho físico em diversas modalidades esportivas.<br>

        A creatina é uma molécula naturalmente presente no tecido muscular, embora em quantidades limitadas. Ela desempenha um papel crucial em todos os processos energéticos do corpo, especialmente na contração muscular. A suplementação com creatina pode trazer diversos benefícios, incluindo o aumento da força muscular, a melhoria da resistência física, a redução do tempo de recuperação e o crescimento do volume muscular. Para garantir a mais alta qualidade e pureza, nossa creatina é certificada com o selo Creapure. Reconhecido mundialmente, o selo Creapure atesta a excelência do produto e a sua eficácia, tornando a creatina um aliado essencial para quem busca otimizar o desempenho físico e acelerar a recuperação após os treinos.

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