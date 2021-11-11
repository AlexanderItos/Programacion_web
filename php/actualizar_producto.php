<?php
$servidor = "localhost";
$usuario = "root";
$password = "Chispita2006";
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

$sql = "UPDATE tabla42 SET codigo = '$codigo', nombre = '$nombre', marca = '$marca', precio = '$precio', cantidad = '$cantidad' WHERE codigo = '$codigo'";

if (mysqli_query($con,$sql)){
	echo "El producto se ha actualizado correctamente";
}
else{
	echo "Error al actualizar el producto: " . mysqli_error($con);
}

mysqli_close($con);
?>