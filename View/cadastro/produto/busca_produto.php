<?php
// Importando a classe Conexao
require_once '../../DAO/Conexao.php'; // Ajuste conforme seu projeto

$produto = null;
$sabores = [];

// Verificar se o formulário de busca foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['buscar_produto_nome'])) {

    // Captura e limpa o nome do produto
    $produto_nome = trim($_POST['buscar_produto_nome']);

    try {
        // Criar conexão
        $conexao = new Conexao();

        // Buscar o produto pelo nome
        $queryProduto = "SELECT * FROM produtos WHERE nome = :produto_nome";
        $paramsProduto = [':produto_nome' => $produto_nome];
        $resultado = $conexao->buscar($queryProduto, $paramsProduto);

        // Verifica se encontrou
        if (!empty($resultado)) {
            $produto = $resultado[0]; // Pega o primeiro encontrado

            // Agora buscar os sabores relacionados
            $querySabores = "
                SELECT s.nome 
                FROM sabores s
                INNER JOIN produto_sabor ps ON s.id = ps.sabor_id
                WHERE ps.produto_id = :produto_id
            ";
            $paramsSabores = [':produto_id' => $produto['id']];
            $sabores = $conexao->buscar($querySabores, $paramsSabores);

        } else {
            echo "<script>alert('Produto não encontrado.');</script>";
        }

    } catch (Exception $e) {
        echo "<script>alert('Erro: " . $e->getMessage() . "');</script>";
    }
}
?>

<?php if ($produto): ?>
    <h2>Detalhes do Produto</h2>
    <p><strong>Nome:</strong> <?= htmlspecialchars($produto['nome']) ?></p>
    <p><strong>Descrição:</strong> <?= htmlspecialchars($produto['descricao']) ?></p>
    <p><strong>Preço:</strong> R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>
    <p><strong>Catálogo:</strong> <?= htmlspecialchars($produto['catalogo']) ?></p>
    
    <p><strong>Sabores:</strong>
        <?= !empty($sabores) ? implode(', ', array_column($sabores, 'nome')) : 'Nenhum sabor associado' ?>
    </p>
<?php endif; ?>
