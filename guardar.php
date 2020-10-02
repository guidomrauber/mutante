 <?php

 
require 'header.php';



 ?>
 
<?php
	
	$adn = $_POST['pepe'];
	
	$condicion = $_POST['condicion'];
        
	

	// Conexión a base de datos.
	$conn = @mysql_connect('localhost','root','') OR DIE ("Error de conexion: " . mysql_error());
	// Seleccionar base de datos.
	$db = mysql_select_db('mutante',$conn) OR DIE ("Error en la base de datos: " . mysql_error());
	// Creación y/o formación de la consulta.
	$sql =  "INSERT INTO products ( adn, condicion) VALUES ('$adn','$condicion')";
	// Ejecución y resultado de la consulta.
	$result = mysql_query($sql,$conn);
	if (!$result) {
		echo "Error en la consulta: " . mysql_error();
	} else {
		echo "Usuario actualizado correctamente .";
	}
?>

 
 <?php

 
require 'FOOTER.php';



 ?>





 
