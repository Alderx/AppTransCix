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

  <!-- Contenedor Principal -->
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <center style="font-size: 13px;margin-top: 10px;">
          <button type="button" class="btn btn-info btn-sm" disabled="disabled"><i class="glyphicon glyphicon-check"></i></button>
          <br>Servicio
        </center>
        <form name="formulario" method="post" action="bus.php" role="form" style="margin-top: 30px;">

          <div class='table-responsive'>
            <table class="table table-bordered table-condensed">
              <thead>
                <tr style="background-color: #928e8e; color: #fff; font-size: 13px;">
                  <th colspan="3" align="center">
                    <center>Rutas de Ida</center>
                  </th>
                </tr>
                <tr>
                  <th><center>Fecha</center></th>
                  <th><center>Origen</center></th>
                  <th><center>Destino</center></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><center><?php $fechaida=$_REQUEST['dateIda']; echo $fechaida; ?></center></td>
                  <td><center><?php $origen=$_REQUEST['origen']; echo $origen ?></center></td>
                  <td><center><?php $destino=$_REQUEST['destino']; echo $destino ?></center></td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="hidden">
            <?php
                
              if(isset($_REQUEST["dateIyV"])=="FALSE"){
                $fechare=$_REQUEST["dateIyV"];
                echo "Fecha Regreso:".$fechare."";
              }
              else{
                echo "Sin fecha de Regreso";
                $fechare=0;
              }
          echo '
          </div> <!-- fin /hidden -->';

              // Conectar con el servidor de base de datos
              $conexion = mysql_connect ("localhost", "root", "")
              or die ("No se puede conectar con el servidor");

              // Seleccionar base de datos
              mysql_select_db ("bd-chiclayo")
              or die ("No se puede seleccionar la base de datos");

              // Enviar consulta
              $instruccion="SELECT Tipo,Origen,IDBus,IDProgramacion, Destino, Fecha, Hora, Precio from ruta inner join programacion on ruta.IDRuta = programacion.IDRuta inner join servicio on ruta.IdServicio = servicio.IDServicio where ruta.Origen='$origen' and ruta.Destino='$destino' and programacion.Fecha='$fechaida'" ;
              $consulta = mysql_query ($instruccion, $conexion)
              or die ("Fallo en la consulta");
              $resultado = mysql_fetch_array ($consulta);

              // Mostrar resultados de la consulta
              $nfilas = mysql_num_rows ($consulta);
              if ($nfilas > 0){
            ?>
            <div class='table-responsive'>
              <table class='table table-hover table-bordered table-condensed'>
                <thead>
                  <tr BGCOLOR='#950E1F' style="color: #F7D358;">
                    <th><center><i class="glyphicon glyphicon-check"></center></th>
                    <th><center>Servicio</center></th>
                    <th><center>S/.</center></th>
                    <th><center><i class="glyphicon glyphicon-time"></i></center></th>
                    <th><center>Disponibles</center></th>
                  </tr>
                </thead>
                <!-- guardamos el IDProgramacion para pasar a la pagina donde se llena el bus -->
                <?php
                  for ($i=0; $i<$nfilas; $i++){
                    echo "<tbody>
                            <tr align='center'>";
                            //asigna el IDBus al value de cada radiobutom, cambiar luego por IDprogramacion
                            $busId=$resultado['IDBus'];
                            //print ("<TD>" . $resultado['IDRuta'] ."</TD>\n");
                      echo '  <td>  <input type ="radio" name = "elegir" value='.$busId.'> </td>
                              <td data-title="Servicio"> '. $resultado["Tipo"] .'</td>
                              <td data-title="Precio"> '. $resultado["Precio"] .'</td>
                              <td data-title="Hora"> '. $resultado["Hora"] .'</td>
                              <td></td>
                            </tr>
                          </tbody>                        ';
                          $resultado = mysql_fetch_array ($consulta);
                  }
              echo "</table>
                  </div>";
                }
                else
                  echo "<p class='label-danger'> No hay rutas disponibles</p>";
                  //*****************************************************************************************************************************/
                if($fechare==0){
                  //si la fecha de regreso esta en 0 no muestra nada
                  echo "<p>";
                }
                else{
                  ?>
                  <div class='table-responsive'>
                    <table class="table table-bordered table-condensed">
                      <thead>
                        <tr style="background-color: #928e8e; color: #fff; font-size: 13px;">
                          <th colspan="3" align="center">
                            <center>Rutas de Regreso</center>
                          </th>
                        </tr>
                        <tr>
                          <th><center>Fecha</center></th>
                          <th><center>Origen</center></th>
                          <th><center>Destino</center></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><center><?php
                              if(isset($_REQUEST['dateIyV'])=='FALSE'){
                                $fechare=$_REQUEST['dateIyV'];
                                echo $fechare;
                              }
                              else{
                                echo "Sin fecha de Regreso";
                                $fechare=0;
                              } ?></center></td>
                          <td><center><?php $destino=$_REQUEST['destino']; echo $destino ?></center></td>
                          <td><center><?php $origen=$_REQUEST['origen']; echo $origen ?></center></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <?php
                  //si la fecha de regreso es diferente de cero se muestra la tabla de rutas de regreso
                  //EMPIESA TABLA DE REGRESO ******************************************************************************************

                  // Conectar con el servidor de base de datos
                  $conexion = mysql_connect ("localhost", "root", "")
                  or die ("No se puede conectar con el servidor");
                  // Seleccionar base de datos
                  mysql_select_db ("bd-chiclayo")
                  or die ("No se puede seleccionar la base de datos");
                  // Enviar consulta
                  $instruccion="SELECT Tipo,Origen,IDBus,IDProgramacion, Destino, Fecha, Hora, Precio from ruta inner join programacion on ruta.IDRuta = programacion.IDRuta inner join servicio on ruta.IdServicio = servicio.IDServicio where ruta.Origen='$destino' and ruta.Destino='$origen' and programacion.Fecha='$fechare'" ;
                  $consulta = mysql_query ($instruccion, $conexion)
                  or die ("Fallo en la consulta");
                  $resultado = mysql_fetch_array ($consulta);
                  // Mostrar resultados de la consulta
                  $nfilas = mysql_num_rows ($consulta);
                  if ($nfilas > 0){
                ?>
            <div class='table-responsive'>
              <table class='table table-hover table-bordered table-condensed'>
                <thead>
                  <tr BGCOLOR='#950E1F' style="color: #F7D358;">
                    <th><center><i class="glyphicon glyphicon-check"></center></th>
                    <th><center>Servicio</center></th>
                    <th><center>S/.</center></th>
                    <th><center><i class="glyphicon glyphicon-time"></i></center></th>
                    <th><center>Disponibles</center></th>
                  </tr>
                </thead>
                <!-- guardamos el IDProgramacion para pasar a la pagina donde se llena el bus -->
                <?php
                     for ($i=0; $i<$nfilas; $i++)
                     {
                      echo "<tbody>
                              <tr align='center'>";
                        //asigna el IDBus al value de cada radiobutom, cambiar luego por IDprogramacion
                       $busId=$resultado['IDBus'];
                      //print ("<TD>" . $resultado['IDRuta'] ."</TD>\n");
                        echo'   <td>  <input type ="radio" name = "elegir" value='.$busId.'> </td>
                                <td> '. $resultado["Tipo"] .'</td>
                                <td> '. $resultado["Precio"] .'</td>
                                <td> '. $resultado["Hora"] .'</td>
                                <td></td>
                              </tr>
                            </tbody>           ';
                       $resultado = mysql_fetch_array ($consulta);
                     }
                     echo "</table>
                        </div>         ";
                  }
                  else
                     echo "<p class='label-danger'> No hay rutas disponibles</p>";
                    //termina tabla de regreso
                }
              // Cerrar conexión
                 mysql_close ($conexion);
        ?>
        <input class="btn btn-success btn-sm pull-right" type="submit" name="Siguiente" value="Siguiente">
      </form>
      <a href="javascript:history.back()"><input class="btn btn-warning btn-sm pull-left" type="submit" value="Atras"></a>
        
        </div> <!-- fin /col-xs-12 -->
      </div> <!-- fin /row -->
    
  </div> <!-- fin /container -->
  <!-- Fin Contenedor Principal -->

  <!-- jQuery (necesario para los plugins JavaScript de Bootstrap) -->
  <script src="../js/jquery.min.js"></script>
  <!-- Incluya todos los plugins compilados (abajo), o incluir archivos individuales según sea necesario. -->
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>