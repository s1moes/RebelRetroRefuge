<?php

    include('model/acessoDB.php');

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!userExistes($username, $password)) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header('Location: login.php?error=true');
        exit();
    }
?>