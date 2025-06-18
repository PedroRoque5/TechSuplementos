<?php
require_once './config_serve.php';
require_once './DAO/Conexao.php';

use TechSuplementos\DAO\Conexao;

try {
    $conexao = new Conexao();
    
    echo "<h1>Verificação de Administradores</h1>";
    
    // Verificar se a tabela empresa existe
    $tabela = $conexao->buscar("SHOW TABLES LIKE 'empresa'");
    if (empty($tabela)) {
        echo "<p style='color:red'>✗ Tabela 'empresa' não existe!</p>";
        exit;
    }
    
    echo "<p style='color:green'>✓ Tabela 'empresa' existe</p>";
    
    // Verificar estrutura da tabela empresa
    $colunas = $conexao->buscar("DESCRIBE empresa");
    echo "<h3>Estrutura da tabela empresa:</h3>";
    echo "<ul>";
    foreach ($colunas as $coluna) {
        echo "<li>" . $coluna['Field'] . " (" . $coluna['Type'] . ")</li>";
    }
    echo "</ul>";
    
    // Verificar se há empresas (admins)
    $empresas = $conexao->buscar("SELECT id, email, nome, cnpj FROM empresa LIMIT 10");
    
    if (empty($empresas)) {
        echo "<p style='color:red'>✗ Nenhuma empresa encontrada na tabela!</p>";
        echo "<p>Você precisa criar pelo menos uma empresa para ter acesso administrativo.</p>";
    } else {
        echo "<h3>Empresas (Administradores) encontradas:</h3>";
        echo "<table border='1' style='border-collapse: collapse;'>";
        echo "<tr><th>ID</th><th>Email</th><th>Nome</th><th>CNPJ</th></tr>";
        
        foreach ($empresas as $empresa) {
            echo "<tr>";
            echo "<td>" . $empresa['id'] . "</td>";
            echo "<td>" . htmlspecialchars($empresa['email']) . "</td>";
            echo "<td>" . htmlspecialchars($empresa['nome']) . "</td>";
            echo "<td>" . htmlspecialchars($empresa['cnpj']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        
        echo "<p style='color:green'>✓ Existem " . count($empresas) . " empresa(s) no sistema</p>";
        echo "<p>Use o email e senha de uma dessas empresas para fazer login como administrador.</p>";
    }
    
    // Verificar também a tabela usuario para usuários comuns
    echo "<h3>Verificação de Usuários Comuns:</h3>";
    $tabelaUsuario = $conexao->buscar("SHOW TABLES LIKE 'usuario'");
    if (!empty($tabelaUsuario)) {
        $usuarios = $conexao->buscar("SELECT id, email, nome FROM usuario LIMIT 5");
        echo "<p>✓ Tabela 'usuario' existe com " . count($usuarios) . " usuário(s) comum(ns)</p>";
    }
    
} catch (Exception $e) {
    echo "<p style='color:red'>Erro: " . $e->getMessage() . "</p>";
}
?> 