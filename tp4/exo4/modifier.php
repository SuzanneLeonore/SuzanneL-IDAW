<?php
require_once('init_pdo.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

/*$sql = "SELECT * FROM User WHERE id = $id";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$utilisateur = $result->fetch_assoc();*/


echo 'Veuillez rensigner ici les nouvelles informations.
<br>
<form id="mofication" action="mettreajour.php" method="POST">
    <input type="hidden" name="id" value="'.$id.'">
    <table>
        <tr>
            <th>Name :</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>Email :</th>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="Modifier" /></td>
        </tr>
    </table>
</form>;'
?>