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
  <link rel="shortcut icon" href="img/favicon.ico"/>

	<!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/normalize.css"> -->

  <!-- Agregados en el main -->
  <link rel="stylesheet" type="text/css" href="css/main.css">

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
    <div class="row bgcolor-head">
      <center>
        <img align="center" class="img-responsive" src="img/logo.png" alt="Transportes Chiclayo">
      </center>
    </div> <!-- fin /row -->
  </div> <!-- fin /container-fluid -->
  <!-- Fin MasterHead -->

  <!-- Carousel -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/slide/chiclayo.jpg" alt="Primer slide">
      </div>
      <div class="item">
        <img src="img/slide/Tumbas-reales.jpg" alt="Segundo slide">
      </div>
      <div class="item">
        <img src="img/slide/lima.jpg" alt="Tercer slide">
      </div>
      <div class="item">
        <img src="img/slide/Piura-plaza.jpg" alt="Cuarto slide">
      </div>
      <div class="item">
        <img src="img/slide/playa-mancora.jpg" alt="Quinto slide">
      </div>
      <div class="item">
        <img src="img/slide/moyobamba.jpg" alt="Sexto slide">
      </div>
      <div class="item">
        <img src="img/slide/cajamarca2.jpg" alt="Setimo slide">
      </div>
    </div> <!-- fin /carousel-inner -->
  </div> <!-- fin /carousel slide -->
  <!-- Fin Carousel -->


<!--   <div class="container-fluid">
    <div class="row">
      <center>
        <div class="col-xs-5 col-xs-offset-1"><img class="img-responsive img-circle" src="img/index/agencias.png">Agencias</div>
        <div class="col-xs-5 col-xs-offset-1"><img class="img-responsive img-circle" src="img/index/localizacion.png">Mi Cuenta</div>
      </center>
    </div>
    <div class="row">
      <center>
        <div class="col-xs-5 col-xs-offset-4"><img class="img-responsive img-circle" src="img/index/localizacion.png">Itinerario</div>
      </center>
    </div>
    <div class="row">
      <center>
        <div class="col-xs-5 col-xs-offset-1"><p><a href="php/itinerario.php"><img class="img-responsive img-circle" src="img/index/servicios.png">Servicios</a></p></div>
        <div class="col-xs-5 col-xs-offset-1"><img class="img-responsive img-circle" src="img/index/localizacion.png">Ubicanos</div>
      </center>
    </div>
        
  </div> -->

  <div class="container-fluid">
    <div class="row">
      <table align="center" style="margin-top: 26px; margin-bottom: 26px;">
        <tr align="center">
          <td></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td></td>
        </tr>
        <tr align="center">
          <td><p><a href="php/agencias.php"><img class="img-responsive img-circle" src="img/index/agencias.png"></a></p>
            <strong>Agencias</strong>
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><p><a href="php/logeo.php"><img class="img-responsive img-circle" src="img/index/cuenta.png"></a></p>
            <strong>Mi Cuenta</strong>
          </td>
        </tr>
        <tr align="center">
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr align="center">
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr align="center">
          <td></td>
          <td></td>
          <td></td>
          <td><p><a href="php/itinerario.php"><img class="img-responsive img-circle" src="img/index/itinerario.png"></a></p>
            <strong>Itinerario</strong>
          </td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr align="center">
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr align="center">
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr align="center">
          <td><p><a href="php/servicios.php"><img class="img-responsive img-circle" src="img/index/servicios.png"></a></p>
            <strong>Servicios</strong>
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><p><a href="php/ubicanos.php"><img class="img-responsive img-circle" src="img/index/localizacion.png"></a></p>
            <strong>Ubicanos</strong>
          </td>
        </tr>
        <tr align="center">
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
  </div>

	<!-- jQuery (necesario para los plugins JavaScript de Bootstrap) -->
  <script src="js/jquery.min.js"></script>
  <!-- Incluya todos los plugins compilados (abajo), o incluir archivos individuales según sea necesario. -->
	<script src="js/bootstrap.min.js"></script>

  <!-- Agregados en el main -->
  <script src="js/main.js"></script>

</body>
</html>