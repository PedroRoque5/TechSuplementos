<?php
require '../../vendor/autoload.php';
require_once '../../config_serve.php';
?>

<!DOCTYPE html>
<html lang='pt-br'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <title>Tech Suplementos</title>
  <link href="<?= ASSETS ?>css/login.css" rel='stylesheet'>
</head>

<body>
  <div id="dashboard">
    <img id="logo" src="<?= ASSETS ?>image/Techlogo.png">
  </div>

  <div class="login-switch">
    <a href="<?= URL ?>index.php?pg=login">Login Usuário</a> |
    <a href="<?= URL ?>index.php?pg=empresa" class="active">Login Empresa</a>
  </div>

  <div class="container">
    <div id="login">Faça seu login</div>
    <div class="form">
      <form method="POST" action="<?= URL . 'View/login/validar_login_empresa.php' ?>">
        <div id="email">
          <input type="email" name="email" placeholder="E-mail" required>
        </div>
        <div>
          <input type="password" name="senha" placeholder="Senha" required>
        </div>
        <div id="form">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Lembre-me</label>
        </div>
        <button type="submit" class="btn btn-success">Entrar</button>
        <a href="<?= URL . "index.php?pg=marca" ?>" class="btn btn-input">Cadastrar</a>
      </form>
    </div>
  </div>
  <style>
    .login-switch {
      text-align: center;
      margin-bottom: 20px;
    }
    .login-switch a {
      color: #d72638;
      text-decoration: none;
      font-weight: bold;
      margin: 0 10px;
    }
    .login-switch a.active {
      text-decoration: underline;
    }
  </style>
</body>

</html>
