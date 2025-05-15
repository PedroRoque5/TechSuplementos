<br>
<br>

<?php

//código para inserir usuário
require_once './TechSuplementos/DAO/Conexao.php'; // Certifique-se de incluir o arquivo que contém a classe Conexao
require_once './App/Controller/ValidarCPFController.php'; // Função para verificar CPF 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    if ($email && $nome && $cpf && $telefone && $senha) {
        
        // Validação do CPF
         if (!ValidarCPFController::validarCPF($cpf)) {
            echo "<script>alert('CPF inválido. Por favor, insira um CPF válido.');</script>";
            return; // Interrompe o processo se o CPF for inválido
        }

        // Criptografar a senha antes de armazenar
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $conexao = new Conexao();

        // Inserir os dados na tabela 'usuarios'
        $query = "INSERT INTO usuario (email, nome, cpf, telefone, senha) VALUES (:email, :nome, :cpf, :telefone, :senha)";
        $params = [
            ':email' => $email,
            ':nome' => $nome,
            ':cpf' => $cpf,
            ':telefone' => $telefone,
            ':senha' => $senhaHash
        ];

        try {
            $userId = $conexao->inserir($query, $params);
            echo "<script>
            alert('Cadastrado com sucesso')
            </script>";
            sleep(2);
            header("Location: index.php?pg=login");
            echo " </p>";
        } catch (Exception $e) {
            echo "Erro ao cadastrar usuário: " . $e->getMessage();
        }
    } else {
        echo "Por favor, preencha todos os campos corretamente.";
    }
}


session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['cpf'] = $cpf;
    $_SESSION['telefone'] = $telefone;
}

?>