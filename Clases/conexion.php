<?php
// $con=mysqli_connect("localhost","root","root","GARDENCENTER_db");
// $acentos = $con->query("SET NAMES 'utf8'");
	
	//conexion a la base de datos
	// mysql_connect("localhost","root","") or die("No se ha podido conectar a la BD");

	// mysql_select_db("apptranschiclayo");


$driver="mysql";
$servidor="mysql.vattios.net";
// $base="apptranschiclayo";
$base="u106415707_apptc";
$usuario="u106415707_root";
$password="";
$cadena = "$driver:host=$servidor;dbname=$base";

$cnx = new PDO($cadena,$usuario,$password);
// ?>	

<?php

// 
// //creamos la conexion a la basse de datos
// mysql_connect("localhost", "root", "") or die(mysql_error());
// mysql_select_db("apptranscix") or die(mysql_error());
// ?>