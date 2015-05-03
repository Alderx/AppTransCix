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
    $estado = utf8_encode($_SESSION['nombre'].' '.$_SESSION['apellido']);;
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Transportes Chiclayo</title>
  <link rel="shortcut icon" href="../img/favicon.ico"/>

    <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/normalize.css"> -->

  <!-- Agregados en el main -->
  <link rel="stylesheet" type="text/css" href="../css/main.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>

<!-- ************************************************************************ -->
<!-- ************************************************************************ -->
<!-- ************************************************************************ -->

    <br><b>Lista de Pasajes Comprados</b><br>
        <a href="compra.php" data-role="button" data-icon="plus">Comprar Pasaje</a></br>
        <hr>

    <div class='table-responsive'>
        <table class='table table-hover table-bordered table-condensed'>
            <thead>
                <tr BGCOLOR='#950E1F' style="color: #F7D358;">
                    <th><center><i class="glyphicon glyphicon-user"></i></center></th>
                    <th><center>DNI</center></th>
                    <th><center>Origen</center></th>
                    <th><center>Destino</center></th>
                    <th><center>Asiento</center></th>
                    <th><center><i class="glyphicon glyphicon-calendar"></i> Viaje</center></th>
                    <th><center><i class="glyphicon glyphicon-time"></i></center></th>
                    <th><center>S/.</center></th>
                    <th><center><i class="glyphicon glyphicon-calendar"></i> Expedición</center></th>
                    <th><center>OPCIONES</center></th>
                </tr>
            </thead>
            <!-- guardamos el IDProgramacion para pasar a la pagina donde se llena el bus -->
            <?php
                require_once ("../Clases/conexion.php");
                $sql = "SELECT dni_usu, nom_usu, ape_usu, cel_usu, nac_usu, fechreg_usu, fij_usu, dir_usu, ema_usu FROM usuario WHERE dni_usu = '46651498'";
                $resultado = $cnx->query($sql);
                while ($registro  = $resultado->fetch()){
                        echo '<tbody>
                              <tr align="center">
                                <td>'.$registro["nom_usu"].'</td>
                                <td>'.$registro["dni_usu"].'</td>
                                <td>'.$registro["nom_usu"].'</td>
                                <td>'.$registro["ape_usu"].'</td>
                                <td>'.$registro["cel_usu"].'</td>
                                <td>'.$registro["fechreg_usu"].'</td>
                                <td>'.$registro["nac_usu"].'</td>
                                <td>'.$registro["fij_usu"].'</td>
                                <td>'.$registro["dir_usu"].'</td>
                                <td><a href="postergar.php?id_boleto='.$registro["id_boleto"].'&accion=editar">Postergar</a></td>
                            </tr>
                            </tbody>           
                        </table>
                    </div>';
                }
?>

<!-- ************************************************************************ -->
<!-- ************************************************************************ -->
<!-- ************************************************************************ -->

    <!-- jQuery (necesario para los plugins JavaScript de Bootstrap) -->
  <script src="../js/jquery.min.js"></script>
  <!-- Incluya todos los plugins compilados (abajo), o incluir archivos individuales según sea necesario. -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>