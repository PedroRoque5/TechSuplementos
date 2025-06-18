<?php
error_log("=== TESTE DO SISTEMA DE ESTOQUE ===");

// Incluir arquivos necessários
require_once './config_serve.php';
require_once './DAO/EstoqueDAO.php';

use TechSuplementos\DAO\EstoqueDAO;
use TechSuplementos\DAO\Conexao;

try {
    error_log("1. Testando conexão com o banco...");
    $conexao = new Conexao();
    error_log("✓ Conexão estabelecida com sucesso");
    
    // Verificar se a tabela historico_estoque existe
    error_log("2. Verificando estrutura da tabela historico_estoque...");
    $tabela = $conexao->buscar("SHOW TABLES LIKE 'historico_estoque'");
    if (empty($tabela)) {
        error_log("✗ Tabela historico_estoque não existe!");
        echo "ERRO: Tabela historico_estoque não existe. Execute o script de criação do banco.\n";
        exit;
    }
    error_log("✓ Tabela historico_estoque existe");
    
    // Verificar estrutura da tabela
    $colunas = $conexao->buscar("DESCRIBE historico_estoque");
    error_log("Estrutura da tabela historico_estoque:");
    foreach ($colunas as $coluna) {
        error_log("  - " . $coluna['Field'] . " (" . $coluna['Type'] . ")");
    }
    
    // Verificar se existem produtos
    error_log("3. Verificando produtos disponíveis...");
    $produtos = $conexao->buscar("SELECT id, nome, estoque_atual FROM produtos LIMIT 5");
    if (empty($produtos)) {
        error_log("✗ Nenhum produto encontrado!");
        echo "ERRO: Nenhum produto encontrado no banco de dados.\n";
        exit;
    }
    error_log("✓ Produtos encontrados: " . count($produtos));
    foreach ($produtos as $produto) {
        error_log("  - ID: {$produto['id']}, Nome: {$produto['nome']}, Estoque: {$produto['estoque_atual']}");
    }
    
    // Testar EstoqueDAO
    error_log("4. Testando EstoqueDAO...");
    $estoqueDAO = new EstoqueDAO();
    error_log("✓ EstoqueDAO criado com sucesso");
    
    // Testar obtenção de relatório
    error_log("5. Testando obtenção de relatório...");
    $relatorio = $estoqueDAO->obterRelatorioEstoque();
    error_log("✓ Relatório obtido com sucesso. Produtos: " . count($relatorio));
    
    // Testar obtenção de histórico
    error_log("6. Testando obtenção de histórico...");
    $historico = $estoqueDAO->obterHistoricoMovimentacoes();
    error_log("✓ Histórico obtido com sucesso. Registros: " . count($historico));
    
    // Testar obtenção de produtos com estoque baixo
    error_log("7. Testando produtos com estoque baixo...");
    $estoqueBaixo = $estoqueDAO->obterProdutosEstoqueBaixo();
    error_log("✓ Produtos com estoque baixo: " . count($estoqueBaixo));
    
    echo "✓ Todos os testes passaram com sucesso!\n";
    echo "O sistema de estoque está funcionando corretamente.\n";
    
} catch (Exception $e) {
    error_log("✗ ERRO NO TESTE: " . $e->getMessage());
    error_log("Stack trace: " . $e->getTraceAsString());
    echo "ERRO: " . $e->getMessage() . "\n";
}
?> 