<?php
    include('../modelos/Usuarios.php');
    if (isset($_POST['usuario']) && isset($_POST['password'])) {
            $username = $_POST['usuario'];
            $password = $_POST['password'];


            if (Usuario::ValidarUsuario($username, $password)) {
               // header('Location: ../views/dashboard.php');
               header('Location: ../vistas/inicio.php');
            } else {
                echo "Invalid username or password";
            }
        }
?>