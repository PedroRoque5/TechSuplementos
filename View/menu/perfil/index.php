<div>
    <h1>Seja bem-vindo</h1>
</div>
    <link href="<?= ASSETS ?>css/perfil.css" rel="stylesheet">
    <div id="dados-usuario">
        <h2>Maria da Silva</h2>
        <p><i class="fa-solid fa-location-dot"></i> São Paulo, SP</p>
        <p><i class="fa-solid fa-envelope"></i> maria.silva@gmail.com</p>
        <p><i class="fa-solid fa-phone"></i> (11) 98765-4321</p>
    </div>
    </div>

    <div id="opcoes-perfil">
        <a href="<?= URL . 'index.php?pg=rastrear' ?>" class="opcao"><i class="fa-solid fa-search"></i> Rastrear Compra</a><br>
        <a href="<?= URL . 'index.php?pg=historico' ?>" class="opcao"><i class="fa-solid fa-box"></i> Histórico de Compras</a><br>
        <a href="<?= URL . 'index.php?pg=dados' ?>" class="opcao"><i class="fa-solid fa-user-edit"></i> Alterar Dados Pessoais</a><br>
        <a href="<?= URL . 'index.php?pg=login' ?>" class="opcao"><i class="fa-solid fa-sign-out-alt"></i> Sair</a>
    </div>