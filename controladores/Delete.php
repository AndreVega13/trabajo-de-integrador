<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar cuál botón submit fue presionado
    if (isset($_POST['elimarusuario'])) {
        include('../modelos/Usuarios.php');
        $id=$_POST['elimarusuario'];
        $controller = new Usuario();
        $controller->EliminarUsuario($id); 
        header('Location: ../vistas/inicio.php');
        
    }
    // Verificar cuál botón submit fue presionado
    if (isset($_POST['elimarMedicamento'])) {
        include('../modelos/Medicamentos.php');
        $id=$_POST['elimarMedicamento'];
        $controller = new Medicamentos();
        $controller->eliminarMedicamento($id); 
        header('Location: ../vistas/inicio.php');
        
        
    }
}



               

?>