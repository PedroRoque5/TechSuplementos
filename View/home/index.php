<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/./assets/./css/cabecalho.css">
    <link rel="stylesheet" href="../../public/./assets/./css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Tech Suplementos</title>
</head>
<body>
    <div id=dashboard>
        <img id="logo" src="../../public/./assets/./image/img.png">
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
                <li id="unico"><a href="../home/index.php"><i class="fa-solid fa-house"></i>&nbsp;Home</a></li>
                <li id="unico"><a href="Login" href="Cadastro"><i class="fa-solid fa-user"></i>&nbsp; Login/Cadastro</a> </li>
                <li id="unico"><a href="Suporte"><i class="fa-regular fa-circle-question"></i>&nbsp;Suporte</a>
                </li>
                <li id="unico"><a href="carinho"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
        </nav>
    </div>
    <div id="sub">
        <nav id="submenu">
        <li id="segundo">
                <button class="dropbtn"> <i id="baricon" class="fa-solid fa-bars"></i></button>
                    <ul class="dropdown-menu" id=navcascata>
                        <li  class="cascata"><a class="dropdown-item" href="#" ><i class="fa-regular fa-user"></i>Perfil</a></li>
                        <li  class="cascata"><a class="dropdown-item" href="#"><i  id="settings" class="fa-solid fa-gear"></i>Configurações<br></a></li>
                    </ul>
                </li>
            <ul id="segunda">
                <li id="segundo"><a href="top">Top 5</a></li>
                <li id="segundo"><a href="novidades" href="Cadastro">Novidades</a></li>
                <li id="segundo"><a href="proteina">Proteína</a></li>
                <li id="segundo"><a href="creatina">Creatina</a></li>
                <li id="segundo"><a href="pre">Pré-treino</a></li>
                <li id="segundo"><a href="metas">Metas</a></li>
            </ul>
        </nav>
    </div>
    <div id="image">
        <img id="banner" src="../../public/assets/image/image.png">
    </div>
    <div id="icone">
    <i id="icon" class="fa-solid fa-truck"></i>&nbsp;&nbsp;&nbsp;
    <i id="icon" class="fa-solid fa-qrcode"></i>
    <i class="fa-solid fa-percent"></i>
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