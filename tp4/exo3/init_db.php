<?php

require_once('init_pdo.php');

$sql =file_get_contents('sql/create_db.sql');

$pdo->exec($sql);


