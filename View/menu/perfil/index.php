<div>
    <h1>Seja bem-vindo</h1>
</div>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ASSETS ?>css/perfil.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Perfil de Usuário</title>
</head>

<body>
    <div id="dados-usuario">
        <h2>Maria da Silva</h2>
        <p><i class="fa-solid fa-location-dot"></i> São Paulo, SP</p>
        <p><i class="fa-solid fa-envelope"></i> maria.silva@gmail.com</p>
        <p><i class="fa-solid fa-phone"></i> (11) 98765-4321</p>
    </div>
    </div>

    <div id="opcoes-perfil">
        <a href="<?= URL . 'index.php?pg=rastrear_compra' ?>" class="opcao"><i class="fa-solid fa-search"></i> Rastrear Compra</a><br>
        <a href="<?= URL . 'index.php?pg=historico_compras' ?>" class="opcao"><i class="fa-solid fa-box"></i> Histórico de Compras</a><br>
        <a href="<?= URL . 'index.php?pg=alterar_dados' ?>" class="opcao"><i class="fa-solid fa-user-edit"></i> Alterar Dados Pessoais</a><br>
        <a href="<?= URL . 'index.php?pg=suporte' ?>" class="opcao"><i class="fa-solid fa-headset"></i> Suporte</a><br>
        <a href="<?= URL . 'index.php?pg=logout' ?>" class="opcao"><i class="fa-solid fa-sign-out-alt"></i> Sair</a>
    </div>

</body>

</html>