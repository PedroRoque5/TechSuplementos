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
        error_log("Iniciando conexão com o banco de dados");
        $this->conectar();
    }

    public function conectar() {
        try {
            if (!$this->conexao) {
                error_log("Tentando conectar ao banco: {$this->host}, {$this->banco}");
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
                error_log("Conexão estabelecida com sucesso");
            }
            return $this->conexao;
        } catch (\PDOException $e) {
            error_log("Erro na conexão com o banco: " . $e->getMessage());
            throw new \Exception("Erro na conexão: " . $e->getMessage());
        }
    }

    public function executar($query, $params = []) {
        try {
            error_log("Executando query: " . $query);
            error_log("Parâmetros: " . print_r($params, true));
            $stmt = $this->conexao->prepare($query);
            $resultado = $stmt->execute($params);
            error_log("Query executada com sucesso");
            return $resultado;
        } catch (\PDOException $e) {
            error_log("Erro na execução da query: " . $e->getMessage());
            throw new \Exception("Erro na execução: " . $e->getMessage());
        }
    }

    public function beginTransaction() {
        try {
            if (!$this->inTransaction) {
                error_log("Iniciando transação");
                $this->conexao->beginTransaction();
                $this->inTransaction = true;
                error_log("Transação iniciada com sucesso");
            }
        } catch (\PDOException $e) {
            error_log("Erro ao iniciar transação: " . $e->getMessage());
            throw new \Exception("Erro ao iniciar transação: " . $e->getMessage());
        }
    }

    public function commit() {
        try {
            if ($this->inTransaction) {
                error_log("Realizando commit da transação");
                $this->conexao->commit();
                $this->inTransaction = false;
                error_log("Commit realizado com sucesso");
            }
        } catch (\PDOException $e) {
            error_log("Erro ao realizar commit: " . $e->getMessage());
            throw new \Exception("Erro ao realizar commit: " . $e->getMessage());
        }
    }

    public function rollback() {
        try {
            if ($this->inTransaction) {
                error_log("Realizando rollback da transação");
                $this->conexao->rollback();
                $this->inTransaction = false;
                error_log("Rollback realizado com sucesso");
            }
        } catch (\PDOException $e) {
            error_log("Erro ao realizar rollback: " . $e->getMessage());
            throw new \Exception("Erro ao realizar rollback: " . $e->getMessage());
        }
    }

    public function buscar($sql, $params = []) {
        try {
            if (!$this->conexao) {
                $this->conectar();
            }
            error_log("Executando busca: " . $sql);
            error_log("Parâmetros: " . print_r($params, true));
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute($params);
            $resultado = $stmt->fetchAll();
            error_log("Resultado da busca: " . print_r($resultado, true));
            return $resultado;
        } catch (\PDOException $e) {
            error_log("Erro na busca: " . $e->getMessage());
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
            error_log("Executando inserção: " . $sql);
            error_log("Parâmetros: " . print_r($params, true));
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute($params);
            $id = $this->conexao->lastInsertId();
            error_log("Inserção realizada com sucesso. ID: " . $id);
            return $id;
        } catch (\PDOException $e) {
            error_log("Erro na inserção: " . $e->getMessage());
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
            error_log("Executando atualização: " . $sql);
            error_log("Parâmetros: " . print_r($params, true));
            $stmt = $this->conexao->prepare($sql);
            $resultado = $stmt->execute($params);
            error_log("Atualização realizada com sucesso. Linhas afetadas: " . $stmt->rowCount());
            return $resultado;
        } catch (\PDOException $e) {
            error_log("Erro na atualização: " . $e->getMessage());
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
            error_log("Executando deleção: " . $sql);
            error_log("Parâmetros: " . print_r($params, true));
            $stmt = $this->conexao->prepare($sql);
            $resultado = $stmt->execute($params);
            error_log("Deleção realizada com sucesso. Linhas afetadas: " . $stmt->rowCount());
            return $resultado;
        } catch (\PDOException $e) {
            error_log("Erro na deleção: " . $e->getMessage());
            if ($this->inTransaction) {
                $this->rollback();
            }
            throw new \Exception("Erro na deleção: " . $e->getMessage());
        }
    }

    public function inTransaction() {
        error_log("Verificando se há transação ativa");
        return $this->conexao->inTransaction();
    }

    public function __destruct() {
        if ($this->inTransaction) {
            $this->rollback();
        }
    }
} 