<?php
class UsuarioController{
    public function index(){
        $imprimir = "Probando el controlador Index";
        require_once 'views/usuario.php';
    }
}