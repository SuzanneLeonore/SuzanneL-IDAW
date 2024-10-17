<?php
require_once('insertion.php');

$sql = 'SELECT name, email FROM User WHERE name = :name AND email = :email';
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':name', $_POST['name']);
$stmt->bindParam(':email', $_POST['email']);

$stmt->execute();

$result = $stmt->rowCount(); 
// pour récupérer données : $semblable = $stmt->fetchAll(PDO::FETCH_OBJ); 
if($result >0){
    echo'Cette combinaison existe déjà
    <br> Veuillez changer de nom ou d\'email';
}
else{
    insertion($_POST['name'],$_POST['email'],$pdo);
    header('location:user.php');
}

require_once('user.php');
