<?php

require_once('init_pdo.php');

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    // Mise à jour des informations de l'utilisateur
    $sql = "UPDATE User SET name = ?, email = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    //$stmt->bindParam("ssi", $name, $email, $id);

    if ($stmt->execute([$name, $email, $id])) {
        echo "User mis à jour avec succès !";
    } else {
        echo "Erreur lors de la mise à jour : " . $pdo->error;
    }
}
require_once('user.php');