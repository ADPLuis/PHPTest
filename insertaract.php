<?php 

include 'conecta.php';


$idcons = $pdo->prepare('select id from ENTITY order by ENTITY.id desc limit 1');
$idcons -> execute();
$lastid = $idcons -> fetch();

if(is_null($lastid)) { //en caso de que sea el primer insert, $lastid deberia de ser nulo ya que el select no deberia haber encontrado resultados en la base de datos
	$PrimerInsert = $pdo->prepare('insert into ENTITY(modulo,borrado,fecha_creacion) values (actividades, 0, '.date().'');
	//campo Borrado (0 = false y 1 = true)
	$PrimerInsert -> execute();

	$cons = $pdo->prepare('Insert into ACTIVIDADES(id,nombre,descripcion,fecha) values (1,:nomb,:desc,:fecha,:dniPot'); 

	
	$cons->bindParam(':nomb',$_POST['act_nombre']);
	$cons->bindParam(':desc',$_POST['act_desc']);
	$cons->bindParam(':fecha',$_POST['act_fecha']);
	$cons->bindParam(':dniPot',$_POST['act_dnipot']);

} else { //si $lastid no es nulo significa que hay valores en la base de datos por lo cual tenemos que hacer la correspondencia del id en actividades con el id de la tabla entity

	$cons = $pdo->prepare('Insert into ACTIVIDADES(id,nombre,descripcion,fecha,dniPot) values (:id,:nomb,:desc,:fecha,:dniPot'); 

	$cons->bindParam(':id',$lastid['id']);
	$cons->bindParam(':nomb',$_POST['act_nombre']);
	$cons->bindParam(':desc',$_POST['act_desc']);
	$cons->bindParam(':fecha',$_POST['act_fecha']);
	$cons->bindParam(':dniPot',$_POST['act_dnipot']);

}

//Pendiente: Controlar el error que saltaría si el dni que se introduce no figura en la tabla de Potenciales

$cons -> execute();

//IMPORTANTE: Falla el insert en la Base de datos pero no da ningún tipo de error de ejecución 


//echo "<button align='center' onclick='location.href='index.php''"">Página Principal</button>";
// header('Location: index.php');

?>