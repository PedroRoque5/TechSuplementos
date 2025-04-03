<link href="<?= ASSETS ?>css/resultado.css" rel="stylesheet">
<?php
require_once './TechSuplementos/DAO/Conexao.php';

$termo_pesquisa = $_GET['pesquisa'] ?? '';
$resultados = [];

if ($termo_pesquisa) {
    $conexao = new Conexao();
    $query = "SELECT * FROM produtos WHERE nome LIKE :termo";
    $params = ['termo' => "%" . $termo_pesquisa . "%"];
    $resultados = $conexao->buscar($query, $params);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultados da Pesquisa</title>
    <link href="<?= ASSETS ?>css/resultado.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <?php if ($termo_pesquisa && count($resultados) > 0): ?>
        <ul class="result-list">
            <?php foreach ($resultados as $produto): ?>
                <li class="result-item">
                    <p><strong><?= htmlspecialchars($produto['nome']) ?></strong> - <?= htmlspecialchars($produto['descricao']) ?> R$ <?= htmlspecialchars($produto['preco']) ?>  <?= htmlspecialchars($produto['sabor'])?> <br> <?= htmlspecialchars($produto['catalogo']) ?> <img src="<?= ASSETS ?>uploads/<?= htmlspecialchars($produto['imagem']) ?>" alt="<?= htmlspecialchars($produto['nome']) ?>"> </p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
    <?php endif; ?>

    <a href="index.php" class="btn-voltar">Voltar</a>
</div>

</body>
</html>
