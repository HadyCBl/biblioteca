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
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];

    $cantidad = $_POST["cantidad"];

    // Consulta SQL para insertar los datos en la tabla "libros"
    $sql = "INSERT INTO libros (titulo, autor,  cantidad) VALUES ('$titulo', '$autor',  $cantidad)";

    if (mysqli_query($conn, $sql)) {
        header("Location: RegistrarC.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
