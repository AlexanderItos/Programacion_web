<?php
$servidor = "localhost";
$usuario = "root";
$password = "12345678";

//Create connection
$con = mysqli_connect($servidor, $usuario, $password);
if (!$con){
	die("Fallo en la conexión: " . mysqli_connect_error());
}

$sql = "Create Database bdunad42";
if (mysqli_query($con,$sql)){
	echo "Base de datos creada correctamente";
}
else{
	echo "Error creando la base de datos: " . mysqli_error($con);
}

mysqli_close($con);
?>