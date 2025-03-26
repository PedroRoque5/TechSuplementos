<link href="<?= ASSETS ?>css/produto.css" rel="stylesheet">
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

// Verificar se o formulário de atualização foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['atualizar_produto_nome'])) {
    
    // Captura os dados do formulário
    $produto_nome = $_POST['atualizar_produto_nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $catalogo = $_POST['catalogo'];
    
    try {
        // Conectar com o banco de dados
        $conexao = new Conexao();
        
        // Query SQL para atualizar o produto
        $query = "UPDATE produtos SET descricao = :descricao, preco = :preco, catalogo = :catalogo WHERE nome = :produto_nome";
        
        // Parâmetros para a query
        $params = [
            ':produto_nome' => $produto_nome,
            ':descricao' => $descricao,
            ':preco' => $preco,
            ':catalogo' => $catalogo
        ];
        
        // Executar a atualização
        $resultado = $conexao->atualizar($query, $params);
        
        // Verificar se a atualização foi bem-sucedida
        if ($resultado) {
            echo "<script>alert('Produto atualizado com sucesso!'); window.location.href='" . URL . "index.php?pg=produto';</script>";
            exit;
        } else {
            echo "<script>alert('Erro ao atualizar o produto.');</script>";
        }
    } catch (Exception $e) {
        echo "<script>alert('Erro: " . $e->getMessage() . "');</script>";
    }
}
?>

<!-- Formulário para buscar um produto -->
<form  class="atualizar" action="<?= URL . 'index.php?pg=atualiza_produto' ?>" method="post">
    <input type="text" name="buscar_produto_nome" placeholder="Nome do Produto" required>
    <button type="submit" class="btn btn-primary">Buscar</button>
</form>

<?php if (!empty($produto)) : ?>
    <!-- Formulário para atualizar um produto -->
    <form class="atualizar" action="<?= URL . 'index.php?pg=atualiza_produto' ?>" method="post">
        <input type="hidden" name="atualizar_produto_nome" value="<?= htmlspecialchars($produto['nome']) ?>">
        <input type="text" name="descricao" placeholder="Descrição" value="<?= htmlspecialchars($produto['descricao']) ?>" required>
        <input type="number" name="preco" placeholder="Preço" value="<?= htmlspecialchars($produto['preco']) ?>" required>
        <select name="catalogo" required>
            <option value="creatina" <?= $produto['catalogo'] == 'creatina' ? 'selected' : '' ?>>Creatina</option>
            <option value="whey" <?= $produto['catalogo'] == 'whey' ? 'selected' : '' ?>>Whey</option>
            <option value="pre_treino" <?= $produto['catalogo'] == 'pre_treino' ? 'selected' : '' ?>>Pré-Treino</option>
        </select>
        <button type="submit" class="btn btn-success">Atualizar</button>
    </form>
<?php endif; ?>
    