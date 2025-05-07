<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ASSETS ?>css/homeadmin.css" rel="stylesheet">
    <link href="<?= ASSETS ?>css/cabecalho.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="admin">
    <nav id="menu">
        <ul id="principal">
            <li id="unico"><a href="<?= URL . "index.php?pg=homeadmin" ?>">Home</a></li>
            <li id="unico">
                <a href="#" id="login-dropdown-toggle">Login/Cadastro
                </a>
                <ul id="login-dropdown" class="hidden">
                    <li><a href="<?= URL . 'index.php?pg=empresa' ?>">Login Empresa</a></li>
                    <li><a href="<?= URL . 'index.php?pg=login' ?>">Login Usuário</a></li>
                </ul>
            </li> 
            <li id="unico"><a href="<?= URL . "index.php?pg=suporte" ?>">Suporte</a></li>
            <button class="dropbtn"> <i id="baricon" data-lucide="menu"></i></button>
            <div id="sub">
                <nav id="submenu">
                    <ul class="dropdown-menu" id="navcascata">
                        <li class="cascata"><a class="dropdown-item" href="<?= URL . "index.php?pg=perfil" ?>"><i id="perfil" data-lucide="user"></i>Perfil</a></li>
                        <li class="cascata"><a class="dropdown-item" href="<?= URL . "index.php?pg=config" ?>"><i id="settings" data-lucide="settings"></i>Configurações<br></a></li>
                        <li class="cascata"><a class="dropdown-item" href="<?= URL . "index.php?pg=produto" ?>"><i id="produto"data-lucide="shopping-basket"></i>Cadastrar Produto<br></a></li>
                        <li class="cascata"><a class="dropdown-item" href="<?= URL . "index.php?pg=sistemaestoque" ?>"><i id="estoque" data-lucide="store"></i>&nbsp;&nbsp;Gerenciar estoque<br></a></li>
                    </ul>
                </nav>
            </div>
        </ul>
    </nav>
    <img id="banner" src="<?= ASSETS ?>image/banner-tech.jpg">
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

        lucide.createIcons();

</script>