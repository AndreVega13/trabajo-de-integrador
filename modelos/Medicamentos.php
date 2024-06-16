<?php
// modelos/Producto.php
require_once('Conexion.php');

class Medicamentos {
    public static function obtenerMedicamentos() {
        try {
            $conexion = Conexion::conectar();
            $query = "SELECT * FROM medicamento";
            $statement = $conexion->query($query);
            $medicamentos = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $medicamentos;
        } catch(PDOException $e) {
            echo "Error al obtener los Medicamento : " . $e->getMessage();
            return []; // Retornar un array vacío en caso de error
        }
    }

    public static function registrarMedicamento($sku,$nombre,$componente,$cantidad,$laboratorio,$tipo) {
        try {
            $conexion = Conexion::conectar();
            $query = "INSERT INTO `medicamento`(`sku`, `nombre`, `componente`, `cantidad`, `laboratorio`, `tipo`) VALUES ('$sku','$nombre','$componente','$cantidad','$laboratorio','$tipo')";
            $statement = $conexion->prepare($query);
            $statement->execute();
        } catch(PDOException $e) {
            echo "Error al ingresar los Medicamento : " . $e->getMessage();
            return []; // Retornar un array vacío en caso de error
        }
    }
    public static function eliminarMedicamento($id) {
        try {
            $conexion = Conexion::conectar();
            $query = "delete from medicamento where id='$id';";
            $statement = $conexion->prepare($query);
            $statement->execute();
        } catch(PDOException $e) {
            echo "Error al eliminar los Medicamento : " . $e->getMessage();
            return []; // Retornar un array vacío en caso de error
        }
    }
    
}



?>
