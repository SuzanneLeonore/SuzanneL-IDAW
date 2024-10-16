<?php/*
    require_once('config.php');
    require_once('init_pdo.php');
function lectureTable($par){
    $sql='select '.$par.' from User';
    $stmt = $pdo->prepare($sql);
    $stmt->bind_param('s', $_POST[$par]); 
    $stmt->execute();
    $result = $stmt->get_result();
    echo $result->num_rows;
    $stmt->close();
    $pdo->close();
}*/
?>