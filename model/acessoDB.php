<?php

function connectDB() {

    $hostname = 'localhost';
    $dbname = 'id21660241_rebel';
    $username = 'id21660241_rebel';
    $password = 'K#v!&r5pLm9qXsT';

    try {
        $conn = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8mb4",
             $username, $password);

    } catch (\PDOException $e) {
        echo $e->getMessage();
    }

    return $conn;
}
?>