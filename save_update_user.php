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
$segundo_n = $_POST['segundo_n'];
$apellido = $_POST['apellido'];
$segundo_a = $_POST['segundo_a'];
$direccion = $_POST['direccion'];
$fecha_n = $_POST['fecha_n'];

$sql = "UPDATE clientes SET nombre='$nombre', segundo_n='$segundo_n', apellido='$apellido', segundo_a='$segundo_a', direccion='$direccion', fecha_n='$fecha_n' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: ver_clientes.php"); // Cambia el redireccionamiento si es necesario
} else {
    echo "Error al actualizar el registro: " . $conn->error;
}

$conn->close();
?>
