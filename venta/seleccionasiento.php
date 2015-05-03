<html>
<head>
	<title>Seleccione su Asiento</title>
	<script type="text/javascript">
	function deshab() {
		frm = document.forms['datosCliente'];
		for(i=0; ele=frm.elements[i]; i++)
			ele.disabled=true;
	}
	</script>
</head>

<body>
	<?php
		$estado="disabled";
	?>
	<form name="datosCliente" action="tongo.php" METHOD="POST">
		<p>Tipo de Documento: </p>
		<SELECT NAME="TipoDoc">
			<OPTION  type= "text" VALUE="DNI" SELECTED >DNI </OPTION>
			<OPTION VALUE="pasaporte">Pasaporte </OPTION>
			<OPTION VALUE="CarnetExtr">Carnet Extranjeria </OPTION>
		</SELECT>
		<p>Numero de Documento: </p><INPUT TYPE="text" NAME="numDoc">
		<p>Apellido Paterno: </p><INPUT TYPE="text" NAME="apPaterno">
		<p>Apellido Materno: </p><INPUT TYPE="text" NAME="apMaterno">
		<p>Nombres: </p><INPUT TYPE="text" NAME="nombres">
		<p>Fecha de Nacimiento: </p><INPUT TYPE="date" NAME="Nacionalidad">
		<p>Nacionalidad: </p><INPUT TYPE="text" NAME="Nacionalidad">
		<p>Celular / Telefono: </p><INPUT TYPE="tel" NAME="apPaterno">
		<p>E-mail: </p><INPUT TYPE="email" NAME="email">
		<INPUT type="submit" name="guardar" value="Guardar">
	</form>

	<!-- <input type="button" value="Deshabilitar" onclick="deshab()" /> -->
</body>
