<?php
ob_start();
//Requerimento para funcionamento
require './vendor/autoload.php';
require_once './config_serve.php';

// Iniciar sessão para verificar o nível de acesso
session_start();

//Variavel para receber uma página, caso não receba, apresenta a tela home
$pagina = isset($_GET['pg']) ? $_GET['pg'] : 'home';

// Se não há parâmetro pg, verificar o nível de acesso para determinar a home correta
if (!isset($_GET['pg'])) {
    if (isset($_SESSION['nivel_acesso']) && $_SESSION['nivel_acesso'] === 'empresa') {
        $pagina = 'homeadmin';
    } else {
        $pagina = 'home';
    }
}

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
        // Se for usuário comum ou não logado, mostrar home do usuário
        include_once './View/home/cliente/index.php';
        break;
    case 'homeadmin':
        include_once './View/home/administrador/index.php';
        break;
    case 'suporte':
        include_once './View/menu/suporte/index.php';
        break;
    case 'suporteadmin':
        include_once './View/menu/suporte/indexadmin.php';
        break;
    case 'carrinho':
        include_once './View/menu/carrinho/index.php';
        break;
    case 'salvar_carrinho':
        include_once './app/controller/adicionar_carrinho.php';
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
    case 'perfiladmin':
        include_once './View/menu/perfil/indexadmin.php';
        break;
    case 'config':
        include_once './View/menu/config/index.php';
        break;
    case 'configadmin':
        include_once './View/menu/config/indexadmin.php';
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
    case 'cademp':
        include_once './View/cadastro/cadastrar_empresa.php';
        break;
    case 'produto':
        include_once './View/cadastro/produto/produto.php';
        break;
    case 'marca':
        include_once './View/cadastro/produto/marca.php';
        break;
    case 'alterar':
        include_once './View/menu/config/alterar.php';
        break;
    case 'notificacoes':
        include_once './View/menu/config/notificacoes.php';
        break;
    case 'notificacoesadmin':
        include_once './View/menu/config/notificacoesadmin.php';
        break;
    case 'privacidade':
        include_once './View/menu/config/privacidade.php';
        break;
    case 'privacidadeadmin':
        include_once './View/menu/config/privacidadeadmin.php';
        break;
    case 'historico':
        include_once './View/menu/perfil/historico.php';
        break;
    case 'dados':
        include_once './View/menu/perfil/dados.php';
        break;
    case 'dadosadmin':
        include_once './View/menu/perfil/dadosadmin.php';
        break;
    case 'pagamento':
        include_once './View/compra/pagamento.php';
        break;
    case 'ValidarPagamento':
        include_once './View/compra/processa_pagamento.php';
        break;
    case 'descricao':
        include_once './View/menu/novidades/descricao.php';
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
    case 'deleta_produto':
        include_once './View/cadastro/produto/deleta_produto.php';
        break;
    case 'atualiza_produto':
        include_once './View/cadastro/produto/atualiza_produto.php';
        break;
    case 'busca_produto':
        include_once './View/cadastro/produto/busca_produto.php';
        break;
    case 'sistemaestoque':
        error_log('Carregando sistemaestoque.php');
        include_once './View/menu/estoque/sistemaestoque.php';
        break;
    case 'salvar_estoque':
        error_log('Carregando salvar_estoque.php');
        error_log('POST data: ' . print_r($_POST, true));
        include_once './View/menu/estoque/salvar_estoque.php';
        break;
    case 'verificar_estoque':
        include_once './verificar_estoque.php';
        break;
    case 'resultado':
        include_once './View/menu/pesquisa/index.php';
        break;
    case 'sair':
        include_once './View/menu/perfil/sair.php';
        break;
    case 'sairadmin':
        include_once './View/menu/perfil/sairadmin.php';
        break;

    default:
        include_once './View/error/index.php';
        break;
}

ob_end_flush();
