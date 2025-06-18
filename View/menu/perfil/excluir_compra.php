<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/TechSuplementos/DAO/Conexao.php';
use TechSuplementos\DAO\Conexao;

header('Content-Type: application/json');

// Verificar se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    echo json_encode(['success' => false, 'message' => 'Usuário não autenticado']);
    exit;
}

// Receber dados do POST
$json = file_get_contents('php://input');
$data = json_decode($json, true);

if (!isset($data['compra_id'])) {
    echo json_encode(['success' => false, 'message' => 'ID da compra não fornecido']);
    exit;
}

try {
    $conexao = new Conexao();
    
    // Iniciar transação
    $conexao->beginTransaction();
    
    // Verificar se a compra pertence ao usuário
    $query = "SELECT id FROM compra WHERE id = ? AND id_usuario = ?";
    $params = [$data['compra_id'], $_SESSION['usuario_id']];
    
    $resultado = $conexao->buscar($query, $params);
    
    if (empty($resultado)) {
        throw new Exception('Compra não encontrada ou não pertence ao usuário');
    }
    
    // Excluir itens da compra primeiro (devido à chave estrangeira)
    $query = "DELETE FROM item_compra WHERE id_compra = ?";
    $conexao->deletar($query, [$data['compra_id']]);
    
    // Excluir a compra
    $query = "DELETE FROM compra WHERE id = ?";
    $conexao->deletar($query, [$data['compra_id']]);
    
    // Confirmar transação
    $conexao->commit();
    
    echo json_encode(['success' => true, 'message' => 'Compra excluída com sucesso']);
    
} catch (Exception $e) {
    // Reverter transação em caso de erro
    if (isset($conexao)) {
        $conexao->rollback();
    }
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
} 