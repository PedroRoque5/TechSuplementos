<?php

session_start();

require_once './App/Controller/EmpresaController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new EmpresaController();
    $resultado = $controller->cadastrar($_POST);

    if ($resultado['success']) {
        echo "<script>alert('{$resultado['message']}'); window.location.href = 'index.php?pg=home';</script>";
    } else {
        echo "<script>alert('{$resultado['message']}'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Requisição inválida.'); window.history.back();</script>";
}
