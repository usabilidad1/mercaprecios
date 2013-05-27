<?php

	include ("conexion.php");
	$conexion = mysql_connect("$servidor","$usuario","$password");
	mysql_select_db("$database",$conexion);
	$sql="INSERT INTO productos(nombre,descripcion,precio) 
	VALUES('$_POST[nombre]','$_POST[descripcion]','$_POST[precio]')";
	mysql_query($sql,$conexion) or die('Error. '.mysql_error());
	include('producto.php');
	//mysql_close($conexion);
	
	
	
?>


