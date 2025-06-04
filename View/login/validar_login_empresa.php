<?php
session_start();
require '../TechSuplementos/vendor/autoload.php';
require_once '../TechSuplementos/config_serve.php';
require_once '../TechSuplementos/TechSuplementos/DAO/Conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha = $_POST['senha'];
    $_SESSION['nivel_acesso'] = 'empresa';

    if (!$email || !$senha) {
        echo "<script>
            window.alert('Erro: Preencha todos os campos!');
            window.location.href = '" . URL . "index.php?pg=login_empresa';
        </script>";
        exit;
    }

    try {
        $conexao = new Conexao();

        $query = "SELECT id, email, nome, telefone, senha FROM empresa WHERE email = :email";
        $params = [':email' => $email];
        $empresas = $conexao->buscar($query, $params);

        if ($empresas && count($empresas) > 0) {
            $empresa = $empresas[0];

            if (password_verify($senha, $empresa['senha'])) {
                // Define variáveis de sessão no mesmo formato do "dadosadmin.php"
                $_SESSION['id'] = $empresa['id'];
                $_SESSION['nome'] = $empresa['nome'];
                $_SESSION['email'] = $empresa['email'];
                $_SESSION['telefone'] = $empresa['telefone'];
                $_SESSION['endereco'] = ''; // adicionar se tiver campo na tabela

                echo "<script>
                    alert('Login de empresa realizado com sucesso!');
                    window.location.href = '" . URL . "index.php?pg=empresa_home';
                </script>";
                exit;
            } else {
                echo "<script>
                    window.alert('Erro: Senha incorreta!');
                    window.location.href = '" . URL . "index.php?pg=login_empresa';
                </script>";
            }
        } else {
            echo "<script>
                window.alert('Erro: Empresa não encontrada!');
                window.location.href = '" . URL . "index.php?pg=login_empresa';
            </script>";
        }
    } catch (Exception $e) {
        echo "Erro ao conectar ao banco: " . $e->getMessage();
    }
} else {
    echo "<script>
        window.alert('Acesso inválido!');
        window.location.href = '" . URL . "index.php?pg=login_empresa';
    </script>";
}
