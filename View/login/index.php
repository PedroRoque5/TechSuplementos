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
<div id=dashboard>
        <img id="logo" src="<?= ASSETS?>image/img.png">
        <h1 id="login">Faça seu login</h1>
</div>      

<img id="banner" src="<?= ASSETS?>image/anuncio.png">

<div class="form">
    <form>
    <div id="email"><input type="email" placeholder="E-mail ou CPF/CNPJ"></div>
    <div><input type="password" placeholder="Senha"></div>
    <div id="form">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Lembre-me</label>
      </div>
      <a class="btn btn-success" href="<?= URL . 'index.php?pg=home' ?>">Entrar</a>
      <a  href="<?= URL . "index.php?pg=pessoa"?>"class="btn btn-input">Cadastrar</a>
    </form>


</div>
<div class="rodape"> 
    <p id="rod">www.TechSuplementos.com.br</p>
</div>
</body>

</html>