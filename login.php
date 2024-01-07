<?php
    session_start();
    if (isset($_SESSION['username'])){
        header('Location: index.php');
        exit;
    }
    include('includes/header.php');
    include('view/loginView.php');
    include('includes/footer.php');
?>