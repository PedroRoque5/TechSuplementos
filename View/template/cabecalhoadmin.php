<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ASSETS ?>css/cabecalho.css" rel="stylesheet">
    <link href="<?= ASSETS ?>css/resultado.css" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <title>Tech Suplementos</title>
</head>

<body>
    <!-- CABEÇALHO -->
    <div id="dashboard">
        <img id="logo" src="<?= ASSETS ?>image/Techlogo.png">
       
         <nav id="menu">
        <ul id="principal">
            <li id="unico"><a href="<?= URL . "index.php?pg=homeadmin" ?>">Home</a></li>
            <li id="unico"><a href="<?= URL . "index.php?pg=suporteadmin" ?>">Suporte</a></li>
            <button class="dropbtn"> <i id="baricon" data-lucide="menu"></i></button>
            <div id="sub">
                <nav id="submenu">
                    <ul class="dropdown-menu" id="navcascata">
                        <li class="cascata"><a class="dropdown-item" href="<?= URL . "index.php?pg=perfiladmin" ?>"><i id="perfil" data-lucide="user"></i>Perfil</a></li>
                        <li class="cascata"><a class="dropdown-item" href="<?= URL . "index.php?pg=configadmin" ?>"><i id="settings" data-lucide="settings"></i>Configurações<br></a></li>
                        <li class="cascata"><a class="dropdown-item" href="<?= URL . "index.php?pg=produto" ?>"><i id="produto"data-lucide="shopping-basket"></i>Cadastrar Produto<br></a></li>
                        <li class="cascata"><a class="dropdown-item" href="<?= URL . "index.php?pg=sistemaestoque" ?>"><i id="estoque" data-lucide="store"></i>&nbsp;&nbsp;Gerenciar estoque<br></a></li>
                    </ul>
                </nav>
            </div>
        </ul>
    </nav>
