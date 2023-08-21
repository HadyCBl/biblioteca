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
$correo = $_POST['correo'];
$pass = $_POST['pass'];

// Consultar la tabla "cuenta" para verificar las credenciales
$sql = "SELECT * FROM cuenta WHERE correo = '$correo' AND pass = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // El inicio de sesión es exitoso
    header("Location: inicio.html");
    exit();
} else {
    // Las credenciales son incorrectas
    echo "Inicio de sesión fallido. Por favor, verifique su correo y contraseña.";
}

$conn->close();
?>
