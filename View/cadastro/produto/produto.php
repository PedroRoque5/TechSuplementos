<link href="<?= ASSETS ?>css/produto.css" rel="stylesheet">

<div class="form">
    <!-- Formulário de Cadastro -->
    <form action="<?= URL . 'index.php?pg=salva_produto' ?>" method="post" enctype="multipart/form-data">
        <h1 class="Cad">Cadastre o seu produto:</h1>

        <div>
            <input type="text" id="produto_nome" name="produto_nome" placeholder="Nome do Produto" required>
        </div>

        <!-- Descrição -->
        <div>
            <textarea id="descricao" name="descricao" placeholder="Descrição do Produto" rows="5" style="width: 200px; resize: vertical;"></textarea>
        </div>

        <!-- Sabores dinâmicos -->
        <div id="sabores-container">
            <div class="sabor-input">
                <input type="text" name="sabores[]" placeholder="Informe um sabor">
                <button type="button" onclick="adicionarSabor()">+</button>
            </div>
        </div>

        <!-- Preço -->
        <div>
            <input type="text" id="preco" name="preco" placeholder="Preço (R$)">
            <small style="font-size: 12px; color: #666;">Use vírgula para separar os centavos (ex: 12,50)</small>
        </div>

        <!-- Catálogo -->
        <div>
            <select id="catalogo" name="catalogo" required>
                <option value="" disabled selected>Tipo de produto</option>
                <option value="creatina">Creatina</option>
                <option value="whey">Whey</option>
                <option value="pre_treino">Pré-Treino</option>
            </select>
        </div>

        <!-- Imagem -->
        <div id="foto">
            <input type="file" id="produto_img" name="produto_img" accept="image/*">
        </div>

        <!-- Botões -->
        <button type="submit" class="btn btn-success">Cadastrar</button>
        <a href="<?= URL . 'index.php?pg=home' ?>" class="btn btn-input">Cancelar</a>
    </form>
</div>

<div class="crud-buttons">
    <!-- Atualizar Produto -->
    <form action="<?= URL . 'index.php?pg=atualiza_produto' ?>" method="post">
        <button type="submit" class="btn btn-warning">Atualizar Produto</button>
    </form>

    <!-- Formulário para deletar um produto pelo nome -->
    <form action="<?= URL . 'index.php?pg=deleta_produto' ?>" method="post">
        <input type="text" name="deletar_produto_nome" placeholder="Nome do Produto" required>
        <button type="submit" class="btn btn-danger">Deletar</button>
    </form>
</div>

<!-- Script para adicionar/remover campos de sabor -->
<script>
function adicionarSabor() {
    const container = document.getElementById('sabores-container');
    const div = document.createElement('div');
    div.classList.add('sabor-input');
    div.innerHTML = `
        <input type="text" name="sabores[]" placeholder="Informe um sabor">
        <button type="button" onclick="removerSabor(this)">-</button>
    `;
    container.appendChild(div);
}

function removerSabor(botao) {
    botao.parentElement.remove();
}
</script>
