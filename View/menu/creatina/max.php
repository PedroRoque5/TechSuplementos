<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Creatina 300 g</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/max.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            A creatina auxilia no aumento do desempenho físico durante exercícios repetidos de curta duração e alta intensidade.<br>

            Formada a partir da associação de três aminoácidos de alto valor biológico (arginina, glicina e metionina), a creatina está presente naturalmente em nosso organismo, sendo que cerca de 95% do seu conteúdo é armazenado no músculo esquelético.<br>

            Recomenda-se a ingestão desta substância juntamente com um carboidrato de alto índice glicêmico para facilitar o seu transporte para dentro das células musculares.<br>
            </p>
            <div class="sabor">
                <h3>Sem sabor</h3>
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
        A Max Titanium possui as creatinas com o melhor custo-benefício e com a melhor qualidade. A vantagem para quem compra na Max Titanium é que você terá a qualidade da maior e melhor marca de suplementos do Brasil e uma das melhores do mundo e poderá comprar direto da fábrica .<br>

        Com isso, você aproveita a alta tecnologia aplicada em nossos processos de fabricação, com a facilidade de receber o produto direto na sua casa, sempre um produto com frescor saído da fábrica !<br>

        Ao comprar nossa creatina, você terá um produto da mais alta qualidade. Assim, fica mais fácil consumir um produto conceituado a um preço acessível, que cabe no seu bolso.<br>

        Mas o que é Creatina ?<br>
        A creatina é classificada como "amina", a creatina é fabricada por nosso organismo e é encontrada em diversos alimentos. Cerca de 95% das creatinas presente em nosso organismo encontram-se nos músculos.<br>
        Isto porque a creatina é usada pela célula muscular para auxiliar na formação de energia, responsável pelas contrações. Ou seja, sem creatina não existe contração e a suplementação de creatina pode te auxiliar no aumento da sua força muscular.<br>
        Você sabia que a Creatina monohidratada é o suplemento mais anabólico do mercado ?
        Existem diferentes formas químicas de creatina, mas tanto cientistas quanto pesquisadores concordam que a forma mais efetiva é a monohidratada.<br>
        A creatina monohidratada tem uma maior porcentagem de aproveitamento e absorção pelo tecido muscular, local onde fica armazenada.<br>
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