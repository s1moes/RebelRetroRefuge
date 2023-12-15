<?php
require ("acessoDB.php");

function addUser( $username, $pass ) {
    $conn = connectDB();
    $stmt = $conn->prepare("INSERT INTO utilizador ('username', 'pass') VALUES (:username, :pass)");
    $stmt->execute( [ 'username' => $username, 'pass' => $pass ] );
}


function deleteUser($userId){
    $conn = connectDB();
    $stmt = $conn->prepare("DELETE FROM utilizador WHERE (:id_utilizador)");
    $stmt->execute( [ 'id_utilizador' => $userId ] );
}

function userExistes( $username, $pass ) {
    $conn = connectDB();
    $stmt = $conn->prepare("SELECT username FROM utilizador WHERE username=:username and pass=:pass");
    $stmt->execute( [ 'username' => $username, 'pass' => $pass ] );


}
?>