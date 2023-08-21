<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los detalles de los productos seleccionados
  $productos = $_POST["productos"];

  // Conexión a la base de datos
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "inventario";
  

  // Crear la conexión
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verificar la conexión
  if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
  }

  // Recorrer los productos y restar la cantidad comprada
  foreach ($productos as $producto) {
    $producto = json_decode($producto, true);
    $idProducto = $producto["id"];
    $cantidad = $producto["cantidad"];

    // Actualizar la cantidad en la base de datos
    $sql = "UPDATE productos SET cantidad = cantidad - $cantidad WHERE id = $idProducto";

    if ($conn->query($sql) === false) {
      echo "Error al actualizar la cantidad del producto con ID $idProducto: " . $conn->error;
    }
  }

  // Cerrar la conexión
  $conn->close();
} else {
  // Si no se ha enviado el formulario, redirigir a la página principal
  header("Location: index.html");
  exit();
}
?>
