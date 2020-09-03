<?php 

include 'conecta.php';

$cons = $pdo->prepare('Insert into ACTIVIDADES(nombre,descripcion,fecha) values (:nomb,:desc,:fecha'); 

$cons->bindParam(':nomb',$_POST['nomb']);
$cons->bindParam(':desc',$_POST['desc']);
$cons->bindParam(':fecha',$_POST['fecha']);

$cons -> execute();

header('Location: index.php');

?>