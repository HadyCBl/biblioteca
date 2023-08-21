<?php
// Conexión a la base de datos
$server = "localhost";
$user = "root";
$pass = "";
$db = "inventario";
$conn = new mysqli($server, $user, $pass, $db);
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];

// Insertar los datos en la tabla "cuenta"
$sql = "INSERT INTO cuenta (nombre, telefono, correo, pass) VALUES ('$nombre', '$telefono', '$correo', '$pass')";
if ($conn->query($sql) === TRUE) {
    header("Location: inicio.html");
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
