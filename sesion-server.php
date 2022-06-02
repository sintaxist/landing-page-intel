<?php
session_start();

$db = new mysqli("localhost", "DBasus20admin", "#elevate20x2", "asus_elevate");

//echo mysqli_ping($db);

$resultados = mysqli_query($db, "SELECT * FROM usuarios WHERE Correo='$_POST[correo]' " );

$row = mysqli_fetch_array($resultados);

$mailingresado = $row['2'];


if ( isset($_POST['submit']) ){
	
	$correo = $_POST['correo'];

	if (!empty($correo)){
		
		if($correo == $mailingresado){
			$_SESSION['correousuario'] = $correo;
			header("location: index.php");
		} else {
			header("location: login.php");
		}
		
	} else {
		
		header("location: login.php");
	}
	
} else {
	header("location: login.php");
}
?>