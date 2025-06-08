<?php

require_once './TechSuplementos/DAO/Conexao.php';
require_once './App/Controller/ValidarCPFController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura e validação dos dados
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if ($email && $nome && $cpf && $telefone && $senha) {
        // Validação do CPF
        if (!ValidarCPFController::validarCPF($cpf)) {
            echo "<script>alert('CPF inválido. Por favor, insira um CPF válido.');</script>";
            exit;
        }

        // Criptografar senha
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        try {
            $conexao = new Conexao();

            $query = "INSERT INTO usuario (email, nome, cpf, telefone, senha) 
                      VALUES (:email, :nome, :cpf, :telefone, :senha)";
            $params = [
                ':email' => $email,
                ':nome' => $nome,
                ':cpf' => $cpf,
                ':telefone' => $telefone,
                ':senha' => $senhaHash
            ];

            $conexao->inserir($query, $params);

            // Redireciona com sucesso
            header("Location: index.php?pg=login&sucesso=1");
            exit;

        } catch (Exception $e) {
            echo "Erro ao cadastrar usuário: " . $e->getMessage();
        }

    } else {
        echo "Por favor, preencha todos os campos corretamente.";
    }
}
?>
