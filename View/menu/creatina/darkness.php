<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Creatina Pura 300g Darkness</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/darkness.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                A Creatine Darkness é um composto de aminoácidos capaz de fornecer muita energia para os músculos, auxiliando no aumento do desempenho físico durante exercícios intensos. É indicada para atletas e praticantes de atividades físicas que buscam aumentar sua capacidade de treinar com mais intensidade.<br>

                A creatina Darkness amplifica o volume das células musculares, possibilitando tanto o aumento das cargas quanto do número de repetições com uma mesma carga. Com esse upgrade, os treinos podem se tornar cada vez mais intensos, a fim de conquistar resultados cada vez melhores.<br>

                100% Creatina<br>
                Nova Embalagem<br>
                Sem Açúcar<br>
                Sem Aditivos<br>
                Sem glúten<br>
            </p>
            <div class="sabor">
                <h3>Sem sabor</h3>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 100,00</h2>

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
            A creatina monohidratada da Darkness foi desenvolvida por experts da nutrição e dos esportes para proporcionar treinos tão insanos quanto os resultados almejados por quem treina pesado.<br>

            Sua fórmula traz 100% creatina, sem glúten, sem açúcar e sem aditivos, fornecendo benefícios como:<br>
            • Ganho de massa muscular;<br>
            • Melhora de performance;<br>
            • Aumento de força;<br>
            • Explosão muscular.<br>
            A creatina monohidratada ainda é um suplemento que age no aumento da síntese proteica, promovendo consequentemente a hipertrofia muscular, potencializando os resultados de treinos pesados.<br>

            A Creatine Darkness é comercializada em potes de 300 g e 1 kg do suplemento em forma de pó e sabor neutro.<br>
            A creatina é um dos suplementos mais estudados atualmente no mundo inteiro, por diversos benefícios para a saúde como a melhora do aprendizado e cognição, diminuição da sarcopenia, entre muitos outros benefícios. Além disso, a creatina irá Aumentar a sua capacidade de treinar com mais intensidade, tanto no aumento das cargas de treino quanto no aumento do número de repetições com uma mesma carga. A creatina tem também a capacidade de aumentar o volume celular,aumentando assim proteica e consequentemente aumentando a sua hipertrofia muscular.<br>

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