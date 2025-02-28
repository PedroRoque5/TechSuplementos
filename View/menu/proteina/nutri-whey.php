<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Whey Protein Nutri Refil 900 g - IntegralMédica</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/whwyvoncentrado.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                Whey Protein Nutri Refil 900 g - IntegralMédica<br>
                Não Contém Glúten<br>
                Contém Lactose<br>
                Proteínas Concentradas e Blends<br>
                Recomendações de Uso: Diluir 16 colheres de sopa (120 g) em 300 ml de água de leite integral ou desnatado, água, suco ou vitaminas de frutas; e bater em liquidificador ou mixer até a diluição total do produto.<br>
                Importante: Este produto não substitui uma alimentação equilibrada e seu consumo deve ser orientado por nutricionista ou médico. Não se destina a prevenir, tratar, ou curar doenças. Visa melhorar o estado fisiológico/metabólico para o fim que se destina. Diabéticos: contém frutose.<br>
                Validade: 24 meses a partir da data de fabricação – desde que respeitados os cuidados de conservação.Validade pode variar conforme o lote.<br>
                OBS: Nutrientes podem variar conforme o lote<br>
                Origem: Nacional<br>
                Marca: IntegralMédica<br>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Chocolate</option>
                    <option value="baunilha">Baunilha</option>
                    <option value="morango">Morango</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco" id="produto-preco">R$ 55,99</h2>

    <div class="actions">
        <a href="<?= URL . 'index.php?pg=pagamento' ?>">
            <button class="buy-button">Comprar Agora</button>
        </a>
        <button class="cart-button" id="cart-button">
            <i class="fas fa-shopping-cart"></i> Adicionar ao Carrinho
        </button>
    </div>
    <div class="quantity-controls" id="quantity-controls" style="display: none;">
        <button id="decrease-quantity" class="quantity-button">-</button>
        <span id="quantity-display">1</span>
        <button id="increase-quantity" class="quantity-button">+</button>
        <button id="confirm-cart-button" class="confirm-button">Confirmar</button>
    </div>
    </div>

    <section class="curiosidades">
        <h3>Curiosidades sobre o produto</h3>
        <p>
            Atletas definem objetivos e, dia após dia, treinam com dedicação, foco e energia para alcançar essas metas. Mas eles sabem que além da musculação, um ótimo resultado precisa ser acompanhado de boa alimentação, descanso e uma excelente suplementação alimentar. As proteínas do soro de leite (whey protein), albumina e colágeno estão relacionadas com funções importantes no organismo, sobretudo na composição da estrutura muscular. Por isso, a proteína IntegralMédica Nutri Whey Protein Refil 900g é uma excelente e rica opção para a suplementação de proteína em sua dieta. Com fórmula de fácil solubilidade e delicioso sabor, esse suplemento IntegralMédica fornece até 30g por dose das melhores proteínas combinadas a uma rica oferta energética. Além disso, sua fórmula contém carboidratos complexos (maltodextrina) e simples (frutose), que também são essenciais no fornecimento de energia para os treinos. Isento de sacarose (açúcar), esse suplemento alimentar ainda é fonte de fibras, vitaminas e minerais. O Whey IntegralMédica Nutri pertence à linha BODY SIZE®, que constantemente investe em tecnologia e inovação para desenvolver suplementos de alta qualidade. A linha está sempre em evolução, colaborando para que atletas possam conquistar um melhor desempenho físico ou hipertrofia.
        </p>
    </section>


    <main>
        <section class="comentarios">
            <h3>Avalie este produto:</h3>
            <div class="avaliacao" id="avaliacao">
                <span class="estrela" data-value="1">⭐</span>
                <span class="estrela" data-value="2">⭐</span>
                <span class="estrela" data-value="3">⭐</span>
                <span class="estrela" data-value="4">⭐</span>
                <span class="estrela" data-value="5">⭐</span>
            </div>
            <textarea name="comentario" id="comentario" placeholder="Escreva seu comentário aqui..." rows="5" required></textarea>
            <button type="button" class="submit-button" id="submit-button">Enviar Comentário</button>
        </section>

        <!-- Lista de Avaliações -->
        <section class="reviews">
            <h3>Avaliações dos Clientes:</h3>
            <ul id="reviews-list">
                <!-- Comentários serão carregados aqui -->
            </ul>
        </section>
    </main>

    <script src="<?= CONTROLLER ?>descricao.js">
        loadComments();
        initCarrinho();
    </script>