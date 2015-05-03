<?php
	// require_once("conexion.php");

	// $dni_usu = $_POST['dni_usu'];
	// $pass_usu = md5($_POST['pass_usu']);

	// $data = mysql_query("SELECT id_usu FROM usuario WHERE dni_usu = '$dni_usu' and pass_usu = '$pass_usu'");

	// //obtiene una fila
	// $id = mysql_fetch_row($data); // id_usu, dni_usu, pass_usu
	// 							  //    0       1         2

	// if($id[0] > 0){
	// 	//iniciando sesion
	// 	session_start();
	// 	//asignando el dni_usu a la variable session
	// 	$_SESSION['tchiclayo'] = $dni_usu;
	// 	$_SESSION['tchiclayo'] = $nom_usu;
	// 	$_SESSION['tchiclayo'] = $ape_usu;

	// 	header("Location: ../index.php");
	// }else{
	// 	header("Location: ../index.php");
	// }

	require_once("conexion.php");

	// $dni_usu = $_POST['dni_usu'];
	// $pass_usu = md5($_POST['pass_usu']);

	// $data = "SELECT id_usu, nom_usu, ape_usu, ema_usu FROM usuario 
	// 	WHERE dni_usu = '$dni_usu' and pass_usu = '$pass_usu'";

	$numDocCliente = $_POST['numDocCliente'];
	$passCliente = md5($_POST['passCliente']);
	// $passCliente = $_POST['passCliente'];

	$data = "SELECT idCliente, nomCliente, apePatCliente, apeMatCliente, emaCliente FROM cliente 
		WHERE numDocCliente = '$numDocCliente' and passCliente = '$passCliente'";

	//obtiene una fila
	$id = $cnx->query($data) or die('$data'); // id_usu, dni_usu, pass_usu
								  //    0       1         2

	if($id->rowCount()==1){
	session_name("tchiclayo");
	session_start();
	$reg=$id->fetchObject();
	
	$_SESSION['id']=$reg->idCliente;
	$_SESSION['nombre']=$reg->nomCliente;
	$_SESSION['apellidoP']=$reg->apePatCliente;
	$_SESSION['apellidoM']=$reg->apeMatCliente;
	$_SESSION['email']=$reg->emaCliente;

		echo "<script>alert('Inicio Sesion Correctamente');
			window.location='../php/logeo.php';</script>";
		// header("Location: ../php/logeo.php");
	}else{
		echo "<script>alert('Error de Sesion');
			window.location='../php/logeo.php';</script>";
		// echo "Error de Sesion";
		// header("Location: ../index.php");
	}



?>