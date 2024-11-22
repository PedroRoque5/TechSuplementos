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

    <h2 class="preco">R$ 55,99</h2>

    <div class="actions">
    <button class="payment-button">Outras formas de pagamento</button>
        <button class="buy-button">Comprar Agora</button>
        <button class="cart-button">
            <i class="fas fa-shopping-cart"></i> Adicionar ao Carrinho
        </button>
    </div>
    </div>

    <section class="curiosidades">
        <h3>Curiosidades sobre o produto</h3>
        <p>
        Atletas definem objetivos e, dia após dia, treinam com dedicação, foco e energia para alcançar essas metas. Mas eles sabem que além da musculação, um ótimo resultado precisa ser acompanhado de boa alimentação, descanso e uma excelente suplementação alimentar. As proteínas do soro de leite (whey protein), albumina e colágeno estão relacionadas com funções importantes no organismo, sobretudo na composição da estrutura muscular. Por isso, a proteína IntegralMédica Nutri Whey Protein Refil 900g é uma excelente e rica opção para a suplementação de proteína em sua dieta. Com fórmula de fácil solubilidade e delicioso sabor, esse suplemento IntegralMédica fornece até 30g por dose das melhores proteínas combinadas a uma rica oferta energética. Além disso, sua fórmula contém carboidratos complexos (maltodextrina) e simples (frutose), que também são essenciais no fornecimento de energia para os treinos. Isento de sacarose (açúcar), esse suplemento alimentar ainda é fonte de fibras, vitaminas e minerais. O Whey IntegralMédica Nutri pertence à linha BODY SIZE®, que constantemente investe em tecnologia e inovação para desenvolver suplementos de alta qualidade. A linha está sempre em evolução, colaborando para que atletas possam conquistar um melhor desempenho físico ou hipertrofia.
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