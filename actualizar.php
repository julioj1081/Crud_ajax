<?php
include("conexion.php");
$id = $_POST["id"];
$texto = $_POST["texto"];
$columna = $_POST["columna"];
$consulta = mysqli_query($conexion, "UPDATE usuarios SET $columna = '$texto' WHERE id_users=$id");

if(!$consulta){
  echo "Error al actualizar datos".mysql_error();
}else{
  echo "Datos actualizados";
}
 ?>
