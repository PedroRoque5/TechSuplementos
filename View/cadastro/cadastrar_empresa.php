<?php
require_once './TechSuplementos/DAO/Conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitização e validação dos dados
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $cnpj = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT); // Alterado para 'cpf' conforme o front
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT); // Usando sanitize_number_int
    $pais = filter_input(INPUT_POST, 'pais_origem', FILTER_SANITIZE_STRING); // Alterado para 'pais_origem' conforme o front
    $ano_fundacao = filter_input(INPUT_POST, 'ano_fundacao', FILTER_SANITIZE_STRING); // Alterado para 'ano_fundacao' conforme o front
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    // Validação se os campos essenciais estão preenchidos
    if ($email && $nome && $cnpj && $telefone && $senha) { // Verificando apenas os campos obrigatórios
        // Verificação adicional para campos opcionais
        if (!$pais) {
            $pais = 'Desconhecido'; // Se o país não for preenchido, definimos um valor padrão
        }
        if (!$ano_fundacao) {
            $ano_fundacao = 'Não especificado'; // Definir um valor padrão para o ano de fundação
        }

        // Criptografando a senha
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        // Conexão com o banco
        $conexao = new Conexao();

        // Preparação da query para inserir os dados no banco
        $query = "INSERT INTO empresa (nome, email, cnpj, telefone, pais_origem, ano_fundacao, senha)
                  VALUES (:nome, :email, :cnpj, :telefone, :pais, :ano_fundacao, :senha)";
        $params = [
            ':nome' => $nome,
            ':email' => $email,
            ':cnpj' => $cnpj,
            ':telefone' => $telefone,
            ':pais' => $pais,
            ':ano_fundacao' => $ano_fundacao,
            ':senha' => $senhaHash
        ];

        try {
            // Tentando inserir os dados
            $empresaId = $conexao->inserir($query, $params);
            echo "Empresa cadastrada com sucesso! ID: " . $empresaId;
        } catch (Exception $e) {
            // Se houver erro ao cadastrar
            echo "Erro ao cadastrar empresa: " . $e->getMessage();
        }
    } else {
        // Se algum campo obrigatório estiver vazio
        echo "Por favor, preencha todos os campos obrigatórios corretamente.";
    }
}
?>
