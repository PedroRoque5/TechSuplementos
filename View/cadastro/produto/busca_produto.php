<?php
// Importando a classe Conexao
require_once '../TechSuplementos/TechSuplementos/DAO/Conexao.php';

$produto = null;

// Verificar se o formulário de busca foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['buscar_produto_nome'])) {
    
    // Captura o nome do produto a ser buscado
    $produto_nome = $_POST['buscar_produto_nome'];
    
    try {
        // Conectar com o banco de dados
        $conexao = new Conexao();
        
        // Query SQL para buscar o produto pelo nome
        $query = "SELECT * FROM produtos WHERE nome = :produto_nome";
        
        // Parâmetros para a query
        $params = [':produto_nome' => $produto_nome];
        
        // Executar a busca
        $produto = $conexao->buscar($query, $params);
        
        // Verificar se o produto foi encontrado
        if (!empty($produto)) {
            $produto = $produto[0];
        } else {
            echo "<script>alert('Produto não encontrado.');</script>";
        }
    } catch (Exception $e) {
        echo "<script>alert('Erro: " . $e->getMessage() . "');</script>";
    }
}