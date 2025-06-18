<?php
// Iniciar sessão
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Iniciar buffer de saída
ob_start();

// Desabilitar exibição de erros
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

require_once $_SERVER['DOCUMENT_ROOT'] . '/TechSuplementos/DAO/Conexao.php';
use TechSuplementos\DAO\Conexao;

// Configurar log de erros
function logError($message) {
    $logDir = $_SERVER['DOCUMENT_ROOT'] . '/TechSuplementos/logs';
    if (!file_exists($logDir)) {
        mkdir($logDir, 0777, true);
    }
    $logFile = $logDir . '/error.log';
    $timestamp = date('[Y-m-d H:i:s]');
    file_put_contents($logFile, $timestamp . ' ' . $message . "\n", FILE_APPEND);
}

// Função para retornar resposta JSON
function retornarJson($sucesso, $mensagem, $dados = []) {
    // Limpar qualquer saída anterior
    ob_clean();
    
    // Definir cabeçalho JSON
    header('Content-Type: application/json');
    
    // Retornar JSON
    echo json_encode(array_merge([
        'sucesso' => $sucesso,
        'mensagem' => $mensagem
    ], $dados));
    
    // Encerrar buffer e enviar resposta
    ob_end_flush();
    exit;
}

try {
    // Sessão já é iniciada no index.php, não é necessário iniciar novamente

    // Log da sessão para debug
    logError("Sessão atual: " . print_r($_SESSION, true));

    // Verificar se o usuário está logado
    if (!isset($_SESSION['usuario_id'])) {
        logError("Usuário não logado - usuario_id não encontrado na sessão");
        retornarJson(false, 'Usuário não está logado');
    }

    // Receber dados do POST
    $json = file_get_contents('php://input');
    logError("Dados recebidos: " . $json);
    
    if (empty($json)) {
        retornarJson(false, "Dados não recebidos");
    }
    
    $dados = json_decode($json, true);
    
    if (!$dados) {
        retornarJson(false, "Dados inválidos: " . json_last_error_msg());
    }

    $usuario_id = $_SESSION['usuario_id'];

    // Validar dados do carrinho
    if (!isset($dados['carrinho']) || !is_array($dados['carrinho']) || empty($dados['carrinho'])) {
        retornarJson(false, "Carrinho inválido");
    }

    // Validar tipo de pagamento
    if (!isset($dados['tipo_pagamento']) || empty($dados['tipo_pagamento'])) {
        retornarJson(false, "Tipo de pagamento não especificado");
    }

    // Calcular valor total e validar cada item
    $valor_total = 0;
    foreach ($dados['carrinho'] as $item) {
        if (!isset($item['id']) || !isset($item['quantity']) || !isset($item['price'])) {
            retornarJson(false, "Dados do carrinho inválidos");
        }

        $id = intval($item['id']);
        $quantidade = intval($item['quantity']);
        $preco = floatval($item['price']);

        if ($id <= 0 || $quantidade <= 0 || $preco <= 0) {
            retornarJson(false, "Valores inválidos no carrinho");
        }

        $valor_total += $preco * $quantidade;
    }

    // Criar instância da conexão
    $conexao = new Conexao();

    // Iniciar transação
    $conexao->beginTransaction();

    // Verificar estoque antes de processar a compra
    foreach ($dados['carrinho'] as $item) {
        $produto_id = intval($item['id']);
        $quantidade_solicitada = intval($item['quantity']);
        
        // Buscar estoque atual do produto
        $produto = $conexao->buscar(
            "SELECT id, nome, estoque_atual FROM produtos WHERE id = ?",
            [$produto_id]
        );
        
        if (empty($produto)) {
            throw new Exception("Produto não encontrado: ID " . $produto_id);
        }
        
        $estoque_atual = $produto[0]['estoque_atual'];
        $nome_produto = $produto[0]['nome'];
        
        // Verificar se há estoque suficiente
        if ($estoque_atual < $quantidade_solicitada) {
            throw new Exception("Estoque insuficiente para o produto '$nome_produto'. Disponível: $estoque_atual, Solicitado: $quantidade_solicitada");
        }
    }

    // Inserir compra
    $sql_compra = "INSERT INTO compra (id_usuario, forma_pagamento, total, data_compra, parcelas) 
                   VALUES (?, ?, ?, NOW(), ?)";
    $params_compra = [
        $usuario_id, 
        $dados['tipo_pagamento'],
        $valor_total,
        $dados['tipo_pagamento'] === 'cartao' ? intval($dados['parcelas']) : 1
    ];
    $compra_id = $conexao->inserir($sql_compra, $params_compra);

    if (!$compra_id) {
        throw new Exception("Erro ao inserir compra");
    }

    // Inserir itens da compra
    foreach ($dados['carrinho'] as $item) {
        $sql_item = "INSERT INTO item_compra (id_compra, id_produto, quantidade, preco_unitario) 
                     VALUES (?, ?, ?, ?)";
        $params_item = [
            $compra_id,
            intval($item['id']),
            intval($item['quantity']),
            floatval($item['price'])
        ];
        
        $resultado = $conexao->inserir($sql_item, $params_item);

        if (!$resultado) {
            throw new Exception("Erro ao inserir item da compra");
        }
    }

    // Atualizar estoque automaticamente após a compra
    foreach ($dados['carrinho'] as $item) {
        $produto_id = intval($item['id']);
        $quantidade_vendida = intval($item['quantity']);
        
        // Atualizar estoque do produto
        $sql_atualizar_estoque = "UPDATE produtos SET estoque_atual = estoque_atual - ? WHERE id = ?";
        $resultado_estoque = $conexao->atualizar($sql_atualizar_estoque, [$quantidade_vendida, $produto_id]);
        
        if (!$resultado_estoque) {
            throw new Exception("Erro ao atualizar estoque do produto ID: " . $produto_id);
        }
        
        // Registrar movimentação no histórico de estoque
        $sql_historico = "INSERT INTO historico_estoque (produto_id, tipo_movimentacao, quantidade, motivo, usuario_id) 
                         VALUES (?, 'saida', ?, ?, ?)";
        $motivo = "Venda automática - Compra ID: " . $compra_id;
        $usuario_id_historico = isset($_SESSION['usuario_id']) ? $_SESSION['usuario_id'] : null;
        
        $resultado_historico = $conexao->inserir($sql_historico, [
            $produto_id, 
            $quantidade_vendida, 
            $motivo, 
            $usuario_id_historico
        ]);
        
        if (!$resultado_historico) {
            logError("Aviso: Não foi possível registrar histórico de estoque para produto ID: " . $produto_id);
        }
    }

    // Commit da transação
    $conexao->commit();

    // Retornar sucesso
    retornarJson(true, 'Compra realizada com sucesso!', ['compra_id' => $compra_id]);

} catch (Exception $e) {
    if (isset($conexao)) {
        $conexao->rollback();
    }
    logError("Erro: " . $e->getMessage());
    retornarJson(false, 'Erro ao processar pagamento: ' . $e->getMessage());
} 