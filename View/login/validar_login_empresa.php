<?php
session_start();
require '../../vendor/autoload.php';
require_once '../../config_serve.php';
require_once '../../TechSuplementos/DAO/Conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura e higienização
    $email = trim($_POST['email'] ?? '');
    $senha = trim($_POST['senha'] ?? '');

    // Verificação de campos vazios
    if (empty($email) || empty($senha)) {
        echo "<script>
            alert('Erro: Preencha todos os campos!');
            window.location.href = '" . URL . "index.php?pg=empresa';
        </script>";
        exit;
    }

    try {
        $conexao = new Conexao();

        // Buscar empresa no banco de dados
        $query = "SELECT id, email, nome, telefone, senha FROM empresa WHERE email = :email";
        $params = [':email' => $email];
        $empresas = $conexao->buscar($query, $params);

        if ($empresas && count($empresas) > 0) {
            $empresa = $empresas[0];

            // Verifica a senha
            if (password_verify($senha, $empresa['senha'])) {
                // Define sessão com dados disponíveis
                $_SESSION['empresa_id'] = $empresa['id'];
                $_SESSION['nome'] = $empresa['nome'];
                $_SESSION['email'] = $empresa['email'];
                $_SESSION['telefone'] = $empresa['telefone'];
                $_SESSION['nivel_acesso'] = 'empresa';

                echo "<script>
                    alert('Login realizado com sucesso!');
                    window.location.href = '" . URL . "index.php?pg=homeadmin';
                </script>";
                exit;
            } else {
                echo "<script>
                    alert('Erro: Senha incorreta!');
                    window.location.href = '" . URL . "index.php?pg=empresa';
                </script>";
                exit;
            }
        } else {
            echo "<script>
                alert('Erro: Empresa não encontrada!');
                window.location.href = '" . URL . "index.php?pg=empresa';
            </script>";
            exit;
        }
    } catch (Exception $e) {
        echo "Erro ao conectar ao banco: " . $e->getMessage();
        exit;
    }
} else {
    echo "<script>
        alert('Acesso inválido!');
        window.location.href = '" . URL . "index.php?pg=empresa';
    </script>";
    exit;
}
