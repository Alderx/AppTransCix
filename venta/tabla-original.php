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

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <!-- MasterHead -->
  <div class="container">
    <div class="row">
        <div class="col-md-7">
          <div class="row">
            <div class="col-md-6">
              <center>
                <img class="img-responsive" src="../img/logo.png" alt="Transportes Chiclayo">
              </center>
            </div>
            <div class="col-md-6 visible-lg">
              <center>
                <img class="img-responsive" src="../img/flota.png" alt="">
              </center>
            </div>
          </div>
        </div> <!-- fin /col-md-7 -->
      <center>
        <div class="col-md-5">
          <br>&nbsp;
          <p style="float:right;">
            <a href="https://www.facebook.com/TransportesChiclayoSA"><img src="../img/fb.png"></a>&nbsp;
            <a href="#"><img src="../img/tw.png"></a>&nbsp;
            <a href="#"><img src="../img/gp.png"></a>&nbsp;
          </p>
          <br>&nbsp;<br>&nbsp;
          
        </div> <!-- /fin col-md-5 -->
      </center>
    </div> <!-- fin /row -->
  </div> <!-- fin /container-fluid -->

  <!-- Modal registrar -->
  <div class="modal fade" id="registrar" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
          <h4 class="modal-title" id="ModalLabel"><strong>LLENA TUS DATOS PARA EL REGISTRO</strong></h4>
        </div> <!-- fin /modal-header -->

        <div class="modal-body">
          <form role="form" action="PosUsuario.php" method="post">
            <div class="form-group">
              <input type="number" class="form-control" name= "dni" placeholder="NUMERO DE DNI" title="Obligatorio y 8 numeros" pattern="\S{8}" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name= "nombre" placeholder="INGRESE NOMBRES" title="Obligatorio" required  pattern="[a-zA-Z]*">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name= "apellido" placeholder="INGRESE APELLIDOS" title="Obligatorio" required pattern="[a-zA-Z]*">
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" name= "celular" placeholder="INGRESE NUMERO CELULAR" title="aceptar números que comiencen por 9, 8, 6 o 7 seguido de 8 digitos"  pattern="^[9|8|7|6]\d{8}$" required>
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" name= "fijo" placeholder="INGRESE NUMERO FIJO" pattern="\S{6}" title="6 Numeros">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name= "direccion" placeholder="INGRESE DIRECCIÓN" required>
            </div>
            <div class="form-group">
              <input type="date" class="form-control" name= "nacimiento" placeholder="FECHA DE NACIMIENTO" title="Obligatorio" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name= "password" placeholder="CONTRASEÑA" title="Obligatorio" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name= "email"  placeholder="CORREO ELECTRONICO" title="considere el @">
            </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Registrar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div> <!-- fin /modal-footer -->
          </form>
        </div> <!-- fin /modal-body -->
        
      </div> <!-- fin /modal-content -->
    </div> <!-- fin /modal-dialog -->
  </div> <!-- fin /modal fade -->
  <!-- Fin Modal registrar -->

  <!-- Fin MasterHead -->

  <!-- Contenedor Navbar -->
  <div class="container">
    <!-- NavBar -->
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#acolapsar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="../index.php" class="navbar-brand"><img src="../img/ave2.png" alt="Transportes Chiclayo"></a>
        </div> <!-- fin /navbar-header -->
        <div class="collapse navbar-collapse" id="acolapsar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
            <li><a href="../php/nosotros.php">Nosotros</a></li>
            <li><a href="../php/agencias.php">Agencias</a></li>
            <li><a href="../php/servicios.php">Servicios</a></li>
            <li><a href="../php/promociones.php">Promociones</a></li>
            <li><a href="../php/novedades.php">Novedades</a></li>
            <li><a href="../php/viajero.php">Viajero</a></li>
            <li><a href="../php/contactanos.php">Contáctanos</a></li>
          </ul>
       
          <?php
    if ($estado) {
      echo '
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-user"></span>
                '.$estado.'
              <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="navbar-content">
                      <div class="row">
                          
                        <div class="col-lg-5">
                          <img src="http://placehold.it/120x120" alt="Alternate Text" class="img-responsive" />
                          <p class="text-center small">
                            <a href="#">Cambiar Foto</a>
                          </p>
                        </div>
                        <div class="col-lg-7">
                          <span>Bienvenido(a):</span><br>
                          <h6><span>'.$estado.'</span></h6>
                          <p class="text-muted small">'.$correo.'</p>
                          <div class="divider">
                          </div>
                          <a href="#" class="btn btn-primary btn-xs">Ver Perfil</a>
                        <div class="btn-group">
                          <a href="../php/perfil.php" class="btn btn-xs"><i class="glyphicon glyphicon-user"></i></a>
                          <a href="../php/editperfil.php" class="btn btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                        </div>
                        <div class="btn-group">
                          <a href="../Clases/ofertas.php" alt="ofertas" class="btn btn-xs"><i class="glyphicon glyphicon-tags"></i></a>
                          <a href="../Clases/compra.php" class="btn btn-xs" title="Editar Perfil"><i class="glyphicon glyphicon-shopping-cart" title="Editar Perfil"></i></a>
                          <a href="../Clases/#qrcode" class="btn btn-xs"><i class="glyphicon glyphicon-qrcode"></i></a>
                        </div><br>
                        </div>
                      </div>
                    </div> <!-- fin /navbar-content -->
                    <div class="navbar-footer">
                      <div class="navbar-footer-content">
                        <div class="row">
                          <div class="col-lg-6">
                            <a href="#" class="btn btn-primary btn-xs">Cambiar Clave</a>
                          </div>
                          <div class="col-lg-6">
                            <a href="../Clases/logout.php" class="btn btn-danger btn-xs pull-right"><i class="glyphicon glyphicon-off"></i> Salir</a>
                          </div>
                        </div>
                      </div> <!-- fin /navbar-footer-content -->
                    </div> <!-- fin /navbar-footer -->


                ';
              }else{
            ?>

          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-user"></span>
                Cuenta
              <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <form class="navbar-form" action="Clases/login.php" method="post" rol="form" >

                        <div class="navbar-content">
                          <div class="row">
                              
                            <div class="input-group col-lg-12">
                              <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                              <input class="input-sm form-control" type="tel" id="formGroup" name="dni_usu" maxlength="8" placeholder="DNI" title="Sólo 8 números" pattern="[0-9]{8,8}" required>
                            </div>
                            <div class="input-group col-lg-12">
                              <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                              <input type="password" name="pass_usu" maxlength="10" class="form-control input-sm" placeholder="Contraseña" title="Sólo 10 dígitos" required>
                            </div>
                            <div class="checkbox">
                              <label class="checkbox input-sm">
                                <input type="checkbox" value="1" name="remember"> recordar
                              </label>
                            </div>
                          </div>
                        </div> <!-- fin /navbar-content -->

                        <div class='navbar-footer'>
                          <div class='navbar-footer-content'>
                            <div class='row'>
                                  <div class='col-lg-6'>
                                    <input class="btn btn-primary btn-xs pull-left" name="btnlog" type="submit" value="Ingresar"/>
                                  </div>
                                  <div class='col-lg-6'>
                                    <button type="button" class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#registrar">
                                      Registrar
                                    </button>
                                  </div>
                            </div>
                          </div> <!-- fin /navbar-footer-content -->
                        </div> <!-- fin /navbar-footer -->

                  </form>
          
                  <?php
                    }
                  ?>
                </li>
              </ul>
            </li>
          </ul>
        </div> <!-- fin /collapse navbar-collapse -->
      </div> <!-- fin /container-fluid -->
    </nav>
  </div> <!-- fin /container -->
  <!-- fin Contenedor Navbar -->


  <!-- Contenedor Principal -->
  <div class="container">
    <div class="jumbotron">
      <div class="row">
        <div class="col-md-12">


          <div class="process">
            <div class="process-row">
              <div class="process-step">
                <button type="button" class="btn btn-default btn-info btn-circle" disabled="disabled"><i class="glyphicon glyphicon-check"></i></button>
                <p><h5>Servicio</h5></p>
              </div>
              <div class="process-step">
                <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="glyphicon glyphicon-pushpin"></i></button>
                <p><h5>Selecciona Asientos</h5></p>
              </div>
              <div class="process-step">
                <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="glyphicon glyphicon-user"></i></button>
                <p><h5>Datos del Pasajero</h5></p>
              </div>
              <div class="process-step">
                <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="glyphicon glyphicon-info-sign"></i></button>
                <p><h5>Información de la Compra</h5></p>
              </div>
              <div class="process-step">
                <button type="button" class="btn btn-circle" disabled="disabled"><i class="glyphicon glyphicon-credit-card"></i></button>
                <p><h5>Forma de Pago</h5></p>
              </div>
            </div>
          </div>
          <form name="formulario" method="post" action="bus.php">

            <?php
              echo "<center><h2>Transportes Chiclayo</h2></center>
                    <br>
                    <b>Itinerarios</b>
                    <br>";

              $origen=$_REQUEST['origen'];
              echo "Lugar de Origen: ".$origen."
                    <br>";

              $destino=$_REQUEST['destino'];
              echo "Lugar de Destino: ".$destino."
                    <br>";

              $fechaida=$_REQUEST['dateIda'];
              echo "Fecha de Ida: ".$fechaida."
                    <br>";
              
              if(isset($_REQUEST['dateIyV'])=='FALSE'){
                $fechare=$_REQUEST['dateIyV'];
                echo "Fecha Regreso:".$fechare."";
              }
              else{
                echo "Sin fecha de Regreso";
                $fechare=0;
              }

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
                    echo "<div class'table-responsive'>
                            <table class='table table-hover' BORDER>
                              <tr BGCOLOR='#FFEECC'>
                                <th>Elegir</th>
                                <th>Servicio</th>
                                <th>Origen</th>
                                <th>Destino</th>
                                <th>Precio S/.</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Asientos Disp.</th>
                              </tr>                    ";
                        //guardamos el IDProgramacion para pasar a la pagina donde se llena el bus
                        echo "<p>RUTAS DE IDA ";
                        for ($i=0; $i<$nfilas; $i++){
                          echo "<tr align='center'>";
                          //asigna el IDBus al value de cada radiobutom, cambiar luego por IDprogramacion
                          $busId=$resultado['IDBus'];
                          //print ("<TD>" . $resultado['IDRuta'] ."</TD>\n");
                          echo '  <td>  <input type ="radio" name = "elegir" value='.$busId.'> </td>
                                  <td> '. $resultado["Tipo"] .'</td>
                                  <td> '. $resultado["Origen"] .'</td>
                                  <td> '. $resultado["Destino"] .'</td>
                                  <td> '. $resultado["Precio"] .'</td>
                                  <td> '. $resultado["Fecha"] .'</td>
                                  <td> '. $resultado["Hora"] .'</td>
                                </tr>                  ';
                          $resultado = mysql_fetch_array ($consulta);
                        }
                        echo"</table>
                        </div>";
                  }
                  else
                    echo "<p> No hay Rutas Disponibles</p>";


                  //*****************************************************************************************************************************/
                  if($fechare==0)
                  {
                    //si la fecha de regreso esta en 0 no muestra nada
                    echo "<p>";
                  }
                  else
                  {
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
                  echo "<div class='table-responsive'>
                          <table class='table' BORDER>
                            <tr BGCOLOR='#FFEECC'>
                              <th>Elegir</th>
                              <th>Servicio</th>
                              <th>Origen</th>
                              <th>Destino</th>
                              <th>Precio S/.</th>
                              <th>Fecha</th>
                              <th>Hora</th>
                              <th>Asientos Disp.</th>
                            </tr>      ";
                     //guardamos el IDProgramacion para pasar a la pagina donde se llena el bus
                     echo "RUTAS DE REGRESO";
                     for ($i=0; $i<$nfilas; $i++)
                     {
                      echo "<tr align='center'>";
                        //asigna el IDBus al value de cada radiobutom, cambiar luego por IDprogramacion
                       $busId=$resultado['IDBus'];
                      //print ("<TD>" . $resultado['IDRuta'] ."</TD>\n");
                      echo'   <td>  <input type ="radio" name = "elegir" value='.$busId.'> </td>
                              <td> '. $resultado["Tipo"] .'</td>
                              <td> '. $resultado["Origen"] .'</td>
                              <td> '. $resultado["Destino"] .'</td>
                              <td> '. $resultado["Precio"] .'</td>
                              <td> '. $resultado["Fecha"] .'</td>
                              <td> '. $resultado["Hora"] .'</td>
                            </tr>           ';
                       $resultado = mysql_fetch_array ($consulta);
                     }
                     echo "</table>
                        </div>         ";
                  }
                  else
                     echo "<p class='label-warning'> No hay Rutas Disponibles</p>";
                    //termina tabla de regreso
                }
              // Cerrar conexión
                 mysql_close ($conexion);
        ?>
        <input class="btn btn-primary" type="submit" name="Siguiente" value="Siguiente">
      </form>
        
        </div> <!-- fin /col-md-12 -->
      </div> <!-- fin /row -->
    </div> <!-- fin /jumbotron -->
  </div> <!-- fin /container -->
  <!-- Fin Contenedor Principal -->

<!-- Contenedor Footer -->
  <div class="container">
    <footer class="footer">
      <div class="container">
        <p class="text-muted2">Copyright © <? echo date('Y'); ?> - Derechos Reservados <!--- <a href="www.facebook.com/marusero">Alayo</a> - <a href="www.facebook.com/joselito"/>Tongo--></p>
      </div> <!-- fin /container -->
    </footer>
  </div> <!-- fin /container -->
  <!-- Fin Contenedor Footer -->

  <!-- jQuery (necesario para los plugins JavaScript de Bootstrap) -->
  <script src="../js/jquery.min.js"></script>
  <!-- Incluya todos los plugins compilados (abajo), o incluir archivos individuales según sea necesario. -->
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>