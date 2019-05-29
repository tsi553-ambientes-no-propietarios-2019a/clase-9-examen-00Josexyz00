<?php 
session_start();

if ($_POST[clave]==$_POST[repetirclave]) {
	$conexion=mysqli_connect("localhost","root","","examen");

	$nombre = $_POST['nombre'];
	$user=$_POST['user'];
	$clave = $_POST['clave'];
	$tipo = $_POST['tipo'];

	$sql_insert = "INSERT INTO usuarios (nombre,user, clave, tipo) VALUES ('$nombre','$user',MD5('$clave'),'$tipo')";
	$conexion->query($sql_insert);

	header('location:index.php');


}else{
	header('location:registro.php');
}


 ?>