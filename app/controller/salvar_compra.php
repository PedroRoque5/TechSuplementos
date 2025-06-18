<?php
session_start();
require_once './DAO/Conexao.php';

header('Content-Type: application/json');

if (!isset($_SESSION['usuario_id'])) {
    echo json_encode(['success' => false, 'message' => 'Usuário não autenticado']);
    exit;
}

try {
    // Receber dados do POST
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    if (!$data || !isset($data['carrinho']) || !isset($data['pagamento'])) {
        throw new Exception('Dados inválidos');
    }

    $carrinho = $data['carrinho'];
    $pagamento = $data['pagamento'];
    $usuarioId = $_SESSION['usuario_id'];

    // Calcular total
    $total = array_reduce($carrinho, function($sum, $item) {
        return $sum + ($item['price'] * $item['quantity']);
    }, 0);

    // Gerar número do pedido
    $pedido = date('YmdHis') . $usuarioId;

    // Iniciar transação
    $conexao = new Conexao();
    $conexao->beginTransaction();

    try {
        // Inserir compra
        $queryCompra = "INSERT INTO compras (usuario_id, pedido, total, status_pagamento, status_envio, data_compra) 
                       VALUES (:usuario_id, :pedido, :total, 'pendente', 'aguardando', NOW())";
        
        $paramsCompra = [
            ':usuario_id' => $usuarioId,
            ':pedido' => $pedido,
            ':total' => $total
        ];

        $compraId = $conexao->inserir($queryCompra, $paramsCompra);

        // Inserir itens da compra
        foreach ($carrinho as $item) {
            $queryItem = "INSERT INTO itens_compra (compra_id, produto_id, quantidade, preco_unitario, sabor) 
                         VALUES (:compra_id, :produto_id, :quantidade, :preco_unitario, :sabor)";
            
            $paramsItem = [
                ':compra_id' => $compraId,
                ':produto_id' => $item['id'],
                ':quantidade' => $item['quantity'],
                ':preco_unitario' => $item['price'],
                ':sabor' => $item['sabor']
            ];

            $conexao->inserir($queryItem, $paramsItem);

            // Atualizar estoque
            $queryEstoque = "UPDATE produtos SET estoque_atual = estoque_atual - :quantidade WHERE id = :produto_id";
            $paramsEstoque = [
                ':quantidade' => $item['quantity'],
                ':produto_id' => $item['id']
            ];

            $conexao->atualizar($queryEstoque, $paramsEstoque);
        }

        // Confirmar transação
        $conexao->commit();

        echo json_encode([
            'success' => true,
            'message' => 'Compra realizada com sucesso',
            'pedido' => $pedido
        ]);

    } catch (Exception $e) {
        // Reverter transação em caso de erro
        $conexao->rollback();
        throw $e;
    }

} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Erro ao processar compra: ' . $e->getMessage()
    ]);
} 