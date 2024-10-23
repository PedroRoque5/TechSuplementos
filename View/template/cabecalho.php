<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ASSETS ?>css/cabecalho.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>Tech Suplementos</title>
</head>

<body>
    <div id=dashboard>
        <img id="logo" src="<?= ASSETS ?>image/img.png">
        <nav id="navmenu">
            <form id="formmenu">
                <input id="search" type="search" placeholder="  O que você procura?">
                <button id="lupa" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </nav>
        <nav id="menu">
            <ul id="principal">
                <li id="unico"><a href="<?= URL . "index.php?pg=home" ?>"><i class="fa-solid fa-house"></i>&nbsp;Home</a></li>
                <li id="unico"><a href="<?= URL . "index.php?pg=login" ?>"><i class="fa-solid fa-user"></i>&nbsp; Login/Cadastro</a> </li>
                <li id="unico"><a href="<?= URL . "index.php?pg=suporte" ?>"><i class="fa-regular fa-circle-question"></i>&nbsp; Suporte</a>
                </li>
                <li id="unico"><a href="<?= URL . "index.php?pg=carrinho" ?>"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
        </nav>
    </div>
    <div id="sub">
        <nav id="submenu">

                <button class="dropbtn"> <i id="baricon" class="fa-solid fa-bars"></i></button>
                <ul class="dropdown-menu" id=navcascata>
                    <li class="cascata"><a class="dropdown-item" href="<?= URL . "index.php?pg=perfil" ?>"><i class="fa-regular fa-user"></i>Perfil</a></li>
                    <li class="cascata"><a class="dropdown-item" href="<?= URL . "index.php?pg=config" ?>"><i id="settings" class="fa-solid fa-gear"></i>Configurações<br></a></li>
                </ul>
        
        </nav>
        <nav id="menusub">
            <ul id="segunda">
                <li id="segundo"><a class="menus" href="<?= URL . "index.php?pg=top5" ?>">Top 5</a></li>
                <li id="segundo"><a class="menus" href="<?= URL . "index.php?pg=novidades" ?>">Novidades</a></li>
                <li id="segundo"><a class="menus" href="<?= URL . "index.php?pg=proteina" ?>">Proteína</a></li>
                <li id="segundo"><a class="menus" href="<?= URL . "index.php?pg=creatina" ?>">Creatina</a></li>
                <li id="segundo"><a class="menus" href="<?= URL . "index.php?pg=pre" ?>">Pré-treino</a></li>
                <li id="segundo"><a class="menus" href="metas">Metas</a></li>
            </ul>
        </nav>
    </div>
    <?php

    ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropbtn = document.querySelector('.dropbtn');
            const dropdownMenu = document.querySelector('.dropdown-menu');

            dropbtn.addEventListener('click', function(event) {
                event.stopPropagation();

                dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
            });
            document.addEventListener('click', function() {
                if (dropdownMenu.style.display === 'block') {
                    dropdownMenu.style.display = 'none';
                }
            });
        });
    </script>