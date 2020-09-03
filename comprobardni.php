<?php

$dni = $_POST['dni'];


$letra = substr($dni, -1);
$numeros = substr($dni, 0, -1);

	if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
		echo '<h1>El DNI es valido<h1>';

		echo '<form action="buscar.php" method="POST">
			<input type="hidden" name="dni" value=$dni>
			<input type="submit" value="Continuar">
			</form>';
	}
	else{
		echo '<h1>El DNI no es valido<h1>';
		echo "<button align='center' onclick=""location.href='index.php'"">Página Principal</button>";

	}

?>