<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/TechSuplementos/DAO/Conexao.php';

use TechSuplementos\DAO\Conexao;

try {
    error_log("Iniciando teste de conexão");
    
    $conexao = new Conexao();
    
    // Testar conexão
    error_log("Testando conexão básica");
    $resultado = $conexao->buscar("SELECT 1");
    error_log("Conexão básica OK");
    
    // Verificar tabela produtos
    error_log("Verificando tabela produtos");
    $produtos = $conexao->buscar("SHOW TABLES LIKE 'produtos'");
    if (empty($produtos)) {
        throw new Exception("Tabela 'produtos' não encontrada");
    }
    error_log("Tabela produtos encontrada");
    
    // Verificar colunas da tabela produtos
    error_log("Verificando colunas da tabela produtos");
    $colunas = $conexao->buscar("SHOW COLUMNS FROM produtos");
    error_log("Colunas encontradas: " . print_r($colunas, true));
    
    // Verificar tabela historico_estoque
    error_log("Verificando tabela historico_estoque");
    $historico = $conexao->buscar("SHOW TABLES LIKE 'historico_estoque'");
    if (empty($historico)) {
        throw new Exception("Tabela 'historico_estoque' não encontrada");
    }
    error_log("Tabela historico_estoque encontrada");
    
    // Verificar colunas da tabela historico_estoque
    error_log("Verificando colunas da tabela historico_estoque");
    $colunas = $conexao->buscar("SHOW COLUMNS FROM historico_estoque");
    error_log("Colunas encontradas: " . print_r($colunas, true));
    
    // Testar inserção
    error_log("Testando inserção");
    $conexao->beginTransaction();
    
    // Inserir produto de teste
    $produtoId = $conexao->inserir(
        "INSERT INTO produtos (nome, descricao, preco, catalogo, estoque_atual, estoque_minimo) 
         VALUES (:nome, :descricao, :preco, :catalogo, :estoque_atual, :estoque_minimo)",
        [
            ':nome' => 'Produto Teste',
            ':descricao' => 'Descrição do produto teste',
            ':preco' => 10.00,
            ':catalogo' => 'creatina',
            ':estoque_atual' => 0,
            ':estoque_minimo' => 5
        ]
    );
    error_log("Produto inserido com ID: " . $produtoId);
    
    // Inserir movimentação de teste
    $historicoId = $conexao->inserir(
        "INSERT INTO historico_estoque (produto_id, tipo_movimentacao, quantidade, motivo) 
         VALUES (:produto_id, :tipo_movimentacao, :quantidade, :motivo)",
        [
            ':produto_id' => $produtoId,
            ':tipo_movimentacao' => 'entrada',
            ':quantidade' => 10,
            ':motivo' => 'Teste de sistema'
        ]
    );
    error_log("Histórico inserido com ID: " . $historicoId);
    
    // Atualizar estoque
    $resultado = $conexao->atualizar(
        "UPDATE produtos SET estoque_atual = estoque_atual + :quantidade WHERE id = :id",
        [
            ':quantidade' => 10,
            ':id' => $produtoId
        ]
    );
    error_log("Estoque atualizado: " . ($resultado ? "Sim" : "Não"));
    
    $conexao->commit();
    error_log("Teste concluído com sucesso");
    
    echo "Teste concluído com sucesso. Verifique o arquivo de log para mais detalhes.";
    
} catch (Exception $e) {
    error_log("Erro no teste: " . $e->getMessage());
    if (isset($conexao) && $conexao->inTransaction) {
        $conexao->rollback();
    }
    echo "Erro no teste: " . $e->getMessage();
} 