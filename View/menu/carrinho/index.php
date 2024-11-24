<link rel="stylesheet" href="<?= ASSETS ?>css/carrinho.css" rel="stylesheet">
<div class="cart-container">
        <h2>Carrinho de Compras</h2>
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Total</th>
                    <th>Remover</th>
                </tr>
            </thead>
            <tbody id="cartItems">
            </tbody>
        </table>
        <div class="cart-summary">
            <p><strong>Total:</strong> R$ <span id="cartTotal">0.00</span></p>
            <button class="btn" onclick="finalizarCompra()">Finalizar Compra</button>
        </div>
    </div>
