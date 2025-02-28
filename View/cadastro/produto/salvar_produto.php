<?php
// Verifique se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Captura os dados do formulário
    $produto_nome = $_POST['produto_nome'];
    $pais_origem = $_POST['pais_origem'];
    $ano_fundacao = $_POST['ano_fundacao'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $catalogo = $_POST['catalogo'];

    // Inicializar variáveis para imagem
    $img_name = null;
    $img_dir = 'uploads/'; // Diretório para salvar as imagens

    // Verificar se o arquivo de imagem foi enviado e se não houve erro
    if (isset($_FILES['produto_img']) && $_FILES['produto_img']['error'] == 0) {
        // Captura o nome temporário do arquivo
        $img_temp = $_FILES['produto_img']['tmp_name'];
        // Captura o nome original da imagem
        $img_name = $_FILES['produto_img']['name'];
        // Mover a imagem para o diretório de uploads
        if (!move_uploaded_file($img_temp, $img_dir . $img_name)) {
            // Se houver erro no upload da imagem
            echo "Erro ao salvar a imagem.";
            exit;
        }
    }

    // Importando a classe Conexao
    require_once '../TechSuplementos/TechSuplementos/DAO/Conexao.php'; // Verifique se o caminho está correto

    // Inserir os dados no banco de dados
    try {
        // Conectar com o banco de dados
        $conexao = new Conexao();

        // Query SQL para inserir o produto
        $query = "INSERT INTO produtos (nome, pais_origem, ano_fundacao, descricao, preco, catalogo, imagem) 
                  VALUES (:produto_nome, :pais_origem, :ano_fundacao, :descricao, :preco, :catalogo, :imagem)";

        // Preparar os parâmetros para a query
        $params = [
            ':produto_nome' => $produto_nome,
            ':pais_origem' => $pais_origem,
            ':ano_fundacao' => $ano_fundacao,
            ':descricao' => $descricao,
            ':preco' => $preco,
            ':catalogo' => $catalogo,
            ':imagem' => $img_name // Salvar o nome da imagem
        ];

        // Chamar o método de inserção na classe Conexao
        $produtoId = $conexao->inserir($query, $params);

        // Verificar se o produto foi inserido
        if ($produtoId) {
            echo "Produto cadastrado com sucesso!";
            // Pode redirecionar o usuário para a página de produtos ou outra página
            header("Location: " . URL . "index.php?pg=produto");
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
        <div><input type="text" id="pais_origem" name="pais_origem" placeholder="País de Origem"></div>
        <div><input type="date" id="ano_fundacao" name="ano_fundacao" placeholder="Ano de Fundação"></div>
        <div><input type="text" id="descricao" name="descricao" placeholder="Descrição do Produto"></div>
        <div><input type="number" id="preco" name="preco" placeholder="Preço (R$)"></div>

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
