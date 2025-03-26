<?php 
// Verifique se o formulário de exclusão foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deletar_produto_nome'])) {
    
    // Captura o nome do produto a ser deletado
    $produto_nome = $_POST['deletar_produto_nome'];

    // Importando a classe Conexao
    require_once '../TechSuplementos/TechSuplementos/DAO/Conexao.php';
    
    try {
        // Conectar com o banco de dados
        $conexao = new Conexao();
        
        // Query SQL para deletar o produto pelo nome
        $query = "DELETE FROM produtos WHERE nome = :produto_nome";
        
        // Parâmetros para a query
        $params = [':produto_nome' => $produto_nome];
        
        // Executar a exclusão
        $resultado = $conexao->deletar($query, $params);
        
        // Verificar se a exclusão foi bem-sucedida
        if ($resultado) {
            echo "<script>alert('Produto \"$produto_nome\" deletado com sucesso!'); window.location.href='" . URL . "index.php?pg=produto';</script>";
            exit;
        } else {
            echo "<script>alert('Erro ao deletar o produto.');</script>";
        }
    } catch (Exception $e) {
        // Exibir erro caso ocorra
        echo "<script>alert('Erro: " . $e->getMessage() . "');</script>";
    }
}
?>