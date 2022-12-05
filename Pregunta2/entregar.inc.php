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
	<div class="p-5 bg-dark d-flex">
    	<h1 class="w-100 text-center text-white fw-bold">Documentos a presentar</h1>
		<!-- <a href="cerrar_sesion.php"><button class="btn btn-danger mx-4">Cerrar Sesion</button></a> -->
	</div>
	<div class="container mt-5 w-50 border px-0">
    <table class="table border-dark">
        <thead class="table-primary">
            <tr>
                <th scope="col">Documentos</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
		<tbody>
			<tr>
				<td>Fotografía fondo celeste claro, 3x3:</td>
				<td>
					<select name="foto" style="height: 35px; width: 100px;" class="form-select">    
						<option value="Si">Si</option>    
						<option value="No">No</option>    
					</select><br>   
				</td>
			</tr>
			<tr>
				<td>Certificado de nacimiento Original:</td>
				<td>
					<select name="cnac" style="height: 35px; width: 100px;" class="form-select">    
						<option value="Si">Si</option>    
						<option value="No">No</option>    
					</select><br>   
				</td>
			</tr>
			<tr>
				<td>Certificado de aprobacion:</td>
				<td>
					<select name="cnac" style="height: 35px; width: 100px;" class="form-select">    
						<option value="Si">Si</option>    
						<option value="No">No</option>    
					</select><br>   
				</td>
			</tr>
			<tr>
				<td>Fotocopia de Cédula de Identidad (anverso/reverso):</td>
				<td>
					<select name="fci" style="height: 35px; width: 100px;" class="form-select">    
						<option value="Si">Si</option>    
						<option value="No">No</option>    
					</select><br>   
				</td>
			</tr>
			<tr>
				<td>Diploma de Bachiller (FOTOCOPIA LEGALIZADA) anverso/reverso:</td>
				<td>
					<select name="ftit" style="height: 35px; width: 100px;" class="form-select">    
						<option value="Si" selected>Si</option>    
						<option value="No">No</option>    
					</select><br>   
				</td>
			</tr>
		</tbody>
	</table>
    </div>
   


    <?php
?>
    
    <!-- <a href="nuevo.php?usu=<?php echo $usu; ?>"><button class="btn btn-success">Nuevo</button></a> -->
    
</body>
</html>








