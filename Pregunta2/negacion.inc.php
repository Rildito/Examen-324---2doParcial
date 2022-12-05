<?php $nivel="./"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificar observacion</title>
    <link href="<?php echo $nivel;?>bootstrap/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>


<?php
    include 'conexion.inc.php';
    session_start();
    $usu = $_SESSION['usuario']; 
    $rol = $_SESSION['rol'];
    ?>
	<div class="p-5 bg-dark d-flex">
    	<h1 class="w-100 text-center text-white">Emitir notificacion</h1>
		<!-- <a href="cerrar_sesion.php"><button class="btn btn-danger mx-4">Cerrar Sesion</button></a> -->
	</div>
	<div class="d-flex justify-content-center">
    <img src="<?php echo $nivel?>img/notificacion.png" style="height:300px;" class="mt-3"/>

    </div>


    <?php
?>
    
    <!-- <a href="nuevo.php?usu=<?php echo $usu; ?>"><button class="btn btn-success">Nuevo</button></a> -->
    
</body>
</html>








