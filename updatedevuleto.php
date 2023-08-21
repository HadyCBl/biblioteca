<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if (isset($_GET['prestamo_id'])) {
    $prestamoId = $_GET['prestamo_id'];

    // Actualizar el estado en la base de datos
    $sql_update = "UPDATE prestamos SET estado = 1 WHERE id = $prestamoId";

    if ($conn->query($sql_update) === TRUE) {
        echo "Estado actualizado correctamente.";
    } else {
        echo "Error al actualizar el estado: " . $conn->error;
    }
}

$conn->close();
?>
