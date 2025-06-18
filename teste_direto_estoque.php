<?php
// Simular dados POST
$_POST = [
    'id_produto' => 8,
    'quantidade' => 400,
    'tipo_movimentacao' => 'entrada',
    'motivo' => 'recarregar estoque'
];

$_SERVER['REQUEST_METHOD'] = 'POST';
$_SERVER['REQUEST_URI'] = '/TechSuplementos/index.php?pg=salvar_estoque';

// Simular sessão de admin
session_start();
$_SESSION['usuario'] = [
    'id' => 1,
    'tipo' => 'admin'
];

echo "<h1>Teste Direto do Salvar Estoque</h1>";

// Incluir o arquivo de salvamento
include_once './View/menu/estoque/salvar_estoque.php';
?> 