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
    $estado = utf8_encode($_SESSION['nombre'].' '.$_SESSION['apellidoP'].' '.$_SESSION['apellidoM']);;
  }

  // $id=$_SESSION['id'];

  // include("../Clases/conexion.php");
    
  //   $sql = "select 
  //         idCliente, 
  //         nomCliente, 
  //         apePatCliente
  //       from
  //         cliente
  //       where
  //         idCliente=$id";
    
  //   $resultado = $cnx->query($sql);

  //   $registro  = $resultado->fetch();
    
  //   $nom_usu = $registro['nomCliente'];
  //   $ema_usu = $registro['apePatCliente'];

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

  <!-- Contenedor Mi Cuenta -->
  <div class="container-fluid">
    <center>
      <div class="row">
        <div style="padding: 30px;" class="col-xs-12">
               
<?php
    if ($estado) {
      echo '
      <span class="font-trece">Bienvenido(a):</span><br>
      <h6><span class="glyphicon glyphicon-user"></span> <span class="font-trece">'.$estado.'</span></h6>
      <p class="text-muted">'.$correo.'</p>
            <div class="btn-group">
              <!--<a href="php/perfil.php" class="btn btn-xs"><i class="glyphicon glyphicon-user"></i></a>-->
              <a href="#?id='.$id.'" data-toggle="modal" data-target="#editar" class="btn btn-xs" title="Editar Perfil" style="font-size:20px; color:darkred; text-shadow:0 0 0.2em red;"><i class="glyphicon glyphicon-pencil"></i></a>

              
            </div>
            <div class="btn-group">
              <a href="#" data-toggle="modal" data-target="#ofertas" alt="ofertas" class="btn btn-xs" title="Promociones"  style="font-size:20px; color:darkred; text-shadow:0 0 0.2em red;"><i class="glyphicon glyphicon-gift"></i></a>
            </div>
          
          <br><br>
          <div class="row">
            <div class="col-xs-4">
              <a href="#" data-toggle="modal" data-target="#clave" class="btn btn-primary btn-xs pull-left">Cambiar Clave</a>
            </div>
            <div class="col-xs-4">
              <a href="itinerario.php" data-role="button" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-plus"></span> Comprar Pasaje</a>
            </div>
            <div class="col-xs-4">
              <a href="../Clases/logout.php" class="btn btn-danger btn-xs pull-right"><i class="glyphicon glyphicon-log-out"></i> Salir</a>
            </div>
          </div> 

<!-- ************************************************************************ -->
<!-- ************************************************************************ -->
<!-- ************************************************************************ -->
<hr>
  <br><b>Lista de Pasajes Comprados</b><br>
  <div id="no-more-tables">
    <div class="table-responsive">
      <table class="table table-hover table-bordered table-striped table-condensed">
        <thead>
          <tr BGCOLOR="#950E1F" style="color: #F7D358;">
            <th><center>Fecha de Compra</center></th>
            <th><center>Origen</center></th>
            <th><center>Destino</center></th>
            <th><center># Pasajes</center></th>

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
      ';

    require_once ("../Clases/conexion.php");
    $sql = "SELECT numDocCliente, nomCliente, apePatCliente, celCliente, fecNacCliente, fecRegCliente, telFijCliente, dirCliente, emaCliente FROM cliente WHERE numDocCliente = '46651498'";
    // $sql = "SELECT `idVenta`, `idCliente`, `numBoleto`, `preVenta`, `numAsiVenta`, `fecVenta` FROM `venta` WHERE 1";
    $resultado = $cnx->query($sql);
    while ($registro  = $resultado->fetch()){
      echo "<tbody>
              <tr align='center'>
                <td data-title='Fecha de Compra'>".$registro["fecRegCliente"]."</td>
                <td data-title='Origen'>".$registro["numDocCliente"]."</td>
                <td data-title='Destino'>".$registro["nomCliente"]."</td>
                <td data-title='# Pasajes'>".$registro["apePatCliente"]."</td>
                <td data-title='Nombre'>".$registro["celCliente"]."</td>
                <td data-title='DNI'>".$registro["fecRegCliente"]."</td>
                <td data-title='Origen'>".$registro["fecNacCliente"]."</td>
                <td data-title='Destino'>".$registro["telFijCliente"]."</td>
                <td data-title='Asiento'>".$registro["celCliente"]."</td>
                
              </tr>
            </tbody>           
      </table>
    </div>
  </div>";
    }
  }else{

?>

      <h4 style="border-bottom: 1px solid #c5c5c5;">
        <i class="glyphicon glyphicon-log-in">
        </i>
        Acceso a la cuenta
      </h4><br>

      <div id="form-olvidado">
        <form accept-charset="UTF-8" action="../Clases/login.php" id="login-form" method="post" role="form" >
          <fieldset>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input class="form-control input-sm" type="tel" id="formGroup" name="numDocCliente" maxlength="8" placeholder="DOCUMENTO DE IDENTIDAD" title="Sólo 8 números" pattern="[0-9]{8,8}" required autofocus="" value="46651498">
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-lock"></i>
              </span>
              <input class="form-control input-sm" type="password" id="passCliente" name="passCliente" maxlength="10" placeholder="CONTRASEÑA" title="Sólo 10 dígitos" required value="123456">
            </div>
            <div class="checkbox font-trece">
              <label class="pull-left" style="margin-bottom: 15px;">
                <input class="checkbox" type="checkbox"> Recordar
              </label>
              
              <label class="pull-right">
                <input class="checkbox" type="checkbox" onclick="showPassword()"> Mostrar clave
                <span class="glyphicon glyphicon-eye-open"></span>
              </label>
            </div>
            
            <div class="form-group">

              <input class="btn btn-success btn-block pull-left font-trece" name="btnlog" type="submit" value="Ingresar »" style="margin-bottom: 15px;"/>
              
              <p class="help-block font-trece">
                <a class="pull-left text-muted" href="#" data-toggle="modal" data-target="#registrar">Registrar</a>
                <a class="pull-right text-muted" href="#" id="olvidado">¿Olvidaste tu contraseña?</a>
              </p>
            </div>
          </fieldset>
        </form>
      </div>

      <div style="display: none;" id="form-olvidado">
        <h5>¿Olvidaste tu contraseña?</h5>
        <form accept-charset="UTF-8" role="form" id="login-recordar" method="post">
          <fieldset>
            <span class="help-block font-trece">
              <p>Ingrese su Correo electrónico</p>
              <p>Se enviará un correo electrónico con su contraseña</p>
            </span>
            <div class="form-group input-group">
              <span class="input-group-addon">
                @
              </span>
              <input class="form-control input-sm" placeholder="Correo Electrónico" name="email" type="email" required="">
            </div>
            <button type="submit" class="btn btn-success btn-block font-trece" id="btn-olvidado">
              Continuar
            </button>
            <p class="help-block font-trece">
              <a class="text-muted" href="#" id="acceso">Acceso a la cuenta</a>
            </p>
          </fieldset>
        </form>
      </div>

    <?php
      }
    ?>

        </div> <!-- fin /col-xs-12 -->
      </div> <!-- fin /row -->
    </center>
  </div> <!-- fin /container -->

  <!-- Modal registrar -->
  <div class="modal fade" id="registrar" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
          <h4 class="modal-title" id="ModalLabel"><strong>LLENA TUS DATOS PARA EL REGISTRO</strong></h4>
        </div> <!-- fin /modal-header -->

        <div class="modal-body">
          <form role="form" action="../Clases/registrar.php" method="POST">
            <div class="form-group">
              <select name="txtTipDocIde" class="form-control">
                <option value="1">DNI</option>
                <option value="7">PASAPORTE</option>
              </select>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name= "txtNumDoc" placeholder="NUMERO DE DNI" title="Obligatorio y 8 numeros" pattern="\S{8}" maxlength="8" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name= "txtNom" placeholder="INGRESE NOMBRES" title="Obligatorio" required  pattern="[a-zA-Z]*">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name= "txtApePat" placeholder="INGRESE APELLIDO PATERNO" title="Obligatorio" required pattern="[a-zA-Z]*">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name= "txtApeMat" placeholder="INGRESE APELLIDO MATERNO" title="Obligatorio" required pattern="[a-zA-Z]*">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name= "txtDir" placeholder="INGRESE DIRECCIÓN" required>
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" name= "txtFij" placeholder="INGRESE NUMERO FIJO" pattern="\S{6}" title="6 Numeros">
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" name= "txtCel" placeholder="INGRESE NUMERO CELULAR" title="aceptar números que comiencen por 9, 8, 6 o 7 seguido de 8 digitos"  pattern="^[9|8|7|6]\d{8}$" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name= "txtEma"  placeholder="CORREO ELECTRONICO" title="considere el @">
            </div>
            <div class="form-group">
              <input type="date" class="form-control" name= "txtFecNac" placeholder="FECHA DE NACIMIENTO" title="Obligatorio" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name= "txtPass" placeholder="CONTRASEÑA" title="Obligatorio" required>
            </div>
            <div class="form-group">
              <select name="txtSex"class="form-control">
                <option value="M">MASCULINO</option>
                <option value="F">FEMENINO</option>
              </select>
            </div>
            
             <button type="submit" class="btn btn-success">Registrar »</button>
             <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button> 
          </form>
        </div><!-- fin /modal-body -->

      </div> <!-- fin /modal-content -->
    </div> <!-- fin /modal-dialog -->
  </div> <!-- fin /modal fade -->
  <!-- Fin Modal registrar -->

  <!-- Modal clave -->
  <div class="modal fade" id="clave" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
          <h4 class="modal-title" id="ModalLabel"><strong>Cambiar Clave</strong></h4>
        </div> <!-- fin /modal-header -->
        <div class="modal-body">
          <form role="form" action="../Clases/cambiarclave.php" method="POST">
            <div class="form-group">
              <input type="password" class="form-control" name="txtPassAct" id="contrasena1" placeholder="CONTRASEÑA ACTUAL" title="Obligatorio" required="" pattern="[a-zA-Z]*" autocomplete="off">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name= "txtNuePass" id="contrasena2" placeholder="CONTRASEÑA NUEVA" title="Obligatorio" required  pattern="[a-zA-Z]*" autocomplete="off">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name= "txtConNuePass" id="contrasena3" placeholder="CONFIRME CONTRASEÑA" title="Obligatorio" required  pattern="[a-zA-Z]*" autocomplete="off">
            </div>
            <div>
              <span id="passigual" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span>
                        Las contraseñas coinciden
            </div><br>

            <button type="submit" class="btn btn-success">Guardar »</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button> 
          </form>
        </div><!-- fin /modal-body -->
      </div> <!-- fin /modal-content -->
    </div> <!-- fin /modal-dialog -->
  </div> <!-- fin /modal fade -->
  <!-- Fin Modal clave -->

  <!-- Modal ofertas -->
  <div class="modal fade" id="ofertas" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
          <h4 class="modal-title" id="ModalLabel"><strong>Promociones</strong></h4>
        </div> <!-- fin /modal-header -->
        <div class="modal-body">
          <p>No hay promociones por el momento</p>
        </div><!-- fin /modal-body -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button> 
        </div>
      </div> <!-- fin /modal-content -->
    </div> <!-- fin /modal-dialog -->
  </div> <!-- fin /modal fade -->
  <!-- Fin Modal ofertas -->

  <!-- Modal editar perfil -->
  <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
          <h4 class="modal-title" id="ModalLabel"><strong>EDITA TUS DATOS</strong></h4>
        </div> <!-- fin /modal-header -->

        <div class="modal-body">
          <form role="form" action="../Clases/registrar.php" method="POST">
            <div class="form-group">
              <select name="txtTipDocIde" class="form-control">
                <option value="1">DNI</option>
                <option value="7">PASAPORTE</option>
              </select>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name= "txtNumDoc" value="<?php echo $apePatCliente;  ?>" placeholder="NUMERO DE DNI" title="Obligatorio y 8 numeros" pattern="\S{8}" maxlength="8" required>
              
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name= "txtNom" placeholder="INGRESE NOMBRES" title="Obligatorio" required  pattern="[a-zA-Z]*">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name= "txtApePat" placeholder="INGRESE APELLIDO PATERNO" title="Obligatorio" required pattern="[a-zA-Z]*">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name= "txtApeMat" placeholder="INGRESE APELLIDO MATERNO" title="Obligatorio" required pattern="[a-zA-Z]*">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name= "txtDir" placeholder="INGRESE DIRECCIÓN" required>
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" name= "txtFij" placeholder="INGRESE NUMERO FIJO" pattern="\S{6}" title="6 Numeros">
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" name= "txtCel" placeholder="INGRESE NUMERO CELULAR" title="aceptar números que comiencen por 9, 8, 6 o 7 seguido de 8 digitos"  pattern="^[9|8|7|6]\d{8}$" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name= "txtEma"  placeholder="CORREO ELECTRONICO" title="considere el @">
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <input type="date" class="form-control" name= "txtFecNac" placeholder="FECHA DE NACIMIENTO" title="Obligatorio" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name= "txtPass" placeholder="CONTRASEÑA" title="Obligatorio" required>
            </div>
            <div class="form-group">
              <select name="txtSex"class="form-control">
                <option value="M">MASCULINO</option>
                <option value="F">FEMENINO</option>
              </select>
            </div>
            
             <button type="submit" class="btn btn-success">Actualizar »</button>
             <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button> 
          </form>
        </div><!-- fin /modal-body -->

      </div> <!-- fin /modal-content -->
    </div> <!-- fin /modal-dialog -->
  </div> <!-- fin /modal fade -->
  <!-- Fin Modal editar perfil -->


  <!-- fin Contenedor Mi Cuenta -->

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

  <!-- Validador jqBootstrapValidation -->
  <script src="../js/jqBootstrapValidation.js"></script>

  <script>
    $(function(){
      $("input,select,textarea,email,number").not("[type=submit]").jqBootstrapValidation();
    });
  </script>

  // <script>
  // $(document).ready(function(){
  //   alert('Hola');
  // });
  // </script>

</body>
</html>