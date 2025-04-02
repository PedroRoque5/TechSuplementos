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
            <form id="formmenu" method="POST" action="<?= URL . "index.php?pg=resultado" ?>">
                <input id="search" type="search" name="pesquisa" placeholder="  O que você procura?" value="<?= htmlspecialchars($termo_pesquisa ?? '') ?>">
                <button id="lupa" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </nav>
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
                <li id="unico"><a href="<?= URL . "index.php?pg=suporte" ?>"><i class="fa-regular fa-circle-question"></i>&nbsp; Suporte</a>
                </li>
            </ul>
        </nav>
    </div>

    <?php
    require_once './TechSuplementos/DAO/Conexao.php';
    $termo_pesquisa = $_POST['pesquisa'] ?? '';
    $resultados = [];

    if ($termo_pesquisa) {
        $conexao = new Conexao();
        $query = "SELECT * FROM produtos WHERE nome LIKE :termo";
        $params = ['termo' => "%" . $termo_pesquisa . "%"];
        $resultados = $conexao->buscar($query, $params);
    }
    ?>

    <?php if ($termo_pesquisa): ?>
        <h2>Resultados para: "<?= htmlspecialchars($termo_pesquisa) ?>"</h2>
        <?php if (count($resultados) > 0): ?>
            <ul>
                <?php foreach ($resultados as $produto): ?>
                    <li><?= htmlspecialchars($produto['nome']) ?> - <?= htmlspecialchars($produto['descricao']) ?> <?= htmlspecialchars($produto['preco']) ?> - <?= htmlspecialchars($produto['sabor'])?> - <?= htmlspecialchars($produto['catalogo']) ?> <?= htmlspecialchars($produto['imagem']) ?>   </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nenhum produto encontrado.</p>
        <?php endif; ?>
    <?php endif; ?>

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
</body>
</html>
