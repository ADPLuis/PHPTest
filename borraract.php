<?php 

include 'conecta.php';

$cons = $pdo->prepare('Delete FROM ACTIVIDADES where id=:idact');
$cons->bindParam(':idact',$_POST['idact']);
$cons -> execute();

echo "<button align='center' onclick='location.href='index.php''"">Página Principal</button>";
//header('Location: index.php');

?>

 ?>