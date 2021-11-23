<?php
$servidor = "localhost";
$usuario = "root";
$password = "12345678";
$base = "bdunad42";

$dir = "backup/";
$filename = "backup" . date("YmdHis") . $base. ".sql";


$command = 'c:\xampp\mysql\bin\mysqldump --opt -u '.$usuario.' -p'.$password.' '.$base.' > '.$dir.$filename.'';
passthru($command);

$fichero = $dir.$filename;

if (file_exists($fichero)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($fichero).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($fichero));
    readfile($fichero);
    exit;
}

?>
