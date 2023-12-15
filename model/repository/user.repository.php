<?php
require("model/acessoDB.php");

function addUser( $username, $password ) {
    $conn = connectDB();
    $stmt = $conn->prepare("INSERT INTO utilizador (username, pass) VALUES (:username, :pass)");
    $stmt->execute( [ 'username' => $username, 'pass' => $password ] );
}


function deleteUser($userId){
    $conn = connectDB();
    $stmt = $conn->prepare("DELETE FROM utilizador WHERE (:id_utilizador)");
    $stmt->execute( [ 'id_utilizador' => $userId ] );
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

function getUsers() {
    $conn = connectDB();
    $stmt = $conn->query("SELECT * FROM utilizador");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $users;
}
?>