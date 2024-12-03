<?php
$file = __DIR__ . '/../../cadastro/cadastrar.php';
if (file_exists($file)) {
    require_once $file;
} else {
    echo "Erro: Arquivo não encontrado.";
    exit;
}

$nome = $_SESSION['nome'] ?? 'Visitante';
$email = $_SESSION['email'] ?? 'Não cadastrado';
$telefone = $_SESSION['telefone'] ?? 'Não cadastrado';
?>

<div>
    <h1>Seja bem-vindo</h1>
</div>
<link href="<?= ASSETS ?>css/perfil.css" rel="stylesheet">
<div id="dados-usuario">
    <?php echo "<h2>$nome</h2>";
    echo "<p><i class='fa-solid fa-envelope'></i> $email</p>";
    echo "<p><i class='fa-solid fa-phone'></i> $telefone</p>";
    ?>
</div>
</div>

<div id="opcoes-perfil">
    <a href="<?= URL . 'index.php?pg=rastrear' ?>" class="opcao"><i class="fa-solid fa-search"></i> Rastrear Compra</a><br>
    <a href="<?= URL . 'index.php?pg=historico' ?>" class="opcao"><i class="fa-solid fa-box"></i> Histórico de Compras</a><br>
    <a href="<?= URL . 'index.php?pg=dados' ?>" class="opcao"><i class="fa-solid fa-user-edit"></i> Alterar Dados Pessoais</a><br>
    <a href="<?= URL . 'index.php?pg=login' ?>" class="opcao"><i class="fa-solid fa-sign-out-alt"></i> Sair</a>
</div>