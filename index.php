<?php
ob_start();
//Requerimento para funcionamento
require './vendor/autoload.php';
require_once './config_serve.php';
//Variavel para receber uma página, caso não receba, apresenta a tela home
$pagina = isset($_GET['pg']) ? $_GET['pg'] : 'home';

include_once './View/template/cabecalho.php';

switch ($pagina) {
    case 'login':
        header("Location:" . URL . "View/login/cliente/index.php");
        exit;
    case 'empresa':
        header("Location:" . URL . "View/login/administrador.php");
        exit;
    case 'confirmaLogin';
        include_once './View/login/cliente/validar_login.php';
        break;
    case 'home':
        include_once './View/home/index.php';
        break;
    case 'cliente_home';
        include_once './View/home/cliente/index.php';
        break;
    case 'suporte':
        include_once './View/menu/suporte/index.php';
        break;
    case 'carrinho':
        include_once './View/menu/carrinho/index.php';
        break;
    case 'top5':
        include_once './View/menu/top5/index.php';
        break;
    case 'novidades':
        include_once './View/menu/novidades/index.php';
        break;
    case 'proteina':
        include_once './View/menu/proteina/index.php';
        break;
    case 'creatina':
        include_once './View/menu/creatina/index.php';
        break;
    case 'pre':
        include_once './View/menu/pre/index.php';
        break;
    case 'metas':
        include_once './View/menu/metas/index.php';
        break;
    case 'perfil':
        include_once './View/menu/perfil/index.php';
        break;
    case 'config':
        include_once './View/menu/config/index.php';
        break;
    case 'saiba':
        include_once './View/saiba/index.php';
        break;
    case 'pessoa':
        include_once './View/cadastro/index.php';
        break;
    case 'cad':
        include_once './View/cadastro/cadastrar.php';
        break;
    case 'produto':
        include_once './View/cadastro/produto/produto.php';
        break;
    case 'marca':
        include_once './View/cadastro/produto/marca.php';
        break;
    case 'whey-fusion':
        include_once './View/menu/proteina/whey-fusion.php';
        break;
    case 'whey-protein-max':
        include_once './View/menu/proteina/whey-protein-max.php';
        break;
    case 'whey-protein-atlhetica':
        include_once './View/menu/proteina/whey-protein-atlhetica.php';
        break;
    case 'whey-pro-x':
        include_once './View/menu/proteina/whey-pro-x.php';
        break;
    case 'nutri-whey':
        include_once './View/menu/proteina/nutri-whey.php';
        break;
    case 'nitro-whey':
        include_once './View/menu/proteina/nitro-whey.php';
        break;
    case 'barra-growth':
        include_once './View/menu/proteina/barra-growth.php';
        break;
    case 'bar-integral':
        include_once './View/menu/proteina/bar-integral.php';
        break;
    case 'bar-supino':
        include_once './View/menu/proteina/bar-supino.php';
        break;
    case 'mywhey':
        include_once './View/menu/proteina/mywhey.php';
        break;
    case 'italac-whey':
        include_once './View/menu/proteina/italac-whey.php';
        break;
    case 'yopro':
        include_once './View/menu/proteina/yopro.php';
        break;
    case 'blackscull':
        include_once './View/menu/creatina/blackscull.php';
        break;
    case 'darklab':
        include_once './View/menu/creatina/darklab.php';
        break;
    case 'darkness':
        include_once './View/menu/creatina/darkness.php';
        break;
    case 'dux':
        include_once './View/menu/creatina/dux.php';
        break;
    case 'growth':
        include_once './View/menu/creatina/growth.php';
        break;
    case 'integral':
        include_once './View/menu/creatina/integral.php';
        break;
    case 'max':
        include_once './View/menu/creatina/max.php';
        break;
    case 'oficialfarma':
        include_once './View/menu/creatina/oficialfarma.php';
        break;
    case 'on':
        include_once './View/menu/creatina/on.php';
        break;
    case 'ronnie':
        include_once './View/menu/creatina/ronnie.php';
        break;
    case 'soldier':
        include_once './View/menu/creatina/soldier.php';
        break;
    case 'vegana':
        include_once './View/menu/creatina/vegana.php';
        break;
    case 'alterar':
        include_once './View/menu/config/alterar.php';
        break;
    case 'notificacoes':
        include_once './View/menu/config/notificacoes.php';
        break;
    case 'privacidade':
        include_once './View/menu/config/privacidade.php';
        break;
    case 'rastrear':
        include_once './View/menu/perfil/rastrear.php';
        break;
    case 'historico':
        include_once './View/menu/perfil/historico.php';
        break;
    case 'dados':
        include_once './View/menu/perfil/dados.php';
        break;
    case 'pagamento':
        include_once './View/compra/pagamento.php';
        break;
    case 'venom':
        include_once './View/menu/pre/venom.php';
        break;
    case 'pre_darkness':
        include_once './View/menu/pre/pre_darkness.php';
        break;
    case 'haze':
        include_once './View/menu/pre/haze.php';
        break;
    case 'insanity':
        include_once './View/menu/pre/insanity.php';
        break;
    case 'huger':
        include_once './View/menu/pre/huger.php';
        break;
    case 'egide':
        include_once './View/menu/pre/egide.php';
        break;
    case 'horus':
        include_once './View/menu/pre/horus.php';
        break;
    case 'oficial':
        include_once './View/menu/pre/oficial.php';
        break;
    case 'yeah':
        include_once './View/menu/pre/yeah.php';
        break;
    case 'warzone':
        include_once './View/menu/pre/warzone.php';
        break;
    case 'dark':
        include_once './View/menu/pre/dark.php';
        break;
    case 'hot':
        include_once './View/menu/pre/hot.php';
        break;
    case 'gold':
        include_once './View/menu/top5/gold.php';
        break;
    case 'beta':
        include_once './View/menu/top5/beta.php';
        break;
    case 'creatina-universal':
        include_once './View/menu/top5/creatina-universal.php';
        break;
    case 'arginine':
        include_once './View/menu/novidades/arginine.php';
        break;
    case 'whey-dark':
        include_once './View/menu/novidades/whey-dark.php';
        break;
    case 'function':
        include_once './app/controller/Descricao.js';
        break;
  case 'salva_produto':
            include_once './View/cadastro/produto/salvar_produto.php';
            break;

    default:
        include_once './View/error/index.php';
        break;
        break;
}

include_once './View/template/rodape.php';

ob_end_flush();
