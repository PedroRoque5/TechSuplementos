<link href="<?= ASSETS ?>css/produto.css" rel='stylesheet'>

<div class="form">
  <form id="Cadastro" action="<?= URL . 'index.php?pg=salva_produto' ?>" method="post" enctype="multipart/form-data">
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
