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
  <!-- MasterHead -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 bgcolor-head">
        <center>
          <img class="img-responsive" src="../img/logo.png" alt="Transportes Chiclayo">
        </center>
      </div>
    </div> <!-- fin /row -->
  </div> <!-- fin /container-fluid -->
  <!-- Fin MasterHead -->





  <!-- Contenedor Mi Cuenta -->
  <div class="container-fluid">
    <center>
      <div class="row">
        <div style="padding: 30px;" class="col-xs-12">





          <span class="font-trece">Bienvenido(a):</span><br>
          <h6><span class="glyphicon glyphicon-user"></span> <span class="font-trece"><?php echo "$estado";?></span></h6>
          <p class="text-muted"><?php echo "$correo";?></p>
            <div class="btn-group">
              <a href="php/perfil.php" class="btn btn-xs"><i class="glyphicon glyphicon-user"></i></a>
              <a href="php/editperfil.php" class="btn btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
            </div>
            <div class="btn-group">
              <a href="Clases/ofertas.php" alt="ofertas" class="btn btn-xs"><i class="glyphicon glyphicon-tags"></i></a>
              <a href="Clases/compra.php" class="btn btn-xs" title="Editar Perfil"><i class="glyphicon glyphicon-shopping-cart" title="Editar Perfil"></i></a>
              <a href="Clases/#qrcode" class="btn btn-xs"><i class="glyphicon glyphicon-qrcode"></i></a>
            </div>

            <div class="row">
              <div class="col-xs-6">
                <a href="perfil.php" class="btn btn-primary btn-xs pull-left">Cambiar Clave</a>
              </div>
              <div class="col-xs-6">
                <a href="../Clases/logout.php" class="btn btn-danger btn-xs pull-right"><i class="glyphicon glyphicon-log-out"></i> Salir</a>
              </div>
            </div>

            <hr>
            <br><b>Lista de Pasajes Comprados</b><br>
            <a href="compra.php" data-role="button" data-icon="plus">Comprar Pasaje</a></br>

            <div class="table-responsive">
              <table class="table table-hover table-bordered table-condensed">
                <thead>
                  <tr BGCOLOR="#950E1F" style="color: #F7D358;">
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

              <?php
                require_once ("../Clases/conexion.php");
                $sql = "SELECT numDocCliente, nomCliente, apePatCliente, celCliente, fecNacCliente, fecRegCliente, telFijCliente, dirCliente, emaCliente FROM cliente WHERE numDocCliente = '46651498'";
                $resultado = $cnx->query($sql);
                while ($registro  = $resultado->fetch()){
                        echo "<tbody>
                                <tr align='center'>
                                  <td>".$registro["nomCliente"]."</td>
                                  <td>".$registro["numDocCliente"]."</td>
                                  <td>".$registro["nomCliente"]."</td>
                                  <td>".$registro["apePatCliente"]."</td>
                                  <td>".$registro["celCliente"]."</td>
                                  <td>".$registro["fecRegCliente"]."</td>
                                  <td>".$registro["fecNacCliente"]."</td>
                                  <td>".$registro["telFijCliente"]."</td>
                                  <td>".$registro["dirCliente"]."</td>
                                  <td><a href='postergar.php?id_boleto=".$registro["id_boleto"]."&accion=editar'>Postergar</a></td>
                                </tr>
                              </tbody>           
                            </table>
                          </div>";
                }
              ?>


                 

        </div> <!-- fin /col-xs-12 -->
      </div> <!-- fin /row -->
    </center>
  </div> <!-- fin /container -->



<!-- ************************************************************************ -->
<!-- ************************************************************************ -->
<!-- ************************************************************************ -->

<!--     <br><b>Lista de Pasajes Comprados</b><br>
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
            </thead> -->
            <!-- guardamos el IDProgramacion para pasar a la pagina donde se llena el bus -->
<!--            <?php
                // require_once ("../Clases/conexion.php");
                // $sql = "SELECT numDocCliente, nomCliente, apePatCliente, celCliente, fecNacCliente, fecRegCliente, telFijCliente, dirCliente, emaCliente FROM cliente WHERE numDocCliente = '46651498'";
                // $resultado = $cnx->query($sql);
                // while ($registro  = $resultado->fetch()){
                //         echo '<tbody>
                //               <tr align="center">
                //                 <td>'.$registro["nomCliente"].'</td>
                //                 <td>'.$registro["numDocCliente"].'</td>
                //                 <td>'.$registro["nomCliente"].'</td>
                //                 <td>'.$registro["apePatCliente"].'</td>
                //                 <td>'.$registro["celCliente"].'</td>
                //                 <td>'.$registro["fecRegCliente"].'</td>
                //                 <td>'.$registro["fecNacCliente"].'</td>
                //                 <td>'.$registro["telFijCliente"].'</td>
                //                 <td>'.$registro["dirCliente"].'</td>
                //                 <td><a href="postergar.php?id_boleto='.$registro["id_boleto"].'&accion=editar">Postergar</a></td>
                //             </tr>
                //             </tbody>           
                //         </table>
                //     </div>';
                // }
?>

 ************************************************************************ -->
<!-- ************************************************************************ -->
<!-- ************************************************************************ -->

  <!-- jQuery (necesario para los plugins JavaScript de Bootstrap) -->
  <script src="../js/jquery.min.js"></script>
  <!-- Incluya todos los plugins compilados (abajo), o incluir archivos individuales según sea necesario. -->
  <script src="../js/bootstrap.min.js"></script>

  <!-- Agregados en el main -->
  <script src="../js/main.js"></script>

</body>
</html>