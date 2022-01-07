<?php
require 'conexion.php';
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$numero_doc = $_POST['dni'];
    $email = $_POST['email'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $cuerpo_mail="Nombre:".$nombres."\r\n"."Apellido:".$apellidos."\r\n"."Correo Electrónico:" ."\r\n"." Fue agregado a la base de datos de la empresa. Bienvenido/a";
mail ("mail@gmail.com", "Mensaje enviado desde la Empresa", $cuerpo_mail);

mysqli_query($conexion, "INSERT INTO personal (nombres, apellidos, dni, email, fecha_nacimiento) VALUES ('$nombres','$apellidos', '$numero_doc', '$email', '$fecha_nacimiento' )");
mysqli_close($conexion);
header ("Location: agregar.php?e=ok");
?>
