<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/TechSuplementos/DAO/Conexao.php';

try {
    $conexao = new Conexao();
    
    // Adicionar coluna estoque_atual se não existir
    $query = "ALTER TABLE produtos ADD COLUMN IF NOT EXISTS estoque_atual INT DEFAULT 0";
    $conexao->executar($query);
    
    // Adicionar coluna estoque_minimo se não existir
    $query = "ALTER TABLE produtos ADD COLUMN IF NOT EXISTS estoque_minimo INT DEFAULT 5";
    $conexao->executar($query);
    
    echo "Banco de dados atualizado com sucesso!";
} catch (Exception $e) {
    echo "Erro ao atualizar banco de dados: " . $e->getMessage();
} 