<?php

class EmpresaDAO {
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=techsuplementos", "root", "");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }

    public function inserir(array $dados) {
        try {
            $sql = "INSERT INTO empresa (email, nome, cnpj, pais_origem, ano_fundacao, telefone, senha) 
                    VALUES (:email, :nome, :cnpj, :pais_origem, :ano_fundacao, :telefone, :senha)";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([
                ':email' => $dados['email'],
                ':nome' => $dados['nome'],
                ':cnpj' => $dados['cnpj'],
                ':pais_origem' => $dados['pais_origem'],
                ':ano_fundacao' => $dados['ano_fundacao'],
                ':telefone' => $dados['telefone'],
                ':senha' => $dados['senha']
            ]);
        } catch (PDOException $e) {
            echo "Erro na inserção: " . $e->getMessage();
            return false;
        }
    }
}
