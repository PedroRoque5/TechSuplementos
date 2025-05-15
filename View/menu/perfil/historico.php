<?php
session_start(); // Adiciona a sessão no início do script

require_once '../TechSuplementos/TechSuplementos/DAO/Conexao.php'; // ou seu arquivo de conexão com o banco

// Verifica se o usuário está logado
if (!isset($_SESSION['id_usuario'])) {
    die("Usuário não autenticado.");
}

$idUsuario = $_SESSION['usuario_id']; // Sessão do usuário

// Conectar ao banco de dados usando a classe Conexao
$conn = new Conexao();
$query = "SELECT 
                c.id AS pedido,
                c.data_compra,
                c.forma_pagamento,
                c.total,
                p.nome AS produto,
                ic.quantidade,
                ic.preco_unitario
            FROM compra c
            JOIN item_compra ic ON ic.id_compra = c.id
            JOIN estoque e ON e.Id = ic.id_estoque
            JOIN produtos p ON p.id = e.id_produto
            WHERE c.id_usuario = ?
            ORDER BY c.data_compra DESC";

// Buscar as compras do usuário
$compras = $conn->buscar($query, [$idUsuario]);

// Agrupar por pedido
$historico = [];
foreach ($compras as $compra) {
    $id = $compra['pedido'];
    if (!isset($historico[$id])) {
        $historico[$id] = [
            'data' => $compra['data_compra'],
            'forma_pagamento' => $compra['forma_pagamento'],
            'total' => $compra['total'],
            'produtos' => []
        ];
    }
    $historico[$id]['produtos'][] = [
        'nome' => $compra['produto'],
        'quantidade' => $compra['quantidade'],
        'preco' => $compra['preco_unitario']
    ];
}
?>

<link href="<?= ASSETS ?>css/historico.css" rel="stylesheet">
<div class="history-container">
    <h2>Histórico de Compras</h2>
    <p>Veja suas compras anteriores e o status de cada pedido.</p>

    <table class="history-table">
        <thead>
            <tr>
                <th>Pedido</th>
                <th>Data</th>
                <th>Status</th>
                <th>Valor Total</th>
                <th>Detalhes</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($historico as $pedido => $dados): ?>
                <tr>
                    <td><?= $pedido ?></td>
                    <td><?= date('d/m/Y', strtotime($dados['data'])) ?></td>
                    <td><?= $dados['forma_pagamento'] ?></td>
                    <td>R$ <?= number_format($dados['total'], 2, ',', '.') ?></td>
                    <td>
                        <button onclick='alert(`<?= implode("\\n", array_map(fn($p) =>
                            "{$p['nome']} - R$ ".number_format($p['preco'], 2, ',', '.')." x {$p['quantidade']}",
                            $dados["produtos"]
                        )) ?>`)'>Ver Detalhes</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
