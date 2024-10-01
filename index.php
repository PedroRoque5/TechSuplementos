<?php 

//Requerimento para funcionamento
require './vendor/autoload.php';
require_once './config_serve.php';
//Variavel para receber uma página, caso não receba, apresenta a tela home
$pagina = isset($_GET['pg']) ? $_GET['pg'] : 'home';

include_once './View/template/cabecalho.php';

switch ($pagina) {
    case 'home': include_once './View/home/index.php'; break;
    case 'login': include_once './View/login/index.php'; break;
    case 'cadastro-pessoa': include_once './View/cadastro/pessoa/index.php'; break;
    case 'cadastro-produto': include_once './View/cadastro/prazo/index.php'; break;
    case 'cadastro-tarefa': include_once './View/cadastro/tarefa/index.php'; break;
    
    default:
    include_once './View/error/404.php'; break;
        break;
}

include_once './View/template/rodape.php';