<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";

// Verificar si se ha proporcionado el ID del registro a borrar
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Crear la conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }

    // Consulta SQL para borrar el registro
    $sql = "DELETE FROM clientes WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ver_clientes.php");
    } else {
        echo "Error al borrar el registro: " . $conn->error;
    }

    $conn->close();
} else {
    echo "No se ha proporcionado un ID válido.";
}
?>
