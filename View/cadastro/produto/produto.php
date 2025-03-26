<link href="<?= ASSETS ?>css/produto.css" rel="stylesheet">

<div class="form">
    <!-- Formulário de Cadastro -->
    <form action="<?= URL . 'index.php?pg=salva_produto' ?>" method="post" enctype="multipart/form-data">
        <h1 class="Cad">Cadastre o seu produto:</h1>

        <div><input type="text" id="produto_nome" name="produto_nome" placeholder="Nome do Produto" required></div>
        <div><input type="text" id="descricao" name="descricao" placeholder="Descrição do Produto"></div>
        <div><input type="text" id="sabor" name="sabor" placeholder="Quais os sabores"></div>
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
</div>
