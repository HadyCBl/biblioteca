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
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$cantidad = $_POST['cantidad'];

$sql = "UPDATE libros SET titulo='$titulo', autor='$autor', cantidad='$cantidad' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: invent.php");
} else {
    echo "Error al actualizar el registro: " . $conn->error;
}

$conn->close();
?>
