<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">CREATINA MICRONIZADA EM PÓ</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/on.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            A ON Creatina é uma linha de produtos compostos por aminoácidos que contribuem no ciclo de geração de energia, permitindo mais energia e mais força em seus treinos. Além disso, ela facilita a entrada de água no músculo, permitindo também maior aporte de nutrientes e consequente hipertrofia. Quando administrada como creatina exógena, os estoques musculares e cerebrais de creatina e seu derivado fosforilado, a fosfocreatina, se tornam elevados. A ON Creatina também fornece o aumento nos estoques musculares, oferecendo benefício terapêutico, prevenindo depleção de ATP, estimulando a síntese de proteína ou reduzindo sua degradação. Ela também possui 5g da mais pura Creatina Mono-hidratada, que não possui sabor, odor e que se mistura facilmente à água ou ao suco da sua preferência. Se você deseja uma explosão de força em seus treinos, você precisa de um dos suplementos mais estudados para auxiliar na reposição de ATP durante atividades físicas, então, experimente, o quanto antes, a nossa linha completa ON CREATINA! SUGESTÃO DE USO Adicione uma colher de café de ON Creatina em 200ml de água ou suco e misture até que o pó seja dissolvido. Ingerir junto à refeição ou conforme orientação nutricional. BENEFÍCIOS • Aumento de força e energia; • Ganho de volume muscular; • 5g da mais pura creatina micro-hidratada; INGREDIENTE Creatina Mono-hidratada. NÃO CONTÉM GLÚTEN. ESTE PRODUTO NÃO DEVE SER CONSUMIDO POR GESTANTES, LACTANTES E CRIANÇAS.
            </p>
            <div class="sabor">
                <h3>Sem sabor</h3>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 22,22</h2>

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
            CREATINA EM PÓ. Apoia o desenvolvimento muscular, recuperação, desempenho, força e potência quando usado diariamente, ao longo do tempo e combinado com exercícios.<br>
            TRABALHE O MÚSCULO. Pode apoiar os esforços de recuperação muscular.<br>
            APROVEITE A QUALQUER MOMENTO. Adicione Creatina em Pó aos seus batidos antes ou depois do exercício.<br>
            PADRÕES DE QUALIDADE. Enquanto você cuida do seu corpo, ajudamos você a se cuidar. Tomamos medidas de controle de qualidade rigorosas, razão pela qual nossa proteína em pó é uma substância aprovada.           
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