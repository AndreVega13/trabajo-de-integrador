<?php
// controladores/ProductosController.php

require_once('../modelos/Medicamentos.php');

class MedicamentoController {
    public function mostrarMedicamento() {
        $medicamentos = Medicamentos::obtenerMedicamentos();
        include('../vistas/header.php');
        include('../vistas/list-medicamento.php');
        include('../vistas/footer.php');
    }



}

?>
