<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Captura os dados do formulário
    $produto_nome = $_POST['produto_nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $catalogo = $_POST['catalogo'];
    $sabores_selecionados = $_POST['sabores'] ?? []; // Sabores digitados pelo usuário

    // Inicializar variáveis para imagem
    $img_name = null;
    $img_dir = __DIR__ . '/uploads/';



    
    // Cria a pasta caso não exista
    if (!is_dir($img_dir)) {
        mkdir($img_dir, 0777, true);
    }

    // Verifica e move a imagem enviada
    if (isset($_FILES['produto_img']) && $_FILES['produto_img']['error'] == 0) {
        $extensao = pathinfo($_FILES['produto_img']['name'], PATHINFO_EXTENSION);
        $img_name = uniqid() . '.' . $extensao;
        $destino = $img_dir . $img_name;

        if (!move_uploaded_file($_FILES['produto_img']['tmp_name'], $destino)) {
            echo "Erro ao salvar a imagem.";
            exit;
        }
    }

    // Importa a conexão com o banco de dados
    require_once '../TechSuplementos/TechSuplementos/DAO/Conexao.php';

    try {
        $conexao = new Conexao();

        // Insere o produto
        $query = "INSERT INTO produtos (nome, descricao, preco, catalogo, imagem) 
                  VALUES (:produto_nome, :descricao, :preco, :catalogo, :imagem)";

        $params = [
            ':produto_nome' => $produto_nome,
            ':descricao' => $descricao,
            ':preco' => $preco,
            ':catalogo' => $catalogo,
            ':imagem' => $img_name
        ];

        $produtoId = $conexao->inserir($query, $params);

        // Insere sabores e relaciona com o produto
        if ($produtoId && !empty($sabores_selecionados)) {
            foreach ($sabores_selecionados as $nome_sabor) {
                $nome_sabor = trim($nome_sabor);
                if ($nome_sabor === '') continue;

                // Verifica se o sabor já existe
                $query_verifica = "SELECT id FROM sabores WHERE nome = :nome";
                $params_verifica = [':nome' => $nome_sabor];
                $resultado = $conexao->buscar($query_verifica, $params_verifica);

                if (empty($resultado)) {
                    // Insere novo sabor
                    $query_inserir_sabor = "INSERT INTO sabores (nome) VALUES (:nome)";
                    $id_sabor = $conexao->inserir($query_inserir_sabor, [':nome' => $nome_sabor]);
                } else {
                    $id_sabor = $resultado[0]['id'];
                }

                // Relaciona produto com sabor
                $query_relacao = "INSERT INTO produto_sabor (id_produto, id_sabor) VALUES (:id_produto, :id_sabor)";
                $params_relacao = [
                    ':id_produto' => $produtoId,
                    ':id_sabor' => $id_sabor
                ];
                $conexao->inserir($query_relacao, $params_relacao);
            }
        }

        // Sucesso!
        echo "<script>
            alert('Produto cadastrado com sucesso!');
            window.location.href='" . URL . "index.php?pg=produto';
        </script>";
        exit;

    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>
