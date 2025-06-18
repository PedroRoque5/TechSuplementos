<?php
require_once './TechSuplementos/DAO/Conexao.php';

$conexao = new Conexao();
$produtos = $conexao->buscar("SELECT * FROM produtos WHERE catalogo = 'pre_treino'");
?>

<link href="<?= ASSETS ?>css/catalogo.css" rel="stylesheet">

<h1 class="titulo">PRÉ-TREINO</h1>

<div class="container-catalogo">
    <?php foreach ($produtos as $produto): ?>
        <div class="card">
            <a href="<?= URL ?>index.php?pg=descricao&id=<?= $produto['id'] ?>">
                <img src="<?= URL ?>View/cadastro/produto/uploads/<?= htmlspecialchars($produto['imagem']) ?>" alt="<?= htmlspecialchars($produto['nome']) ?>">
                <h2><?= htmlspecialchars($produto['nome']) ?></h2>
                <p class="preco">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>
            </a>
        </div>
    <?php endforeach; ?>
</div>
