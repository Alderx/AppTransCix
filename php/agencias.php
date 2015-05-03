<?php
  session_name('tchiclayo');
  session_start();
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
  <!-- <link rel="stylesheet" type="text/css" href="../css/normalize.css"> -->

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
    <div class="row bgcolor-head">
      <center>
        <a href="../index.php"><img align="center" class="img-responsive" src="../img/logo.png" alt="Transportes Chiclayo"></a>
      </center>
    </div> <!-- fin /row -->
  </div> <!-- fin /container-fluid -->
  <!-- Fin MasterHead -->

  <!-- Contenedor Principal -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <br><center><strong class="font-trece">¿Conoce nuestras agencias?</strong></center><br>
        <div class="panel-group" id="accordion" style="margin-left: -10px; margin-right: -10px;">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#chiclayo">Chiclayo
                <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></a>
              </h4>
            </div>
            <div id="chiclayo" class="panel-collapse collapse in">
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
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#mapaCix" data-toggle="tab">Mapa</a></li>
                  <li><a href="#infoCix" data-toggle="tab">Info</a></li>
                </ul>
                <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                  <div class="tab-pane active" id="mapaCix">
                    <iframe width="100%" height="230" frameborder="0" style="border:0" 
                      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3961.9973987757694!2d-79.845452!3d-6.770169!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904ceed8becd1caf%3A0x8ffccd1270ac06b6!2sTransportes+Chiclayo!5e0!3m2!1ses-419!2spe!4v1424905154552">
                    </iframe>
                  </div> <!-- Fin /tab-pane mapaCix -->
                  <div class="tab-pane" id="infoCix">
                    <img class="img-responsive" src="../img/agencias/chiclayo.png" alt="">
                  </div> <!-- Fin /tab-pane infoCix -->
                </div> <!-- Fin /tab-content Chiclayo -->
              </div>
            </div>
          </div> <!-- fin /panel panel-default Chiclayo -->

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#piura">Piura
                <i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i></a>
              </h4>
            </div>
            <div id="piura" class="panel-collapse collapse">
              <div class="panel-body">
                <!-- Carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="../img/agencias/piura.jpg" alt="Primer slide">
                    </div>
                    <div class="item">
                      <img src="../img/agencias/piura.jpg" alt="Segundo slide">
                    </div>
                  </div> <!-- fin /carousel-inner -->
                </div> <!-- fin /carousel slide -->
                <!-- Fin Carousel -->
                <br>
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#infoPiura" data-toggle="tab">Info</a></li>
                  <li><a href="#mapaPiura" data-toggle="tab">Mapa</a></li>
                </ul>
                <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                  <div class="tab-pane active" id="infoPiura">
                    <img class="img-responsive" src="../img/agencias/piura.jpg" alt="">
                  </div> <!-- Fin /tab-pane infoPiura -->
                  <div class="tab-pane" id="mapaPiura">
                    <iframe width="100%" height="230" frameborder="0" style="border:0" 
                      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1986.7265239828455!2d-80.63167933498787!3d-5.191241684821046!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904a10788dbea6b1%3A0x3f9628e1249a6fc5!2sTransportes+Chiclayo!5e0!3m2!1ses-419!2spe!4v1424907379886"></iframe>
                  </div> <!-- Fin /tab-pane mapaPiura -->
                </div> <!-- Fin /tab-content Piura -->
              </div>
            </div>
          </div> <!-- fin /panel panel-default Piura -->

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#sullana">Sullana
                <i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i></a>
              </h4>
            </div>
            <div id="sullana" class="panel-collapse collapse">
              <div class="panel-body">
                <!-- Carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="../img/agencias/sullana.jpg" alt="Primer slide">
                    </div>
                    <div class="item">
                      <img src="../img/agencias/sullana.jpg" alt="Segundo slide">
                    </div>
                  </div> <!-- fin /carousel-inner -->
                </div> <!-- fin /carousel slide -->
                <!-- Fin Carousel -->
                <br>
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#infoSullana" data-toggle="tab">Info</a></li>
                  <li><a href="#mapaSullana" data-toggle="tab">Mapa</a></li>
                </ul>
                <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                  <div class="tab-pane active" id="infoSullana">
                    <img class="img-responsive" src="../img/agencias/sullana.jpg" alt="">
                  </div> <!-- Fin /tab-pane infoSullana -->
                  <div class="tab-pane" id="mapaSullana">
                    <iframe width="100%" height="230" frameborder="0" style="border:0" 
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987.5842491817493!2d-80.69752794524226!3d-4.911455576764587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9035f9602867f569%3A0xbe5f06c8a0dcf2c8!2sTerminal+Terrestre+Sullana-Lima!5e0!3m2!1ses-419!2spe!4v1424909280412"></iframe>
                  </div> <!-- Fin /tab-pane mapaSullana -->
                </div> <!-- Fin /tab-content Sullana -->
              </div>
            </div>
          </div> <!-- fin /panel panel-default Sullana -->

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#talara">Talara
                <i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i></a>
              </h4>
            </div>
            <div id="talara" class="panel-collapse collapse">
              <div class="panel-body">
                <!-- Carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="../img/agencias/talara.jpg" alt="Primer slide">
                    </div>
                    <div class="item">
                      <img src="../img/agencias/talara.jpg" alt="Segundo slide">
                    </div>
                  </div> <!-- fin /carousel-inner -->
                </div> <!-- fin /carousel slide -->
                <!-- Fin Carousel -->
                <br>
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#infoTalara" data-toggle="tab">Info</a></li>
                  <li><a href="#mapaTalara" data-toggle="tab">Mapa</a></li>
                </ul>
                <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                  <div class="tab-pane active" id="infoTalara">
                    <img class="img-responsive" src="../img/agencias/talara.jpg" alt="">
                  </div> <!-- Fin /tab-pane infoTalara -->
                  <div class="tab-pane" id="mapaTalara">
                    <iframe width="100%" height="230" frameborder="0" style="border:0" 
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987.5842491817493!2d-80.69752794524226!3d-4.911455576764587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9035f9602867f569%3A0xbe5f06c8a0dcf2c8!2sTerminal+Terrestre+Talara-Lima!5e0!3m2!1ses-419!2spe!4v1424909280412"></iframe>
                  </div> <!-- Fin /tab-pane mapaTalara -->
                </div> <!-- Fin /tab-content Talara -->
              </div>
            </div>
          </div> <!-- fin /panel panel-default Talara -->

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#mancora">Mancora
                <i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i></a>
              </h4>
            </div>
            <div id="mancora" class="panel-collapse collapse">
              <div class="panel-body">
                <!-- Carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="../img/agencias/mancora.jpg" alt="Primer slide">
                    </div>
                    <div class="item">
                      <img src="../img/agencias/mancora.jpg" alt="Segundo slide">
                    </div>
                  </div> <!-- fin /carousel-inner -->
                </div> <!-- fin /carousel slide -->
                <!-- Fin Carousel -->
                <br>
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#infoMancora" data-toggle="tab">Info</a></li>
                  <li><a href="#mapaMancora" data-toggle="tab">Mapa</a></li>
                </ul>
                <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                  <div class="tab-pane active" id="infoMancora">
                    <img class="img-responsive" src="../img/agencias/mancora.jpg" alt="">
                  </div> <!-- Fin /tab-pane infoMancora -->
                  <div class="tab-pane" id="mapaMancora">
                    <iframe width="100%" height="230" frameborder="0" style="border:0" 
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987.5842491817493!2d-80.69752794524226!3d-4.911455576764587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9035f9602867f569%3A0xbe5f06c8a0dcf2c8!2sTerminal+Terrestre+Mancora-Lima!5e0!3m2!1ses-419!2spe!4v1424909280412"></iframe>
                  </div> <!-- Fin /tab-pane mapaMancora -->
                </div> <!-- Fin /tab-content Mancora -->
              </div>
            </div>
          </div> <!-- fin /panel panel-default Mancora -->

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#tumbes">Tumbes
                <i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i></a>
              </h4>
            </div>
            <div id="tumbes" class="panel-collapse collapse">
              <div class="panel-body">
                <!-- Carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="../img/agencias/tumbes.jpg" alt="Primer slide">
                    </div>
                    <div class="item">
                      <img src="../img/agencias/tumbes.jpg" alt="Segundo slide">
                    </div>
                  </div> <!-- fin /carousel-inner -->
                </div> <!-- fin /carousel slide -->
                <!-- Fin Carousel -->
                <br>
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#infoTumbes" data-toggle="tab">Info</a></li>
                  <li><a href="#mapaTumbes" data-toggle="tab">Mapa</a></li>
                </ul>
                <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                  <div class="tab-pane active" id="infoTumbes">
                    <img class="img-responsive" src="../img/agencias/tumbes.jpg" alt="">
                  </div> <!-- Fin /tab-pane infoTumbes -->
                  <div class="tab-pane" id="mapaTumbes">
                    <iframe width="100%" height="230" frameborder="0" style="border:0" 
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987.5842491817493!2d-80.69752794524226!3d-4.911455576764587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9035f9602867f569%3A0xbe5f06c8a0dcf2c8!2sTerminal+Terrestre+Tumbes-Lima!5e0!3m2!1ses-419!2spe!4v1424909280412"></iframe>
                  </div> <!-- Fin /tab-pane mapaTumbes -->
                </div> <!-- Fin /tab-content Tumbes -->
              </div>
            </div>
          </div> <!-- fin /panel panel-default Tumbes -->

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#trujillo">Trujillo
                <i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i></a>
              </h4>
            </div>
            <div id="trujillo" class="panel-collapse collapse">
              <div class="panel-body">
                <!-- Carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="../img/agencias/trujillo.jpg" alt="Primer slide">
                    </div>
                    <div class="item">
                      <img src="../img/agencias/trujillo.jpg" alt="Segundo slide">
                    </div>
                  </div> <!-- fin /carousel-inner -->
                </div> <!-- fin /carousel slide -->
                <!-- Fin Carousel -->
                <br>
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#infoTrujillo" data-toggle="tab">Info</a></li>
                  <li><a href="#mapaTrujillo" data-toggle="tab">Mapa</a></li>
                </ul>
                <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                  <div class="tab-pane active" id="infoTrujillo">
                    <img class="img-responsive" src="../img/agencias/trujillo.jpg" alt="">
                  </div> <!-- Fin /tab-pane infoTrujillo -->
                  <div class="tab-pane" id="mapaTrujillo">
                    <iframe width="100%" height="230" frameborder="0" style="border:0" 
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987.5842491817493!2d-80.69752794524226!3d-4.911455576764587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9035f9602867f569%3A0xbe5f06c8a0dcf2c8!2sTerminal+Terrestre+Trujillo-Lima!5e0!3m2!1ses-419!2spe!4v1424909280412"></iframe>
                  </div> <!-- Fin /tab-pane mapaTrujillo -->
                </div> <!-- Fin /tab-content Trujillo -->
              </div>
            </div>
          </div> <!-- fin /panel panel-default Trujillo -->

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#jaen">Jaen
                <i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i></a>
              </h4>
            </div>
            <div id="jaen" class="panel-collapse collapse">
              <div class="panel-body">
                <!-- Carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="../img/agencias/jaen.jpg" alt="Primer slide">
                    </div>
                    <div class="item">
                      <img src="../img/agencias/jaen.jpg" alt="Segundo slide">
                    </div>
                  </div> <!-- fin /carousel-inner -->
                </div> <!-- fin /carousel slide -->
                <!-- Fin Carousel -->
                <br>
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#infoJaen" data-toggle="tab">Info</a></li>
                    <li><a href="#mapaJaen" data-toggle="tab">Mapa</a></li>
                  </ul>
                  <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                    <div class="tab-pane active" id="infoJaen">
                      <img class="img-responsive" src="../img/agencias/jaen.jpg" alt="">
                    </div> <!-- Fin /tab-pane infoJaen -->
                    <div class="tab-pane" id="mapaJaen">
                      <iframe width="100%" height="230" frameborder="0" style="border:0" 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987.5842491817493!2d-80.69752794524226!3d-4.911455576764587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9035f9602867f569%3A0xbe5f06c8a0dcf2c8!2sTerminal+Terrestre+Jaen-Lima!5e0!3m2!1ses-419!2spe!4v1424909280412"></iframe>
                    </div> <!-- Fin /tab-pane mapaJaen -->
                  </div> <!-- Fin /tab-content Jaen -->
              </div>
            </div>
          </div> <!-- fin /panel panel-default Jaen -->

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#sanIgnacio">San Ignacio
                <i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i></a>
              </h4>
            </div>
            <div id="sanIgnacio" class="panel-collapse collapse">
              <div class="panel-body">
                <!-- Carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="../img/agencias/san-ignacio.jpg" alt="Primer slide">
                    </div>
                    <div class="item">
                      <img src="../img/agencias/san-ignacio.jpg" alt="Segundo slide">
                    </div>
                  </div> <!-- fin /carousel-inner -->
                </div> <!-- fin /carousel slide -->
                <!-- Fin Carousel -->
                <br>
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#infoSanIgnacio" data-toggle="tab">Info</a></li>
                  <li><a href="#mapaSanIgnacio" data-toggle="tab">Mapa</a></li>
                </ul>
                <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                  <div class="tab-pane active" id="infoSanIgnacio">
                    <img class="img-responsive" src="../img/agencias/san-ignacio.jpg" alt="">
                  </div> <!-- Fin /tab-pane infoSanIgnacio -->
                  <div class="tab-pane" id="mapaSanIgnacio">
                    <iframe width="100%" height="230" frameborder="0" style="border:0" 
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987.5842491817493!2d-80.69752794524226!3d-4.911455576764587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9035f9602867f569%3A0xbe5f06c8a0dcf2c8!2sTerminal+Terrestre+SanIgnacio-Lima!5e0!3m2!1ses-419!2spe!4v1424909280412"></iframe>
                  </div> <!-- Fin /tab-pane mapaSanIgnacio -->
                </div> <!-- Fin /tab-content SanIgnacio -->
              </div>
            </div>
          </div> <!-- fin /panel panel-default San Ignacio -->

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#cajamarca">Cajamarca
                <i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i></a>
              </h4>
            </div>
            <div id="cajamarca" class="panel-collapse collapse">
              <div class="panel-body">
                <!-- Carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="../img/agencias/cajamarca.jpg" alt="Primer slide">
                    </div>
                    <div class="item">
                      <img src="../img/agencias/cajamarca.jpg" alt="Segundo slide">
                    </div>
                  </div> <!-- fin /carousel-inner -->
                </div> <!-- fin /carousel slide -->
                <!-- Fin Carousel -->
                <br>
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#infoCajamarca" data-toggle="tab">Info</a></li>
                  <li><a href="#mapaCajamarca" data-toggle="tab">Mapa</a></li>
                </ul>
                <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                  <div class="tab-pane active" id="infoCajamarca">
                    <img class="img-responsive" src="../img/agencias/cajamarca.jpg" alt="">
                  </div> <!-- Fin /tab-pane infoCajamarca -->
                  <div class="tab-pane" id="mapaCajamarca">
                    <iframe width="100%" height="230" frameborder="0" style="border:0" 
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987.5842491817493!2d-80.69752794524226!3d-4.911455576764587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9035f9602867f569%3A0xbe5f06c8a0dcf2c8!2sTerminal+Terrestre+Cajamarca-Lima!5e0!3m2!1ses-419!2spe!4v1424909280412"></iframe>
                  </div> <!-- Fin /tab-pane mapaCajamarca -->
                </div> <!-- Fin /tab-content Cajamarca -->
              </div>
            </div>
          </div> <!-- fin /panel panel-default Cajamarca -->

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#tarapoto">Tarapoto
                <i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i></a>
              </h4>
            </div>
            <div id="tarapoto" class="panel-collapse collapse">
              <div class="panel-body">
                <!-- Carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="../img/agencias/tarapoto.jpg" alt="Primer slide">
                    </div>
                    <div class="item">
                      <img src="../img/agencias/tarapoto.jpg" alt="Segundo slide">
                    </div>
                  </div> <!-- fin /carousel-inner -->
                </div> <!-- fin /carousel slide -->
                <!-- Fin Carousel -->
                <br>
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#infoTarapoto" data-toggle="tab">Info</a></li>
                  <li><a href="#mapaTarapoto" data-toggle="tab">Mapa</a></li>
                </ul>
                <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                  <div class="tab-pane active" id="infoTarapoto">
                    <img class="img-responsive" src="../img/agencias/tarapoto.jpg" alt="">
                  </div> <!-- Fin /tab-pane infoTarapoto -->
                  <div class="tab-pane" id="mapaTarapoto">
                    <iframe width="100%" height="230" frameborder="0" style="border:0" 
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987.5842491817493!2d-80.69752794524226!3d-4.911455576764587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9035f9602867f569%3A0xbe5f06c8a0dcf2c8!2sTerminal+Terrestre+Tarapoto-Lima!5e0!3m2!1ses-419!2spe!4v1424909280412"></iframe>
                  </div> <!-- Fin /tab-pane mapaTarapoto -->
                </div> <!-- Fin /tab-content Tarapoto -->
              </div>
            </div>
          </div> <!-- fin /panel panel-default Tarapoto -->

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#moyobamba">Moyobamba
                <i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i></a>
              </h4>
            </div>
            <div id="moyobamba" class="panel-collapse collapse">
              <div class="panel-body">
                <!-- Carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="../img/agencias/moyobamba.jpg" alt="Primer slide">
                    </div>
                    <div class="item">
                      <img src="../img/agencias/moyobamba.jpg" alt="Segundo slide">
                    </div>
                  </div> <!-- fin /carousel-inner -->
                </div> <!-- fin /carousel slide -->
                <!-- Fin Carousel -->
                <br>
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#infoMoyobamba" data-toggle="tab">Info</a></li>
                  <li><a href="#mapaMoyobamba" data-toggle="tab">Mapa</a></li>
                </ul>
                <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                  <div class="tab-pane active" id="infoMoyobamba">
                    <img class="img-responsive" src="../img/agencias/moyobamba.jpg" alt="">
                  </div> <!-- Fin /tab-pane infoMoyobamba -->
                  <div class="tab-pane" id="mapaMoyobamba">
                    <iframe width="100%" height="230" frameborder="0" style="border:0" 
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987.5842491817493!2d-80.69752794524226!3d-4.911455576764587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9035f9602867f569%3A0xbe5f06c8a0dcf2c8!2sTerminal+Terrestre+Moyobamba-Lima!5e0!3m2!1ses-419!2spe!4v1424909280412"></iframe>
                  </div> <!-- Fin /tab-pane mapaMoyobamba -->
                </div> <!-- Fin /tab-content Moyobamba -->
              </div>
            </div>
          </div> <!-- fin /panel panel-default Moyobamba -->

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#nuevoCajamarca">Nuevo Cajamarca
                <i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i></a>
              </h4>
            </div>
            <div id="nuevoCajamarca" class="panel-collapse collapse">
              <div class="panel-body">
                <!-- Carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="../img/agencias/nuevo-cajamarca.jpg" alt="Primer slide">
                    </div>
                    <div class="item">
                      <img src="../img/agencias/nuevo-cajamarca.jpg" alt="Segundo slide">
                    </div>
                  </div> <!-- fin /carousel-inner -->
                </div> <!-- fin /carousel slide -->
                <!-- Fin Carousel -->
                <br>
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#infoNuevoCajamarca" data-toggle="tab">Info</a></li>
                  <li><a href="#mapaNuevoCajamarca" data-toggle="tab">Mapa</a></li>
                </ul>
                <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                  <div class="tab-pane active" id="infoNuevoCajamarca">
                    <img class="img-responsive" src="../img/agencias/nuevo-cajamarca.jpg" alt="">
                  </div> <!-- Fin /tab-pane infoNuevoCajamarca -->
                  <div class="tab-pane" id="mapaNuevoCajamarca">
                    <iframe width="100%" height="230" frameborder="0" style="border:0" 
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987.5842491817493!2d-80.69752794524226!3d-4.911455576764587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9035f9602867f569%3A0xbe5f06c8a0dcf2c8!2sTerminal+Terrestre+NuevoCajamarca-Lima!5e0!3m2!1ses-419!2spe!4v1424909280412"></iframe>
                  </div> <!-- Fin /tab-pane mapaNuevoCajamarca -->
                </div> <!-- Fin /tab-content NuevoCajamarca -->
              </div>
            </div>
          </div> <!-- fin /panel panel-default Nuevo Cajamarca -->

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#lima">Lima
                <i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i></a>
              </h4>
            </div>
            <div id="lima" class="panel-collapse collapse">
              <div class="panel-body">
                <!-- Carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="../img/agencias/lima1.jpg" alt="Primer slide">
                    </div>
                    <div class="item">
                      <img src="../img/agencias/lima1.jpg" alt="Segundo slide">
                    </div>
                  </div> <!-- fin /carousel-inner -->
                </div> <!-- fin /carousel slide -->
                <!-- Fin Carousel -->
                <br>
                <div class="tab-pane" id="Lima">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#infoLima" data-toggle="tab">Info</a></li>
                    <li><a href="#mapaLima" data-toggle="tab">Mapa</a></li>
                  </ul>
                  <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                    <div class="tab-pane active" id="infoLima">
                      <img class="img-responsive" src="../img/agencias/lima1.jpg" alt="">
                    </div> <!-- Fin /tab-pane infoLima -->
                    <div class="tab-pane" id="mapaLima">
                      <iframe width="100%" height="230" frameborder="0" style="border:0" 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987.5842491817493!2d-80.69752794524226!3d-4.911455576764587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9035f9602867f569%3A0xbe5f06c8a0dcf2c8!2sTerminal+Terrestre+Lima-Lima!5e0!3m2!1ses-419!2spe!4v1424909280412"></iframe>
                    </div> <!-- Fin /tab-pane mapaLima -->
                  </div> <!-- Fin /tab-content Lima -->
                </div> <!-- Fin /tab-pane Lima -->
              </div>
            </div>
          </div> <!-- fin /panel panel-default Lima -->

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#olivos">Los Olivos - Lima
                <i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i></a>
              </h4>
            </div>
            <div id="olivos" class="panel-collapse collapse">
              <div class="panel-body">
                <!-- Carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="../img/agencias/lima-olivos.jpg" alt="Primer slide">
                    </div>
                    <div class="item">
                      <img src="../img/agencias/lima-olivos.jpg" alt="Segundo slide">
                    </div>
                  </div> <!-- fin /carousel-inner -->
                </div> <!-- fin /carousel slide -->
                <!-- Fin Carousel -->
                <br>
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#infoLosOlivos" data-toggle="tab">Info</a></li>
                  <li><a href="#mapaLosOlivos" data-toggle="tab">Mapa</a></li>
                </ul>
                <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                  <div class="tab-pane active" id="infoLosOlivos">
                    <img class="img-responsive" src="../img/agencias/lima-olivos.jpg" alt="">
                  </div> <!-- Fin /tab-pane infoLosOlivos -->
                  <div class="tab-pane" id="mapaLosOlivos">
                    <iframe width="100%" height="230" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987.5842491817493!2d-80.69752794524226!3d-4.911455576764587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9035f9602867f569%3A0xbe5f06c8a0dcf2c8!2sTerminal+Terrestre+LosOlivos-Lima!5e0!3m2!1ses-419!2spe!4v1424909280412"></iframe>
                  </div> <!-- Fin /tab-pane mapaLosOlivos -->
                </div> <!-- Fin /tab-content LosOlivos -->
              </div>
            </div>
          </div> <!-- fin /panel panel-default Los Olivos -->
        </div> <!-- fin /panel-group id="accordion" -->
      </div> <!-- fin /col-xs-12 -->
    </div> <!-- fin /row -->
  </div> <!-- fin /container-fluid -->
  <!-- Fin Contenedor Principal -->

  <div class="container-fluid">
    <div class="row">
      <table align="center" style="margin-top: 10px; margin-bottom: 10px;">
        <tr align="center">
          <td>&nbsp;&nbsp;</td>
          <td><p><a href="agencias.php"><img class="img-responsive img-circle" style="width:55px; heigth:55px;" src="../img/index/agencias.png"></a></p>
            <strong>Agencias</strong>
          </td>
          <td>&nbsp;&nbsp;&nbsp;</td>
          <td><p><a href="logeo.php"><img class="img-responsive img-circle" style="width:55px; heigth:55px;" src="../img/index/cuenta.png"></a></p>
            <strong>Mi Cuenta</strong>
          </td>
          <td>&nbsp;&nbsp;&nbsp;</td>
          <td><p><a href="itinerario.php"><img class="img-responsive img-circle" style="width:55px; heigth:55px;" src="../img/index/itinerario.png"></a></p>
            <strong>Itinerario</strong>
          </td>
          <td>&nbsp;&nbsp;&nbsp;</td>
          <td><p><a href="servicios.php"><img class="img-responsive img-circle" style="width:55px; heigth:55px;" src="../img/index/servicios.png"></a></p>
            <strong>Servicios</strong>
          </td>
          <td>&nbsp;&nbsp;&nbsp;</td>
          <td><p><a href="ubicanos.php"><img class="img-responsive img-circle" style="width:55px; heigth:55px;" src="../img/index/localizacion.png"></a></p>
            <strong>Ubicanos</strong>
          </td>
          <td>&nbsp;&nbsp;</td>
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