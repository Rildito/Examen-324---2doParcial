<?php

if (isset($_GET["inicio"])) {
	header("Location: b_entrada.php");
	exit;
}

session_start();

$flujo = $_GET["flujo"];
$proceso = $_GET["proceso"];
$pantalla = $_GET["pantalla"];
$nro_tramite = $_GET["nroTramite"];
$usuario = $_GET["usuario"];


include "conexion.inc.php";

// $fechaActual = date('y/m/d h:i');
$fechaActual =date("Y-m-d H:i:s",time()-3600);
$sql2="update flujotramite set fechafin='".$fechaActual."' ";
$sql2.="where flujo='".$flujo."' and ";
$sql2.="proceso='".$proceso."' and ";
$sql2.="nroTramite='".$nro_tramite."' ";
mysqli_query($con,$sql2);

include "conexion.inc.php";
include $pantalla.".grabar.inc.php";

$sql= "";
if (isset($_GET["Siguiente"]))
{
	$sql="select flujo, proceso, procesoSiguiente as procesoselect, tipo, rol, pantalla ";
	$sql.="from flujo ";
	$sql.="where flujo='".$flujo."' and ";
	$sql.="proceso='".$proceso."'";
}
else if (isset($_GET["Anterior"]))
{
	$sql="select flujo, proceso as procesoselect, procesoSiguiente, tipo, rol, pantalla ";
	$sql.="from flujo ";
	$sql.="where flujo='".$flujo."' and ";
	$sql.="procesoSiguiente='".$proceso."'";
}

else if (isset($_GET["Si"]))
{
	$sql="select flujo, procesoSI as procesoselect ";
	$sql.="from flujocondicion ";
	$sql.="where flujo='".$flujo."' and ";
	$sql.="proceso='".$proceso."'";
}
else if (isset($_GET["No"]))
{
	$sql="select flujo, procesoNO as procesoselect ";
	$sql.="from flujocondicion ";
	$sql.="where flujo='".$flujo."' and ";
	$sql.="proceso='".$proceso."'";
}

$resultado=mysqli_query($con,$sql);
$fila=mysqli_fetch_array($resultado);
$proceso = $fila["procesoselect"];

if ($proceso != '-') {
	$sql2="insert into flujotramite(flujo, proceso, nroTramite, fechaini, usuario) ";
	$sql2.="values('".$flujo."','".$proceso."','";
	$sql2.=$nro_tramite."','".$fechaActual."','".$usuario."')";
	mysqli_query($con,$sql2);
}
	
$parametros="?flujo=".$flujo;
$parametros.="&proceso=".$proceso;	
$parametros.="&nroTramite=".$nro_tramite;
$parametros.="&usuario=".$usuario;

if ($proceso == '-') {
	header("Location: b_entrada.php");
}else {
	header("Location: flujo.php".$parametros);
}

?>