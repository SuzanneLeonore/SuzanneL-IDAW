<?php
require_once('init_pdo.php');

function insertion($val1, $val2, $db): void {
    $stmt = $db->prepare("INSERT INTO User (name, email) VALUES (:name, :email)");

    $stmt->bindParam(':name', $val1);
    $stmt->bindParam(':email', $val2);

    $stmt->execute();
}
