<link href="<?= ASSETS ?>css/pre.css" rel="stylesheet">

<ul id="album">
<?php
// Conexão com o banco
$con = mysqli_connect("localhost", "root", "", "techsuplementos");

if (!$con) {
    die("Erro na conexão: " . mysqli_connect_error());
}

// Consulta produtos do catálogo pre_treino
$sql = "SELECT * FROM produtos WHERE catalogo = 'pre_treino' AND status = 1";
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
    echo "<p>Sem produtos cadastrados no pré-treino.</p>";
}

// Fecha conexão
mysqli_close($con);
?>
</ul>
