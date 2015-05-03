<?php
//session_start();
//** Libreria principal de consulta de generacion de asientos a la base de datos mostrando el estado de cada asiento *//
//funcion que recupera el status de las primeras filas asientos impares izquierdos cada asiento generado por gen libs  punto a punto (pp)
function check_status_places_a($bus, $place, $handle) //ingresan datos el numero de bus, fecha, asiento, terminal provenientes del generador (grupo a) *//
{
  $result = $handle->query("SELECT * FROM asiento WHERE IDBus='$bus' AND NumAsiento='$place' ");
  //verificamos si existe coincidencia (comprobamos si el asiento esta vacio o ocupado)
if ($result->num_rows > 0){
    //recuperamos la informacion del asiento *//
    $recover=$result->fetch_assoc();	
    $status=$recover["estado"]; //contiEne el estado del asiento
			if ($status=="p"){ //por si significa que el asiento esta en proceso los usuarios no podran efecctuar ninguna accion
    		echo '&nbsp;&nbsp;&nbsp;<img src="images_bus/'.$place.'s.png" border="0" title="EN PROCESO...">';
    		}
			if ($status=="v"){ //por si significa que el asiento esta vendido mostramos el icono de asiento en color rojo
            echo '&nbsp;&nbsp;&nbsp;<img src="images_bus/'.$place.'r.png" border="0" title="VENDIDO">'; //ocupado el asiento no puede ser vendido
			} 
			if ($status=="r"){
			echo '&nbsp;&nbsp;&nbsp;<img src="images_bus/'.$place.'g.png" border="0" title="RESERVADO">';
			}
      // if($status=="q"){
      //   echo '&nbsp;&nbsp;&nbsp;<a href="../ticket_pp.php?pl='.$place.'" target="_blank"><img src="images_bus/'.$place.'.png" border="0" title="LIBRE"></a>';
      // }
}
else{  
// si no encuentra nigun resultado por logica el asiento estaradesocupado
echo '&nbsp;&nbsp;&nbsp;<a href="seleccionasiento.php?pl='.$place.'" target="_blank"><img src="images_bus/'.$place.'.png" border="0" title="LIBRE"></a>'; //el asiento esta libre puede ser   
}
}

//funcion nuero 2  recupera el status de las segundas filas de asientos pares pasillo cada asiento generado por gen libs (mdx)
function check_status_places_b($bus,  $place, $handle) //ingresan datos el numero de bus, fecha, asiento, terminal provenientes del generador (grupo b) *//
{
  $result = $handle->query("SELECT * FROM asiento WHERE IDBus='$bus' AND NumAsiento='$place'");
  //verificamos si existe coincidencia (comprobamos si el asiento esta vacio o ocupado)
if ($result->num_rows > 0){
    //recuperamos la informacion del asiento *//
    $recover=$result->fetch_assoc();	
    $status=$recover["estado"]; //contine el estado del asiento
    //precedemmos a realizar los proceso y comparaciones segun el resultado mostramos un icono adecuado
	
			if ($status=="p"){
			 echo '&nbsp;&nbsp;&nbsp;<img src="images_bus/'.$place.'s.png" border="0" title="EN PROCESO...">';		
			}
       		if ($status=="v"){ //por si significa que el asiento esta vendido mostramos el icono de asiento en color rojo
       		echo '&nbsp;&nbsp;&nbsp;<img src="images_bus/'.$place.'r.png" border="0" title="VENDIDO">'; //ocupado el asiento no puede ser vendido
	        }
	   	    if ($status=="r"){
		           //por si significa que el asiento esta reservado mostramos el icono verde limon
			echo '&nbsp;&nbsp;&nbsp;<img src="images_bus/'.$place.'g.png" border="0" title="RESERVADO">'; //ocupado el asiento esta en estado de reservado	
		   }
		        
}
else{  
// si no encuentra nigun resultado por logica el asiento estaradesocupado
echo '&nbsp;&nbsp;&nbsp;<a href="seleccionasiento.php?pl='.$place.'" target="_blank"><img src="images_bus/'.$place.'.png" border="0" title="LIBRE"></a>'; //el asiento esta libre puede ser vendido
}
}

