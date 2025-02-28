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
                Pix 5% OFF
            </label>
        </div>
        <div id="paymentDetails"></div>
        <button type="submit" class="btn">Confirmar Pagamento</button>
    </form>

    <!-- Mensagem de sucesso -->
    <div id="successMessage" class="hidden">
        <p>Pagamento realizado com sucesso! Obrigado por sua compra.</p>
        <p>Seu código de rastreio é: <strong id="trackingCode"></strong></p>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const paymentForm = document.getElementById('paymentForm');
        const paymentDetails = document.getElementById('paymentDetails');
        const successMessage = document.getElementById('successMessage');
        const trackingCodeElement = document.getElementById('trackingCode');

        // Atualiza os detalhes do pagamento
        paymentForm.addEventListener('change', updatePaymentDetails);

        paymentForm.addEventListener('submit', (event) => {
            event.preventDefault(); // Evita o envio do formulário para simular o sucesso

            // Gera um código de rastreio aleatório
            const trackingCode = generateTrackingCode();

            // Exibe a mensagem de sucesso com o código de rastreio
            successMessage.classList.remove('hidden');
            successMessage.classList.add('success');

            // Mostra o código de rastreio na tela
            trackingCodeElement.textContent = trackingCode;

            // Oculta o formulário após a mensagem de sucesso
            paymentForm.style.display = 'none';
        });

        function generateTrackingCode() {
            const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            let trackingCode = 'TRK-';
            for (let i = 0; i < 8; i++) {
                trackingCode += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            return trackingCode;
        }

        function updatePaymentDetails() {
            const selectedPaymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;

            const existingValues = {
                cardNumber: document.getElementById('cardNumber')?.value || '',
                cardExpiry: document.getElementById('cardExpiry')?.value || '',
                cardCVV: document.getElementById('cardCVV')?.value || ''
            };

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

            if (selectedPaymentMethod === 'cartao') {
                document.getElementById('cardNumber').value = existingValues.cardNumber;
                document.getElementById('cardExpiry').value = existingValues.cardExpiry;
                document.getElementById('cardCVV').value = existingValues.cardCVV;
            }
        }

        // Atualiza os detalhes do pagamento inicialmente
        updatePaymentDetails();
    });
    
</script>