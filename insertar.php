<?php
include("conexion.php");
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$consulta = mysqli_query($conexion, "INSERT INTO `crud_ajax`.`usuarios` (`nombre`, `apellido`) VALUES ('$nombre', '$apellido')");


if(!$consulta){
  echo "Error".mysql_error();
}else{
  echo "Registro exitoso";
}
 ?>
