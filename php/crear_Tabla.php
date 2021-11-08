<?php
$servidor = "localhost";
$usuario = "root";
$password = "12345678";
$base = "bdunad42";

//Create connection
$con = mysqli_connect($servidor, $usuario, $password,$base);
if (!$con){
	die("Fallo en la conexión: " . mysqli_connect_error());
}

$sql = "create TABLE tabla42(
	codigo varchar(10),
    nombre varchar(50),
    marca varchar(50),
    precio numeric,
    cantidad numeric	
)";
if (mysqli_query($con,$sql)){
	echo "La tabla se ha creada correctamente";
}
else{
	echo "Error creando la tabla: " . mysqli_error($con);
}

mysqli_close($con);
?>