<?php 

echo "Fazer a conexão";

/**
 * Conexão com o banco de dados
 * 
 * Criar uma classe conexao{
 * 
 * Criar uma private function para ligar conexão{} 
 * Criar uma private function para desligar conexão{}
 * Criar as public function
 * Buscar{}
 * Inserir{}
 * Atualizar{}
 * Deletar{}
 * 
 * }
 */

class Conexao {

    private $pdo;

    // Função privada para ligar a conexão com o banco de dados
    private function conectar() {
        try {
            $host = 'localhost'; // Endereço do banco de dados
            $dbname = 'TechSuplementos'; // Nome do banco de dados
            $username = 'root'; // Nome de usuário do banco de dados
            $password = ''; // Senha do banco de dados

            // Configurações de DSN (Data Source Name)
            $dsn = "mysql:host=$host;dbname=$dbname";

            // Cria uma nova instância PDO para a conexão
            $this->pdo = new PDO($dsn, $username, $password);

            // Define o modo de erro do PDO para lançar exceções
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }
    }

    // Função privada para desligar a conexão
    private function desconectar() {
        $this->pdo = null; // Fecha a conexão
    }

    // Função pública para buscar dados
    public function buscar($query, $params = []) {
        $this->conectar();
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultados;
        } catch (PDOException $e) {
            echo "Erro na busca: " . $e->getMessage();
        } finally {
            $this->desconectar();
        }
    }

    // Função pública para inserir dados
    public function inserir($query, $params = []) {
        $this->conectar();
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            return $this->pdo->lastInsertId(); // Retorna o ID do último inserido
        } catch (PDOException $e) {
            echo "Erro na inserção: " . $e->getMessage();
        } finally {
            $this->desconectar();
        }
    }

    // Função pública para atualizar dados
    public function atualizar($query, $params = []) {
        $this->conectar();
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            return $stmt->rowCount(); // Retorna o número de linhas afetadas
        } catch (PDOException $e) {
            echo "Erro na atualização: " . $e->getMessage();
        } finally {
            $this->desconectar();
        }
    }

    // Função pública para deletar dados
    public function deletar($query, $params = []) {
        $this->conectar();
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            return $stmt->rowCount(); // Retorna o número de linhas deletadas
        } catch (PDOException $e) {
            echo "Erro ao deletar: " . $e->getMessage();
        } finally {
            $this->desconectar();
        }
    }
}

