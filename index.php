<?php 
ob_start();
//Requerimento para funcionamento
require './vendor/autoload.php';
require_once './config_serve.php';
//Variavel para receber uma página, caso não receba, apresenta a tela home
$pagina = isset($_GET['pg']) ? $_GET['pg'] : 'home';

include_once './View/template/cabecalho.php';

switch ($pagina) {
    case 'login': header("Location:".URL."View/login/index.php")  ; exit; 
    case 'home': include_once './View/home/index.php'; break;
    case 'suporte': include_once './View/menu/suporte/index.php'; break;
    case 'carrinho': include_once './View/menu/carrinho/index.php'; break;
    case 'top5': include_once './View/menu/top5/index.php'; break;
    case 'novidades': include_once './View/menu/novidades/index.php'; break;
    case 'proteina': include_once './View/menu/proteina/index.php'; break;
    case 'creatina': include_once './View/menu/creatina/index.php'; break;
    case 'pre': include_once './View/menu/pre/index.php'; break;
    case 'metas': include_once './View/menu/metas/index.php'; break;
    case 'perfil': include_once './View/menu/perfil/index.php'; break;
    case 'config': include_once './View/menu/config/index.php'; break;
    case 'saiba': include_once './View/saiba/index.php'; break;
    case 'pessoa': include_once './View/cadastro/index.php'; break;
    case 'cad': include_once './View/cadastro/cadastrar.php'; break;
    case 'produto': include_once './View/cadastro/produto/produto.php'; break;
    case 'marca': include_once './View/cadastro/produto/marca.php'; break;
    case 'perguntar': include_once './View/cadastro/produto/pergunta.php'; break;

    default:
    include_once './View/error/index.php'; break;
        break;
}

include_once './View/template/rodape.php';

ob_end_flush();