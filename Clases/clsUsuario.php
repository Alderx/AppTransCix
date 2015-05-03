<?php
class Usuario{
  function  Identificar($usu,$pass){
    $row=array();
    require 'Conexion.php';
    $query="SELECT*FROM USUARIO WHERE USERR = BINARY '$usu' AND PASS = BINARY '$pass' AND ESTADO='A'";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
    return $row;
  }
  function Registrar($user,$pass,$est,$tip){
    $rpta=FALSE;
    require 'Conexion.php';
    $sql="INSERT INTO USUARIO VALUES (0,'$user','$pass','$est','$tip');";
    if(mysqli_query($con,$sql)){
      $rpta=TRUE;
    }
    return $rpta;
  }
}
?>