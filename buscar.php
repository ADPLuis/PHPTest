<?php 

include 'conecta.php';

$dni = $_POST['dni'];

$stmt = $pdo->query('SELECT ACTIVIDADES.id,ACTIVIDADES.nombre,ACTIVIDADES.descripcion,ACTIVIDADES.fecha,ACTIVIDADES.dniPot 
 FROM ACTIVIDADES 
 INNER JOIN POTENCIALES  on POTENCIALES.DNI = ACTIVIDADES.dniPot
 INNER JOIN ENTITY  on ENTITY.id = ACTIVIDADES.id 
 where ENTITY.borrado = 0 AND ACTIVIDADES.dniPot ='.$dni.'');

/*
	Esta consulta selecciona los datos de la tabla actividades que no hayan sido borrados y cuyo dniPot sea el indicado en el formulario del index.php

	Pendiente: Da un error de intentar hacerle un fetch a un booleano, sin embargo, he intentado la siguiente consulta directamente en un sql de la base de datos y devuelve los valores adecuados: 
	SELECT ACTIVIDADES.id,ACTIVIDADES.nombre,ACTIVIDADES.descripcion,ACTIVIDADES.fecha,ACTIVIDADES.dniPot FROM ACTIVIDADES INNER JOIN POTENCIALES on POTENCIALES.DNI = ACTIVIDADES.dniPot INNER JOIN ENTITY on ENTITY.id = ACTIVIDADES.id where ENTITY.borrado = 0 AND ACTIVIDADES.dniPot ='62626262E';
	

*/


?>

<html>
	<body align="center">
		<table border="2" align="center">
			<tr>
				<td>ID Actividad</td>
				<td>Nombre</td>
				<td>Descripcion</td>
				<td>Fecha</td>
				<td>Modificar</td>
				<td>Borrar</td>
			</tr>
			<?php
				while ($row = $stmt -> fetch() ) {
					echo "<tr>";
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['nombre']."</td>";
					echo "<td>".$row['descripcion']."</td>";
					echo "<td>".$row['fecha']."</td>";

					echo "<td><form action='modifyactform.php' method='POST'><input type='hidden' name='idact' 
					value='".$row['id']."'><input type='submit' value='Modificar'></form></td>";

					echo "<td><form action='borraract.php' method='POST'><input type='hidden' name='idact' 
					value='".$row['id']."'><input type='submit' value='Eliminar'></form></td>";

					echo "</tr>";

				}
			?>
		</table>
	</body>
</html>
 ?>