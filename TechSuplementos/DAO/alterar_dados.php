<?php
session_start();
require_once './Conexao.php';

$id = $_SESSION['usuario_id'];
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$telefone = $_POST['telefone'] ?? '';

// Validação simples
if (empty($nome) || empty($email) || empty($telefone)) {
    die("Por favor, preencha todos os campos.");
}

try {
    $conexao = new Conexao();
    $query = "UPDATE usuario SET nome = ?, email = ?, telefone = ? WHERE id = ?";
    $params = [$nome, $email, $telefone, $id];

    $linhasAfetadas = $conexao->atualizar($query, $params);

    if ($linhasAfetadas > 0) {
        // Atualiza os dados da sessão
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['telefone'] = $telefone;

        header("Location: ../../index.php?pg=perfil");
        exit;
    } else {
        echo "Nenhum dado foi alterado.";
    }
} catch (PDOException $e) {
    echo "Erro ao atualizar dados: " . $e->getMessage();
}
