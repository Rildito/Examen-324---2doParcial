<?php
include ("conexion.inc.php");
$sql="SELECT * FROM alumno ";
$sql.="WHERE ci=8441659";
$resultadofi=mysqli_query($con,$sql);
$filafi=mysqli_fetch_array($resultadofi);

$nombre=$filafi["nombre"];
$paterno=$filafi["apellidoPaterno"];
$materno=$filafi["apellidoMaterno"];
$ci=$filafi["ci"];
$email = $filafi['email'];
$telefono = $filafi['telefono'];

?>