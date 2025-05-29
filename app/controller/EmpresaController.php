<?php
require_once './TechSuplementos/DAO/EmpresaDAO.php';

class EmpresaController {
    public function cadastrar(array $postData) {
        // Limpa e valida os dados
        $email = filter_var($postData['email'] ?? '', FILTER_VALIDATE_EMAIL);
        $nome = htmlspecialchars(trim($postData['nome'] ?? ''), ENT_QUOTES, 'UTF-8');
        $cnpj = htmlspecialchars(trim($postData['cnpj'] ?? ''), ENT_QUOTES, 'UTF-8');
        $pais_origem = htmlspecialchars(trim($postData['pais_origem'] ?? ''), ENT_QUOTES, 'UTF-8');
        $ano_fundacao = $postData['ano_fundacao'] ?? '';
        $telefone = htmlspecialchars(trim($postData['telefone'] ?? ''), ENT_QUOTES, 'UTF-8');
        $senha = htmlspecialchars(trim($postData['senha'] ?? ''), ENT_QUOTES, 'UTF-8');

        // Validação de campos obrigatórios
        if (!$email || empty($nome) || empty($cnpj) || empty($telefone) || empty($senha)) {
            return ['success' => false, 'message' => 'Por favor, preencha todos os campos obrigatórios.'];
        }

        // Validação de data
        if (!empty($ano_fundacao)) {
            $d = DateTime::createFromFormat('Y-m-d', $ano_fundacao);
            if (!$d || $d->format('Y-m-d') !== $ano_fundacao) {
                return ['success' => false, 'message' => 'Data inválida no campo Ano de Fundação.'];
            }
        } else {
            $ano_fundacao = null;
        }

        // Monta array para envio ao DAO
        $empresa = [
            'email' => $email,
            'nome' => $nome,
            'cnpj' => $cnpj,
            'pais_origem' => $pais_origem,
            'ano_fundacao' => $ano_fundacao,
            'telefone' => $telefone,
            'senha' => password_hash($senha, PASSWORD_DEFAULT)
        ];

        // Salva no banco
        $dao = new EmpresaDAO();
        $inserido = $dao->inserir($empresa);

        if ($inserido) {
            return ['success' => true, 'message' => 'Empresa cadastrada com sucesso!'];
        } else {
            return ['success' => false, 'message' => 'Erro ao cadastrar empresa.'];
        }
    }
}
