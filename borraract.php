<?php 

include 'conecta.php';

$cons = $pdo->prepare('Delete FROM ACTIVIDADES where id=:idact');
$cons->bindParam(':idact',$_POST['idact']);
$cons -> execute();

header('Location: index.php');

?>

 ?>