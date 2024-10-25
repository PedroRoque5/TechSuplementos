 <link href="<?= ASSETS ?>css/pessoa.css" rel='stylesheet'>
<div class="form">
    <form>
    <div id="email"><input type="email" placeholder="E-mail*"></div>
    <div><input type="text" placeholder="Nome*"></div>
    <div><input type="number" placeholder="CPF*"></div>
    <div><input type="number" placeholder="Telefone*"></div>
    <div><input type="password" placeholder="Senha"></div>
      <a class="btn btn-success" href="<?= URL . 'index.php?pg=login' ?>">Login</a>
      <a  href="<?= URL . "index.php?pg=home"?>"class="btn btn-input">Cancelar</a>
    </form>
</div>

