<?php
require '../../vendor/autoload.php';;
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
<div id=dashboard>
        <img id="logo" src="<?= ASSETS?>image/img.png">
        <h1 id="login">Faça seu login</h1>
</div>      
<div class="form">
    <form>
    <input type="email" placeholder="E-mail ou CPF/CNPJ">
    <input type="password" placeholder="Senha">
    <div id="form" class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Lembre-me</label>
      </div>
      <button id="form" type="submit" class="btn btn-success" href="<?= URL."index.php?pg=home"?>">Entrar</button>
      <input id="cad" type="submit" href="<?= URL."index.php?pg=home"?>" class="btn" value="Cadastrar">
    </form>


</div>
<div class="rodape">
    <p id="rod">www.TechSuplementos.com.br</p>
</div>
</body>

</html>