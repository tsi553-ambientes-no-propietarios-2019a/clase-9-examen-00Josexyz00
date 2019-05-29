<?php 

	$conexion= new mysqli("localhost","root","","examen");

	$sql_insert = "select nombre,user, MD5('clave'), tipo from usuarios";
	echo $sql_insert;

	$conexion->query($sql_insert);


 ?>