<?php

require_once 'controllers/usuario.php';

$controlador = new UsuarioController();
$controlador->index();
$controlador->crear();