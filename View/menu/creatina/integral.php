<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Creatina 100% Pura 300g</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/integral.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                Ganhe volume e massa muscular, aumente sua força e melhore seu desempenho e resistência durante os treinos suplementando com a Creatina Hardcore Integralmédica. Produto 100% puro, de excelente qualidade.<br>

                A creatina é um composto que pode ser produzido pelo nosso organismo, através do consumo de alimentos de origem animal como carnes e peixes mas também pode se suplementada na forma de creatina mono-hidratada. Tem importante papel no fortalecimento dos ossos, melhora o metabolismo e diminui a fadiga pós treino.<br>

                O uso da creatina está altamente relacionado com o aumento do volume muscular e força. Com creatina, a sua resistência á cargas mais pesadas ficará fortalecida possibilitando aumento de cargas para melhores resultados.
            </p>
            <div class="sabor">
                <h3>Sem sabor</h3>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 90,93</h2>

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
        A Creatina Hardcore da Integralmédica é um suplemento projetado para aumentar os estoques e o armazenamento de creatina nos músculos. Isso é crucial para a produção de energia utilizada na contração muscular. Com maiores reservas de creatina, a capacidade de contração muscular é ampliada, permitindo realizar treinos mais intensos e volumosos. Esses tipos de treino são essenciais para quem busca ganhar força e massa muscular de maneira eficaz.<br>

        Portanto, a Creatina Hardcore da Integralmédica é indispensável para:<br>
        Ganhar massa muscular<br>
        Melhorar performance<br>
        Acelerar o processo de recuperação<br>
        Aumento de força<br>
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