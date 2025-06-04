<?php

session_start();

require_once './App/Controller/EmpresaController.php';

// Variáveis para armazenar a mensagem e tipo (erro ou sucesso)
$mensagem = null;
$tipoMensagem = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new EmpresaController();
    $resultado = $controller->cadastrar($_POST);

    // Se o cadastro for bem-sucedido
    if ($resultado['success']) {
        $mensagem = $resultado['message'];
        $tipoMensagem = 'success'; // Estilo de sucesso
        // Redireciona após o sucesso
        header("Refresh: 3; url=index.php?pg=home"); // Redireciona após 3 segundos
    } else {
        $mensagem = $resultado['message'];
        $tipoMensagem = 'error'; // Estilo de erro
    }
}
?>

<!-- Exibe a mensagem de sucesso ou erro, se existir -->
<?php if ($mensagem): ?>
    <div class="alert <?php echo $tipoMensagem === 'success' ? 'alert-success' : 'alert-danger'; ?>">
        <?php echo $mensagem; ?>
    </div>
<?php endif; ?>
