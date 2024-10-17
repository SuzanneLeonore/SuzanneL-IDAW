<?php

require_once('init_pdo.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$stmt = $pdo->prepare("DELETE FROM User WHERE id = :id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

if ($stmt->rowCount()) {
    echo "L'utilisateur a été supprimé.";
    $stmt_update = $pdo->prepare("UPDATE User SET id = id - 1 WHERE id > :id");
    $stmt_update->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt_update->execute();
} else {
    echo "Aucun utilisateur trouvé avec cet ID.";
}

require_once('user.php');
