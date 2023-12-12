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

function addUser( $username, $pass ) {
    $conn = connectDB();
    $stmt = $conn->prepare("INSERT INTO utilizador ('username', 'pass') VALUES (:username, :pass)");
    $stmt->execute( [ 'username' => $username, 'pass' => $pass ] );
}

function userExistes( $username, $pass ) {
    $conn = connectDB();
    $stmt = $conn->prepare("SELECT username FROM utilizador WHERE username=:username and pass=:pass");
    $stmt->execute( [ 'username' => $username, 'pass' => $pass ] );


}


?>