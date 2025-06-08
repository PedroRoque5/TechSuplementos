<?php
session_start();

require_once './App/Controller/CompraController.php';

if (!isset($_SESSION['usuario_id'])) {
    die("Usuário não autenticado.");
}

if (empty($_SESSION['carrinho'])) {
    die("Carrinho vazio.");
}

$formaPagamento = $_POST['forma_pagamento'] ?? 'pix';
$idUsuario = $_SESSION['usuario_id'];
$itens = $_SESSION['carrinho'];

$controller = new CompraController();
$resultado = $controller->finalizarCompra($idUsuario, $formaPagamento, $itens);

if ($resultado['success']) {
    unset($_SESSION['carrinho']); // limpa o carrinho
    echo "<script>alert('Compra registrada com sucesso!'); window.location.href = 'historico_compras.php';</script>";
} else {
    echo "<script>alert('Erro: {$resultado['message']}'); window.history.back();</script>";
}

header(URL . "index.php?pg=home");