<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Pré-treino Insanity 300g - Growth Supplements</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/pre_growth2.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            “Pré-treino” é tudo aquilo que pode ser consumido como fonte de nutrientes e energia na refeição que antecede o treino. Não há limitação, podemos falar de uma refeição - alimentos ou podemos falar de suplementos. Por conveniência os suplementos pré-treino são confeccionados com substâncias fontes de calorias e/ou substâncias estimulantes da performance física isentos de calorias.<br>

            Lembrando que um profissional nutricionista deve ser consultado a fim de verificar suas necessidades nutricionais, garantindo assim os efeitos do pré-treino.<br>

            O pré-treino Insanity foi desenvolvido pela equipe Growth Supplements justamente para deixar seu treino INSANO!!!<br>
            <strong>ANTES DE COMPRAR CONSULTE UM CARDIOLOGISTA</strong>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Limão</option>
                    <option value="baunilha">Frutas vermelhas</option>
                    <option value="morango">Melancia</option>
                    <option value="morango">Uva</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 108,00</h2>

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
        O insanity possui cafeína, esta substância pode trazer alguns efeitos colaterais como agitação, insônia, taquicardia, ansiedade, entre outros. Apesar do risco de mal estar em pessoas que não metabolizam bem esta substância, não há risco à saúde. Caso você ainda não possua experiência com suplementos que contenham cafeína, deve entrar em contato com médico ou nutricionista para receber a indicação ou não para o produto. Já as pessoas portadoras de qualquer patologia só devem consumir suplementos alimentares mediante indicação do profissional que os acompanha.<br>

        Existe ainda uma possível sensação de coceira/formigamento que dura em torno de 10min após consumo do Insanity, ela é causada pela Beta-alanina uma substância 100% segura, mas que é “percebida” por receptores na pele, ocasionando esta sensação em algumas pessoas. Além de não ser perceptível em todas as pessoas, essa sensação tende a passar com o decorrer das semanas de consumo do produto.<br>

        Não se esqueça que tanto colaterais quanto a garantia de resultados depende de aspectos que giram em torno da dieta e treino. Antes de consumir, consulte profissionais.<br>
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