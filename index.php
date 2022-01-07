<!DOCTYPE html>
<html lang="es">
    <head>
        <title>PHP y MySQL inicial - UTN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/miestilo.css">
    </head>
    <body>

    <div class="container">
    <header id="cabecera">
 <h1><img src="img/logo.png" class="img" alt="Mi Institución"></h1>
         <?php include "header.html"; ?>
    </header> <!-- /#cabecera -->  


<section class="titulo1">
    <h2> Gestión de Personal y Actividades</h2>
</section>


<?php 
    // guardar variables

$institucion="Escuela 45";
$localidad="Villa Regina";
$cant_personal=12;

?>
<! Imprime nombre de la organización -->

<section class="personal">
<h3>Organización: </h3>
<div>
<ul>
    <li> Instución: <?php echo $institucion; ?></li>
    <li> Localidad: <?php echo $localidad; ?></li>
    <li> Empleados: <?php echo$cant_personal; ?></li>
</ul>
</div>
</section>
<! Imprime listado de docentes -->
<section class="destacado">

<div>
    <h3> Seleccione un docente:</h3>
    <nav>
        <ul>
            <li> <a href="index.php?id=0"> Docente1</a></li>
            <li> <a href="index.php?id=1"> Docente2</a></li>
            <li> <a href="index.php?id=2"> Docente3</a></li>
			<li> <a href="index.php?id=3"> Docente4</a></li>
			<li> <a href="index.php?id=4"> Docente5</a></li>
        </ul>
    </nav>
</div>
</section>
<?PHP
// ver si GET está vacio o no
if (empty($_GET['id'])){ $id=0;}
else {
$id=$_GET['id'];}
// trae el valor almacenado en las variables
require "variables.php";
// Analiza los casos
switch (ANTIGUEDAD[$id]){
    case 10:
    case 11:
    case 12:
    case 13:
    case 14:
    $premio="Tiene entre 10 y 14 años de antigüedad, recibe bonificación.";
    $bonificacion=20;

    break;
    default:
    $premio="No tiene bonificación por antigüedad";
    $bonificacion=0;
}
// calcula el sueldo y lo almacena
 $sueldo=$valor_hora* HORAS[$id] + ($valor_hora* HORAS[$id]* $bonificacion)/100;
?>
<! Imprime datos del personal seleccionado -->
<section class="datos">
<div> 
<h3>Datos del personal: </h3>
<ul>
    <li> Apellido y Nombre: <?php echo NOMBRE_PERSONAL[$id]; ?> </li>
    <li> Fecha de Nacimiento: <?php echo NACIMIENTO[$id]; ?> </li> 
    <li> Puesto: <?php echo PUESTO[$id]; ?> </li>
<?php
    if (HORAS[$id]> 0) { ?>
    <li> Antigüedad: <?php echo ANTIGUEDAD[$id]; ?> </li>
    <li> Hs. de trabajo: <?php echo HORAS[$id]; ?> </li>
    <li> Valor de la hora: <?php echo $valor_hora; ?> pesos </li>
    <li> Bonus: <?php echo $premio; ?> Su bono es del <?php echo $bonificacion; ?> % </li>
    <li> Total a pagar: <?php echo $sueldo; ?> pesos </li>
<?php 
    } else {echo "<li>No tiene horas trabajadas, no hay que pagarle </li>";}
    ?>
</ul>
</div>


</section>
<section class="destacado2">
<div>
<h3> Ordenar Vectores </h3>
    <nav>
        <ul>
            <li> <a href="ordenar.php?ordenar=1"> Ordenar por legajo ASC</a></li>
            <li> <a href="ordenar.php?ordenar=2"> Ordenar por legajo DESC</a></li>
                    </ul>
    </nav>

</div>   
</section>
<br>
</div>
<! Imprime pie de página --> 
<section class="footer">
    <div class="container">   
    <h3> Sistema en desarrollo</h3>
    </div>
</section>

<script src="js/jquery-3.6.0.min.js">
</script>
<script  src="js/functions.js">

</script>   
</body>
</html>