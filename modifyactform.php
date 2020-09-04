<?php 

include 'conecta.php';

$cons = $pdo->prepare('select * from ACTIVIDADES where id=:id'); 
$cons -> bindParam(':id',$_POST['idact']);
$cons ->execute();
$val = $cons -> fetch();
/* Esta consulta devuelve el registro que se ha seleccionado previamente para modificar */

?>

<html>
<head>
	<title></title>
</head>
<body align="center">
	<h3>Modificar</h3>
	<form action ="modificaract.php" method="POST">
		<?php

		/*crea una serie de inputs en el formulario cuyos valores pre-cargados serán los valores que tiene el registro en la base de datos. */

		echo "<p>Nuevo nombre: <input type='text' name='nuevonom' value='".$val['nombre']."'></p>";
		echo "<p>Nueva descripcion: <select name='nuevadesc' value='".$val['descripcion']."'>";
		
		echo "<p>Nueva fecha: <input type='date' name='nuevafecha' value='".$val['fecha']."'></p>";

		echo "<p>Nuevo Potencial(DNI): <input type='text' name='nuevopot' value='".$val['dniPot']."'></p>";

		echo "<input type='hidden' name='id' value='".$val['id']."'>";
		?>

		<input type="submit" value="Modificar">
	</form>
	<p align="center">
		<button align="center" onclick="location.href='index.php'">Página Principal</button>
	</p>
</body>
</html>