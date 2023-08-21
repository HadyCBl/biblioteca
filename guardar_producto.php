<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "inventario";
$conn = new mysqli($server, $user, $pass, $db);
if(!$conn){
    die("La conexion fallo: ". mysqli_connect_error());
}else{

// Obtener los datos ingresados en el formulario
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];

// Consulta SQL para insertar los datos en la tabla "productos"
$sql = "INSERT INTO productos (nombre, descripcion, cantidad, precio) VALUES ('$nombre', '$descripcion', $cantidad, $precio)";

if(mysqli_query($conn, $sql)){
    header("Location: RegistrarP.html");
}else{
    echo "Error: " . mysqli_error($conn);
}
}
?>
