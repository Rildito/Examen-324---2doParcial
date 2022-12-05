<?php $nivel="./"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificado</title>
    <link href="<?php echo $nivel;?>bootstrap/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>



<?php
    include 'conexion.inc.php';
    session_start();
    $usu = $_SESSION['usuario']; 
    $rol = $_SESSION['rol'];
    ?>
    <div class="d-flex justify-content-center align-items-center bg-dark">
    <h1 class="text-white w-100 text-center p-5 fw-bold">Aprobar el curso prefacultativo o examen de admicion</h1>
        <!-- <a href="cerrar_sesion.php"><button class="btn btn-danger mx-4">Cerrar Sesion</button></a> -->
    </div>  
    <div class="container shadow-lg mt-5">
    <div class="d-flex justify-content-center">
    <img src="<?php echo $nivel?>img/aprobar.jpg" style="max-height:300px;" class="mt-5"/>
    
    </div>
    <div class="d-flex jusitify-content-center align-items-center mt-4">
        <div class="w-100">
            <p class="text-center">Al aprobar el curso prefacultativo o el examen de admision realizara el proceso de incripcion de nuevos estudiantes para la universidad mayor de San Andres</p>
        </div> 
    </div>
    </div>
    <?php
?>
    
    <!-- <a href="nuevo.php?usu=<?php echo $usu; ?>"><button class="btn btn-success">Nuevo</button></a> -->
    
</body>
</html>








