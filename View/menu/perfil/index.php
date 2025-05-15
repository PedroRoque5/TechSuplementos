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
    <hr>
</div>
<link href="<?= ASSETS ?>css/perfil.css" rel="stylesheet">
<div id="dados-usuario">
    <?php echo "<h2>$nome</h2>";
    echo "<p><i data-lucide='at-sign'></i> $email</p>";
    echo "<p><i data-lucide='phone'></i> $telefone</p>";
    ?>
</div>
</div>

<div id="opcoes-perfil">
    <a href="<?= URL . 'index.php?pg=rastrear' ?>" class="opcao"><i data-lucide="map-pin"></i> Rastrear Compra</a><br>
    <a href="<?= URL . 'index.php?pg=historico' ?>" class="opcao"><i data-lucide="history"></i> Histórico de Compras</a><br>
    <a href="<?= URL . 'index.php?pg=dados' ?>" class="opcao"><i data-lucide="user-pen"></i> Alterar Dados Pessoais</a><br>
    <a href="<?= URL . 'index.php?pg=sair' ?>" class="opcao"><i data-lucide="log-out"></i> Sair</a>
</div>

<script>
    lucide.createIcons()
</script>