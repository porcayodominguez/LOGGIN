<?php
$conexion = mysqli_connect("localhost","root","","registro");
if(!$conexion){
  echo "Error al conectar la base de datos";
}
else{
  echo "";
}
mysqli_set_charset($conexion,"utf8");
 ?>
