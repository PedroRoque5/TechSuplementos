<?php
namespace TechSuplementos\DAO;

require_once __DIR__ . '/Conexao.php';

use Exception;

class EstoqueDAO {
    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function registrarMovimentacao($id_produto, $quantidade, $tipo_movimentacao, $motivo, $usuario_id) {
        error_log("Iniciando registro de movimentação no EstoqueDAO");
        error_log("Parâmetros recebidos: " . print_r([
            'id_produto' => $id_produto,
            'quantidade' => $quantidade,
            'tipo_movimentacao' => $tipo_movimentacao,
            'motivo' => $motivo,
            'usuario_id' => $usuario_id
        ], true));

        try {
            // Iniciar transação
            error_log("Iniciando transação");
            $this->conexao->beginTransaction();

            // Buscar produto e estoque atual
            error_log("Buscando produto: " . $id_produto);
            $produto = $this->conexao->buscar(
                "SELECT id, nome, estoque_atual FROM produtos WHERE id = ?",
                [$id_produto]
            );

            if (empty($produto)) {
                error_log("Produto não encontrado: " . $id_produto);
                throw new Exception("Produto não encontrado");
            }

            error_log("Produto encontrado: " . print_r($produto[0], true));

            // Verificar estoque para saída
            if ($tipo_movimentacao === 'saida' && $produto[0]['estoque_atual'] < $quantidade) {
                error_log("Estoque insuficiente para saída");
                error_log("Estoque atual: " . $produto[0]['estoque_atual'] . ", Quantidade solicitada: " . $quantidade);
                throw new Exception("Estoque insuficiente para realizar a saída");
            }

            // Inserir no histórico
            error_log("Inserindo no histórico");
            $historico_id = $this->conexao->inserir(
                "INSERT INTO historico_estoque (produto_id, tipo_movimentacao, quantidade, motivo, usuario_id) VALUES (?, ?, ?, ?, ?)",
                [$id_produto, $tipo_movimentacao, $quantidade, $motivo, $usuario_id]
            );

            if (!$historico_id) {
                error_log("Falha ao inserir no histórico");
                throw new Exception("Erro ao registrar histórico de movimentação");
            }

            error_log("Histórico inserido com ID: " . $historico_id);

            // Atualizar estoque
            $novo_estoque = $tipo_movimentacao === 'entrada' 
                ? $produto[0]['estoque_atual'] + $quantidade 
                : $produto[0]['estoque_atual'] - $quantidade;

            error_log("Atualizando estoque para: " . $novo_estoque);
            $atualizado = $this->conexao->atualizar(
                "UPDATE produtos SET estoque_atual = ? WHERE id = ?",
                [$novo_estoque, $id_produto]
            );

            if (!$atualizado) {
                error_log("Falha ao atualizar estoque");
                throw new Exception("Erro ao atualizar estoque do produto");
            }

            error_log("Estoque atualizado com sucesso");

            // Commit da transação
            error_log("Realizando commit da transação");
            $this->conexao->commit();
            error_log("Transação concluída com sucesso");

            return true;
        } catch (Exception $e) {
            error_log("Erro na movimentação: " . $e->getMessage());
            error_log("Stack trace: " . $e->getTraceAsString());
            
            // Rollback em caso de erro
            if ($this->conexao->inTransaction()) {
                error_log("Realizando rollback da transação");
                $this->conexao->rollback();
            }
            
            throw $e;
        }
    }

    public function obterProdutosEstoqueBaixo() {
        $query = "SELECT p.*, 
                        (p.estoque_atual <= p.estoque_minimo) as estoque_baixo
                 FROM produtos p 
                 WHERE p.estoque_atual <= p.estoque_minimo";
        
        return $this->conexao->buscar($query);
    }

    public function obterHistoricoMovimentacoes($produtoId = null, $dataInicio = null, $dataFim = null) {
        $query = "SELECT he.*, p.nome as produto_nome, u.nome as usuario_nome
                 FROM historico_estoque he
                 JOIN produtos p ON p.id = he.produto_id
                 LEFT JOIN usuario u ON u.id = he.usuario_id
                 WHERE 1=1";
        
        $params = [];

        if ($produtoId) {
            $query .= " AND he.produto_id = :produto_id";
            $params[':produto_id'] = $produtoId;
        }

        if ($dataInicio) {
            $query .= " AND he.data_movimentacao >= :data_inicio";
            $params[':data_inicio'] = $dataInicio;
        }

        if ($dataFim) {
            $query .= " AND he.data_movimentacao <= :data_fim";
            $params[':data_fim'] = $dataFim;
        }

        $query .= " ORDER BY he.data_movimentacao DESC";

        return $this->conexao->buscar($query, $params);
    }

    public function obterRelatorioEstoque() {
        try {
            error_log("Iniciando obtenção do relatório de estoque");
            
            $query = "SELECT 
                        p.id,
                        p.nome,
                        p.estoque_atual,
                        p.estoque_minimo,
                        (SELECT COUNT(*) FROM historico_estoque WHERE produto_id = p.id AND tipo_movimentacao = 'entrada') as total_entradas,
                        (SELECT COUNT(*) FROM historico_estoque WHERE produto_id = p.id AND tipo_movimentacao = 'saida') as total_saidas,
                        (SELECT COALESCE(SUM(quantidade), 0) FROM historico_estoque WHERE produto_id = p.id AND tipo_movimentacao = 'entrada') as quantidade_total_entradas,
                        (SELECT COALESCE(SUM(quantidade), 0) FROM historico_estoque WHERE produto_id = p.id AND tipo_movimentacao = 'saida') as quantidade_total_saidas
                     FROM produtos p
                     ORDER BY p.nome";

            $resultado = $this->conexao->buscar($query);
            error_log("Relatório de estoque obtido: " . print_r($resultado, true));
            return $resultado;
        } catch (Exception $e) {
            error_log("Erro ao obter relatório de estoque: " . $e->getMessage());
            throw $e;
        }
    }
} 