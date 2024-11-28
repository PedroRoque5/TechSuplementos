<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Beta HD Pre Workout Uva com Morango</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/BetaHD.png" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            O Pré-HD Elite é um suplemento pré-treino desenvolvido para potencializar seu desempenho físico e mental durante os treinos. Formulado com uma combinação estratégica de ingredientes, ele oferece energia, foco e resistência, tudo isso de forma equilibrada e com segurança.<br>
            <strong>ANTES DE COMPRAR CONSULTE UM CARDIOLOGISTA</strong>
            </p>
            <div class="sabor">
                <h3>sabor: Uva com Morango</h3>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 70,00</h2>

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
        <p>Principais Benefícios:<br>
        Energia Sustentada: Contém cafeína para fornecer energia de longa duração, ajudando você a encarar treinos intensos.<br>
        Melhora da Resistência Muscular: A beta-alanina reduz a fadiga muscular, permitindo que você treine por mais tempo e com maior intensidade.<br>
        Foco Mental Afiado: Com taurina e tirosina, melhora a concentração e a conexão mente-músculo, essencial para desempenho otimizado.<br>
        Bombeamento Muscular (Pump): Inclui componentes vasodilatadores que promovem maior fluxo sanguíneo, resultando em mais nutrientes e oxigênio para os músculos.<br>
        Composição-Chave:<br>
        Cafeína: Fornece energia e aumenta o estado de alerta.
        Beta-Alanina: Combate o acúmulo de ácido lático, retardando a fadiga muscular.
        Taurina e Tirosina: Melhora o foco mental e a resistência ao estresse.<br>
        Arginina: Ajuda no pump muscular, otimizando a vasodilatação.<br>
        Por que escolher o Pré-HD Elite?<br>
        O Pré-HD Elite é ideal para quem busca uma fórmula equilibrada, que oferece energia e desempenho sem exageros nos estimulantes. É uma ótima opção tanto para iniciantes no uso de pré-treinos quanto para atletas intermediários que precisam de um reforço consistente e seguro.<br>
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