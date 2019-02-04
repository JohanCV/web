<?php

require_once 'controllers/usuario.php';

$controlador = new UsuarioController();

if(isset($_GET['action']) && method_exists($controlador,$_GET['action'])){
    $action = $_GET['action'];
    $controlador->$action();
}else{
    echo"La pagina que buscas no existe";
}