<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar cuál botón submit fue presionado
    if (isset($_POST['registrarUsuario'])) {
        include('../modelos/Usuarios.php');
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellidos'];
        $dni=$_POST['dni'];
        $rop=$_POST['rol'];
        $usuario=$_POST['usuario'];
        $pass=$_POST['password'];
        $controller = new Usuario();
        $controller->registrarUsuario($nombre,$apellido,$dni,$rop,$usuario,$pass);
        header('Location: ../vistas/inicio.php');
        
        
    }
    // Verificar cuál botón submit fue presionado
    if (isset($_POST['registrarMedicamento'])) {
        include('../modelos/Medicamentos.php');
        $sku=$_POST['sku'];
        $nombre=$_POST['nombre'];
        $componente=$_POST['componente'];
        $cantidad=$_POST['cantidad'];
        $laboratorio=$_POST['laboratorio'];
        $tipo=$_POST['tipo'];
        $controller = new Medicamentos();
        $controller->registrarMedicamento($sku,$nombre,$componente,$cantidad,$laboratorio,$tipo); 
        header('Location: ../vistas/inicio.php');
        
    }
}



               

?>