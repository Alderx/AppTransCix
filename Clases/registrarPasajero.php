<?php
require("conexion.php");

$tipDoc= $_POST["txtTipDocIde"];
$numDoc= $_POST["txtNumDoc"];
$nom= utf8_decode($_POST["txtNom"]);
$apePat= utf8_decode($_POST['txtApePat']);
$apeMat= utf8_decode($_POST['txtApeMat']);
$nac= $_POST["txtFecNac"];
$dir= utf8_decode($_POST["txtDir"]);
$cel= $_POST["txtCel"];
$ema= $_POST["txtEma"];
$sex= $_POST["txtSex"];

$sql="INSERT INTO pasajero(idPasajero,idCliente, idTipDocIdentidad, numDocPasajero, nomPasajero, apePatPasajero, apeMatPasajero, fecNacPasajero, dirPasajero, celPasajero, emaPasajero, sexPasajero, fecRegPasajero)
VALUES ('','1', '$tipDoc', '$numDoc', '$nom', '$apePat', '$apeMat', '$nac', '$dir', '$cel', '$ema', '$sex', NOW())";

$cnx->query($sql);
if ($cnx){
	echo "<script>alert('Se Registro Correctamente');
			window.location='../venta/bus.php';</script>";
}else{
	echo "Fallo la Consulta";
	}

?>