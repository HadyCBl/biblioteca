<?php
// Establecer la conexión con la base de datos
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

// Obtener el ID del producto enviado desde la solicitud AJAX
$productId = $_POST['productId'];

// Consultar el precio del producto en la base de datos
$sql = "SELECT precio FROM productos WHERE id = $productId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Obtener el precio del producto desde el resultado de la consulta
  $row = $result->fetch_assoc();
  $precioProducto = $row["precio"];

  // Formatear el precio del producto en formato de moneda en quetzales
  $precioFormateado = "Q" . number_format($precioProducto, 2);

  // Devolver el precio formateado del producto en formato JSON
  $response = array('precio' => $precioFormateado);
  echo json_encode($response);
} else {
  // Si no se encuentra el producto, devolver un mensaje de error
  $response = array('error' => 'Producto no encontrado');
  echo json_encode($response);
}

// Cerrar la conexión con la base de datos
$conn->close();
?>