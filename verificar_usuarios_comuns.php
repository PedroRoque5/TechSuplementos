<?php
require_once './config_serve.php';
require_once './DAO/Conexao.php';

use TechSuplementos\DAO\Conexao;

try {
    $conexao = new Conexao();
    
    echo "<h1>Verificação de Usuários Comuns</h1>";
    
    // Verificar se a tabela usuario existe
    $tabela = $conexao->buscar("SHOW TABLES LIKE 'usuario'");
    if (empty($tabela)) {
        echo "<p style='color:red'>✗ Tabela 'usuario' não existe!</p>";
        exit;
    }
    
    echo "<p style='color:green'>✓ Tabela 'usuario' existe</p>";
    
    // Verificar usuários
    $usuarios = $conexao->buscar("SELECT id, email, nome, cpf FROM usuario LIMIT 10");
    
    if (empty($usuarios)) {
        echo "<p style='color:red'>✗ Nenhum usuário comum encontrado!</p>";
        echo "<p>Você precisa criar um usuário comum para fazer compras.</p>";
        echo "<p><a href='View/cadastro/index.php'>Criar novo usuário</a></p>";
    } else {
        echo "<h3>Usuários comuns encontrados:</h3>";
        echo "<table border='1' style='border-collapse: collapse;'>";
        echo "<tr><th>ID</th><th>Email</th><th>Nome</th><th>CPF</th></tr>";
        
        foreach ($usuarios as $usuario) {
            echo "<tr>";
            echo "<td>" . $usuario['id'] . "</td>";
            echo "<td>" . htmlspecialchars($usuario['email']) . "</td>";
            echo "<td>" . htmlspecialchars($usuario['nome']) . "</td>";
            echo "<td>" . htmlspecialchars($usuario['cpf']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        
        echo "<p style='color:green'>✓ Existem " . count($usuarios) . " usuário(s) comum(ns) no sistema</p>";
        echo "<p>Use o email e senha de um desses usuários para fazer login e compras.</p>";
        echo "<p><a href='View/login/cliente/index.php'>Ir para Login de Cliente</a></p>";
    }
    
} catch (Exception $e) {
    echo "<p style='color:red'>Erro: " . $e->getMessage() . "</p>";
}
?> 