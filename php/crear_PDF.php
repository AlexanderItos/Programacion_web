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

$sql = "SELECT codigo, nombre, marca, precio, cantidad FROM tabla42";
$resultado = mysqli_query($con,$sql);

require('fpdf/fpdf.php');


class PDF extends FPDF
{
// Cargar los datos
function LoadData($file)
{
    // Leer las líneas del fichero
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

// Una tabla más completa
function ImprovedTable($header, $resultado)
{
    // Anchuras de las columnas
    $w = array(40, 35, 45, 40);
    // Cabeceras
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C');
    $this->Ln();
    // Datos
    while ($row = mysqli_fetch_assoc($resultado)) {
        $this->Cell($w[0],6,$row['codigo'],'LR');
        $this->Cell($w[1],6,$row['nombre'],'LR');
        $this->Cell($w[2],6,$row['marca'],'LR');
        $this->Cell($w[3],6,number_format($row['precio']),'LR',0,'R');
        $this->Cell($w[4],6,number_format($row['cantidad']),'LR',0,'R');
        $this->Ln();
    }
    // Línea de cierre
    $this->Cell(array_sum($w),0,'','T');
}


}

$pdf = new PDF();
// Títulos de las columnas
$header = array('Codigo', 'Nombre', 'Marca','Precio','Cantidad');
// Carga de datos
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->ImprovedTable($header,$resultado);
$pdf->Output();
mysqli_close($con);
?>