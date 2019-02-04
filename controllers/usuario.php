<?php
class UsuarioController{
    public function index(){
        $imprimir = "Probando el controlador Index";
        require_once 'views/usuario/usuario.php';
    }

    public function crear(){
        require_once 'views/usuario/crear.php';
    }
}