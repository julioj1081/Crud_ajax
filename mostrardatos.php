<?php
include("conexion.php");
$consulta = mysqli_query($conexion, "SELECT * FROM usuarios");
echo "<table border='1px' >
<tr>
  <th>ID</th>
  <th>NOMBRE</th>
  <th>APELLIDOS</th>
  <th>ELIMINAR</th>
</tr>";

while($reg = mysqli_fetch_array($consulta)){
  echo "
  <tr>
  <td>".$reg[0]."</td>
  <td id='nombre_usuario' data-id_usuario='".$reg["id_users"]."'  contenteditable>".$reg[1]."</td>
  <td id='apellido_usuario' data-id_apellido='".$reg["id_users"]."'  contenteditable>".$reg[2]."</td>
  <td><button id='eliminar' data-id='".$reg[0]."'>Eliminar</button></td>
  </tr>
  ";
}
echo "<tr>
  <td></td>
  <td id='nombre_add' contenteditable></td>
  <td id='apellido_add' contenteditable></td>
  <td> <button id='add'>Agregar</button></td>
</tr>";
echo "</table>";
 ?>
