<!DOCTYPE html>
<html lang="es">
    <head>
        <title>MODULO 2 - UTN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/miestilo.css">
    </head>
    <body>

    <div class="container">
    <header id="cabecera">

        <h1> Gestión de Personal y Actividades </h1>  
<?php require "header.html"; ?>
</header> <!-- /#cabecera -->  
<!--==========================
  Intro Section
============================-->
<body>

<section class="titulo1">
    <h2> Agregar Personal a la Institución</h2>

        
          <form class="form" method="POST" action="agregar2.php" autocomplete="off">
          <label for="nombres"> Nombres: </label>
          <input type="text" class="form input" name="nombres" placeholder="Nombres" required >         
          <br>
          <label for="apellidos"> Apellidos: </label>
          <input type="text" class="form input" name="apellidos" placeholder="Apellido" required >
            <br>
            <label for="dni"> DNI: </label>
            <input type="number" class="form input" name="dni"  placeholder="El Nro. de DNI, sólo puntos" required >
            <br>
            <label for="email"> Correo Electrónico: </label>
            <input type="email" class="form input" name="email" placeholder="email del personal" required>
            <br>
            <label for="fecha_nacimiento" > Fecha de Nacimiento: </label>
            <input type="date" class="form input" name="fecha_nacimiento" placeholder="Fecha de nacimiento"  required>
<br>

    	<button type="submit" class="form input">Guardar y Avisar</button>

<?php
if (isset($_GET['e']))
{
echo "<h3> Se agregó el personal a la base de datos y se le envió un email </h3>";
}
?>

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
    </body>
    </html>
