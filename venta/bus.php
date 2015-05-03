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
        <div class="col-md-12">
          <center style="font-size: 13px;margin-top: 10px;">
            <button type="button" class="btn btn-info btn-sm" disabled="disabled"><i class="glyphicon glyphicon-pushpin"></i></button>
            <br>Selecciona Asientos
          </center>
          <?php
            $elegir= $_REQUEST['elegir'];
            print("el IDBus es $elegir");
          ?>

<!-- ********************************** INICIO ****************************************** -->

<?php
require_once('conectabd.php');
//require_once('core_system/show_system_messages.php');
//require_once('core_system/check_valid_user.php');
require_once('qmd-pp.php'); 
//check_valid_user_user($valid_user);

$handle= db_connect();
$result = $handle->query("SELECT * FROM bus ");

  //recuperamos la informacion campo por campo
    $recover=$result->fetch_assoc();
    global $num_places;
    $num_places=$recover["NumAsientos1"];
    $bus=$recover["IDBus"];
    $operating=$recover["operativo"]; //obtenemos la informacion si el bus esta operativo caso contrario no se genera nada y se muestra un mensaje de error
    //verificamos el estado del bus
    
// echo '<html> 
// <head> <LINK REL="stylesheet" HREF="general_style.css" TYPE="text/css"></head><body>';

?>

<table border="0" align="center" cellpadding="0" cellspacing="0" class="bus">
  <tr class="bus">
    <td class="bus">
      <img src="images_bus/top_bus1.png">
    </td>
  </tr>
  <tr class="bus">
    <td class="bus" background="images_bus/background_bus1.png">
      <?php
        $a=0;
        $b=0;
        $c=0;
        $d=0;
        while ($a < 5){
          $a++;
          //funcion que efectua la consulta a la base de datos obteniendo el estado del asiento (libre, reservado, vendido)
          check_status_places_a($bus, $a, $handle);  $c++; //Grupo (a) asientos impares ventana izquierdo
          $a++; 
          //funcion que efectua la consulta a la base de datos obteniendo el estado del asiento (libre, reservado, vendido) 
          check_status_places_b($bus,  $a, $handle);  $c++; //Grupo (b) aientos pares pasillo central izquierdo
            if ($c==6){
            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images_bus/entry.png"><br>';  // muestra la escalera de ingreso al bus
            }
              else{
              $a=$a+2;
            //funcion que efectua la consulta a la base de datos obteniendo el estado del asiento (libre, reservado, vendido
              check_status_places_c($bus, $a, $handle); $c++;  //Grupo (c) aientos pares pasillo central derecho
          $a=$a-1;  
              //funcion que efectua la consulta a la base de datos obteniendo el estado del asiento (libre, reservado, vendido
              check_status_places_d($bus, $a, $handle); $c++;  //Grupo (d) aientos impares ventana derecho
          $a=$a+1;
            }
        }
        //otro loop while para generar la siguiente secuecia ---------------------
        $a=$a+2;
        $b=$b+2;
        $num_places=$num_places-4;
        while ($a <= $num_places){
          $a++;
          //funcion que efectua la consulta a la base de datos obteniendo el estado del asiento (libre, reservado, vendido)
          check_status_places_a($bus, $a, $handle); //Grupo (a) asientos impares ventana izquierdo 
          if ($c <= $num_places){
            $a++;
            //funcion que efectua la consulta a la base de datos obteniendo el estado del asiento (libre, reservado, vendido) 
            check_status_places_b($bus, $a, $handle);  $c++; //Grupo (b) aientos pares pasillo central izquierdo
          }
          if ($c <= $num_places){
            $a=$a-2;
            //funcion que efectua la consulta a la base de datos obteniendo el estado del asiento (libre, reservado, vendido
            check_status_places_c($bus, $a, $handle); $c++;   //Grupo (c) aientos pares pasillo central derecho
          }
          $a=$a-1;
          if ($c <= $num_places){
            //funcion que efectua la consulta a la base de datos obteniendo el estado del asiento (libre, reservado, vendido
            check_status_places_d($bus, $a, $handle); $c++;  //Grupo (d) aientos impares ventana derecho  
          }
          $a=$a+5;
        }

        // otro loop while para generar la siguiente secuencia---------------------------------
        $num_places=$num_places+1;
        while ($a <= $num_places){
          $a++;
          if ($c < $num_places){
            //funcion que efectua la consulta a la base de datos obteniendo el estado del asiento (libre, reservado, vendido)
            check_status_places_a($bus, $a, $handle); //Grupo (a) asientos impares ventana izquierdo 
          }
          if ($c < $num_places){
            $a++;
            //funcion que efectua la consulta a la base de datos obteniendo el estado del asiento (libre, reservado, vendido) 
             check_status_places_b($bus, $a, $handle);  $c++; //Grupo (b) asientos pares pasillo central izquierdo
          }
          if($c < $num_places){
            $a++; 
            //funcion que efectua la consulta a la base de datos obteniendo el estado del asiento (libre, reservado, vendido)
            check_status_places_e($bus, $a, $handle); $c++;  //Grupo (e) asientos pasillo central 
          }
          if($c < $num_places){
            $a=$a-3;
            //funcion que efectua la consulta a la base de datos obteniendo el estado del asiento (libre, reservado, vendido)
            check_status_places_e($bus, $a, $handle); $c++;  //Grupo (c) aientos pares pasillo central derecho  
          }
          if($c <= $num_places){
            $a=$a-1;
            //funcion que efectua la consulta a la base de datos obteniendo el estado del asiento (libre, reservado, vendido)
            check_status_places_f($bus, $a, $handle); $c++;   //Grupo (d) aientos impares ventana derecho
          }
          break;
        }
      ?>
    </td>
  </tr>
  <tr class="bus">
    <td class="bus">
      <img src="images_bus/footer_bus1.png">
    </td>
  </tr>
</table>
<?php 
//---------------------------------------------Fin del bloque----------------------------------------------------------------------------------------------- *//
    //liberamos memoria
    mysqli_free_result($result);
?>
<input class="btn btn-success btn-sm pull-right" type="submit" name="Siguiente" value="Siguiente">
        </div> <!-- fin /col-md-12 -->
      </div> <!-- fin /row -->
  </div> <!-- fin /container -->
  <!-- Fin Contenedor Principal -->

  <!-- jQuery (necesario para los plugins JavaScript de Bootstrap) -->
  <script src="../js/jquery.min.js"></script>
  <!-- Incluya todos los plugins compilados (abajo), o incluir archivos individuales según sea necesario. -->
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>