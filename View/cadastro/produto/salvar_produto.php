<?php
// Verifique se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Captura os dados do formulário
    $produto_nome = $_POST['produto_nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $sabor = $_POST['sabor'];
    $catalogo = $_POST['catalogo'];

    // Inicializar variáveis para imagem
    $img_name = null;
    $img_dir = __DIR__ . '/uploads/'; // Caminho absoluto para evitar erros
    
    // Criar a pasta caso não exista
    if (!is_dir($img_dir)) {
        mkdir($img_dir, 0777, true);
    }
    
    // Verificar se o arquivo de imagem foi enviado e se não houve erro
    if (isset($_FILES['produto_img']) && $_FILES['produto_img']['error'] == 0) {
        // Captura o nome original da imagem
        $extensao = pathinfo($_FILES['produto_img']['name'], PATHINFO_EXTENSION);
        $img_name = uniqid() . '.' . $extensao; // Nome único para evitar conflitos
        $destino = $img_dir . $img_name;
    
        // Mover a imagem para o diretório de uploads
        if (!move_uploaded_file($_FILES['produto_img']['tmp_name'], $destino)) {
            echo "Erro ao salvar a imagem.";
            exit;
        }
    }
    
    // Importando a classe Conexao
    require_once '../TechSuplementos/TechSuplementos/DAO/Conexao.php';

    // Inserir os dados no banco de dados
    try {
        // Conectar com o banco de dados
        $conexao = new Conexao();

        // Query SQL para inserir o produto
        $query = "INSERT INTO produtos (nome, descricao, preco, sabor, catalogo, imagem) 
                  VALUES (:produto_nome, :descricao, :preco, :sabor, :catalogo, :imagem)";

        // Preparar os parâmetros para a query
        $params = [
            ':produto_nome' => $produto_nome,
            ':descricao' => $descricao,
            ':preco' => $preco,
            ':sabor' => $sabor,
            ':catalogo' => $catalogo,
            ':imagem' => $img_name // Salvar o nome da imagem
        ];

        // Chamar o método de inserção na classe Conexao
        $produtoId = $conexao->inserir($query, $params);

        // Verificar se o produto foi inserido
        if ($produtoId) {
            echo "<script>
                alert('Produto cadastrado com sucesso!');
                window.location.href='" . URL . "index.php?pg=produto';
            </script>";
            exit;
        } else {
            echo "Erro ao cadastrar produto.";
        }
    } catch (Exception $e) {
        // Exibir erro caso ocorra
        echo "Erro: " . $e->getMessage();
    }
}
?>

<!-- HTML para o formulário de cadastro de produto -->
<link href="<?= ASSETS ?>css/produto.css" rel='stylesheet'>

<div class="form">
    <form id="Cadastro" action="<?= URL . 'index.php?pg=salvar_produto' ?>" method="post" enctype="multipart/form-data">
        <h1 class="Cad">Cadastre o seu produto:</h1>

        <div><input type="text" id="produto_nome" name="produto_nome" placeholder="Nome do Produto" required></div>
        <div><input type="text" id="descricao" name="descricao" placeholder="Descrição do Produto"></div>
        <div><input type="number" id="preco" name="preco" placeholder="Preço (R$)"></div>
        <div><input type="text" id="sabor" name="sabor" placeholder="Qual o sabor"></div>
        <div>
            <select id="catalogo" name="catalogo" required>
                <option value="" disabled selected>Tipo de produto</option>
                <option value="creatina">Creatina</option>
                <option value="whey">Whey</option>
                <option value="pre_treino">Pré-Treino</option>
            </select>
        </div>

        <div id="foto">
            <input type="file" id="produto_img" name="produto_img" accept="image/*">
        </div>

        <button type="submit" class="btn btn-success">Cadastrar</button>
        <a href="<?= URL . "index.php?pg=home" ?>" class="btn btn-input">Cancelar</a>
    </form>
</div>