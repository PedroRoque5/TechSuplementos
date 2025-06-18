<?php
require_once './config_serve.php';
require_once './DAO/Conexao.php';

use TechSuplementos\DAO\Conexao;

try {
    $conexao = new Conexao();
    
    echo "<h1>Redefinir Senha da Empresa</h1>";
    
    // Nova senha (você pode alterar aqui)
    $novaSenha = "123456";
    $senhaHash = password_hash($novaSenha, PASSWORD_DEFAULT);
    
    // Atualizar a senha da empresa teste
    $resultado = $conexao->atualizar(
        "UPDATE empresa SET senha = ? WHERE email = ?",
        [$senhaHash, 'teste@gmail.com']
    );
    
    if ($resultado) {
        echo "<p style='color:green'>✓ Senha redefinida com sucesso!</p>";
        echo "<p><strong>Email:</strong> teste@gmail.com</p>";
        echo "<p><strong>Nova senha:</strong> $novaSenha</p>";
        echo "<p><a href='View/login/administrador.php'>Ir para Login de Administrador</a></p>";
    } else {
        echo "<p style='color:red'>✗ Erro ao redefinir senha</p>";
    }
    
} catch (Exception $e) {
    echo "<p style='color:red'>Erro: " . $e->getMessage() . "</p>";
}
?> 