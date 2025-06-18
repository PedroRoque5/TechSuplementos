<?php
session_start();

echo "<h1>Verificação de Sessão</h1>";
echo "<p>Status da sessão: " . session_status() . "</p>";
echo "<p>ID da sessão: " . session_id() . "</p>";

if (isset($_SESSION['usuario'])) {
    echo "<p style='color:green'>✓ Usuário logado</p>";
    echo "<p>Dados da sessão:</p>";
    echo "<pre>" . print_r($_SESSION, true) . "</pre>";
    
    if (isset($_SESSION['usuario']['tipo'])) {
        if ($_SESSION['usuario']['tipo'] === 'admin') {
            echo "<p style='color:green'>✓ Usuário é ADMIN</p>";
        } else {
            echo "<p style='color:red'>✗ Usuário NÃO é admin. Tipo: " . $_SESSION['usuario']['tipo'] . "</p>";
        }
    } else {
        echo "<p style='color:red'>✗ Tipo de usuário não definido</p>";
    }
} else {
    echo "<p style='color:red'>✗ Nenhum usuário logado</p>";
}

echo "<p><a href='index.php?pg=homeadmin'>Ir para Home Admin</a></p>";
echo "<p><a href='View/login/administrador.php'>Fazer Login como Admin</a></p>";
?> 