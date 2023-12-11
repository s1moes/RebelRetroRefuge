<?php
    session_start();

    $usersFile = 'users.json';

    $users = file_exists($usersFile) ? json_decode(file_get_contents($usersFile), true) : [];

    $input_username = $_POST['username'];
    $input_password = $_POST['password'];
    $input_confirm_password = $_POST['confirm_password'];

    if ($input_password == $input_confirm_password) {
        if (isset($users[$input_username])) {
            header('Location: register.php?error=true');
        } else {
            $users[$input_username] = [
                'username' => $input_username,
                'password' => password_hash($input_password, PASSWORD_DEFAULT)
            ];

            file_put_contents($usersFile, json_encode($users));

            header('Location: login.php');
        }
    } else {
        header('Location: register.php?error=true');
    }
?>