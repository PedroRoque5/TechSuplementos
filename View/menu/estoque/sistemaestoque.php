<link href="<?= ASSETS ?>css/estoque.css" rel='stylesheet'>
    <header>
        <h1>Controle de Estoque</h1>
    </header>

    <main>
        <section class="product-selection">
            <label for="product">Selecione o Produto:</label>
            <select id="product">
                <!-- Aqui você pode carregar os produtos do e-commerce -->
                <option value="1">Produto 1</option>
                <option value="2">Produto 2</option>
                <option value="3">Produto 3</option>
            </select>
        </section>

        <section class="stock-transaction">
            <h2>Controle de Movimentações</h2>
            <div class="transaction">
                <label for="quantity">Quantidade:</label>
                <input type="number" id="quantity" min="1" required>

                <div class="buttons">
                    <button id="inputStock">Entrada</button>
                    <button id="outputStock">Saída</button>
                </div>
            </div>
        </section>

        <section class="stock-status">
            <h2>Status Atual do Estoque</h2>
            <div id="stockInfo">
                <p>Produto selecionado: <span id="selectedProduct">Produto 1</span></p>
                <p>Quantidade em estoque: <span id="currentStock">0</span></p>
            </div>
        </section>
    </main>
    <script src="scripts.js"></script>
</body>
</html>
