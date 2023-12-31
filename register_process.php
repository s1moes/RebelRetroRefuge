<?php

require('model/acessoDB.php');
if (isset($_SESSION) && !empty($_SESSION)) {
    session_destroy();
}
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (userExistes($username, $password)) {
        header('Location: register.php?error=user_exists');
        exit();
    }

    addUser($username, password_hash($password, PASSWORD_DEFAULT));

    $_SESSION['username'] = $username;

    header('Location: index.php');
    exit();
} else {
    header('Location: register.php?error=missing_fields');
    exit();
}
?>
