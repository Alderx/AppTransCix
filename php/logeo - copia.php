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
               
<?php
    if ($estado) {
      echo '
      <span class="font-trece">Bienvenido(a):</span><br>
      <h6><span class="glyphicon glyphicon-user"></span> <span class="font-trece">'.$estado.'</span></h6>
      <p class="text-muted">'.$correo.'</p>
        <img src="http://placehold.it/120x120" alt="Alternate Text" class="img-responsive" />
        <p class="text-center">
          <a href="#">Cambiar Foto</a>
        </p>
            <div class="btn-group">
              <a href="php/perfil.php" class="btn btn-xs"><i class="glyphicon glyphicon-user"></i></a>
              <a href="php/editperfil.php" class="btn btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
            </div>
            <div class="btn-group">
              <a href="Clases/ofertas.php" alt="ofertas" class="btn btn-xs"><i class="glyphicon glyphicon-tags"></i></a>
              <a href="Clases/compra.php" class="btn btn-xs" title="Editar Perfil"><i class="glyphicon glyphicon-shopping-cart" title="Editar Perfil"></i></a>
              <a href="Clases/#qrcode" class="btn btn-xs"><i class="glyphicon glyphicon-qrcode"></i></a>
            </div>
          
          <br><br>
          <div class="row">
            <div class="col-xs-6">
              <a href="perfil.php" class="btn btn-primary btn-xs pull-left">Cambiar Clave</a>
            </div>
            <div class="col-xs-6">
              <a href="../Clases/logout.php" class="btn btn-danger btn-xs pull-right"><i class="glyphicon glyphicon-log-out"></i> Salir</a>
            </div>
          </div> 

<!-- ************************************************************************ -->
<!-- ************************************************************************ -->
<!-- ************************************************************************ -->
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
            ';

                require_once ("../Clases/conexion.php");
                $sql = "SELECT dni_usu, nom_usu, ape_usu, cel_usu, nac_usu, fechreg_usu, fij_usu, dir_usu, ema_usu FROM usuario WHERE dni_usu = '46651498'";
                $resultado = $cnx->query($sql);
                while ($registro  = $resultado->fetch()){
                        echo "<tbody>
                              <tr align='center'>
                                <td>".$registro["nom_usu"]."</td>
                                <td>".$registro["dni_usu"]."</td>
                                <td>".$registro["nom_usu"]."</td>
                                <td>".$registro["ape_usu"]."</td>
                                <td>".$registro["cel_usu"]."</td>
                                <td>".$registro["fechreg_usu"]."</td>
                                <td>".$registro["nac_usu"]."</td>
                                <td>".$registro["fij_usu"]."</td>
                                <td>".$registro["dir_usu"]."</td>
                                <td><a href='postergar.php?id_boleto=".$registro["id_boleto"]."&accion=editar'>Postergar</a></td>
                            </tr>
                            </tbody>           
                        </table>
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
                                <input class="form-control input-sm" type="tel" id="formGroup" name="numDocCliente" maxlength="8" placeholder="DNI" title="Sólo 8 números" pattern="[0-9]{8,8}" required autofocus="" value="46651498">
                              </div>
                              <div class="form-group input-group">
                                <span class="input-group-addon">
                                  <i class="glyphicon glyphicon-lock"></i>
                                </span>
                                <input class="form-control input-sm" type="password" id="passCliente" name="passCliente" maxlength="10" placeholder="Contraseña" title="Sólo 10 dígitos" required value="123456">
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
          <button type="submit" class="btn btn-success">Registrar »</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div> <!-- fin /modal-footer -->
          </form>
        </div> <!-- fin /modal-body -->
        
      </div> <!-- fin /modal-content -->
    </div> <!-- fin /modal-dialog -->
  </div> <!-- fin /modal fade -->
  <!-- Fin Modal registrar -->
  <!-- fin Contenedor Mi Cuenta -->

  <div class="container-fluid">
    <div class="row">
      <table align="center" style="margin-top: 60px; margin-bottom: 60px;">
        <tr align="center">
          <td>&nbsp;&nbsp;&nbsp;</td>
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