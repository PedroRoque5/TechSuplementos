<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ASSETS ?>css/home.css" rel="stylesheet">
    <link href="<?= ASSETS ?>css/cabecalho.css" rel="stylesheet">
    <link href="<?= ASSETS ?>css/rodape.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="usuario">
    <nav id="menu">
        <ul id="principal">
            <li id="unico"><a href="<?= URL . "index.php?pg=home" ?>"><i class="fa-solid fa-house"></i>&nbsp;Home</a></li>
            <li id="unico">
                <a href="#" id="login-dropdown-toggle">
                    <i class="fa-solid fa-user"></i>&nbsp; Login/Cadastro
                </a>
                <ul id="login-dropdown" class="hidden">
                    <li><a href="<?= URL . 'index.php?pg=empresa' ?>"> <i id="produto" class="fa-solid fa-shop"></i>&nbsp;Login Empresa</a></li>
                    <li><a href="<?= URL . 'index.php?pg=login' ?>"><i class="fa-solid fa-user"></i>&nbsp;Login Usuário</a></li>
                </ul>
            </li>
            <li id="unico"><a href="<?= URL . "index.php?pg=suporte" ?>"><i class="fa-regular fa-circle-question"></i>&nbsp; Suporte</a></li>
            <li id="unico"><a href="<?= URL . "index.php?pg=carrinho" ?>"><i class="fa-solid fa-cart-shopping"></i></a></li>
        </ul>
        <button class="dropbtn"> <i id="baricon" class="fa-solid fa-bars"></i></button>
        <div id="sub">
            <nav id="submenu">
                <ul class="dropdown-menu" id="navcascata">
                    <li class="cascata"><a class="dropdown-item" href="<?= URL . "index.php?pg=perfil" ?>"><i id="perfil" class="fa-regular fa-user"></i>&nbsp;&nbsp;Perfil</a></li>
                    <li class="cascata"><a class="dropdown-item" href="<?= URL . "index.php?pg=config" ?>"><i id="settings" class="fa-solid fa-gear"></i>&nbsp;&nbsp;Configurações<br></a></li>
                </ul>
            </nav>
        </div>
        <nav id="menusub">
            <ul id="segunda">
                <li id="segundo"><a class="menus" href="<?= URL . "index.php?pg=top5" ?>">Top 5</a></li>
                <li id="segundo"><a class="menus" href="<?= URL . "index.php?pg=novidades" ?>">Novidades</a></li>
                <li id="segundo"><a class="menus" href="<?= URL . "index.php?pg=proteina" ?>">Proteína</a></li>
                <li id="segundo"><a class="menus" href="<?= URL . "index.php?pg=creatina" ?>">Creatina</a></li>
                <li id="segundo"><a class="menus" href="<?= URL . "index.php?pg=pre" ?>">Pré-treino</a></li>
                <li id="segundo"><a class="menus" href="<?= URL . "index.php?pg=metas" ?>">Metas</a></li>
            </ul>
        </nav>
        <div id="image">
            <tr class="saibamais">
                <a class="saibamais" href="<?= URL . "index.php?pg=saiba" ?>">
                    <td class="saibamais">SAIBA MAIS</td>
                </a>
            </tr>
            <img id="banner" src="<?= ASSETS ?>image/banner.png">
        </div>
        <div id="icone">
            <i id="icon" class="fa-solid fa-truck"></i>&nbsp; <span>Frete grátis à partir de R$200</span>
            <i id="icon" class="fa-solid fa-qrcode"></i>&nbsp;<span>Compre em nossa loja com 5%OFF no PIX</span>
            <i id="icon" class="fa-solid fa-percent"></i>&nbsp;<span>Use um cupom de desconto</span>
            <i id="icon" class="fa-regular fa-credit-card"></i>&nbsp;<span>Compras em até 10X sem juros</span>
        </div>
    </body>
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