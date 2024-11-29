<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Growth Supplements
        HOT Termogênico (60 Comprimidos) - Growth Supplements</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/termo_growth.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                Desenvolvida para otimizar a termogênese, queima de gordura e controle de peso.<br>
                <strong>ANTES DE COMPRAR CONSULTE UM CARDIOLOGISTA</strong>
            </p>
        </div>
    </div>

    <h2 class="preco">R$ 37,80</h2>

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
            Metabolismo é o nome dado ao conjunto de complexas transformações que as substâncias nutricionais e não nutricionais sofrem em nosso organismo. A taxa metabólica é uma forma de nos referirmos a velocidade com que acontecem estas transformações e esta velocidade pode variar de pessoa para pessoa de acordo com a prática de atividade física, porte físico e também de acordo com uso de suplementos quem contem cafeína. Esta classe de suplementos é capaz de aumentar a temperatura corporal e, por isso, aumenta a necessidade de calorias. O Hot da Growth Supplements trata-se de uma estratégia que pode auxiliar quem está buscando redução de peso, em especial redução de gorduras.<br>
            Assim funciona: o seu corpo naturalmente precisa de calorias, e essa necessidade pode ser ampliada com a prática de exercícios e a ingestão de termogênicos. O Hot Growth Supplements é fabricado com uma mistura especial de ingredientes que pode intensificar a demanda calórica do indivíduo, potencializando a redução de gordura. O HOT estimula o metabolismo, aumentando a necessidade de energia, e esse efeito é conhecido como termogênese.<br>
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