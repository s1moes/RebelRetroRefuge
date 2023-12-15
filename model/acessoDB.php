<?php
function connectDB() {

    $hostname = 'localhost';
    $dbname = 'rebel';
    $username = 's1moes';
    $password = 's1moes';

    try {
        $conn = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8mb4",
             $username, $password);

    } catch (\PDOException $e) {
        echo $e->getMessage();
    }

    return $conn;
}
?>