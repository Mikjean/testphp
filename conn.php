<?php
    $host = 'localhost';
    $db = 'news';
    $user = 'root';
    $password = '';

    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
     
try {
    $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
    return new PDO($dsn, $user, $password, $options);
    
} catch (PDOException $pe) {

    die("Could not connect to the database $dbname :" . $pe->getMessage());
}