//funcion numero 3  recupera el status de las terceras filas de asientos pares pasillo cada asiento generado por gen libs (mdx)
function check_status_places_c($bus, $place, $handle) //ingresan datos el numero de bus, fecha, asiento, terminal provenientes del generador (grupo c) *//
{
  $result = $handle->query("SELECT * FROM asiento WHERE IDBus='$bus' AND NumAsiento='$place' ");
  //verificamos si existe coincidencia (comprobamos si el asiento esta vacio o ocupado)
if ($result->num_rows > 0){
    //recuperamos la informacion del asiento *//
    $recover=$result->fetch_assoc();	
    $status=$recover["estado"]; //contine el estado del asiento
    //precedemmos a realizar los proceso y comparaciones segun el resultado mostramos un icono adecuado
	
			 if ($status=="p"){ //por si significa que el asiento esta en proceso los usuarios no podran efecctuar ninguna accion
             echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images_bus/'.$place.'s.png" border="0" title="EN PROCESO...">';
   			 }
			 		 
      		  if ($status=="v"){ //por si significa que el asiento esta vendido mostramos el icono de asiento en color rojo
       		  echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images_bus/'.$place.'r.png" border="0" title="VENDIDO">'; //ocupado el asiento no puede ser vendido
			  }
	          if ($status=="r"){
		           //por si significa que el asiento esta reservado mostramos el icono verde limon
			  echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images_bus/'.$place.'g.png" border="0" title="RESERVADO">'; //ocupado el asiento esta en estado de reservado
			}
					   	
}
else{
// si no encuentra nigun resultado por logica el asiento estaradesocupado
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="seleccionasiento.php?pl='.$place.'" target="_blank"><img src="images_bus/'.$place.'.png" border="0" title="LIBRE"></a>'; //el asiento esta libre puede ser vendido
}
}

//funcion numero 4  recupera el status de las cuartas filas de asientos impares ventana cada asiento generado por gen libs (mdx)
function check_status_places_d($bus, $place, $handle) //ingresan datos el numero de bus, fecha, asiento, terminal provenientes del generador (grupo d) *//
{
  $result = $handle->query("SELECT * FROM asiento WHERE IDBus='$bus' AND NumAsiento='$place'");
  //verificamos si existe coincidencia (comprobamos si el asiento esta vacio o ocupado)
if ($result->num_rows > 0){
    //recuperamos la informacion del asiento *//
    $recover=$result->fetch_assoc();	
    $status=$recover["estado"]; //contine el estado del asiento
    //precedemmos a realizar los proceso y comparaciones segun el resultado mostramos un icono adecuado
	
	       if ($status=="p"){ //por si significa que el asiento esta en proceso los usuarios no podran efecctuar ninguna accion
           echo '&nbsp;&nbsp;&nbsp;&nbsp;<img src="images_bus/'.$place.'s.png" border="0" title="EN PROCESO..."><br>';
           }
		   
                 if ($status=="v"){ //por si significa que el asiento esta vendido mostramos el icono de asiento en color rojo
                 echo '&nbsp;&nbsp;&nbsp;&nbsp;<img src="images_bus/'.$place.'r.png" border="0" title="VENDIDO"><br>'; //ocupado el asiento no puede ser vendido
	             }
	             if ($status=="r"){
		         //por si significa que el asiento esta reservado mostramos el icono verde limon
			     echo '&nbsp;&nbsp;&nbsp;&nbsp;<img src="images_bus/'.$place.'g.png" border="0" title="RESERVADO"><br>'; //ocupado el asiento esta en estado de reservado
			     }	   
		  
}
else{  
// si no encuentra nigun resultado por logica el asiento estaradesocupado
echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="seleccionasiento.php?pl='.$place.'" target="_blank"><img src="images_bus/'.$place.'.png" border="0" title="LIBRE"></a><br>'; //el asiento esta libre puede ser vendido
}
}

