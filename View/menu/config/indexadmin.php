    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ASSETS ?>css/configuracao.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Configurações do Usuário</title>

    <body>
        <div id="opcoes-configuracao">
            <h2>Configurações da Conta</h2>
            <a href="<?= URL . "index.php?pg=alteraradmin" ?>" class="opcao"><i data-lucide="key-round"></i> Alterar Senha</a><br>
            <a href="<?= URL . "index.php?pg=notificacoesadmin" ?>" class="opcao"><i data-lucide="bell"></i> Notificações</a><br>
            <a href="<?= URL . "index.php?pg=privacidadeadmin" ?>" class="opcao"><i data-lucide="lock-keyhole"></i> Privacidade</a><br>
        </div>
    </body>

    </html>
    <script>
        lucide.createIcons()
    </script>