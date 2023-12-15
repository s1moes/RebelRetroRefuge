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

function addUser( $username, $password ) {
    $conn = connectDB();
    $stmt = $conn->prepare("INSERT INTO utilizador (username, pass) VALUES (:username, :pass)");
    $stmt->execute( [ 'username' => $username, 'pass' => $password ] );
}

function userExistes($username, $password){
    $conn = connectDB();
    $stmt = $conn->prepare("SELECT username, pass FROM utilizador WHERE username=:username");
    $stmt->execute(['username' => $username]);
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user && password_verify($password, $user['pass'])) {
        return $user;
    }

    return false;
    
}
?>