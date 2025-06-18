<?php 
// Sessão já é iniciada no index.php, não é necessário iniciar novamente
require_once './TechSuplementos/DAO/Conexao.php';
require_once './index.php';

// Dados do usuário logado vindos da sessão
$nome = $_SESSION['nome'] ?? '';
$email = $_SESSION['email'] ?? '';
$telefone = $_SESSION['telefone'] ?? '';
$endereco = $_SESSION['endereco'] ?? ''; // adicione isso no login, se ainda não estiver lá
?>

<link href="<?= ASSETS ?>css/dados.css" rel="stylesheet">

<div class="form-container">
    <h2>Alterar Dados Pessoais</h2>

    <?php if (isset($_GET['success'])): ?>
        <p style="color: green;">Dados atualizados com sucesso!</p>
    <?php endif; ?>

    <form method="POST" action="./TechSuplementos/DAO/alterar_dados.php">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($nome) ?>" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>" required>
        </div>

        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="tel" id="telefone" name="telefone" value="<?= htmlspecialchars($telefone) ?>" required>
        </div>

        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" value="<?= htmlspecialchars($endereco) ?>" required>
        </div>

        <button type="submit" class="btn">Salvar Alterações</button>
    </form>
</div>
