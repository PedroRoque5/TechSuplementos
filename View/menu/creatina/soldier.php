<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Creatina Monohidratada 1Kg 100% Pura - Importada - Soldiers Nutrition</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/soldier.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            A creatina é um composto naturalmente encontrado no corpo humano e também pode ser obtida através de fontes alimentares, como carne e peixe. Ela desempenha um papel fundamental na produção de energia nas células musculares, sendo especialmente benéfica para atividades.
            </p>
            <div class="sabor">
                <h3>Sem sabor</h3>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 232,66</h2>

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
        A Creatina é um esteroide anabolizante?<br>
        A creatina não é um esteroide anabolizante. É um composto naturalmente encontrado no corpo humano e também pode ser obtido através de fontes alimentares. A suplementação de creatina não está relacionada ao uso de esteroides anabolizantes.<br>
        A Creatina causa danos nos rins?<br>
        Vários estudos científicos têm demonstrado que a suplementação de creatina não causa danos nos rins em indivíduos saudáveis. Pessoas com problemas renais preexistentes devem consultar um médico antes de usar a creatina. É importante manter-se bem hidratado ao usar a creatina para minimizar qualquer possível estresse nos rins..<br>
        É necessário fazer ciclos de Creatina?<br>
        Não é necessário fazer ciclos de creatina. Diferente de certos suplementos, como esteroides anabolizantes, a creatina pode ser usada continuamente sem a necessidade de períodos de interrupção. A dosagem recomendada pode variar, mas geralmente é seguro usar creatina a longo prazo, desde que você siga as orientações adequadas.  
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