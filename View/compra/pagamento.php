<link href="<?= ASSETS ?>css/pagamento.css" rel="stylesheet">
<div class="payment-container">
        <h2>Escolha a Forma de Pagamento</h2>
        <form id="paymentForm">
            <div class="payment-option">
                <label for="creditCard">
                    <input type="radio" id="creditCard" name="paymentMethod" value="cartao" checked>
                    Cartão de Crédito/Débito 10x sem juros
                </label>
            </div>
            <div class="payment-option">
                <label for="pix">
                    <input type="radio" id="pix" name="paymentMethod" value="pix">
                    Pix 5%OFF
                </label>
            </div>
            <div id="paymentDetails">
            </div>

            <button type="submit" class="btn">Confirmar Pagamento</button>
        </form>
    </div>


    <script>
        // Função para atualizar os detalhes de pagamento conforme a opção selecionada
        const paymentForm = document.getElementById('paymentForm');
        const paymentDetails = document.getElementById('paymentDetails');

        paymentForm.addEventListener('change', updatePaymentDetails);

        function updatePaymentDetails() {
            const selectedPaymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;

            let detailsHTML = '';

            switch (selectedPaymentMethod) {
                case 'cartao':
                    detailsHTML = `
                        <h3>Informações do Cartão</h3>
                        <label for="cardNumber">Número do Cartão:</label>
                        <input type="text" id="cardNumber" name="cardNumber" placeholder="**** **** **** ****" required>
                        <label for="cardExpiry">Data de Validade:</label>
                        <input type="month" id="cardExpiry" name="cardExpiry" required>
                        <label for="cardCVV">CVV:</label>
                        <input type="text" id="cardCVV" name="cardCVV" placeholder="***" required>
                    `;
                    break;
                case 'pix':
                    detailsHTML = `
                        <h3>Pix</h3>
                        <p>Você será redirecionado para o pagamento via Pix.</p>
                    `;
                    break;
                default:
                    detailsHTML = '';
            }

            paymentDetails.innerHTML = detailsHTML;
        }

        // Atualizar os detalhes de pagamento inicialmente
        updatePaymentDetails();
    </script>