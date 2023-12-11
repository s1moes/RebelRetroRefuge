<?php
    session_start();

    $usersFile = 'users.json';

    if (!file_exists($usersFile)) {
        header('Location: login.php?error=true');
        exit();
    }

    $users = json_decode(file_get_contents($usersFile), true);

    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    if (isset($users[$input_username]) && password_verify($input_password, $users[$input_username]['password'])) {
        $_SESSION['username'] = $input_username;
        header('Location: index.php');
    } else {
        header('Location: login.php?error=true');
    }
?>
