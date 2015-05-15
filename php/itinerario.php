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
          <a href="../index.html" class="glyphicon glyphicon-home" style="color:#F7D358;font-size:20px;">
          <p style="font-size:14px;font-family:Verdana;">Inicio</p></a>
        </center>
      </div>
    </div> <!-- fin /row -->
  </div> <!-- fin /container-fluid -->
  <!-- Fin MasterHead -->

  <!-- Carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="../img/slide/chiclayo.jpg" alt="Primer slide">
            </div>
            <div class="item">
              <img src="../img/slide/Tumbas-reales.jpg" alt="Segundo slide">
            </div>
            <div class="item">
              <img src="../img/slide/lima.jpg" alt="Tercer slide">
            </div>
            <div class="item">
              <img src="../img/slide/Piura-plaza.jpg" alt="Cuarto slide">
            </div>
            <div class="item">
              <img src="../img/slide/playa-mancora.jpg" alt="Quinto slide">
            </div>
            <div class="item">
              <img src="../img/slide/moyobamba.jpg" alt="Sexto slide">
            </div>
            <div class="item">
              <img src="../img/slide/cajamarca2.jpg" alt="Setimo slide">
            </div>
          </div>
        </div> <!-- fin /carousel slide -->
        <!-- Fin Carousel -->

  <!-- Contenedor Principal -->
  <div class="container-fluid">
    <div class="row">

      <div class="col-xs-12">
        <center>
          <form name="formulario" method="post" action="../venta/tabla.php">
            <br>
            <div style="background:#928e8e;padding:5px;">
              <strong style="font-size: 13px;color:#fff">ITINERARIO</strong>
            </div>

            <div class="table-responsive">
              <table class="table table-condensed table-bordered">
                <tr>
                    <?php
                    // Conectar con el servidor de base de datos
                          $conexion = mysql_connect ("localhost", "root", "")
                             or die ("No se puede conectar con el servidor");

                       // Seleccionar base de datos
                          mysql_select_db ("bd-chiclayo")
                             or die ("No se puede seleccionar la base de datos");

                       // Enviar consulta
                          $instruccion = "select *from sucursal ";
                          $consulta = mysql_query ($instruccion, $conexion)
                             or die ("Fallo en la consulta");
                    ?>
                  <td><center><label for="origen">Origen</label></center></td>
                  <td><center>
                    <select name="origen" size="0" style="border-radius: 6px;">
                      <?php
                      while($arreglo=mysql_fetch_array ($consulta)){?>
                      <option value="<?php echo $arreglo['Nombre']?>"><?php echo $arreglo['Nombre']?></option>
                      <?php } ?>
                    </select></center>
                  </td>
                </tr>

                <tr>
                  <td><center>
                    <!-- - - - - - - - Seleccionar destino - - - - - - - - - - - - - - - - - 0 -->
                         <?php
                    // Conectar con el servidor de base de datos
                          $conexion = mysql_connect ("localhost", "root", "")
                             or die ("No se puede conectar con el servidor");

                       // Seleccionar base de datos
                          mysql_select_db ("bd-chiclayo")
                             or die ("No se puede seleccionar la base de datos");

                       // Enviar consulta
                          $instruccion = "select *from sucursal ";
                          $consulta = mysql_query ($instruccion, $conexion)
                             or die ("Fallo en la consulta");

                         ?>
                         <label for="destino">Destino</label></center>
                  </td>
                  <td><center>
                    <select name="destino" size="0" style="border-radius: 6px;">
                      <option value="">&nbsp;</option>
                      <?php
                      while($arreglo=mysql_fetch_array ($consulta)){?>
                      <option value="<?php echo $arreglo['Nombre']?>"><?php echo $arreglo['Nombre']?></option>
                      <?php } ?>
                    </select></center>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <label for="soloida">Solo Ida</label>
                      <?php
                        date_default_timezone_set('America/Lima');
                        $anio = date('Y');
                        $mes = date('m');
                        $dia = date('d');
                      ?>
                      <input type="checkbox" value="" onclick="document.formulario.dateIyV.disabled=!document.formulario.dateIyV.disabled"><br/>
                  </td>
                </tr>
                <tr>
                  <td><center><label for="ida">Ida</label></center></td>
                  <td><center>
                    <input style="line-height: 7px; border-radius: 7px;" type="date" name="dateIda" value="<?php echo $anio ?>-<?php echo $mes ?>-<?php echo $dia ?>" min="<?php echo $anio ?>-<?php echo $mes ?>-<?php echo $dia ?>"></center>
                  </td>
                </tr>
                <tr>
                  <td><center><label for="regreso">Regreso</label></center></td>
                  <td><center>
                    <input style="line-height: 7px; border-radius: 7px;" type="date" name="dateIyV" value="<?php echo $anio ?>-<?php echo $mes ?>-<?php echo $dia ?>" min="<?php echo $anio ?>-<?php echo $mes ?>-<?php echo $dia ?>"></center>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <button class="btn btn-success btn-block" type="submit" name="Buscar" style="font-size: 13px;">Buscar Itinerarios</button>
                  </td>
                </tr>
              </table>
            </div>  
                </form>
            </center>
      </div> <!-- fin /col-xs-12 -->

    </div> <!-- fin /row -->
  </div> <!-- fin /container -->
  <!-- Fin Contenedor Principal -->

  <div class="container-fluid">
    <div class="row">
      <table align="center" style="margin-top: 29px; margin-bottom: 29px;">
        <tr align="center">
          <td>&nbsp;&nbsp;&nbsp;</td>
          <td><p><a href="agencias.php"><img class="img-responsive img-circle index-imagen" style="width:55px; heigth:55px;" src="../img/index/agencias.png"></a></p>
            <strong class="index-texto">Agencias</strong>
          </td>
          <td>&nbsp;&nbsp;&nbsp;</td>
          <td><p><a href="logeo.php"><img class="img-responsive img-circle index-imagen" style="width:55px; heigth:55px;" src="../img/index/cuenta.png"></a></p>
            <strong class="index-texto">Cuenta</strong>
          </td>
          <td>&nbsp;&nbsp;&nbsp;</td>
          <td><p><a href="itinerario.php"><img class="img-responsive img-circle index-imagen" style="width:55px; heigth:55px;" src="../img/index/itinerario.png"></a></p>
            <strong class="index-texto">Itinerario</strong>
          </td>
          <td>&nbsp;&nbsp;&nbsp;</td>
          <td><p><a href="servicios.php"><img class="img-responsive img-circle index-imagen" style="width:55px; heigth:55px;" src="../img/index/servicios.png"></a></p>
            <strong class="index-texto">Servicios</strong>
          </td>
          <td>&nbsp;&nbsp;&nbsp;</td>
          <td><p><a href="agencias.php"><img class="img-responsive img-circle index-imagen" style="width:55px; heigth:55px;" src="../img/index/localizacion.png"></a></p>
            <strong class="index-texto">Ubicanos</strong>
          </td>
          <td>&nbsp;&nbsp;&nbsp;</td>
        </tr>
      </table>
    </div>
  </div>

	<!-- jQuery (necesario para los plugins JavaScript de Bootstrap) -->
  <script src="../js/jquery.min.js"></script>
  <!-- Incluya todos los plugins compilados (abajo), o incluir archivos individuales según sea necesario. -->
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>