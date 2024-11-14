 <link href="<?= ASSETS ?>css/pessoa.css" rel='stylesheet'>
 <div class="form">
   <form id="Cadastro" action="<?= URL . 'index.php?pg=cad' ?>" method="POST">
    <div><input type="email" name="email" id="email" placeholder="E-mail*" required></div>
    <div><input type="text" name="nome" id="nome" placeholder="Nome*" required></div>
    <div><input type="number" name="cpf" id="cpf" placeholder="CPF*" maxlength="11" required></div>
    <div><input type="tel" name="telefone" id="telefone" placeholder="Telefone*" maxlength="14" required></div>
    <div><input type="password" name="senha" id="senha" placeholder="Senha" required></div>
    <button class="btn btn-success">Cadastrar</button>
    <a href="<?= URL . "index.php?pg=home" ?>" class="btn btn-input">Cancelar</a>
   </form>
 </div>

 <?php
require_once './TechSuplementos/DAO/Conexao.php'; // Certifique-se de incluir o arquivo que contém a classe Conexao

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    if ($email && $nome && $cpf && $telefone && $senha) {
        // Criptografar a senha antes de armazenar
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $conexao = new Conexao();

        // Inserir os dados na tabela 'usuarios'
        $query = "INSERT INTO usuarios (email, nome, cpf, telefone, senha) VALUES (:email, :nome, :cpf, :telefone, :senha)";
        $params = [
            ':email' => $email,
            ':nome' => $nome,
            ':cpf' => $cpf,
            ':telefone' => $telefone,
            ':senha' => $senhaHash
        ];

        try {
            $userId = $conexao->inserir($query, $params);
            echo "Usuário cadastrado com sucesso! ID do usuário: " . $userId;
        } catch (Exception $e) {
            echo "Erro ao cadastrar usuário: " . $e->getMessage();
        }
    } else {
        echo "Por favor, preencha todos os campos corretamente.";
    }
}
?>