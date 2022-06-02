<?php
session_start();

$db = new mysqli("localhost", "root", "root", "intel");


if ( isset($_POST['submit']) ){

	$correo = $_POST['correo'];
	
	$resultados = mysqli_query($db, "SELECT * FROM usuarios WHERE LOWER(Correo) LIKE LOWER('$correo') " );
	$row = mysqli_fetch_array($resultados);
	$mailingresado = $row['2'];
	
	

	if (!empty($correo)){
		
		echo "Hola ".$mailingresado;

		if($correo == $mailingresado){
			$_SESSION['correousuario'] = $correo;

			header("location: index.php");
		} else {
			header("location: login.php");
			// echo "</br>"."nelson";
		}
		
	} else {
		
		header("location: login.php");
	}
	
} else {
	header("location: login.php");
}