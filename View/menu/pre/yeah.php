<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Pré Treino Yeah Buddy 150g Frutas Vermelhas</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/pre_RC.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            O mais recente de Ronnie Coleman e sua marca é o Yeah Buddy, um pré-treino mais intenso, potente e de maior impacto, centrado em fornecer uma poderosa mistura de energia e foco mental. A fórmula por trás do suplemento certamente reflete isso, já que todos os seus principais ingredientes são conhecidos pelos benefícios sensoriais de maior energia e foco.<br>

            Suplemento esportivo<br>

            Esse tipo de suplemento ajuda a complementar a alimentação de pessoas com objetivos ou requisitos nutricionais específicos. Seu consumo pode ser indicado por vários fatores, como a duração e a intensidade da atividade física, o tipo de esporte, o ambiente em que é praticado, a idade, a composição corporal, o peso, etc. É importante destacar que seu uso deve ser acompanhado por uma alimentação equilibrada e hábitos de vida saudáveis.<br>


            *Este produto é um suplemento dietético, não é um medicamento. Suplementa Ante dietas insuficientes. Consulte seu médico e / ou farmacêutico.<br>
                <strong>ANTES DE COMPRAR CONSULTE UM CARDIOLOGISTA</strong>
            </p>
            <div class="sabor">
                <h3>Sabor: Frutas Vermelhas</h3>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 99,90</h2>

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
        Ronnie Coleman Signature Series, marca importada, está em 121 países, instalações de fabricação certificadas e usa ingredientes que passam por rigorosos controles de qualidade, até chegar ao produto pronto para consumir. Além disso, eles têm certificações internacionais de autenticidade, que garantem ainda mais sua excelência.<br>

        Uma nutrição equilibrada tem um papel muito importante na qualidade de vida. Com o ritmo acelerado de muitas pessoas, às vezes, é muito difícil prestar atenção a todos os requisitos que o corpo precisa para estar saudável e forte. Neste sentido, os suplementos cumprem a função de complementar a alimentação e ajudam a obter as vitaminas, minerais, proteínas e outros componentes indispensáveis para o correto funcionamento do organismo.<br>
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

    <script>
 document.addEventListener('DOMContentLoaded', () => {
    const stars = document.querySelectorAll('.estrela');
    const submitButton = document.getElementById('submit-button');
    const reviewsList = document.getElementById('reviews-list');
    const comentarioInput = document.getElementById('comentario');

    let selectedRating = 0; // Avaliação atual selecionada

    // Adiciona eventos de interação nas estrelas
    stars.forEach(star => {
        star.addEventListener('mouseenter', () => {
            highlightStars(star.dataset.value);
        });

        star.addEventListener('mouseleave', () => {
            highlightStars(selectedRating);
        });

        star.addEventListener('click', () => {
            selectedRating = star.dataset.value; // Define avaliação
            highlightStars(selectedRating);
        });
    });

    // Função para destacar estrelas
    function highlightStars(rating) {
        stars.forEach(star => {
            if (star.dataset.value <= rating) {
                star.classList.add('hover');
            } else {
                star.classList.remove('hover');
            }
        });
    }

    // Adiciona novo comentário ao clicar no botão
    submitButton.addEventListener('click', () => {
        const comentario = comentarioInput.value.trim();

        if (!selectedRating || !comentario) {
            alert('Por favor, selecione uma avaliação e escreva um comentário.');
            return;
        }

        // Cria novo elemento de avaliação
        const newReview = document.createElement('li');
        newReview.textContent = `${'⭐ '.repeat(selectedRating).trim()} - "${comentario}"`;

        // Adiciona à lista de avaliações
        reviewsList.appendChild(newReview);

        // Salva no localStorage
        saveComment(selectedRating, comentario);

        // Reseta o formulário
        comentarioInput.value = '';
        selectedRating = 0;
        highlightStars(selectedRating);
    });

    // Salva comentários no localStorage
    function saveComment(rating, text) {
        const savedComments = JSON.parse(localStorage.getItem('comments')) || [];
        savedComments.push({ rating, text });
        localStorage.setItem('comments', JSON.stringify(savedComments));
    }

    // Carrega comentários do localStorage ao abrir a página
    function loadComments() {
        const savedComments = JSON.parse(localStorage.getItem('comments')) || [];
        savedComments.forEach(comment => {
            const newReview = document.createElement('li');
            newReview.textContent = `${'⭐ '.repeat(comment.rating).trim()} - "${comment.text}"`;
            reviewsList.appendChild(newReview);
        });
    }

    loadComments(); // Chama a função ao carregar a página
});
</script>