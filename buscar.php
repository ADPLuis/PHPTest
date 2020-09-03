<?php 

include 'conecta.php';

$dni = $_POST['dni'];

$stmt = $pdo->query('SELECT * FROM ACTIVIDADES where /*dni de tabla potenciales = $dni y luego hace falta relacionarlo con actividades creo que mediante entityrel, preguntar a que hace referencia cada campo de esa tabla para poder hacer esta relacion*/'); 
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