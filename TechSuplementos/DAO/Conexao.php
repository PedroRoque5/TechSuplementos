<?php

class Conexao
{
    private $pdo;
    private $inTransaction = false;

    // Função privada para ligar a conexão com o banco de dados
    private function conectar()
    {
        if ($this->pdo === null) {
            try {
                $host = 'localhost';
                $dbname = 'techsuplementos';
                $username = 'root';
                $password = '';

                $dsn = "mysql:host=$host;dbname=$dbname";
                $this->pdo = new PDO($dsn, $username, $password);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                throw new Exception("Erro na conexão: " . $e->getMessage());
            }
        }
    }

    // Função pública para iniciar uma transação
    public function beginTransaction()
    {
        $this->conectar();
        if (!$this->inTransaction) {
            $this->pdo->beginTransaction();
            $this->inTransaction = true;
        }
    }

    // Função pública para confirmar uma transação
    public function commit()
    {
        if ($this->inTransaction) {
            $this->pdo->commit();
            $this->inTransaction = false;
        }
    }

    // Função pública para desfazer uma transação
    public function rollback()
    {
        if ($this->inTransaction) {
            $this->pdo->rollBack();
            $this->inTransaction = false;
        }
    }

    // Função pública para buscar dados
    public function buscar($query, $params = [])
    {
        $this->conectar();
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            if ($this->inTransaction) {
                $this->rollback();
            }
            throw new Exception("Erro na busca: " . $e->getMessage());
        }
    }

    // Função pública para inserir dados
    public function inserir($query, $params = [])
    {
        $this->conectar();
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            return $this->pdo->lastInsertId();
        } catch (PDOException $e) {
            if ($this->inTransaction) {
                $this->rollback();
            }
            throw new Exception("Erro na inserção: " . $e->getMessage());
        }
    }

    // Função pública para atualizar dados
    public function atualizar($query, $params = [])
    {
        $this->conectar();
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            return $stmt->rowCount();
        } catch (PDOException $e) {
            if ($this->inTransaction) {
                $this->rollback();
            }
            throw new Exception("Erro na atualização: " . $e->getMessage());
        }
    }

    // Função pública para deletar dados
    public function deletar($query, $params = [])
    {
        $this->conectar();
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            return $stmt->rowCount();
        } catch (PDOException $e) {
            if ($this->inTransaction) {
                $this->rollback();
            }
            throw new Exception("Erro ao deletar: " . $e->getMessage());
        }
    }

    // Função para fechar a conexão
    public function __destruct()
    {
        if ($this->inTransaction) {
            $this->rollback();
        }
        $this->pdo = null;
    }
}
