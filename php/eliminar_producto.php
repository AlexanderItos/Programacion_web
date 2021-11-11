<?php
$servidor = "localhost";
$usuario = "root";
$password = "12345678";
$base = "bdunad42";

$codigo = $_POST ['codProducto'];


//Create connection
$con = mysqli_connect($servidor, $usuario, $password,$base);
if (!$con){
	die("Fallo en la conexión: " . mysqli_connect_error());
}

$sql = "DELETE FROM tabla42 WHERE codigo = $codigo";
$resultado = mysqli_query($con,$sql);

if (mysqli_query($con,$sql)){
	echo "El producto se ha eliminado correctamente";
}
else{
	echo "Error al eliminar el producto: " . mysqli_error($con);
}

mysqli_close($con);
?>
