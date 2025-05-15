<?php 

class sair{

    public function logout(){

    session_start();
    session_destroy();
    header("Location: ".  URL . 'index.php?pg=login');
    exit;

    }

}

$sair = new sair();

$sair->logout();;