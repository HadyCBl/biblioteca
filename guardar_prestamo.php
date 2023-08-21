<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if (isset($_POST['prestar_libro'])) {
    $selected_client = $_POST['selected_client'];
    $selected_book = $_POST['selected_book'];

    // Obtener título del libro seleccionado
    $sql_book = "SELECT titulo FROM libros WHERE id=$selected_book";
    $result_book = $conn->query($sql_book);
    $row_book = $result_book->fetch_assoc();
    $titulo_libro = $row_book['titulo'];

    // Insertar préstamo en la tabla de préstamos
    $fecha_prestamo = date("Y-m-d"); // Obtiene la fecha actual
    $sql_prestamo = "INSERT INTO prestamos (cliente_id, libro_titulo, fecha_prestamo) VALUES ($selected_client, '$titulo_libro', '$fecha_prestamo')";
    
    if ($conn->query($sql_prestamo) === TRUE) {
        header("Location: ver_libros_prestados.php");
    } else {
        echo "Error al prestar el libro: " . $conn->error;
    }
}

$conn->close();
?>
