<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Creatina Monohidratada 200g - 100% Pura</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/oficialfarma.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            Descubra o poder da creatina, um dos suplementos mais estudados e utilizados no mundo inteiro, ideal para quem busca melhorar o desempenho físico, cognitivo e aumentar a massa muscular de forma eficiente e segura.<br>

            ✅ Aumenta a força e o desempenho físico;<br>

            ✅ Facilita a recuperação muscular pós-treino;<br>

            ✅ Potencializa a hipertrofia muscular;<br>

            ✅ Melhora a resistência em atividades de alta intensidade;<br>

            ✅ 100% pura e segura.<br>
            </p>
            <div class="sabor">
                <h3>Sem sabor</h3>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 90,93</h2>

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
            Creatina é o suplemento mais estudado do mundo, com resultados cientificamente comprovados para melhorar força, energia, recuperação muscular e funções cognitivas.<br>
            A creatina tem sua eficácia comprovada em melhorar a força muscular, função cognitiva, aumentar o volume de massa magra e otimizar o desempenho em atividades de alta intensidade. Seja você um atleta ou alguém que busca melhorar a disposição no dia a dia, a creatina é um suplemento com benefícios validados para todas as idades e níveis de atividade física. Seu uso seguro, faz com que seja a escolha ideal para melhorar a saúde muscular e cognitiva de maneira natural e comprovada.<br>
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