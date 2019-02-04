<?php

require_once 'controllers/usuario.php';

$controlador = new UsuarioController();

if(isset($_GET['action'])){
    $action = $_GET['action'];
    $controlador->$action();
}