<?php 

require_once './TechSuplementos/DAO/Conexao.php';

header(('Content-Type: application/json'));

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $data = json_decode(file_get_contents('php://input'), true);

    $email = $data['email'] ?? null;
    $nome = $data['nome'] ?? null;
    $cpf = $data['cpf'] ?? null;
    $telefone = $data['telefone'] ?? null;
    $senha = $data['senha'] ?? null;

    if (!$email || !$nome || !$cpf || !$telefone || !$senha){
        echo json_encode(['status' => 'erro', 'mensagem' => 'Preencha todos os campos!']);
        exit;
    }

    $senhaHash = password_hash($senha, PASSWORD_BCRYPT);

    try {
        $conexao = new Conexao();
        $query = "INSET INTO usuarios (email, nome, cpf, telefone, senha) VALUES (:email, :nome, :cpf, :telefone, :senha)";


        $params = [
            ':email' => $email,
            ':nome' => $nome,
            ':cpf' => $cpf,
            ':telefone' => $telefone,
            ':senha' => $senha,
        ];

        $ultimoId = $conexao->inserir($query,$params);
        
        echo json_encode(['status' => 'sucesso', 'mensagem' => 'Usuário cadastrado com sucesso!', 'id' => $ultimoId]);
    } catch (Exception $e) {
        echo json_encode(['status' => 'erro', 'mensagem' => 'Erro ao cadastrar usuário' . $e->getMessage()]);
    }

} else {
    echo json_encode(['status' => 'erro', 'mensagem' => 'Método de requisição inválido']);
}