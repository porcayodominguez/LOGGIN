<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>INGRESO</title>
    <link rel="stylesheet" href="estiloh3.css">
  </head>
  <body>
      <img class="logo-center" src="imagenes/iconos/dona.svg" alt="Esto es una imagen">
  </body>
</html>
<?php
include('re.php');

if (isset($_POST['registrar'])){
if (strlen($_POST['name']) >=1 && strlen($_POST['email']) >=1) {
  $name= trim($_POST['name']);
  $email= trim($_POST['email']);
  $fecha_reg= date("d/m/y");

  $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name', '$email', '$fecha_reg')";
  $resultado = mysqli_query($conexion, $consulta);

  if ($resultado){
    ?>
    <h3 class="ok"> ¡LISTO! Registro completado.<br><br>
    BIENVENIDO A NUESTRA COMUNIDAD<br>
    REPOSTERÍA "YUYO BAKERY"</h3>
      <a href="index.html"class="button">Ir al Menú Principal.</a>
    <?php
  }
    else {
      ?>
        <?php
        include("error.html");
  }
}
}
