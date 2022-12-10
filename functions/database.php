<?php

function get_db(){
    $dsn = 'mysql:dbname=projet_web;host=localhost';
    $username = 'root';
    $password = '';
    $pdo = new PDO($dsn, $username, $password);

    return $pdo;
}

?>
