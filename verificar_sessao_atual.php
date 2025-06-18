<?php
session_start();

echo "<h1>Verificação da Sessão Atual</h1>";
echo "<p>Status da sessão: " . session_status() . "</p>";
echo "<p>ID da sessão: " . session_id() . "</p>";

echo "<h3>Dados da sessão:</h3>";
echo "<pre>" . print_r($_SESSION, true) . "</pre>";

// Verificar tipo de usuário
if (isset($_SESSION['nivel_acesso'])) {
    echo "<p style='color:blue'>Nível de acesso: " . $_SESSION['nivel_acesso'] . "</p>";
    
    if ($_SESSION['nivel_acesso'] === 'empresa') {
        echo "<p style='color:orange'>⚠️ Você está logado como EMPRESA (ADMIN)</p>";
        echo "<p>Para fazer compras, você precisa fazer logout e fazer login como usuário comum.</p>";
        echo "<p><a href='View/menu/perfil/sairadmin.php'>Fazer Logout</a></p>";
        echo "<p><a href='View/login/cliente/index.php'>Fazer Login como Cliente</a></p>";
    } elseif ($_SESSION['nivel_acesso'] === 'usuario') {
        echo "<p style='color:green'>✓ Você está logado como USUÁRIO COMUM</p>";
        echo "<p>Você pode fazer compras normalmente.</p>";
    }
} else {
    echo "<p style='color:red'>✗ Nenhum nível de acesso definido</p>";
}

// Verificar IDs específicos
if (isset($_SESSION['usuario_id'])) {
    echo "<p style='color:green'>✓ ID do usuário: " . $_SESSION['usuario_id'] . "</p>";
} else {
    echo "<p style='color:red'>✗ ID do usuário não definido</p>";
}

if (isset($_SESSION['empresa_id'])) {
    echo "<p style='color:orange'>⚠️ ID da empresa: " . $_SESSION['empresa_id'] . "</p>";
} else {
    echo "<p style='color:gray'>ID da empresa não definido</p>";
}

echo "<hr>";
echo "<h3>Links úteis:</h3>";
echo "<p><a href='index.php?pg=home'>Home</a></p>";
echo "<p><a href='index.php?pg=carrinho'>Carrinho</a></p>";
echo "<p><a href='index.php?pg=pagamento'>Pagamento</a></p>";
echo "<p><a href='index.php?pg=sistemaestoque'>Sistema de Estoque (Admin)</a></p>";
?> 