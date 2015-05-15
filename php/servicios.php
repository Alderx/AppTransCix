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

  <!-- Contenedor Principal -->
  <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <br><center><strong class="font-trece">¿Conoce nuestros servicios?</strong></center><br>
          <div class="panel-group" id="accordion" style="margin-left: -10px; margin-right: -10px;">
            
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#normal">Normal
                  <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></a>
                </h4>
              </div>
              <div id="normal" class="panel-collapse collapse in">
                <div class="panel-body">
                  <!-- Carousel -->
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="../img/nosotros/vista-tv.jpg" alt="Primer slide">
                      </div>
                      <div class="item">
                        <img src="../img/slide/Tumbas-reales.jpg" alt="Segundo slide">
                      </div>
                    </div> <!-- fin /carousel-inner -->
                  </div> <!-- fin /carousel slide -->
                  <!-- Fin Carousel -->
                  <br>
                  <p class="text-justify">Servicio a bordo de un bus de un nivel con asientos reclinables, 
                    aire acondicionado, video, música, GPS satelital y servicios higiénicos.
                  </p>
                </div>
              </div>
            </div> <!-- fin /panel panel-default Normal -->

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#cama">Bus Cama
                  <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></a>
                </h4>
              </div>
              <div id="cama" class="panel-collapse collapse in">
                <div class="panel-body">
                  <!-- Carousel -->
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="../img/nosotros/interior.jpg" alt="Primer slide">
                      </div>
                      <div class="item">
                        <img src="../img/slide/Tumbas-reales.jpg" alt="Segundo slide">
                      </div>
                    </div> <!-- fin /carousel-inner -->
                  </div> <!-- fin /carousel slide -->
                  <!-- Fin Carousel -->
                  <br>
                  <p class="text-justify">Servicio con atención de tripulante a bordo de un bus de un 
                    nivel con asientos cómodos de 140° de reclinación, aire acondicionado, video, música, 
                    GPS satelital y servicios higiénicos. Incluye snack.
                  </p>
                </div>
              </div>
            </div> <!-- fin /panel panel-default Bus Cama -->

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#pasajeros">Servicio de Transporte Interprovincial de Pasajeros
                  <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></a>
                </h4>
              </div>
              <div id="pasajeros" class="panel-collapse collapse">
                <div class="panel-body">
                  <!-- Carousel -->
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="../img/slide/chiclayo.jpg" alt="Primer slide">
                      </div>
                      <div class="item">
                        <img src="../img/slide/Tumbas-reales.jpg" alt="Segundo slide">
                      </div>
                    </div> <!-- fin /carousel-inner -->
                  </div> <!-- fin /carousel slide -->
                  <!-- Fin Carousel -->
                  <br>
                  <p class="text-justify">Nuestro sistema de trabajo esta basado en la puntualidad, seguridad y 
                    calidad, es por eso que nuestra empresa es líder indiscutible en todo el norte del país, 
                    ofreciéndole el mejor servicio de transporte interprovincial de pasajeros.
                  </p>
                </div>
              </div>
            </div> <!-- fin /panel panel-default Pasajeros -->

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#encomiendas">Servicio Encomiendas y Mensajería
                  <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></a>
                </h4>
              </div>
              <div id="encomiendas" class="panel-collapse collapse">
                <div class="panel-body">
                  <!-- Carousel -->
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="../img/slide/chiclayo.jpg" alt="Primer slide">
                      </div>
                      <div class="item">
                        <img src="../img/slide/Tumbas-reales.jpg" alt="Segundo slide">
                      </div>
                    </div> <!-- fin /carousel-inner -->
                  </div> <!-- fin /carousel slide -->
                  <!-- Fin Carousel -->
                  <br>
                  <p class="text-justify">Nuestras unidades están acondicionadas para transportar sus encomiendas con 
                    la comodidad del caso, permitiendo de esta manera que sus envíos lleguen a su destino 
                    en perfecto estado y oportunamente.
                  </p>

                </div>
              </div>
            </div> <!-- fin /panel panel-default encomiendas -->

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#giros">Servicio Giros Electrónicos
                  <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></a>
                </h4>
              </div>
              <div id="giros" class="panel-collapse collapse">
                <div class="panel-body">
                  <!-- Carousel -->
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="../img/slide/chiclayo.jpg" alt="Primer slide">
                      </div>
                      <div class="item">
                        <img src="../img/slide/Tumbas-reales.jpg" alt="Segundo slide">
                      </div>
                    </div> <!-- fin /carousel-inner -->
                  </div> <!-- fin /carousel slide -->
                  <!-- Fin Carousel -->
                  <br>
                  <p class="text-justify">Ofrecemos eficiente servicio de envió de giros electrónicos, envié 
                    su dinero y al instante su destinatario podrá efectuar el cobro en cualquiera de nuestras agencias.
                  </p>
                </div>
              </div>
            </div> <!-- fin /panel panel-default giros -->

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#empresas">Servicio Especial de Transporte para Empresas, Colegios, Institutos, Universidades, etc.
                  <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></a>
                </h4>
              </div>
              <div id="empresas" class="panel-collapse collapse">
                <div class="panel-body">
                  <!-- Carousel -->
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="../img/slide/chiclayo.jpg" alt="Primer slide">
                      </div>
                      <div class="item">
                        <img src="../img/slide/Tumbas-reales.jpg" alt="Segundo slide">
                      </div>
                    </div> <!-- fin /carousel-inner -->
                  </div> <!-- fin /carousel slide -->
                  <!-- Fin Carousel -->
                  <br>
                  <p class="text-justify">Ofrecemos servicios especiales de transporte para viajes de 
                    turismo, excursiones, visitas técnicas, etc..
                  </p>
                </div>
              </div>
            </div> <!-- fin /panel panel-default empresas -->

            
          </div> <!-- fin /panel-group id="accordion" -->


        </div> <!-- fin /col-xs-12 -->
      </div> <!-- fin /row -->
  </div> <!-- fin /container -->
  <!-- Fin Contenedor Principal -->

  <div class="container-fluid">
    <div class="row">
      <table align="center" style="margin-top: 60px; margin-bottom: 60px;">
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

  <!-- Agregados en el main -->
  <script src="../js/main.js"></script>

</body>
</html>