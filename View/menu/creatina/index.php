<link href="<?= ASSETS ?>css/creatina.css" rel="stylesheet">

<ul id="album">
<?php
// Conexão com o banco
$con = mysqli_connect("localhost", "root", "", "techsuplementos");

if (!$con) {
    die("Erro na conexão: " . mysqli_connect_error());
}

// Consulta produtos do catálogo creatina
$sql = "SELECT * FROM produtos WHERE catalogo = 'creatina' AND status = 1 ORDER BY id ASC";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    $contador = 1;
    while ($produto = mysqli_fetch_assoc($result)) {
        echo "<li id='foto" . str_pad($contador, 2, '0', STR_PAD_LEFT) . "'>";
        echo "<a href='" . URL . "index.php?pg=" . strtolower(str_replace(' ', '-', $produto['nome'])) . "' class='produto-link'>";
        echo "<div class='produto-imagem' style='background-image: url(imagens/" . htmlspecialchars($produto['imagem']) . ");'></div>";
        echo "</a>";
        echo "<p class='preco'>R$ " . number_format($produto['preco'], 2, ',', '.') . "</p>";
        echo "</li>";
        $contador++;
    }
} else {
    echo "<p>Sem produtos cadastrados na categoria Creatina.</p>";
}

mysqli_close($con);
?>
</ul>
