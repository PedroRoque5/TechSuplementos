<link href="<?= ASSETS ?>css/produto.css" rel="stylesheet"> 

<?php
require_once '../TechSuplementos/TechSuplementos/DAO/Conexao.php';

$produto = null;
$sabores = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['buscar_produto_nome'])) {
    $produto_nome = $_POST['buscar_produto_nome'];

    try {
        $conexao = new Conexao();

        // Buscar produto
        $query = "SELECT * FROM produtos WHERE nome = :produto_nome";
        $params = [':produto_nome' => $produto_nome];
        $resultado = $conexao->buscar($query, $params);

        if (!empty($resultado)) {
            $produto = $resultado[0];

            // Buscar sabores relacionados ao produto via tabela produto_sabor
            $querySabores = "
                SELECT s.nome 
                FROM sabores s
                INNER JOIN produto_sabor ps ON ps.id_sabor = s.id
                WHERE ps.id_produto = :id_produto
            ";
            $saboresResult = $conexao->buscar($querySabores, [':id_produto' => $produto['id']]);
            foreach ($saboresResult as $sabor) {
                $sabores[] = $sabor['nome'];
            }

        } else {
            echo "<script>alert('Produto não encontrado.');</script>";
        }

    } catch (Exception $e) {
        echo "<script>alert('Erro: " . $e->getMessage() . "');</script>";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['atualizar_produto_nome'])) {
    $produto_nome = $_POST['atualizar_produto_nome'];
    $descricao = $_POST['descricao'];
    $preco = str_replace(',', '.', $_POST['preco']); // Aqui é a conversão da vírgula para ponto
    $catalogo = $_POST['catalogo'];
    $saboresAtualizados = $_POST['sabores'] ?? [];
    $status = isset($_POST['status']) ? true : false; // Verifica se o checkbox está marcado

    try {
        $conexao = new Conexao();

        // Atualizar produto
        $query = "UPDATE produtos 
                 SET descricao = :descricao, 
                     preco = :preco, 
                     catalogo = :catalogo, 
                     status = :status,
                     estoque_atual = :estoque_atual,
                     estoque_minimo = :estoque_minimo 
                 WHERE nome = :produto_nome";
        $params = [
            ':produto_nome' => $produto_nome,
            ':descricao' => $descricao,
            ':preco' => $preco,
            ':catalogo' => $catalogo,
            ':status' => $status,
            ':estoque_atual' => $produto['estoque_atual'],
            ':estoque_minimo' => $produto['estoque_minimo']
        ];
        $conexao->atualizar($query, $params);

        // Buscar ID do produto
        $produto_id = $conexao->buscar("SELECT id FROM produtos WHERE nome = :produto_nome", [':produto_nome' => $produto_nome])[0]['id'];

        // Deletar relações antigas
        $conexao->deletar("DELETE FROM produto_sabor WHERE id_produto = :id_produto", [':id_produto' => $produto_id]);

        foreach ($saboresAtualizados as $saborNome) {
            $saborNome = trim($saborNome);
            if (!empty($saborNome)) {
                // Verifica se o sabor já existe
                $sabor = $conexao->buscar("SELECT id FROM sabores WHERE nome = :nome", [':nome' => $saborNome]);
                if (empty($sabor)) {
                    // Inserir novo sabor
                    $conexao->inserir("INSERT INTO sabores (nome) VALUES (:nome)", [':nome' => $saborNome]);
                    $sabor_id = $conexao->buscar("SELECT id FROM sabores WHERE nome = :nome", [':nome' => $saborNome])[0]['id'];
                } else {
                    $sabor_id = $sabor[0]['id'];
                }

                // Relacionar com produto
                $conexao->inserir("INSERT INTO produto_sabor (id_produto, id_sabor) VALUES (:id_produto, :id_sabor)", [
                    ':id_produto' => $produto_id,
                    ':id_sabor' => $sabor_id
                ]);
            }
        }

        echo "<script>alert('Produto atualizado com sucesso!'); window.location.href='" . URL . "index.php?pg=produto';</script>";
        exit;

    } catch (Exception $e) {
        echo "<script>alert('Erro: " . $e->getMessage() . "');</script>";
    }
}
?>

<!-- Formulário de busca -->
<form class="atualizar" action="<?= URL . 'index.php?pg=atualiza_produto' ?>" method="post">
    <input type="text" name="buscar_produto_nome" placeholder="Nome do Produto" required>
    <button type="submit" class="btn btn-primary">Buscar</button>
</form>

<?php if (!empty($produto)) : ?>
    <form class="atualizar" action="<?= URL . 'index.php?pg=atualiza_produto' ?>" method="post">
        <input type="hidden" name="atualizar_produto_nome" value="<?= htmlspecialchars($produto['nome']) ?>">
        <input type="text" name="descricao" placeholder="Descrição" value="<?= htmlspecialchars($produto['descricao']) ?>" required>
        
        <!-- Campo de preço atualizado -->
        <input type="text" name="preco" placeholder="Preço" value="<?= htmlspecialchars(number_format($produto['preco'], 2, ',', '')) ?>" required>
        <small style="font-size: 12px; color: #f5f5f5;">Use vírgula para os centavos (ex: 49,90)</small>

        <select name="catalogo" required>
            <option value="creatina" <?= $produto['catalogo'] == 'creatina' ? 'selected' : '' ?>>Creatina</option>
            <option value="whey" <?= $produto['catalogo'] == 'whey' ? 'selected' : '' ?>>Whey</option>
            <option value="pre_treino" <?= $produto['catalogo'] == 'pre_treino' ? 'selected' : '' ?>>Pré-Treino</option>
        </select>

        <!-- Campo para controlar o status do produto -->
        <label>
            Produto <?= $produto['status'] ? 'Em estoque' : 'Esgotado' ?>
            <input type="checkbox" name="status" <?= $produto['status'] ? 'checked' : '' ?>> Ativar/Desativar
        </label>

        <!-- Campos de sabores -->
        <div id="sabores-container">
            <?php foreach ($sabores as $sabor) : ?>
                <div class="sabor-input">
                    <input type="text" name="sabores[]" value="<?= htmlspecialchars($sabor) ?>">
                    <button type="button" onclick="removerSabor(this)">-</button>
                </div>
            <?php endforeach; ?>
            <div class="sabor-input">
                <input type="text" name="sabores[]" placeholder="Novo sabor">
                <button type="button" onclick="adicionarSabor()">+</button>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
    </form>
<?php endif; ?>

<script>
function adicionarSabor() {
    const container = document.getElementById('sabores-container');
    const div = document.createElement('div');
    div.classList.add('sabor-input');
    div.innerHTML = '<input type="text" name="sabores[]" placeholder="Novo sabor"> <button type="button" onclick="removerSabor(this)">-</button>';
    container.appendChild(div);
}

function removerSabor(botao) {
    botao.parentElement.remove();
}
</script>
