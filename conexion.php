<?php
$conexion=mysqli_connect ('localhost', 'root', '', 'ni_utn');
if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>