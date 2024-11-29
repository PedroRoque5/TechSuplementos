<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Yopro Shake 15g Proteína Danone 250ml </h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/yopro.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
                YoPRO 15g de proteínas que ajudam na recuperação e no ganho de massa muscular¹. Contém Whey + Caseína, 9 aminoácidos, zero lactose, zero adição de açúcares², cálcio e baixo teor de gorduras. Seu pré e pós-treino!
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Baunilha</option>
                    <option value="baunilha">Chocolate</option>
                    <option value="morango">Morango</option>
                    <option value="morango">Banana</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 15,11</h2>

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
            YoPRO é a marca especialista em criar produtos com alto teor de proteínas, práticos e deliciosos para quem busca uma rotina ativa e saudável. YoPRO é proteína, sabor e praticidade para sua rotina.<br>
            O YoPRO Shake Proteico 250ml contém 15g de proteínas, que proporcionam saciedade e auxiliam na construção e recuperação muscular¹, Whey e Caseína, também é zero lactose, zero adição de açúcares², tem baixo teor de gorduras e é fonte de cálcio.<br>
            Você pode consumir seu YoPRO Shake Proteico UHT 15g de proteínas a qualquer momento, seja como parte do seu café da manhã, como lanche entre as refeições ou antes e depois dos treinos. Sua fórmula prática e deliciosa permite que você o leve para onde quiser, seja na academia ou no trabalho.<br>
            É essencial para você que busca um estilo de vida ativo e saudável, além de com o seu consumo de proteínas diárias, é um aliado para sua performance física e seu bem-estar, complementando a sua rotina de forma saudável e saborosa.<br>
            YoPRO É MAIS PROTEÍNA, SABOR E PRATICIDADE PARA SUA ROTINA.<br>
            Experimente e vá além!<br>
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