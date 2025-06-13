<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ASSETS ?>css/home.css" rel="stylesheet">
    <link href="<?= ASSETS ?>css/rodape.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lucide@latest/dist/lucide.css">
    <title>Tech Suplementos</title>
</head>

<body class="usuario">
    <nav id="menu">
        <ul id="principal">
            <li id="unico"><a href="<?= URL . "index.php?pg=home" ?>">Home</a></li>
            <li id="unico">
                <a href="#" id="login-dropdown-toggle">Login/Cadastro</a>
                <ul id="login-dropdown" class="hidden">
                    <li><a href="<?= URL . 'index.php?pg=empresa' ?>">Login Empresa</a></li>
                    <li><a href="<?= URL . 'index.php?pg=login' ?>">Login Usuário</a></li>
                </ul>
            </li>
            <li id="unico"><a href="<?= URL . "index.php?pg=suporte" ?>">Suporte</a></li>
            <li id="unico"><a href="<?= URL . "index.php?pg=carrinho" ?>"><i data-lucide="shopping-cart"></i></a></li>
        </ul>
        <button class="dropbtn"><i data-lucide="menu"></i></button>
        <div id="sub">
            <nav id="submenu">
                <ul class="dropdown-menu" id="navcascata">
                    <li class="cascata"><a class="dropdown-item" href="<?= URL . "index.php?pg=perfil" ?>"><i id="perfil" data-lucide="user"></i>&nbsp;&nbsp;Perfil</a></li>
                    <li class="cascata"><a class="dropdown-item" href="<?= URL . "index.php?pg=config" ?>"><i id="settings" data-lucide="settings"></i>&nbsp;&nbsp;Configurações</a></li>
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
            <img id="banner" src="<?= ASSETS ?>image/techBanner.png">
        </div>
        <div id="icone">
            <div><i data-lucide="truck"></i> Frete grátis a partir de R$200</div>
            <div><i data-lucide="qr-code"></i> 5% OFF no PIX</div>
            <div><i data-lucide="percent"></i> Use um cupom de desconto</div>
            <div><i data-lucide="credit-card"></i> Até 10x sem juros</div>
        </div>
    </nav>

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

        lucide.createIcons();
    </script>
</body>
</html>