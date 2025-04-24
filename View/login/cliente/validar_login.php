<?php
session_start();
require '../TechSuplementos/vendor/autoload.php';
require_once '../TechSuplementos/config_serve.php';
require_once '../TechSuplementos/TechSuplementos/DAO/Conexao.php'; // Ajuste para o caminho correto da conexão

// Verifica se os campos email e senha foram enviados via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $senha = $_POST['senha'];

    if (!$email || !$senha) {
        echo "Erro: Preencha todos os campos!";
        exit;
    }

    try {
        // Criar conexão com o banco de dados
        $conexao = new Conexao();

        // Verificar se o usuário existe no banco
        $query = "SELECT id, email, nome, cpf, telefone, senha FROM usuario WHERE email = :email";
        $params = [':email' => $email];
        $usuarios = $conexao->buscar($query, $params);

        // Verifica se o usuário foi encontrado
        if ($usuarios && count($usuarios) > 0) {
            // Acessa o primeiro usuário retornado
            $usuario = $usuarios[0];

            // Depure o usuário retornado
            var_dump($usuario);

            // Verifica se a senha está correta
            if (password_verify($senha, $usuario['senha'])) {
                // Iniciar sessão do usuário
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['email'] = $usuario['email'];                
                $_SESSION['cpf'] = $usuario['cpf'];
                $_SESSION['telefone'] = $usuario['telefone'];

                // Redirecionamento para tela principal do usuário
                header("Location: " . URL . "index.php?pg=home");

                echo "Login realizado com sucesso!";
                exit;
            } else {
                echo "Erro: Senha incorreta!";
            }
        } else {
            echo "Erro: Usuário não encontrado!";
        }
    } catch (Exception $e) {
        echo "Erro ao conectar ao banco: " . $e->getMessage();
    }
} else {
    echo "Acesso inválido!";
}
?>
