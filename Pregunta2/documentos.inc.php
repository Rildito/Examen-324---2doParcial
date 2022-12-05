<?php $nivel="./"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preparar documentos</title>
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
        <h1 class="text-white w-100 text-center p-5 fw-bold">Preparar documentos</h1>;
        <!-- <a href="cerrar_sesion.php"><button class="btn btn-danger mx-4">Cerrar Sesion</button></a> -->
    </div>  
    <div class="container shadow-lg mt-5 p-5 d-flex justify-content-center border">
        <!-- <div class="d-flex justify-content-center">
        <img src="<?php echo $nivel?>img/preparar.jfif" style="height:300px;" class="mt-3"/>

        </div> -->
        <div class="w-50 border border-dark p-5">

            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre;?>">
            </div>

            <div class="mb-3">
              <label for="paterno" class="form-label">Apellido Paterno:</label>
              <input type="text" class="form-control" id="paterno" name="paterno" value="<?php echo $paterno;?>">
            </div>

            <div class="mb-3">
              <label for="materno" class="form-label">Apellido Materno:</label>
              <input type="text" class="form-control" id="materno" name="materno" value="<?php echo $materno;?>">
            </div>

            <div class="mb-3">
              <label for="ci" class="form-label">Ci:</label>
              <input type="text" class="form-control" id="ci" name="ci" value="<?php echo $ci;?>">
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>">
            </div>

            <div class="mb-3">
              <label for="telefono" class="form-label">Telefono:</label>
              <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $telefono;?>">
            </div>

        </div>
    </div>
    <?php
?>
    
    <!-- <a href="nuevo.php?usu=<?php echo $usu; ?>"><button class="btn btn-success">Nuevo</button></a> -->
    
</body>
</html>








