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

