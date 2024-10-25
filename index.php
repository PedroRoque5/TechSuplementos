<?php 

//Requerimento para funcionamento
require './vendor/autoload.php';
require_once './config_serve.php';

//Variável para receber uma página, caso não receba, apresenta a tela home
$pagina = isset($_GET['pg']) ? $_GET['pg'] : 'home';

// Verifique a página antes de incluir cabeçalhos
switch ($pagina) {
    case 'login':
        header("Location:".URL."View/login/index.php");
        exit; // Certifique-se de usar exit após redirecionar
    case 'home':
        break; // Para 'home', não precisamos redirecionar
    case 'suporte': 
        include_once './View/menu/suporte/index.php'; break;
    case 'carrinho': 
        include_once './View/menu/carrinho/index.php'; break;
    case 'top5': 
        include_once './View/menu/top5/index.php'; break;
    case 'novidades': 
        include_once './View/menu/novidades/index.php'; break;
    case 'proteina': 
        include_once './View/menu/proteina/index.php'; break;
    case 'creatina': 
        include_once './View/menu/creatina/index.php'; break;
    case 'pre': 
        include_once './View/menu/pre/index.php'; break;
    case 'metas': 
        include_once './View/menu/metas/index.php'; break;
    case 'perfil': 
        include_once './View/menu/perfil/index.php'; break;
    case 'config': 
        include_once './View/menu/config/index.php'; break;
    case 'saiba': 
        include_once './View/saiba/index.php'; break;
    case 'pessoa': 
        include_once './View/cadastro/index.php'; break;
    
    default:
        include_once './View/error/index.php'; break;
}

// Inclua o cabeçalho depois de decidir a página
include_once './View/template/cabecalho.php';
include_once './View/template/rodape.php';
