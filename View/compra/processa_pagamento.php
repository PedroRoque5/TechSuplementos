<?php
session_start();
require_once './App/Controller/CompraController.php';

if (!isset($_SESSION['usuario_id'])) {
    die("Usuário não autenticado.");
}

if (empty($_SESSION['carrinho']) || !is_array($_SESSION['carrinho'])) {
    die("Carrinho vazio ou inválido.");
}

// Capturar forma de pagamento do POST (do formulário)
$formaPagamento = $_POST['forma_pagamento'] ?? 'pix';
$idUsuario = $_SESSION['usuario_id'];
$itens = $_SESSION['carrinho'];

$controller = new CompraController();
$resultado = $controller->finalizarCompra($idUsuario, $formaPagamento, $itens);

if ($resultado['success']) {
    unset($_SESSION['carrinho']);
    header("Location: historico_compras.php"); // ou página de agradecimento
    exit;
} else {
    echo "Erro ao salvar compra: " . $resultado['message'];
}
