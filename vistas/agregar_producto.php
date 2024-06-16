<?php
header('Content-Type: application/json');

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$nombre_base_datos = "hospital";

$conn = new mysqli($servidor, $usuario, $contrasena, $nombre_base_datos);

if ($conn->connect_error) {
    die(json_encode(array("success" => false, "message" => "Error de conexión a la base de datos")));
}

$data = json_decode(file_get_contents("php://input"), true);
$productName = $data['productName'];
$quantity = $data['quantity'];

$sql = "SELECT cantidad FROM medicamento WHERE nombre = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $productName);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row['cantidad'] >= $quantity) {
        $new_quantity = $row['cantidad'] - $quantity;
        $update_sql = "UPDATE medicamento SET cantidad = ? WHERE nombre = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("is", $new_quantity, $productName);
        if ($update_stmt->execute()) {
            echo json_encode(array("success" => true));
        } else {
            echo json_encode(array("success" => false, "message" => "Error al actualizar la cantidad"));
        }
    } else {
        echo json_encode(array("success" => false, "message" => "Cantidad no disponible"));
    }
} else {
    echo json_encode(array("success" => false, "message" => "Medicamento no encontrado"));
}

$stmt->close();
$conn->close();
?>