<?php
error_log("Iniciando salvar_estoque.php");

// Verificar se o arquivo está sendo chamado
error_log("REQUEST_URI: " . $_SERVER['REQUEST_URI']);
error_log("REQUEST_METHOD: " . $_SERVER['REQUEST_METHOD']);
error_log("POST data: " . print_r($_POST, true));

// Verificar se os arquivos necessários existem
$config_path = $_SERVER['DOCUMENT_ROOT'] . '/TechSuplementos/config_serve.php';
$dao_path = $_SERVER['DOCUMENT_ROOT'] . '/TechSuplementos/DAO/EstoqueDAO.php';

error_log("Verificando arquivos:");
error_log("config_serve.php existe: " . (file_exists($config_path) ? 'Sim' : 'Não'));
error_log("EstoqueDAO.php existe: " . (file_exists($dao_path) ? 'Sim' : 'Não'));

require_once $config_path;
require_once $dao_path;

use TechSuplementos\DAO\EstoqueDAO;
use Exception;

// Iniciar sessão se ainda não estiver iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verificar se é uma requisição POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    error_log('Método de requisição inválido: ' . $_SERVER['REQUEST_METHOD']);
    header('Location: ' . URL . 'index.php?pg=homeadmin');
    exit;
}

// Verificar autenticação
if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['tipo'] !== 'admin') {
    error_log('Usuário não autenticado ou não é admin');
    error_log('SESSION data: ' . print_r($_SESSION, true));
    header('Location: ' . URL . 'index.php?pg=homeadmin');
    exit;
}

// Log dos dados recebidos
error_log('Dados recebidos: ' . print_r($_POST, true));

// Validar dados obrigatórios
if (!isset($_POST['id_produto']) || !isset($_POST['quantidade']) || !isset($_POST['tipo_movimentacao'])) {
    error_log('Dados obrigatórios não fornecidos');
    $_SESSION['error'] = 'Dados incompletos para movimentação de estoque.';
    header('Location: ' . URL . 'index.php?pg=sistemaestoque');
    exit;
}

$id_produto = filter_input(INPUT_POST, 'id_produto', FILTER_VALIDATE_INT);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);
$tipo_movimentacao = filter_input(INPUT_POST, 'tipo_movimentacao', FILTER_SANITIZE_STRING);
$motivo = filter_input(INPUT_POST, 'motivo', FILTER_SANITIZE_STRING) ?? '';

// Validar dados
if (!$id_produto || !$quantidade || !$tipo_movimentacao) {
    error_log('Dados inválidos: ' . print_r([
        'id_produto' => $id_produto,
        'quantidade' => $quantidade,
        'tipo_movimentacao' => $tipo_movimentacao
    ], true));
    $_SESSION['error'] = 'Dados inválidos para movimentação de estoque.';
    header('Location: ' . URL . 'index.php?pg=sistemaestoque');
    exit;
}

try {
    error_log('Criando instância do EstoqueDAO');
    $estoqueDAO = new EstoqueDAO();
    
    // Registrar movimentação
    error_log('Iniciando registro de movimentação com parâmetros: ' . print_r([
        'id_produto' => $id_produto,
        'quantidade' => $quantidade,
        'tipo_movimentacao' => $tipo_movimentacao,
        'motivo' => $motivo,
        'usuario_id' => $_SESSION['usuario']['id'] ?? null
    ], true));

    $resultado = $estoqueDAO->registrarMovimentacao(
        $id_produto,
        $quantidade,
        $tipo_movimentacao,
        $motivo,
        $_SESSION['usuario']['id'] ?? null
    );

    if ($resultado) {
        error_log('Movimentação registrada com sucesso');
        $_SESSION['success'] = 'Movimentação de estoque registrada com sucesso.';
    } else {
        error_log('Falha ao registrar movimentação');
        $_SESSION['error'] = 'Erro ao registrar movimentação de estoque.';
    }
} catch (Exception $e) {
    error_log('Erro ao processar movimentação: ' . $e->getMessage());
    error_log('Stack trace: ' . $e->getTraceAsString());
    $_SESSION['error'] = 'Erro ao processar movimentação de estoque: ' . $e->getMessage();
}

// Redirecionar de volta para a página de estoque
error_log('Redirecionando para: ' . URL . 'index.php?pg=sistemaestoque');
header('Location: ' . URL . 'index.php?pg=sistemaestoque');
exit;
?>
