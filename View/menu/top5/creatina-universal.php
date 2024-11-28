<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Creatina Creapure (200g) | Universal Nutrition</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/creatina-universal.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                Com mais creatina disponível nos músculos, o ciclo de reposição energética é otimizado e mais ATP estará disponível para as células. Os resultados desse processo incluem mais disposição, força e energia para realizar os exercícios.
                A Creatine® Universal é ideal para desenvolver um treino sólido e proporcionar ganhos consistentes. Conta apenas a mais pura creatina disponível no mercado, para absorção rápida e resultados garantidos.<br>
            </p>
            <div class="sabor">
                <h3>Sem Sabor</h3>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 119,00</h2>

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
        <p>O Papel do ATP na Energia Muscular<br>

            O ATP (adenosina trifosfato) é a principal fonte de energia para as células. Ele se esgota rapidamente durante exercícios de alta intensidade.
            A creatina age como um “recarregador” do ATP, fornecendo fosfato necessário para sua regeneração. Isso significa mais energia disponível para explosões de força e resistência muscular.<br>
            Por que a Creatina Monohidratada é tão Eficiente?<br>

            A creatina monohidratada, como a usada na Creatine® Universal, é a forma mais estudada e eficiente. Ela oferece alta biodisponibilidade e é absorvida rapidamente pelas células musculares, maximizando seus efeitos.<br>
            Melhora no Treino Anaeróbico e Aeróbico<br>

            Apesar de ser mais associada ao treino de força, a creatina também beneficia atividades de resistência. Ela ajuda na recuperação e mantém os músculos abastecidos por mais tempo, melhorando o desempenho em corridas curtas e até no ciclismo.<br>
            Ideal para Todos os Níveis de Treinamento<br>

            Desde iniciantes até atletas avançados, a suplementação com creatina é segura e eficaz. Com a Creatine® Universal, a pureza do produto garante resultados consistentes, seja para ganhos de força, explosão ou recuperação muscular.<br>
            Hidratação e Volumização Muscular<br>

            A creatina puxa água para dentro das células musculares, o que contribui para a hidratação celular e o aumento do volume muscular. Isso dá aquele visual "mais cheio" aos músculos, enquanto também melhora o ambiente para síntese proteica.<br>
            Segurança e Estudos de Longo Prazo<br>

            A creatina é uma das substâncias mais estudadas no mundo da suplementação esportiva. Pesquisas demonstram que ela é segura para uso a longo prazo e não sobrecarrega órgãos como os rins em indivíduos saudáveis.<br>
            A Creatine® Universal: Foco na Pureza<br>

            A Creatine® Universal utiliza matéria-prima de alta qualidade, garantindo máxima absorção. É ideal para treinos sólidos e consistentes, sendo indicada para quem quer resultados sem comprometer a saúde.<br>
        </p>
    </section>


    <section class="reviews">
        <h3>Avaliações dos Clientes</h3>
        <ul>
            <li>⭐ ⭐ ⭐ ⭐ ⭐ - "Excelente qualidade, percebi os resultados em poucas semanas!"</li>
            <li>⭐ ⭐ ⭐ ⭐ - "Ótimo custo-benefício, recomendo!"</li>
            <li>⭐ ⭐ ⭐ ⭐ - "Dissolve fácil!"</li>
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