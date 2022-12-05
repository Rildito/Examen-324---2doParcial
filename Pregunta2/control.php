<?php

	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
   
	if($usuario == 'luis' && $password == '123456'){ //para ingreso como alumno
		session_start();
        $_SESSION["usuario"] = $usuario;
        $_SESSION["rol"]='alumno';
		header("location:b_entrada.php");
	}else if($usuario == 'pepe' && $password == '12345'){ //para ingreso como alumno
		session_start();
		$_SESSION["usuario"] = $usuario;
        $_SESSION["rol"]='alumno';
		header("location:b_entrada.php");
	}else if($usuario == 'adrian' && $password == '123456'){ //para ingreso como kardex
		session_start();
		$_SESSION["usuario"] = $usuario;
        $_SESSION["rol"]='kardex';
		header("location:b_entrada.php");
    }else if($usuario == 'jose' && $password == '12345'){ //para ingreso como kardex
		session_start();
		$_SESSION["usuario"] = $usuario;
        $_SESSION["rol"]='kardex';
		header("location:b_entrada.php");
    }else if($usuario == 'carrera' && $password == '12345'){ //para ingreso como direccion de carrera
		session_start();
		$_SESSION["usuario"] = $usuario;
        $_SESSION["rol"]='carrera';
		header("location:b_entrada.php");
	}else {
		header("location:index.php");
	}

 

?>