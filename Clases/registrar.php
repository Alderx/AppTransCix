<?php
require("conexion.php");

$tipDoc= $_POST["txtTipDocIde"];
$numDoc= $_POST["txtNumDoc"];
$nom= utf8_decode($_POST["txtNom"]);
$apePat= utf8_decode($_POST['txtApePat']);
$apeMat= utf8_decode($_POST['txtApeMat']);
$dir= utf8_decode($_POST["txtDir"]);
$fij= $_POST["txtFij"];
$cel= $_POST["txtCel"];
$ema= $_POST["txtEma"];
$nac= $_POST["txtFecNac"];
$pass= $_POST["txtPass"];
$sex= $_POST["txtSex"];

$sql="INSERT INTO cliente(idCliente, idTipDocIdentidad, numDocCliente, nomCliente, apePatCliente, apeMatCliente, dirCliente, telFijCliente, celCliente, emaCliente, fecNacCliente, fecRegCliente, passCliente, sexCliente) 
VALUES ('', '$tipDoc', '$numDoc', '$nom', '$apePat', '$apeMat', '$dir', '$fij', '$cel', '$ema', '$nac',NOW(), md5('$pass'), '$sex')";

$cnx->query($sql);
if ($cnx){
	echo "<script>alert('Se Registro Correctamente');
			window.location='../php/logeo.php';</script>";
}else{
	echo "Fallo la Consulta";
	}

?>