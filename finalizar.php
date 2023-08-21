<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Error en la conexión: " . $conn->connect_error);
}

// Verificar si se recibieron los datos de la compra
if (isset($_POST['productosCompra'])) {
  $productosCompra = $_POST['productosCompra'];

  // Recorrer los productos comprados
  foreach ($productosCompra as $producto) {
    $idProducto = $producto['id'];
    $cantidad = $producto['cantidad'];

    // Restar la cantidad comprada del producto en la base de datos
    $sqlRestarCantidad = "UPDATE productos SET cantidad = cantidad - $cantidad WHERE id = $idProducto";
    $conn->query($sqlRestarCantidad);

   
  }

  echo "La compra se ha realizado correctamente.";

} else {
  echo "No se han recibido los datos de la compra.";
}

$conn->close();
?>
