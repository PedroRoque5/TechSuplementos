<?php
require '../../../vendor/autoload.php';
require_once '../../../config_serve.php';
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
    <a href="<?= URL ?>index.php?pg=login" class="active">Login Usuário</a> |
    <a href="<?= URL ?>index.php?pg=empresa">Login Empresa</a>
  </div>

  <div class="container">
    <div id="login">Faça seu login</div>
    <div class="form">
      <form action="<?= URL . 'index.php?pg=confirmaLogin' ?>" method="POST">
        <div id="email"><input name="email" type="email" placeholder="E-mail"></div>
        <div><input name="senha" type="password" placeholder="Senha"></div>
        <div id="form">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Lembre-se de mim</label>
        </div>
        <button class="btn btn-success" type="submit">Entrar</button>
        <a href="<?= URL . "index.php?pg=pessoa" ?>" class="btn btn-input">Cadastrar</a>
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