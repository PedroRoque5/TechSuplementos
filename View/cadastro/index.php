<link href="<?= ASSETS ?>css/pessoa.css" rel='stylesheet'>
<div class="container">
  <div id="cad">
    <h1>Cadastre o seu Usuário:</h1>
  </div>

  <form class="form" action="<?= URL . 'index.php?pg=cad' ?>" method="POST">
    <div><input type="email" name="email" id="email" placeholder="E-mail*" required></div>
    <div><input type="text" name="nome" id="nome" placeholder="Nome*" required></div>
    <div><input type="number" name="cpf" id="cpf" placeholder="CPF*" maxlength="11" required></div>
    <div><input type="tel" name="telefone" id="telefone" placeholder="Telefone*" maxlength="14" required></div>
    <div><input type="password" name="senha" id="senha" placeholder="Senha" required></div>
    <div class="botoes">
    <button class="btn btn-success">Cadastrar</button>
    <a href="<?= URL . "index.php?pg=home" ?>" class="btn btn-input">Cancelar</a>
    </div>
  </form>
</div>
