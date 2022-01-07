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


<! Imprime listado de docentes -->

<section class="destacado2">
<div>
<h3> Ordenar Vectores </h3>
    <nav>
        <ul>
            <li> <a href="ordenar.php?ordenar=1"> Ordenar por Nro. de Legajo Asc</a></li>
            <li> <a href="ordenar.php?ordenar=2"> Ordenar por Nro. de Legajo Desc</a></li>
                    </ul>
    </nav>

</div>   
</section>
<?PHP
// ver si GET está vacio o no
if (empty($_GET['ordenar'])){ $ordenar=1;}
else {
$ordenar=$_GET['ordenar'];}
require "variables.php";


?>
<! Imprime datos del personal ordenados por legajo-->
<section class="datos">
<div> 
<h3>Personal ordenado por Nro. de legajo </h3>
<ul>
   
<?php
 if ($ordenar== 1){ 
 

 // ordenamiento del Vector ascendente por legajo

asort($legajo);
ksort($legajo);


while (list($i,$valor)=each($legajo)){

echo "Legajo: " . $i . " ‐ ";

echo "Nombres: " . $valor;

echo "<br/>";

}}
 // ordenamiento del Vector Descendente por legajo
if ($ordenar== 2){ 
    asort($legajo);
    krsort($legajo);

    while (list($i,$valor)=each($legajo)){
    
    echo "Legajo: " . $i . " ‐ ";
    
    echo "Nombres: " . $valor;
    
    echo "<br/>";

}}

?>
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