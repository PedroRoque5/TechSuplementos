<?php
session_start();
require '../TechSuplementos/vendor/autoload.php';
require_once '../TechSuplementos/config_serve.php';
require_once '../TechSuplementos/TechSuplementos/DAO/Conexao.php'; // Ajuste para o caminho correto da conexão

// Verifica se os campos email e senha foram enviados via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    if (!$email || !$senha) {
        echo "Erro: Preencha todos os campos!";
        exit;
    }

    try {
        // Criar conexão com o banco de dados
        $conexao = new Conexao();

        // Verificar se o usuário existe no banco
        $query = "SELECT id, email, senha, tipo FROM usuario WHERE email = :email";
        $params = [':email' => $email];
        $usuario = $conexao->buscar($query, $params);

        if ($usuario) {
            // Verifica se a senha está correta
            if (password_verify($senha, $usuario['senha'])) {
                // Iniciar sessão do usuário
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['email'] = $usuario['email'];
                $_SESSION['tipo'] = $usuario['tipo'];

                // Redirecionamento baseado no tipo de usuário
                if ($usuario['tipo'] === 'cliente') {
                    header("Location: " . URL . "View/home/cliente_home.php");
                } else {
                    header("Location: " . URL . "View/home/admin_home.php");
                }
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
