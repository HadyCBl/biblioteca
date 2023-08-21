<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "inventario";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("La conexión falló: " . $conn->connect_error);
}

if (isset($_POST['restar_cantidad'])) {
    $id = $_POST['id'];
    $cantidad_nueva = $_POST['cantidad_nueva'];

    // Obtener la cantidad actual del producto
    $sql_select = "SELECT cantidad FROM libros WHERE id = $id";
    $result_select = $conn->query($sql_select);

    if ($result_select->num_rows > 0) {
        $row = $result_select->fetch_assoc();
        $cantidad_actual = $row["cantidad"];

        if ($cantidad_nueva <= $cantidad_actual) {
            // Restar la cantidad nueva a la cantidad actual
            $cantidad_restante = $cantidad_actual - $cantidad_nueva;

            // Actualizar la cantidad en la base de datos
            $sql_update = "UPDATE libros SET cantidad = $cantidad_restante WHERE id = $id";
            if ($conn->query($sql_update) === TRUE) {
                // Redireccionar a la página principal después de la actualización
                header("Location: factura.php");
                exit;
            } else {
                echo "Error al actualizar la cantidad: " . $conn->error;
            }
        } else {
            echo "<script>alert('Producto insuficiente. La cantidad disponible es de $cantidad_actual.');</script>";
            header("Location: error.php");
        }
    } else {
        echo "No se encontró el producto.";
    }
}

$conn->close();
?>
