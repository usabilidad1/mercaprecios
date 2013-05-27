<?php
	include ("conexion.php");
	$conexion = mysql_connect("$servidor","$usuario","$password");
	if (!$conexion) {
		die('NO CONECTO A LA BASE DE DATOS'.mysql_error());
	}

	mysql_select_db("$database",$conexion);
	$consulta = mysql_query("SELECT * from productos", $conexion);
?>
<table style="color:#000099;width:400px;">
	<tr style="background:#9BB;">
		<td>NOMBRE</td>
		<td>DESCRIPCION</td>
		<td>PRECIO</td>
	</tr>

<?php

	while ($row = mysql_fetch_array($consulta)){
	echo "<tr>";
  		echo "<td>".$row['NOMBRE']."</td>";
  		echo "<td>".$row['DESCRIPCION']."</td>";
  		echo "<td>".$row['PRECIO']."</td>";
  		echo "</tr>";
	}
	//mysql_close($conexion);
?>
</table>