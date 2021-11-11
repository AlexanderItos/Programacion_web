<?php
$servidor = "localhost";
$usuario = "root";
$password = "12345678";
$base = "bdunad42";

$codigo = $_POST ['codProducto'];
$nombre = $_POST ['nombreProducto'];
$marca = $_POST ['marcaProducto'];
$precio = $_POST ['precioCompra'];
$cantidad = $_POST ['cantidadComprada'];

//Create connection
$con = mysqli_connect($servidor, $usuario, $password,$base);
if (!$con){
	die("Fallo en la conexión: " . mysqli_connect_error());
}

$sql = "INSERT INTO tabla42 (codigo, nombre, marca, precio, cantidad)
VALUES	('$codigo', '$nombre','$marca', '$precio', '$cantidad')";

if (mysqli_query($con,$sql)){
	echo "El producto se ha ingresado correctamente";
}
else{
	echo "Error al ingresar el producto: " . mysqli_error($con);
}

mysqli_close($con);
?>
