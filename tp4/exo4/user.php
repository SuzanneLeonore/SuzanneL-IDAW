
<?php
    require_once('config.php');
    require_once('init_pdo.php');
    require_once('fonction.php');

    $sql = 'select id, name, email from User';
    $request = $pdo->prepare($sql);
    $a = $pdo->query($sql);
    $data = $a->fetch(PDO::FETCH_OBJ);

echo '<h1>Users</h1>
<table style="marging=15px;">
<hr>
    <thead>
        <tr style="padding=15px;">
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Modification<br>Supression</th>
        </tr>
    </thead>
    <tbody>';
    
while(!empty($data)) {
    echo '<tr>
        <td>'.$data->id.'</td>
        <td>'.$data->name.'</td> 
        <td>'.$data->email.'</td>
        <td>
        <button onclick="location.href=\'modifier.php?id='. $data->id.'\'" >Modifier</button>
        <button onclick="location.href=\'suprimer.php?id='. $data->id.'\'">Suprimer</button>
        </td>
        <tr>';
$data = $a->fetch(PDO::FETCH_OBJ);
}
echo'</tbody>
</table>
<hr>
<form id="ajout_form" action="create.php" method="POST">
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
            <td><input type="submit" value="Ajouter" /></td>
        </tr>
    </table>
</form>'


// TODO: add your code here
// retrieve data from database using fetch(PDO::FETCH_OBJ) and
// display them in HTML array
/*** close the database connection ***/

/*$conn = mysqli_connect(_MYSQL_DBNAME, _MYSQL_USER, _MYSQL_PASSWORD);       
//On vérifie la connexion
if(!$conn){
    die('Erreur : ' .mysqli_connect_error());
}
echo 'Connexion réussie';*/
?>
