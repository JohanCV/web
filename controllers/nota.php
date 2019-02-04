<?php
class NotaController{
    public function listar(){
        $imprimirnota = "imprimiendo una nota";
        require_once 'views/nota/nota.php';
    }
}