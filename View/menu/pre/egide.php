<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Égide 300g</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/pre_max.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            O pré-treino ÉGIDE é seu mais novo aliado para realizar treinos cada vez mais intensos!

            Sua formulação é concentrada e é fonte dos aminoácidos beta-alanina, taurina, cafeína, arginina e tirosina, que atuam em sinergia para auxiliar ainda mais seu desempenho.

           Prepare-se para treinar com muito mais intensidade, concentração e resistência!

           ÉGIDE tem saborização agradável e suave, tornando ainda mais fácil a inclusão do pré-treino em sua rotina.
            <strong>ANTES DE COMPRAR CONSULTE UM CARDIOLOGISTA</strong>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Abacaxi com hortelã</option>
                    <option value="baunilha">Abacaxi e manga</option>
                    <option value="morango">Açai com guaraná</option>
                    <option value="morango">Frutas silvestres</option>
                    <option value="morango">Frutas vermelhas</option>
                    <option value="morango">Limão</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 189,90</h2>

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
        Pré-treino é um termo utilizado para identificar os produtos ou suplementos utilizados para melhorar o desempenho das atividades físicas. É muito usado para aumentar a resistência, a energia e o foco durante o treino. O suplemento HAZE Growth Supplements é um pré-treino pensado e projetado para entregar ao esportista a melhor combinação dos nutrientes que podem ajudar a aumentar a intensidade dos treinos. Treinos com mais intensidade e mais volume!<br>
        Destaques do ÉGIDE<br>
        Uma dose de 6g e 7g (sabor de Abacaxi e Manga) do produto ÉGIDE oferece:<br>
        2.000mg de Beta Alanina;<br>
        1.200mg de Taurina;<br>
        1.000mg de Arginina;<br>
        263mg de Tirosina;<br>
        200mg de Cafeína;<br>
        Não contém Glúten;<br>
        Não contém Lactose.<br>
        Benefícios do ÉGIDE<br>
        Aumento de performance;<br>
        Melhora do rendimento;<br>
        Mais disposição;<br>
        Diminuição da sensação de fadiga;<br>
        Diminuição do cansaço durante o treinamento;<br>
        Maior foco para o treino;<br>
        Aumento de cargas durante a atividade física;<br>
        Melhora do tempo contra-relógio.<br>
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