<?php 

echo "Página principal";

//Requerimento para funcionamento
require '.vedor/autoload.php';
require_once './config_serve.php';
//Variavel para receber uma página, caso não receba, apresenta a tela home
$pagina = isset($_GET['pg']) ? $_GET['pg'] : 'home';

include_once '.View/tamplate/cabecalho.php';

/***
 * 
 * Switch Case para as páginas
 * 
 * Utilizar parametro ($pagina)
 * 
 */

include_once './View/template/rodape.php';