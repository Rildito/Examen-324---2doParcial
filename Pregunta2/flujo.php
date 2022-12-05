<?php

session_start();
$usu = $_SESSION['usuario']; 
$rol = $_SESSION['rol'];


$flujo = $_GET["flujo"];
$proceso = $_GET["proceso"];
$nroTramite = $_GET["nroTramite"];
$usuario=$_GET['usuario'];

include "conexion.inc.php";

$sql="select * from flujo ";
$sql.="where flujo='".$flujo."' and ";
$sql.="proceso='".$proceso."'";
$resultado=mysqli_query($con,$sql);
$fila=mysqli_fetch_array($resultado);

$pantalla=$fila["pantalla"];
$tipo=$fila["tipo"];


include $pantalla.".datos.inc.php";

$sql="select count(*) as cantidad from flujotramite ";
$sql.="where flujo='".$flujo."' and ";
$sql.="proceso='".$proceso."' and ";
$sql.="nroTramite='".$nroTramite."'";
$resultado2=mysqli_query($con,$sql);
$fila2=mysqli_fetch_array($resultado2);
$cantidad=$fila2["cantidad"];
// echo "<pre>";
// var_dump($pantalla);
// echo "</pre>";
?>

<form method="GET" action="motor.php">
	<?php include $pantalla.".inc.php"; ?>

	<input type="hidden" value="<?php echo $pantalla;?>" name="pantalla"/>
	<input type="hidden" value="<?php echo $flujo;?>" name="flujo"/>
	<input type="hidden" value="<?php echo $proceso;?>" name="proceso"/>
	<input type="hidden" value="<?php echo $tipo;?>" name="tipo"/>
	<input type="hidden" value="<?php echo $nroTramite;?>" name="nroTramite"/>
	<input type="hidden" value="<?php echo $usuario;?>" name="usuario"/>

	<br/>

	<div class="d-flex justify-content-center gap-3">
		<?php
		if ($tipo=="C" && $rol!="alumno" && $rol!='carrera') {;?>
			<input type="submit" value="Si" name="Si" class="btn btn-success"/>
			<input type="submit" value="No" name="No" class="btn btn-warning"/>
		<?php

		} else {
			if($fila['procesoSiguiente'] == "-" && $fila['tipo'] != 'F'){
				if($rol != "kardex"){
					header("Location: b_entrada.php");
				}

				if ($proceso == 'P6') {
					echo '<input type="submit" value="Anterior" disabled class="btn btn-primary" name="Anterior"/>';
					echo '<input type="submit" value="Siguiente" class="btn btn-success" name="Siguiente"/>';
				}
				
			}else if ($flujo == 'F2' && $proceso == 'P7'){ 
				if ($rol != 'carrera') {
					header("Location: b_entrada.php");
				} else {?>
				<center>
					<input type="submit" value="Anterior" disabled class="btn btn-primary" name="Anterior"/>
					<input type="submit" value="Siguiente" class="btn btn-success" name="Siguiente"/>
				</center>
			<?php }} else if ($proceso == 'P1' || $proceso == 'P2' || $proceso == 'P3' || $proceso == 'P4'){ 
				if ($rol != 'alumno') {
					header("Location: b_entrada.php");
				} else { ?>
					<center>
						<input type="submit" value="Anterior" class="btn btn-primary" name="Anterior"/>
						<input type="submit" value="Siguiente" class="btn btn-success" name="Siguiente"/>
					</center>
				<?php }} else { ?>
				<center>
					<input type="submit" value="Anterior" class="btn btn-primary" name="Anterior"/>
					<input type="submit" value="Siguiente" class="btn btn-success" name="Siguiente"/>
				</center>
				<?php
			}
		} ?>
			
	</div>
	<div class="d-flex justify-content-center mt-5">
		<input type="submit" value="Volver inicio" name="inicio" class="btn btn-warning"/>
	</div>
</form>
