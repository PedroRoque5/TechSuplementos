<?php
// Iniciar sessão
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once './config_serve.php';
require_once './DAO/Conexao.php';

use TechSuplementos\DAO\Conexao;

// Configurar cabeçalho JSON
header('Content-Type: application/json');

// Função para retornar resposta JSON
function retornarJson($sucesso, $mensagem, $dados = []) {
    echo json_encode(array_merge([
        'sucesso' => $sucesso,
        'mensagem' => $mensagem
    ], $dados));
    exit;
}

try {
    // Verificar se o usuário está logado
    if (!isset($_SESSION['usuario_id'])) {
        retornarJson(false, 'Usuário não está logado');
    }

    // Receber dados do POST
    $json = file_get_contents('php://input');
    
    if (empty($json)) {
        retornarJson(false, "Dados não recebidos");
    }
    
    $dados = json_decode($json, true);
    
    if (!$dados || !isset($dados['carrinho'])) {
        retornarJson(false, "Dados inválidos");
    }

    $carrinho = $dados['carrinho'];
    
    if (!is_array($carrinho) || empty($carrinho)) {
        retornarJson(false, "Carrinho vazio");
    }

    // Criar instância da conexão
    $conexao = new Conexao();

    // Verificar estoque de cada item
    $produtos_sem_estoque = [];
    
    foreach ($carrinho as $item) {
        if (!isset($item['id']) || !isset($item['quantity'])) {
            continue;
        }

        $produto_id = intval($item['id']);
        $quantidade_solicitada = intval($item['quantity']);
        
        // Buscar estoque atual do produto
        $produto = $conexao->buscar(
            "SELECT id, nome, estoque_atual FROM produtos WHERE id = ?",
            [$produto_id]
        );
        
        if (empty($produto)) {
            $produtos_sem_estoque[] = "Produto não encontrado (ID: $produto_id)";
            continue;
        }
        
        $estoque_atual = $produto[0]['estoque_atual'];
        $nome_produto = $produto[0]['nome'];
        
        // Verificar se há estoque suficiente
        if ($estoque_atual < $quantidade_solicitada) {
            $produtos_sem_estoque[] = "$nome_produto - Disponível: $estoque_atual, Solicitado: $quantidade_solicitada";
        }
    }

    // Se há produtos sem estoque suficiente
    if (!empty($produtos_sem_estoque)) {
        $mensagem = "Estoque insuficiente para os seguintes produtos:\n" . implode("\n", $produtos_sem_estoque);
        retornarJson(false, $mensagem);
    }

    // Se chegou até aqui, estoque está OK
    retornarJson(true, 'Estoque disponível para todos os produtos');

} catch (Exception $e) {
    retornarJson(false, 'Erro ao verificar estoque: ' . $e->getMessage());
}
?> 