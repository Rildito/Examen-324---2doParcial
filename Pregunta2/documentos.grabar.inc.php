<?php
$nombre=$_GET["nombre"];
$paterno=$_GET["paterno"];
$materno=$_GET["materno"];
$ci=$_GET["ci"];
$email = $_GET['email'];
$telefono = $_GET['telefono'];

$sql="UPDATE alumno ";
$sql.="SET nombre='".$nombre."', ";
$sql.="apellidoPaterno='".$paterno."', ";
$sql.="apellidoMaterno='".$materno."', ";
$sql.="ci='".$ci."', ";
$sql.="email='".$email."', ";
$sql.="telefono='".$telefono."' ";
$sql.="WHERE ci='".$ci."'";

echo $sql;
$resultadofi=mysqli_query($con, $sql);
?>