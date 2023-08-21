<?php
// Obtener el ID del producto enviado desde JavaScript
$idProducto = $_GET['id'];

// Realizar la conexión a la base de datos y ejecutar la consulta para obtener el precio del producto
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$database = "tu_base_de_datos";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Error en la conexión: " . $conn->connect_error);
}

$sql = "SELECT precio FROM productos WHERE id = $idProducto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Obtener el precio del producto y formatearlo en formato de moneda en quetzales
  $row = $result->fetch_assoc();
  $precio = $row["precio"];
  $precioFormateado = "Q" . number_format($precio, 2);
  echo $precioFormateado;
} else {
  echo "Precio no encontrado";
}

$conn->close();
?>
