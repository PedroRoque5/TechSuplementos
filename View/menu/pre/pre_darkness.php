<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Évora Pw</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/pre_darkness.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            Évora PW é o suplemento pré-treino da Darkness desenvolvido para favorecer a realização de treinos de força com alta intensidade. Sua fórmula contém ingredientes energéticos e neuroestimulantes capazes de criar as condições físicas adequadas à realização de treinos intensos, retardando o desgaste físico e mantendo o alerta mental até o fim do treino.<br>

            O pré-treino Évora não somente aumenta a sua disposição, mas também ajuda a superar os seus limites com relação à intensidade e à carga de treino, além de melhorar sua capacidade de resistência à fadiga. Tudo isso sem perder o foco durante o treino, o que permite manter-se concentrado na qualidade da execução dos movimentos.<br>
            <strong>ANTES DE COMPRAR CONSULTE UM CARDIOLOGISTA</strong>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Limão</option>
                    <option value="baunilha">Maça verde</option>
                    <option value="morango">Frutas vermelhas</option>
                    <option value="morango">Frutas amarelas</option>
                    <option value="morango">Uva</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 79,90</h2>

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
        Évora PW Irá aumentar não somente a sua disposição para o treino, mas também te ajudará a superar os seus limites com relação a intensidade de treinamento, carga de treino, além de aumentar a sua capacidade de resistência à fadiga. Tudo isso sem perder o foco durante o treino, o que permite manter-se concentrado na qualidade da execução dos movimentos.<br>

        Energia Extrema<br>
        Melhora do Foco<br>
        Resistência Muscular<br>
        Redução da Fadiga Muscular<br>
        Alta Performance
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