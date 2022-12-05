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
<body class="bg-dark">
    <div class="container vh-100 shadow bg-white px-0">
        <h1 class="text-center p-5 fw-bold border-bottom border-dark shadow">EXAMEN INF-324</h1>
        <div class="d-flex justify-content-center align-items-center mb-3">
            <img src="<?php echo $nivel?>img/logo.png" />
        </div>
        
        <div class="d-flex justify-content-center">

        <form class="w-25 shadow-lg p-5 border border-dark" method="POST" action="control.php">
            <div class="mb-3">
                <label for="usuario" class="form-label">Nombre de Usuario:</label>
                <input type="text" class="form-control" id="usuario" name="usuario">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary d-flex justify-content-center align-center">Iniciar Sesion</button>
            </div>
            
        </form>
        </div>

        
    </div>
</body>
</html>