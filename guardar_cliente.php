<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "inventario";
$conn = new mysqli($server, $user, $pass, $db);

if (!$conn) {
    die("La conexión falló: " . mysqli_connect_error());
} else {
    // Obtener los datos ingresados en el formulario
    $nombre = $_POST["nombre"];
    $segundo_n = $_POST["segundo_n"];
    $apellido = $_POST["apellido"];
    $segundo_a = $_POST["segundo_a"];
    $direccion = $_POST["direccion"];
    $fecha_n = $_POST["fecha_n"];

    // Consulta SQL para verificar si el cliente ya existe
    $checkQuery = "SELECT id FROM clientes WHERE nombre='$nombre' AND apellido='$apellido'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        header("Location: error.html"); // Redirige a la página de error si el cliente ya existe
    } else {
        // Insertar los datos en la tabla "clientes"
        $insertQuery = "INSERT INTO clientes (nombre, segundo_n, apellido, segundo_a, direccion, fecha_n) VALUES ('$nombre', '$segundo_n', '$apellido', '$segundo_a', '$direccion', '$fecha_n')";
        
        if (mysqli_query($conn, $insertQuery)) {
            header("Location: RegistrarC.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
