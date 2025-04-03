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
</head>
<body>

    <?php if ($termo_pesquisa && count($resultados) > 0): ?>
        <ul>
            <?php foreach ($resultados as $produto): ?>
                <li><?= htmlspecialchars($produto['nome']) ?> - <?= htmlspecialchars($produto['descricao']) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
       
    <?php endif; ?>

    <a href="index.php">Voltar</a>
</body>
</html>
