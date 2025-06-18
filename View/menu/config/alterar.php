<?php
require_once('../TechSuplementos/TechSuplementos/DAO/Conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_usuario = $_SESSION['usuario_id'] ?? null;

    if (!$id_usuario) {
        echo "<script>alert('Usuário não está logado.');</script>";
    } else {
        $senha_atual = $_POST['currentPassword'] ?? '';
        $nova_senha = $_POST['newPassword'] ?? '';
        $confirmar_senha = $_POST['confirmPassword'] ?? '';

        if ($nova_senha !== $confirmar_senha) {
            echo "<script>alert('A nova senha e a confirmação não coincidem.');</script>";
        } elseif (strlen($nova_senha) < 8) {
            echo "<script>alert('A nova senha deve ter pelo menos 8 caracteres.');</script>";
        } else {
            $conexao = new Conexao();
            $usuario = $conexao->buscar("SELECT senha FROM usuario WHERE id = ?", [$id_usuario]);

            if (!$usuario || !password_verify($senha_atual, $usuario[0]['senha'])) {
                echo "<script>alert('Senha atual incorreta.');</script>";
            } else {
                $senha_hash = password_hash($nova_senha, PASSWORD_DEFAULT);
                $atualizado = $conexao->atualizar("UPDATE usuario SET senha = ? WHERE id = ?", [$senha_hash, $id_usuario]);

                if ($atualizado > 0) {
                    echo "<script>alert('Senha alterada com sucesso.');</script>";
                } else {
                    echo "<script>alert('Erro ao atualizar a senha.');</script>";
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Alterar Senha</title>
    <link rel="stylesheet" href="<?= ASSETS ?>css/alterar.css">
    <script>
        function validarFormulario() {
            const senha = document.getElementById('newPassword').value;
            const confirmar = document.getElementById('confirmPassword').value;
            const erro = document.getElementById('erro');

            if (senha !== confirmar) {
                erro.textContent = "As senhas não coincidem.";
                return false;
            } else if (senha.length < 6) {
                erro.textContent = "A senha deve ter no mínimo 8 caracteres.";
                return false;
            }

            erro.textContent = "";
            return true;
        }
    </script>
</head>
<body>

<div class="form-container">
    <h2>Alterar Senha</h2>

    <?php if (!empty($mensagem)): ?>
        <p><strong><?= htmlspecialchars($mensagem) ?></strong></p>
    <?php endif; ?>

    <form method="POST" onsubmit="return validarFormulario();">
        <div class="form-group">
            <label for="currentPassword">Senha Atual:</label>
            <input type="password" id="currentPassword" name="currentPassword" required>
        </div>

        <div class="form-group">
            <label for="newPassword">Nova Senha:</label>
            <input type="password" id="newPassword" name="newPassword" required>
        </div>

        <div class="form-group">
            <label for="confirmPassword">Confirmar Nova Senha:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
        </div>

        <div id="erro" class="error-message" style="color: red;"></div><br>

        <button type="submit" class="btn">Alterar Senha</button>
    </form>
</div>

</body>
</html>
