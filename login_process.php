<?php

require('model/acessoDB.php');

session_destroy();
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userInfo = userExistes($username, $password);

    if ($userInfo) {
        if (password_verify($password, $userInfo['pass'])) {
            $_SESSION['username'] = $username;
            header('Location: index.php');
            exit();
        } else {
            header('Location: login.php?error=true');
            exit();
        }
    } else {
        header('Location: login.php?error=true');
        exit();
    }
}
?>
