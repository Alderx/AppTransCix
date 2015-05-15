<?php
  session_name('tchiclayo');
  session_start();
  // $email = utf8_encode($_SESSION['email']);;
  $correo = false;
  if (isset($_SESSION['id'])) {
    $correo = utf8_encode($_SESSION['email']);;
  }
  $estado = false; // booleana
  if (isset($_SESSION['id'])) {
    $estado = utf8_encode($_SESSION['nombre'].' '.$_SESSION['apellidoP']);;
  }

	require_once('conexion.php');
	$id=$_GET['id'];
	$sql="select idCliente from cliente where idCliente"

	echo'idCliente, idTipDocIdentidad, numDocCliente, 
		nomCliente, apePatCliente, apeMatCliente, 
		dirCliente, telFijCliente, celCliente, 
		emaCliente, fecNacCliente, fecRegCliente, 
		passCliente, sexCliente';