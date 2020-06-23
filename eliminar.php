<?php
include("conexion.php");
$id = $_POST["id"];
$consulta = mysqli_query($conexion, "DELETE FROM usuarios WHERE id_users=$id");
if(!$consulta){
  echo "Error al eliminar el registro".mysql_error();
}else{
  echo "Registro borrado con exito";
}
 ?>
