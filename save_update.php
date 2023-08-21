<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$sql = "UPDATE productos SET nombre='$nombre', descripcion='$descripcion', cantidad='$cantidad', precio='$precio' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: invent.php");
} else {
    echo "Error al actualizar el registro: " . $conn->error;
}

$conn->close();
?>