//funcion numero 5  recupera el status de la fila central de asientos generado por gen libs (mdx)
function check_status_places_e($bus, $place, $handle) //ingresan datos el numero de bus, fecha, asiento, terminal provenientes del generador (grupo e) *//
{
  $result = $handle->query("SELECT * FROM asiento WHERE IDBus='$bus' AND NumAsiento='$place'");
  //verificamos si existe coincidencia (comprobamos si el asiento esta vacio o ocupado)
if ($result->num_rows > 0){
    //recuperamos la informacion del asiento *//
    $recover=$result->fetch_assoc();	
    $status=$recover["estado"]; //contine el estado del asiento
   
   
				if ($status=="p"){ //por si significa que el asiento esta en proceso los usuarios no podran efecctuar ninguna accion
                echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images_bus/'.$place.'s.png" border="0" title="EN PROCESO...">';
                }
				
    	
       			  if ($status=="v"){ //por si significa que el asiento esta vendido mostramos el icono de asiento en color rojo
       			  echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images_bus/'.$place.'r.png" border="0" title="VENDIDO">'; //ocupado el asiento no puede ser vendido
	              }
	   			  if ($status=="r"){
		    	  //por si significa que el asiento esta reservado mostramos el icono verde limon
				  echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images_bus/'.$place.'g.png" border="0" title="RESERVADO">'; //ocupado el asiento esta en estado de reservado
				  }	   
		   
	
}
else{  
// si no encuentra nigun resultado por logica el asiento estaradesocupado
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="seleccionasiento.php?pl='.$place.'" target="_blank"><img src="images_bus/'.$place.'.png" border="0" title="LIBRE"></a>'; //el asiento esta libre puede ser vendido//libera
}
}

//funcion numero 6  recupera el status de la fila dercha final ventana de asientos generado por gen libs (mdx)
function check_status_places_f($bus, $place, $handle) //ingresan datos el numero de bus, fecha, asiento, terminal provenientes del generador (grupo e) *//
{
  $result = $handle->query("SELECT * FROM asiento WHERE IDBus='$bus' AND NumAsiento='$place' ");
  //verificamos si existe coincidencia (comprobamos si el asiento esta vacio o ocupado)
if ($result->num_rows > 0){
    //recuperamos la informacion del asiento *//
    $recover=$result->fetch_assoc();	
    $status=$recover["estado"]; //contine el estado del asiento
  
			if ($status=="p"){ //por si significa que el asiento esta en proceso los usuarios no podran efecctuar ninguna accion
            echo '&nbsp;&nbsp;&nbsp;&nbsp;<img src="images_bus/'.$place.'s.png" border="0" title="EN PROCESO..."><br>';
            }
       			  if ($status=="v"){ //por si significa que el asiento esta vendido mostramos el icono de asiento en color rojo
       			  echo '&nbsp;&nbsp;&nbsp;&nbsp;<img src="images_bus/'.$place.'r.png" border="0" title="VENDIDO"><br>'; //ocupado el asiento no puede ser vendido
	   			  }
	   			  if ($status=="r"){
		    	  //por si significa que el asiento esta reservado mostramos el icono verde limon
				  echo '&nbsp;&nbsp;&nbsp;&nbsp;<img src="images_bus/'.$place.'g.png" border="0" title="RESERVADO"><br>'; //ocupado el asiento esta en estado de reservado	 
				  }	   
		   
    
}
else{  
// si no encuentra nigun resultado por logica el asiento estaradesocupado
echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="seleccionasiento.php?pl='.$place.'" target="_blank"><img src="images_bus/'.$place.'.png" border="0" title="LIBRE"></a><br>'; //el asiento esta libre puede ser vendido
}
}



?>