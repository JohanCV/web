<?php

require_once 'controllers/usuario.php';
require_once 'controllers/nota.php';

if(isset($_GET['controller'])){
    $name_controller = $_GET['controller'].'Controller';
}else{
    echo"La pagina que buscas no existe";
    exit();
}

if(isset($name_controller) && class_exists($name_controller)){
    $controlador = new $name_controller();

    if(isset($_GET['action']) && method_exists($controlador,$_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }else{
        echo"La action que buscas no existe";
    }
}else{
    echo"La pagina que buscas no existe";
}
