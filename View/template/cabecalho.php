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
        <nav id="navmenu">
            <form id="formmenu" method="POST" action="<?= URL . "index.php?pg=resultado" ?>">
                <input id="search" type="search" name="pesquisa" placeholder="&nbsp;&nbsp;Busque o seu melhor aliado" value="<?= htmlspecialchars($termo_pesquisa ?? '') ?>">

                <form id="formmenu" method="POST" action="<?= URL . 'index.php?pg=resultado' ?>">
                    <input id="search" type="search" name="pesquisa" placeholder="&nbsp;&nbsp;Busque o seu melhor aliado" value="<?= htmlspecialchars($termo_pesquisa ?? '') ?>">
                    <button id="lupa" type="submit" aria-label="Buscar">
                        <i data-lucide="search"></i>
                    </button>
                </form>

        </nav>
        <nav id="menu">
            <ul id="principal">
                <li id="unico"><a href="<?= URL . "index.php?pg=home" ?>">Home</a></li>
                <li id="unico">
                    <a href="#" id="login-dropdown-toggle"> Login/Cadastro</a>
                    <ul id="login-dropdown" class="hidden">
                        <li><a href="<?= URL . 'index.php?pg=empresa' ?>">Login Empresa</a></li>
                        <li><a href="<?= URL . 'index.php?pg=login' ?>">Login Usuário</a></li>
                    </ul>
                </li>
                <li id="unico"><a href="<?= URL . "index.php?pg=suporte" ?>">Suporte</a></li>
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
    <h2 class="titulo-pesquisa">Resultados para: "<?= htmlspecialchars($termo_pesquisa) ?>"</h2>

    <?php if (count($resultados) > 0): ?>
        <div class="container">
            <?php foreach ($resultados as $produto): ?>
                <div class="produto-container">
                    <div class="produto-img">
                        <img src="<?= URL ?>View/cadastro/produto/uploads/<?= htmlspecialchars($produto['imagem']) ?>" alt="<?= htmlspecialchars($produto['nome']) ?>">
                    </div>

                    <div class="produto-info">
                        <h1 class="nome"><?= htmlspecialchars($produto['nome']) ?></h1>
                        <p class="preco">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>

                        <!-- Exibir Status -->
                        <p class="status-produto">
                            <strong>Status:</strong> 
                            <?= $produto['status'] ? '<span class="status-Emestoque">Em estoque</span>' : '<span class="status-Esgotado">Esgotado</span>' ?>
                        </p>

                        <!-- Buscar sabores -->
                        <?php
                        $sabores = $conexao->buscar("
                           SELECT s.nome 
                           FROM sabores s
                           INNER JOIN produto_sabor ps ON s.id = ps.id_sabor
                           WHERE ps.id_produto = :id
                        ", [':id' => $produto['id']]);
                        ?>

                        <?php if (!empty($sabores)): ?>
                            <form method="GET" action="<?= URL ?>index.php">
                                <input type="hidden" name="pg" value="pagamento">
                                <input type="hidden" name="nome" value="<?= htmlspecialchars($produto['nome']) ?>">

                                <label for="sabor_<?= $produto['id'] ?>"><strong>Selecione o Sabor:</strong></label>
                                <select name="sabor" id="sabor_<?= $produto['id'] ?>" required>
                                    <?php foreach ($sabores as $sabor): ?>
                                        <option value="<?= htmlspecialchars($sabor['nome']) ?>"><?= htmlspecialchars($sabor['nome']) ?></option>
                                    <?php endforeach; ?>
                                </select>

                                <div class="botoes-acao">
                                    <button type="submit" class="comprar-btn">Comprar</button>
                                    <a class="voltar-btn" href="<?= URL . 'index.php?pg=home' ?>">Voltar</a>
                                </div>
                            </form>
                        <?php else: ?>
                            <p><strong>Sabores:</strong> Nenhum sabor disponível</p>
                            <div class="botoes-acao">
                                <a class="comprar-btn" href="<?= URL ?>index.php?pg=pagamento&nome=<?= urlencode($produto['nome']) ?>">Comprar</a>
                                <a class="voltar-btn" href="<?= URL . 'index.php?pg=home' ?>">Voltar</a>
                            </div>
                        <?php endif; ?>

                        <button class="descricao-btn toggle-btn" onclick="toggleDescricao(this)">Ver Detalhes</button>

                        <div class="descricao-produto descricao-oculta">
                            <p><?= htmlspecialchars($produto['descricao']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="mensagem-erro">Nenhum produto encontrado.</p>
    <?php endif; ?>
<?php endif; ?>

    <script>
        function toggleDescricao(button) {
            const descricao = button.nextElementSibling;
            descricao.classList.toggle("descricao-oculta");
            button.textContent = descricao.classList.contains("descricao-oculta") ? "Ver Detalhes" : "Ocultar Detalhes";
        }

        lucide.createIcons();
    </script>

</body>

</html>