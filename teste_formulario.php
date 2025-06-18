<?php
echo "<h1>Teste de Formulário</h1>";
echo "<p>Método: " . $_SERVER['REQUEST_METHOD'] . "</p>";
echo "<p>POST data: " . print_r($_POST, true) . "</p>";
echo "<p>GET data: " . print_r($_GET, true) . "</p>";
echo "<p>URL: " . $_SERVER['REQUEST_URI'] . "</p>";
?> 