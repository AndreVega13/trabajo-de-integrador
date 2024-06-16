<?php
// modelos/Producto.php
require_once('Conexion.php');

class Usuario {
    public static function obtenerUsuario() {
        try {
            $conexion = Conexion::conectar();
            $query = "SELECT * FROM usuario";
            $statement = $conexion->query($query);
            $usuario = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $usuario;
            $conexion->close();
        } catch(PDOException $e) {
            echo "Error al obtener los Usuarios : " . $e->getMessage();
            return []; // Retornar un array vacío en caso de error
        }
    }


    public static function registrarUsuario($nombre,$apellido,$dni,$rop,$usuario,$pass) {
        try {
            $conexion = Conexion::conectar();
            $query = "INSERT INTO `usuario`(`nombre`, `apellidos`, `dni`, `rop`, `usuario`, `pass`) VALUES ('$nombre','$apellido','$dni','$rop','$usuario','$pass')";
            $statement = $conexion->prepare($query);
            $statement->execute();
        } catch(PDOException $e) {
            echo "Error al guardar los Medicamento : " . $e->getMessage();
            return []; // Retornar un array vacío en caso de error
        }
    }
    public static function EliminarUsuario($id) {
        try {
            $conexion = Conexion::conectar();
            $query = "delete from usuario where id='$id';";
            $statement = $conexion->prepare($query);
            $statement->execute();
        } catch(PDOException $e) {
            echo "Error al eliminar los Medicamento : " . $e->getMessage();
            return []; // Retornar un array vacío en caso de error
        }
    }

    public static function ValidarUsuario($user,$pass) {
       
            $conexion = Conexion::conectar();
            $query = "SELECT * FROM usuario WHERE usuario = :usuario AND pass = :pass";
            $statement = $conexion->prepare($query);
            $statement->bindParam(':usuario', $user);
            $statement->bindParam(':pass', $pass);
            $statement->execute();
            if($statement->rowCount() > 0) {
                return true;
            }
            return false;

    }
}



?>