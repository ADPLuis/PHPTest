<?php 

include 'conecta.php';

$cons = $pdo->prepare('Update ACTIVIDADES set nombre=:nuevonombre, descripcion=:nuevadesc,fecha=:nuevafecha where id=:id'); 

$cons->bindParam(':id',$_POST['id']);
$cons->bindParam(':nuevonom',$_POST['nuevonom']);
$cons->bindParam(':nuevadesc',$_POST['nuevadesc']);
$cons->bindParam(':nuevafecha',$_POST['nuevafecha']);


$cons -> execute();


header('Location: index.php');







?>