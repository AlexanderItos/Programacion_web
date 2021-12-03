<?php
$servidor = "localhost";
$usuario = "root";
$password = "12345678";
$base = "bdunad42";

//Create connection
$con = mysqli_connect($servidor, $usuario, $password,$base);
if (!$con){
	die("Fallo en la conexi�n: " . mysqli_connect_error());
}

$sql = "create TABLE tabla42(
	codigo varchar(10),
    nombre varchar(50),
    marca varchar(50),
    precio numeric,
    cantidad numeric	
)";
if (mysqli_query($con,$sql)){
    echo '<script type="text/javascript">alert("Tabla creada éxitosamente"); window.history.back();</script>';
}
else{
	echo "Error creando la tabla: " . mysqli_error($con);
}

mysqli_close($con);
?>