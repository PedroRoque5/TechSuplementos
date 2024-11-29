<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">CREATINA (100% Creapure®) - POTE 300g</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/dux.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            100% Creatina importada alemã, monoidratada, sem a adição de qualquer outro ingrediente. Para ganho de força e massa muscular.
            </p>
            <div class="sabor">
                <h3>Sem sabor</h3>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 269,90</h2>

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
        A Creatina Creapure® é um suplemento de alta qualidade, desenvolvido para potencializar seu desempenho físico e melhorar a recuperação muscular. Produzida na Alemanha com matéria-prima super premium, a Creapure® é reconhecida por sua pureza e eficácia excepcionais. Este suplemento é 100% vegano e não contém corantes, açúcares ou adoçantes, garantindo um produto puro e concentrado. A Creatina Creapure® é certificada pela IFS FOOD, um padrão de qualidade reconhecido globalmente pela Global Food Safety Initiative e possui as certificações Halal e Kosher, atendendo aos mais rigorosos requisitos de pureza e adequação dietética.<br>

        A creatina é indicada para pessoas que praticam atividade física, atletas, praticantes de musculação e indivíduos que realizam treinos de alta intensidade e curta duração. Este suplemento é um excelente aliado para potencializar o desempenho físico em diversas modalidades esportivas.<br>

        A creatina é uma molécula naturalmente presente no tecido muscular, embora em quantidades limitadas. Ela desempenha um papel crucial em todos os processos energéticos do corpo, especialmente na contração muscular. A suplementação com creatina pode trazer diversos benefícios, incluindo o aumento da força muscular, a melhoria da resistência física, a redução do tempo de recuperação e o crescimento do volume muscular. Para garantir a mais alta qualidade e pureza, nossa creatina é certificada com o selo Creapure. Reconhecido mundialmente, o selo Creapure atesta a excelência do produto e a sua eficácia, tornando a creatina um aliado essencial para quem busca otimizar o desempenho físico e acelerar a recuperação após os treinos.

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