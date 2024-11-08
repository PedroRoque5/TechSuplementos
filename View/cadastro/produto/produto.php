<link href="<?= ASSETS ?>css/produto.css" rel='stylesheet'>
 <div class="form">
  <h1 Class="Cad">Cadastre o seu produto:</h1>
   <form id="Cadastro">
     <div><input type="text" id="nome" placeholder="Nome do Produto"></div>
     <div><input type="text" id="Produto" placeholder="Descrição do Produto"></div>
     <div><input type="number" id="nome" placeholder="R$"></div>
     <button class="btn btn-success" href="<?= URL . 'index.php?pg=login' ?>">Cadastrar</button>
     <a href="<?= URL . "index.php?pg=home" ?>" class="btn btn-input">Cancelar</a>
   </form>
   