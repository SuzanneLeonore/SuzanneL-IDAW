<?php

require_once('init_pdo.php');

function modifierDonnees($id) {
    echo'a fonctionné';
    return 'location.href=\'modifier.php?id=+'.$id.'';
}
function supprimerDonnees($id){
    return 'location.href=\'suprimer.php?id=+'.$id.'';
}
