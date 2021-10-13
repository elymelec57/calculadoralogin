<?php 

	require_once 'Modelo/claseadmin.php';
if ($_POST) {
	
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
	
	$objSesion = new Admin();
	$sesion = $objSesion->consultaradmin();

	foreach ($sesion as $v) {
	
		if($usuario == $v['usuario'] && $contrasena==$v['pass'])
		{
				session_start(['name'=>'RC']);
            	$_SESSION['id']= $v['id'];
				$_SESSION['usuario']= $v['usuario'];
				$_SESSION['pass']= $v['pass'];
				
				return header('location:home');
		}
		  else {

		  		require_once 'Vista/contenido/session.php';
		  		echo  $m = "<div><h4 class='text-center'>Usuario o contraseña incorrectos.</h4></div>";
		}
	}

}// fin del if
	

 ?>