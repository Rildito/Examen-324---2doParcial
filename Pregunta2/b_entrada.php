<?php $nivel="./"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevos Estudiantes</title>
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
        <h1 class="text-white w-100 text-center p-5">Bienvenido: <span class="text-primary fw-bold"> <?php echo strtoupper($usu);?></span></h1>;
        <a href="cerrar_sesion.php"><button class="btn btn-danger mx-4">Cerrar Sesion</button></a>
    </div>
    <?php

    if ($rol == 'alumno') {
        $sql = "SELECT * FROM flujotramite WHERE usuario='".$usu."' AND fechafin is null AND proceso != ''";
        $resultado = mysqli_query($con, $sql);
    }else {
        $sql = "SELECT * FROM flujotramite WHERE usuario != '".$usu."' and fechafin is null";
        $resultado = mysqli_query($con, $sql);
    }
    // $sql = "SELECT * FROM flujotramite WHERE fechafin is null AND proceso != ''";
    // $resultado = mysqli_query($con, $sql);
    //     $resultado = mysqli_query($con, $sql);
    // echo "<pre>";
    // var_dump($sql);
    // echo "</pre>";
    // echo $sql;
?>
    
    <!-- <a href="nuevo.php?usu=<?php echo $usu; ?>"><button class="btn btn-success">Nuevo</button></a> -->
    
    <div class="container mt-5">
	<table class="table">
		<thead class="table-info">
			<tr>
				<th class="text-center">Nro. Tramite</th>
				<th class="text-center">Flujo</th>
				<th class="text-center">Proceso</th>
                <th class="text-center">Fecha Inicio</th>
                <th class="text-center">Fecha Fin</th>
				<th class="text-center">Operacion</th>
			</tr>
		</thead>
        <tbody>

    <?php

    while($fila = mysqli_fetch_array($resultado)){
        echo "<tr>";
            echo "<td class=text-center>".$fila['nroTramite']."</td>";
            echo "<td class=text-center>".$fila['flujo']."</td>";
            echo "<td class=text-center>".$fila['proceso']."</td>";
            echo "<td class=text-center>".$fila['fechaIni']."</td>";
            echo "<td class=text-center>".$fila['fechaFin']."</td>";
            echo "<td class=text-center><a href='flujo.php?flujo=".$fila['flujo']."&proceso=".$fila['proceso']."&nroTramite=".$fila['nroTramite']."&usuario=".$fila['usuario']."'><button class='btn btn-success px-5'>Ir</button></a></td>";
        echo "</tr>";
    }
?>
            </tbody>
        </table>
    </div>

</body>
</html>








