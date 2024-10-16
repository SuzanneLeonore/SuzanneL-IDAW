
<?php
    require_once('config.php');
?>
<?php
$connectionString = "mysql:host=". _MYSQL_HOST;

if(defined('_MYSQL_PORT'))
$connectionString .= ";port=". _MYSQL_PORT;
$connectionString .= ";dbname=" . _MYSQL_DBNAME;
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );
$pdo = NULL;
try {
$pdo = new PDO($connectionString,_MYSQL_USER,_MYSQL_PASSWORD,$options);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $erreur) {
echo 'Erreur : '.$erreur->getMessage();
}
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
        </tr>
    </thead>
    <tbody>';
while(!empty($data)) {
echo '<tr>
    <td>'.$data->id.'</td>
    <td>'.$data->name.'</td> 
    <td>'.$data->email.'</td>
    <tr>';
$data = $a->fetch(PDO::FETCH_OBJ);
}
echo'</tbody>
</table>
<hr>'

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
