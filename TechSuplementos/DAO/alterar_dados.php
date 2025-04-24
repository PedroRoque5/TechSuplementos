<?php
session_start();
require_once './Conexao.php';

// Verifica se o usuário está logado
if (!isset($_SESSION['id_usuario'])) {
    die("Acesso negado.");
}

$id = $_SESSION['id_usuario'];
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$endereco = $_POST['endereco'] ?? '';

// Validação simples
if (empty($nome) || empty($email) || empty($telefone) || empty($endereco)) {
    die("Por favor, preencha todos os campos.");
}

try {
    $conexao = new Conexao();
    $query = "UPDATE usuarios SET nome = ?, email = ?, telefone = ?, endereco = ? WHERE id = ?";
    $params = [$nome, $email, $telefone, $endereco, $id];
    $conexao->atualizar($query, $params);

    // Atualiza os dados da sessão
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['telefone'] = $telefone;

    header("Location: ../../index.php?pg=perfil");
    exit;
} catch (PDOException $e) {
    echo "Erro ao atualizar dados: " . $e->getMessage();
}
