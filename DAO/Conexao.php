<?php
namespace TechSuplementos\DAO;

class Conexao {
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "techsuplementos";
    private $conexao;
    private $inTransaction = false;

    public function __construct() {
        $this->conectar();
    }

    public function conectar() {
        try {
            if (!$this->conexao) {
                $this->conexao = new \PDO(
                    "mysql:host={$this->host};dbname={$this->banco};charset=utf8",
                    $this->usuario,
                    $this->senha,
                    [
                        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                        \PDO::ATTR_EMULATE_PREPARES => false
                    ]
                );
            }
            return $this->conexao;
        } catch (\PDOException $e) {
            throw new \Exception("Erro na conexão: " . $e->getMessage());
        }
    }

    public function executar($sql) {
        try {
            if (!$this->conexao) {
                $this->conectar();
            }
            return $this->conexao->exec($sql);
        } catch (\PDOException $e) {
            throw new \Exception("Erro ao executar SQL: " . $e->getMessage());
        }
    }

    public function beginTransaction() {
        if (!$this->inTransaction) {
            $this->conexao->beginTransaction();
            $this->inTransaction = true;
        }
    }

    public function commit() {
        if ($this->inTransaction) {
            $this->conexao->commit();
            $this->inTransaction = false;
        }
    }

    public function rollback() {
        if ($this->inTransaction) {
            $this->conexao->rollback();
            $this->inTransaction = false;
        }
    }

    public function buscar($sql, $params = []) {
        try {
            if (!$this->conexao) {
                $this->conectar();
            }
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetchAll();
        } catch (\PDOException $e) {
            if ($this->inTransaction) {
                $this->rollback();
            }
            throw new \Exception("Erro na busca: " . $e->getMessage());
        }
    }

    public function inserir($sql, $params = []) {
        try {
            if (!$this->conexao) {
                $this->conectar();
            }
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute($params);
            return $this->conexao->lastInsertId();
        } catch (\PDOException $e) {
            if ($this->inTransaction) {
                $this->rollback();
            }
            throw new \Exception("Erro na inserção: " . $e->getMessage());
        }
    }

    public function atualizar($sql, $params = []) {
        try {
            if (!$this->conexao) {
                $this->conectar();
            }
            $stmt = $this->conexao->prepare($sql);
            return $stmt->execute($params);
        } catch (\PDOException $e) {
            if ($this->inTransaction) {
                $this->rollback();
            }
            throw new \Exception("Erro na atualização: " . $e->getMessage());
        }
    }

    public function deletar($sql, $params = []) {
        try {
            if (!$this->conexao) {
                $this->conectar();
            }
            $stmt = $this->conexao->prepare($sql);
            return $stmt->execute($params);
        } catch (\PDOException $e) {
            if ($this->inTransaction) {
                $this->rollback();
            }
            throw new \Exception("Erro na deleção: " . $e->getMessage());
        }
    }

    public function __destruct() {
        if ($this->inTransaction) {
            $this->rollback();
        }
    }
} 