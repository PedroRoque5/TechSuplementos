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

// Função principal para inicializar o controle do carrinho
function initCarrinho() {
    // Elementos HTML
    const cartButton = document.getElementById('cart-button'); // Botão "Adicionar ao Carrinho"
    const precoElemento = document.getElementById('produto-preco'); // Preço do produto
    const quantityControls = document.getElementById('quantity-controls'); // Controles de quantidade
    const decreaseButton = document.getElementById('decrease-quantity'); // Botão "-"
    const increaseButton = document.getElementById('increase-quantity'); // Botão "+"
    const quantityDisplay = document.getElementById('quantity-display'); // Exibição da quantidade
    const confirmCartButton = document.getElementById('confirm-cart-button'); // Botão "Confirmar"

    // Converte o preço do texto para um número
    const precoTexto = precoElemento.textContent.replace('R$', '').replace(',', '.').trim();
    const precoProduto = parseFloat(precoTexto); // Exemplo: 79.92

    // Variável de estado
    let quantidade = 1; // Quantidade inicial

    // Atualiza o valor exibido no contador de quantidade
    const updateQuantityDisplay = () => {
        quantityDisplay.textContent = quantidade;
    };

    // Mostra os controles de quantidade ao clicar no botão "Adicionar ao Carrinho"
    cartButton.addEventListener('click', () => {
        quantityControls.style.display = 'flex'; // Exibe os controles de quantidade
        cartButton.style.display = 'none'; // Oculta o botão "Adicionar ao Carrinho"
    });

    // Incrementa a quantidade ao clicar no botão "+"
    increaseButton.addEventListener('click', () => {
        quantidade++;
        updateQuantityDisplay();
    });

    // Decrementa a quantidade ao clicar no botão "-", com limite de 1
    decreaseButton.addEventListener('click', () => {
        if (quantidade > 1) {
            quantidade--;
            updateQuantityDisplay();
        }
    });

    // Confirma a quantidade ao clicar no botão "Confirmar"
    confirmCartButton.addEventListener('click', () => {
        // Calcula o total
        const total = (quantidade * precoProduto).toFixed(2).replace('.', ','); // Formata o valor

        // Exibe um alerta com as informações
        alert(`Você adicionou ${quantidade} unidade(s) ao carrinho.\nTotal: R$ ${total}`);

        // Reseta a interface para o estado inicial
        quantityControls.style.display = 'none'; // Oculta os controles de quantidade
        cartButton.style.display = 'inline-block'; // Mostra o botão "Adicionar ao Carrinho"
        quantidade = 1; // Reseta a quantidade para 1
        updateQuantityDisplay(); // Atualiza o display da quantidade
    });
}

// Inicializa automaticamente quando o DOM estiver carregado
document.addEventListener('DOMContentLoaded', () => {
    initCarrinho();
});
