<?php
require_once 'Conexao.php';

class EmpresaDAO
{
    public function cnpjExiste($cnpj)
    {
        $pdo = Conexao::getConexao();
        $sql = "SELECT COUNT(*) FROM empresa WHERE cnpj = :cnpj";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':cnpj' => $cnpj]);
        return $stmt->fetchColumn() > 0;
    }

    public function cadastrarEmpresa($dados)
    {
        try {
            $pdo = Conexao::getConexao();
            $sql = "INSERT INTO empresa (nome, email, cnpj, telefone, pais_origem, ano_fundacao, senha)
                    VALUES (:nome, :email, :cnpj, :telefone, :pais, :ano, :senha)";
            $stmt = $pdo->prepare($sql);
            return $stmt->execute([
                ':nome' => $dados['nome'],
                ':email' => $dados['email'],
                ':cnpj' => $dados['cnpj'],
                ':telefone' => $dados['telefone'],
                ':pais' => $dados['pais_origem'],
                ':ano' => $dados['ano_fundacao'],
                ':senha' => $dados['senha'],
            ]);
        } catch (PDOException $e) {
            // Log do erro
            error_log("Erro ao cadastrar empresa: " . $e->getMessage());
            return false;
        }
    }
}
