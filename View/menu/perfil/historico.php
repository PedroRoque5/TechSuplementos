<?php
// Sessão já é iniciada no index.php, não é necessário iniciar novamente
require_once __DIR__ . '/../../../app/controller/CompraController.php';

if (!isset($_SESSION['usuario_id'])) {
    die("Usuário não autenticado.");
}

$idUsuario = $_SESSION['usuario_id'];
$controller = new CompraController();
$compras = $controller->obterHistoricoCompras($idUsuario);
?>

<link href="<?= ASSETS ?>css/historico.css" rel="stylesheet">
<link href="<?= ASSETS ?>css/modal.css" rel="stylesheet">

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
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($compras as $compra): ?>
                    <tr>
                        <td>#<?= htmlspecialchars($compra['id']) ?></td>
                        <td><?= date('d/m/Y', strtotime($compra['data_compra'])) ?></td>
                        <td>
                            <?= htmlspecialchars(ucfirst($compra['forma_pagamento'])) ?>
                            <?php if ($compra['forma_pagamento'] === 'cartao' && isset($compra['parcelas'])): ?>
                                (<?= $compra['parcelas'] ?>x)
                            <?php endif; ?>
                        </td>
                        <td>R$ <?= number_format($compra['total'], 2, ',', '.') ?></td>
                        <td>
                            <button onclick='openModal("<?= htmlspecialchars($compra['produto']) ?>", "<?= number_format($compra['preco_unitario'], 2, ',', '.') ?>", "<?= $compra['quantidade'] ?>", "<?= $compra['forma_pagamento'] ?>", "<?= $compra['parcelas'] ?? '' ?>")'>Ver Detalhes</button>
                        </td>
                        <td>
                            <button class="delete-btn" onclick="confirmarExclusao(<?= $compra['id'] ?>)" style="background-color: #ff0000; color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer;">Excluir</button>
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
function openModal(produto, preco, quantidade, formaPagamento, parcelas) {
    let detalhes = `${produto} - R$ ${preco} x ${quantidade}`;
    
    if (formaPagamento === 'cartao' && parcelas) {
        detalhes += `<br>Pagamento em ${parcelas}x`;
    }
    
    document.getElementById('modal-body').innerHTML = detalhes;
    document.getElementById('modal-body').style.color = 'white';
    document.getElementById('modal').style.display = "block";
}

function closeModal() {
    document.getElementById('modal').style.display = "none";
}

function confirmarExclusao(compraId) {
    if (confirm('Tem certeza que deseja excluir esta compra do histórico?')) {
        excluirCompra(compraId);
    }
}

async function excluirCompra(compraId) {
    try {
        const response = await fetch('<?= URL ?>View/menu/perfil/excluir_compra.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ compra_id: compraId })
        });

        const data = await response.json();
        
        if (data.success) {
            alert('Compra excluída com sucesso!');
            location.reload();
        } else {
            alert('Erro ao excluir compra: ' + data.message);
        }
    } catch (error) {
        console.error('Erro:', error);
        alert('Erro ao excluir compra. Tente novamente.');
    }
}

// Fechar modal quando clicar fora dele
window.onclick = function(event) {
    const modal = document.getElementById('modal');
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
