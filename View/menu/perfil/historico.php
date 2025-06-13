<?php
session_start();
require_once __DIR__ . '/../../../app/controller/CompraController.php';

if (!isset($_SESSION['usuario_id'])) {
    die("Usuário não autenticado.");
}

$idUsuario = $_SESSION['usuario_id'];
$controller = new CompraController();
$compras = $controller->obterHistoricoCompras($idUsuario);
?>

<link href="<?= ASSETS ?>css/historico.css" rel="stylesheet">

<div class="history-container">
    <h2>Histórico de Compras</h2>
    <p>Veja suas compras anteriores e o status de cada pedido.</p>

    <?php if (empty($compras)): ?>
        <div class="no-purchases">
            <p>Você ainda não realizou nenhuma compra.</p>
            <a href="<?= URL ?>index.php?pg=home" class="btn-continue-shopping">Continuar Comprando</a>
        </div>
    <?php else: ?>
        <table class="history-table">
            <thead>
                <tr>
                    <th>Pedido</th>
                    <th>Data</th>
                    <th>Forma de Pagamento</th>
                    <th>Valor Total</th>
                    <th>Detalhes</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($compras as $compra): ?>
                    <tr>
                        <td>#<?= htmlspecialchars($compra['id']) ?></td>
                        <td><?= date('d/m/Y', strtotime($compra['data_compra'])) ?></td>
                        <td><?= htmlspecialchars(ucfirst($compra['forma_pagamento'])) ?></td>
                        <td>R$ <?= number_format($compra['total'], 2, ',', '.') ?></td>
                        <td>
                            <button onclick='openModal("<?= htmlspecialchars($compra['produto']) ?>", "<?= number_format($compra['preco_unitario'], 2, ',', '.') ?>", "<?= $compra['quantidade'] ?>")'>Ver Detalhes</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

<!-- Modal -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Detalhes da Compra</h2>
        <div id="modal-body"></div>
    </div>
</div>

<script>
function openModal(produto, preco, quantidade) {
    document.getElementById('modal-body').innerHTML = `${produto} - R$ ${preco} x ${quantidade}`;
    document.getElementById('modal').style.display = "block";
}

function closeModal() {
    document.getElementById('modal').style.display = "none";
}

// Fechar modal quando clicar fora dele
window.onclick = function(event) {
    const modal = document.getElementById('modal');
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
