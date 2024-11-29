<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Huger Pré-Treino 320g</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/pre_integralMedica.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            Huger é o suplemento pré-treino da Integralmédica que reúne tudo o que você precisa para maximizar seu desempenho e alcançar novos níveis de performance na academia.<br>

            Com o Huger Integralmedica 320g, você se prepara para treinos mais intensos, com foco, energia e força, otimizando cada sessão para alcançar seus objetivos de ganho de massa magra e melhora no desempenho físico.<br>

            Arginina 2g e Beta Alanina 2g<br>
            Cafeína e Taurina<br>
            Colina e Tirosina<br>
            <strong>ANTES DE COMPRAR CONSULTE UM CARDIOLOGISTA</strong>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Maça</option>
                    <option value="baunilha">Chicletes</option>
                    <option value="morango">Cereja</option>
                    <option value="morango">Uva</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 159,90</h2>

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
        Huger é o suplemento pré-treino da Integralmédica que reúne tudo o que você precisa para maximizar seu desempenho e alcançar novos níveis de performance na academia.<br>

        Inovador e ultra concentrado , o Huger 320g reúne em sua fórmula inovadora ingredientes que trabalham em sinergia para oferecer benefícios alinhados com seus objetivos de treino. Conheça mais sobre cada um deles:<br>
        BETA-ALANINA: reduz a acidose muscular, diminuindo a fadiga e permitindo que você execute seus exercícios com mais intensidade e por mais tempo;<br>

        CAFEÍNA: aumenta o estado de alerta e melhora o desempenho físico, retardando a fadiga e aumentando a força muscular;<br>

        ARGININA: potente vasodilatador, aumenta o recebimento de nutrientes nos músculos , melhorando a performance e acelerando a recuperação;<br>

        TIROSINA: precursora de dopamina, melhora o foco mental e o bem-estar, essenciais para manter a concentração durante o treino;<br>
        TAURINA: fortalece a contração muscular e aumenta a resistência , enquanto melhora o foco e a concentração, sendo essencial para um treino de alta intensidade.

        COLINA: grande aliada do esporte, potencializa a performance cognitiva e a precisão dos movimentos , além de melhorar o fluxo de nutrientes para os músculos.
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