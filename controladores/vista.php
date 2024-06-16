<?php
// controladores/ContactoController.php
class vista {
    public function mostrar($seccion) {

        switch ($seccion) {
            case 'boleta2':
                include('../controladores/loginController.php');
                $controller = new loginController();
                $controller->mostrarlogin();
                break;
            case 'usuario':
                include('../controladores/UsuarioController.php');
                $controller = new UsuarioController();
                $controller->mostrarUsuario();
                break;
            case 'medicamentos':
                include('../controladores/MedicamentoController.php');
                $controller = new MedicamentoController();
                $controller->mostrarMedicamento();
                break;
            case 'regusuario':
                include('../controladores/RegUsuarioController.php');
                $controller = new RegUsuarioController();
                $controller->MostrarRegUsuario();
                break;
            case 'regmedicamento':
                include('../controladores/RegMedicamentoController.php');
                $controller = new RegMedicamentoController();
                $controller->MostrarRegMedicamento();
                break;
            case 'boleta':
                include('../controladores/BoletaController.php');
                $controller = new boletaController();
                $controller->Mostrarboleta();
                break;
            default:
                    include('controladores/ContactoController.php');
                break;
    }
}
}
?>