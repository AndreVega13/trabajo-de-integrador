<?php
// controladores/ProductosController.php

require_once('../modelos/Usuarios.php');

class UsuarioController {
    public function mostrarUsuario() {
        $usuario = Usuario::obtenerUsuario();
        include('../vistas/header.php');
        include('../vistas/list-usuario.php');
        include('../vistas/footer.php');
    }



}

?>
