<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Whey Protein Concentrado 1KG - Dark Lab</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/whey-dark.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                O Whey Protein é um suplemento alimentar derivado do soro do leite, que é uma fonte rica em proteínas de alta qualidade. É amplamente utilizado por atletas e entusiastas de fitness para auxiliar na recuperação muscular, ganho de massa muscular e suporte nutricional.<br>

                Experimente o melhor, entre para o Team Dark Lab!<br>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Chocolate</option>
                    <option value="chocolate">Chocolate Branco</option>
                    <option value="baunilha">Baunilha</option>
                    <option value="morango">Morango</option>
                    <option value="morango">Cookies N Cream</option>
                    <option value="cookies">Doce de leite</option>
                    <option value="cookies">Paçoca</option>
                    <option value="cookies">Banana</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 94,90</h2>

    <div class="actions">
        < <a href="<?= URL . 'index.php?pg=pagamento' ?>">
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
            BENEFÍCIOS DO WHEY PROTEIN CONCENTRADO:<br>

            ✔ Aumento da Síntese proteica<br>

            ✔ Recuperação muscular acelerada<br>

            ✔ Aumento da Massa Muscular<br>

            ✔ Saciedade e Controle de Peso<br>

            ✔ Suporte ao Sistema imunológico<br>
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