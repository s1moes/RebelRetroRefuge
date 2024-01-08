<?php

    session_start();

    $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
    if (empty($username)) {

       header("Location: index.php");
       exit;
    }
    include("model/acessoDB.php");
    include('includes/header.php');
    include('view/profileView.php');
    include('includes/footer.php');
?>