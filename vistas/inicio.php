<?php
$seccion = isset($_GET['seccion']) ? $_GET['seccion'] : 'usuario';

include('../controladores/vista.php');
        $controller = new vista();
        $controller->mostrar($seccion);




?>