<link href="<?= ASSETS ?>css/produto.css" rel='stylesheet'>
<div class="form">
  <form id="Cadastro" action="<?= URL . 'index.php?pg=login' ?>" method="post">
    <h1 Class="Cad">Cadastre o sua empresa:</h1>
    <div id="email"><input type="email" id="email" placeholder="E-mail*"></div>
    <div><input type="text" id="nome" placeholder="Nome da Empresa"></div>
    <div><input type="number" id="cpf" placeholder="CNPJ*" maxlength="14" oninput="if(this.value.length > 14) this.value = this.value.slice(0, 14)"></div>
    <div><input type="text" id="nome" placeholder="País de Origem"></div>
    <div><input type="date" id="number" placeholder="Ano de Fundação"></div>
    <div><input type="password" id="senha" placeholder="Senha"></div>
    <button class="btn btn-success">Cadastrar</button>
    <a href="<?= URL . "index.php?pg=home" ?>" class="btn btn-input">Cancelar</a>
  </form>