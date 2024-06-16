<?php
// modelos/Conexion.php

class Conexion {
    private static $servidor = "localhost"; // Nombre del servidor de la base de datos
    private static $usuario = "root"; // Nombre de usuario de la base de datos
    private static $contrasena = ""; // Contraseña de la base de datos
    private static $nombre_base_datos = "hospital"; // Nombre de la base de datos

    // Método estático para establecer la conexión
    public static function conectar() {
        try {
            $conexion = new PDO("mysql:host=".self::$servidor.";dbname=".self::$nombre_base_datos, self::$usuario, self::$contrasena);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch(PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            // Puedes manejar el error de conexión de la forma que desees
            // Por ejemplo, redirigir a una página de error o mostrar un mensaje al usuario
            exit();
        }
    }
}
?>