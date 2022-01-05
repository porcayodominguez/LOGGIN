<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="estiloh3.css">
  </head>
  <body>

  </body>
  <?php
  srand (time());
  $numero_aleatorio = rand(1000,100000);
  echo "<h2>Tu nueva contraseña temporal es $numero_aleatorio. En 72 hrs usted recibirá su nueva contraseña
  a su correo electrónico proporcionado.</h2>";
   ?>
   <a href="seccion.html"class="button-contra">Ir al inicio de sección.</a>
</html>
