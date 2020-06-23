<?php
$conexion = mysqli_connect("localhost","root", "", "crud_ajax");
/*SI no existe la conexion*/
if(!$conexion){
  echo "No se ha podido conectar a la base de datos". mysql_error();
  exit();
}
 ?>
