<?php
$servidor = "localhost";
$usuario = "root";
$password = "Chispita2006";
$base = "bdunad42";

$codigo = $_POST ['codProducto'];


//Create connection
$con = mysqli_connect($servidor, $usuario, $password,$base);
if (!$con){
	die("Fallo en la conexión: " . mysqli_connect_error());
}

$sql = "SELECT codigo, nombre, marca, precio, cantidad FROM tabla42 WHERE codigo = '$codigo'";
$resultado = mysqli_query($con,$sql);

if (mysqli_num_rows($resultado) > 0) {
	while ($row = mysqli_fetch_assoc($resultado)) {
		echo
		"
			<table width = \"50%\" border = \"1\">
				<tr>
					<td><b><center>Codigo</center></b></td>
					<td><b><center>Nombre</center></b></td>
					<td><b><center>Marca</center></b></td>
					<td><b><center>Precio</center></b></td>
					<td><b><center>Cantidad</center></b></td>
				</tr>
				<tr>
					<td><center>". $row['codigo']."</center></td>
					<td><center>". $row['nombre']."</center></td>
					<td><center>". $row['marca']."</center></td>
					<td><center>". $row['precio']."</center></td>
					<td><center>". $row['cantidad']."</center></td>
				</tr>
			</table>
			";
	}	
}
else{
	echo "No existe registro con este codigo";
}

mysqli_close($con);
?>