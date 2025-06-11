   <?php
// Conexão com o banco
$mysqli = new mysqli("localhost", "root", "", "techsuplementos");
if ($mysqli->connect_error) {
    die("Erro de conexão: " . $mysqli->connect_error);
}

// Consulta os produtos
$sql = "SELECT id, nome FROM produtos ORDER BY nome";
$result = $mysqli->query($sql);

?>

<link href="<?= ASSETS ?>css/estoque.css" rel="stylesheet">
<header>
    <h1>Controle de Estoque</h1>
</header>

<main>
    <form id="stockForm" method="POST" action="<?= URL . 'index.php?pg=salvar_estoque' ?>">
        <section class="product-selection">
            <label for="product">Selecione o Produto:</label>
            <select id="product" name="id_produto" required>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['nome']) . '</option>';
                    }
                } else {
                    echo '<option value="">Nenhum produto encontrado</option>';
                }
                ?>
            </select>
        </section>

        <section class="stock-transaction">
            <h2>Controle de Movimentações</h2>
            <div class="transaction">
                <label for="quantity">Quantidade:</label>
                <input type="number" id="quantity" name="quantidade" min="1" required>

                <div class="buttons">
                    <button type="submit" name="tipo_movimentacao" value="entrada">Entrada</button>
                    <button type="submit" name="tipo_movimentacao" value="saida">Saída</button>
                </div>
            </div>
        </section>

        <section class="stock-status">
            <h2>Status Atual do Estoque</h2>
            <div id="stockInfo">
                <p>Produto selecionado: <span id="selectedProduct">---</span></p>
                <p>Quantidade em estoque: <span id="currentStock">0</span></p>
            </div>
        </section>
    </form>
</main>

<script src="scripts.js"></script>
<?php
$mysqli->close();
?>
