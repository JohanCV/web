<?php

require_once 'controllers/usuario.php';


if(isset($_GET['controller']) && class_exists($_GET['controller'])){
    $name_controller = $_GET['controller'];
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
