<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Creatina Pura 300g Darkness</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/darkness.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                A Creatine Darkness é um composto de aminoácidos capaz de fornecer muita energia para os músculos, auxiliando no aumento do desempenho físico durante exercícios intensos. É indicada para atletas e praticantes de atividades físicas que buscam aumentar sua capacidade de treinar com mais intensidade.<br>

                A creatina Darkness amplifica o volume das células musculares, possibilitando tanto o aumento das cargas quanto do número de repetições com uma mesma carga. Com esse upgrade, os treinos podem se tornar cada vez mais intensos, a fim de conquistar resultados cada vez melhores.<br>

                100% Creatina<br>
                Nova Embalagem<br>
                Sem Açúcar<br>
                Sem Aditivos<br>
                Sem glúten<br>
            </p>
            <div class="sabor">
                <h3>Sem sabor</h3>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 100,00</h2>

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
            A creatina monohidratada da Darkness foi desenvolvida por experts da nutrição e dos esportes para proporcionar treinos tão insanos quanto os resultados almejados por quem treina pesado.<br>

            Sua fórmula traz 100% creatina, sem glúten, sem açúcar e sem aditivos, fornecendo benefícios como:<br>
            • Ganho de massa muscular;<br>
            • Melhora de performance;<br>
            • Aumento de força;<br>
            • Explosão muscular.<br>
            A creatina monohidratada ainda é um suplemento que age no aumento da síntese proteica, promovendo consequentemente a hipertrofia muscular, potencializando os resultados de treinos pesados.<br>

            A Creatine Darkness é comercializada em potes de 300 g e 1 kg do suplemento em forma de pó e sabor neutro.<br>
            A creatina é um dos suplementos mais estudados atualmente no mundo inteiro, por diversos benefícios para a saúde como a melhora do aprendizado e cognição, diminuição da sarcopenia, entre muitos outros benefícios. Além disso, a creatina irá Aumentar a sua capacidade de treinar com mais intensidade, tanto no aumento das cargas de treino quanto no aumento do número de repetições com uma mesma carga. A creatina tem também a capacidade de aumentar o volume celular,aumentando assim proteica e consequentemente aumentando a sua hipertrofia muscular.<br>

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