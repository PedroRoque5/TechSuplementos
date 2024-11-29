<link href="<?= ASSETS ?>css/descricao.css" rel="stylesheet">
<main>

    <h1 class="produto">Égide 300g</h1>

    <div class="produto-container">
        <img class="descricaoimg" src="<?= ASSETS ?>image/pre_max.jpg" alt="Imagem do produto Whey-Pro Fusion">

        <div class="descreve">
            <p class="descrição">
            O pré-treino ÉGIDE é seu mais novo aliado para realizar treinos cada vez mais intensos!

            Sua formulação é concentrada e é fonte dos aminoácidos beta-alanina, taurina, cafeína, arginina e tirosina, que atuam em sinergia para auxiliar ainda mais seu desempenho.

           Prepare-se para treinar com muito mais intensidade, concentração e resistência!

           ÉGIDE tem saborização agradável e suave, tornando ainda mais fácil a inclusão do pré-treino em sua rotina.
            <strong>ANTES DE COMPRAR CONSULTE UM CARDIOLOGISTA</strong>
            </p>
            <div class="sabor">
                <h3>Escolha o sabor:</h3>
                <select name="sabores" id="sabores">
                    <option value="chocolate">Abacaxi com hortelã</option>
                    <option value="baunilha">Abacaxi e manga</option>
                    <option value="morango">Açai com guaraná</option>
                    <option value="morango">Frutas silvestres</option>
                    <option value="morango">Frutas vermelhas</option>
                    <option value="morango">Limão</option>
                </select>
            </div>
        </div>
    </div>

    <h2 class="preco">R$ 189,90</h2>

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
        Pré-treino é um termo utilizado para identificar os produtos ou suplementos utilizados para melhorar o desempenho das atividades físicas. É muito usado para aumentar a resistência, a energia e o foco durante o treino. O suplemento HAZE Growth Supplements é um pré-treino pensado e projetado para entregar ao esportista a melhor combinação dos nutrientes que podem ajudar a aumentar a intensidade dos treinos. Treinos com mais intensidade e mais volume!<br>
        Destaques do ÉGIDE<br>
        Uma dose de 6g e 7g (sabor de Abacaxi e Manga) do produto ÉGIDE oferece:<br>
        2.000mg de Beta Alanina;<br>
        1.200mg de Taurina;<br>
        1.000mg de Arginina;<br>
        263mg de Tirosina;<br>
        200mg de Cafeína;<br>
        Não contém Glúten;<br>
        Não contém Lactose.<br>
        Benefícios do ÉGIDE<br>
        Aumento de performance;<br>
        Melhora do rendimento;<br>
        Mais disposição;<br>
        Diminuição da sensação de fadiga;<br>
        Diminuição do cansaço durante o treinamento;<br>
        Maior foco para o treino;<br>
        Aumento de cargas durante a atividade física;<br>
        Melhora do tempo contra-relógio.<br>
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