<?php
    if (isset($_SESSION['error_message'])) {
        echo '<p class="error">' . $_SESSION['error_message'] . '</p>';
        unset($_SESSION['error_message']);
    }
    session_start();

    include('model/acessoDB.php');
    include('includes/header.php');
    include('view/arcadeView.php');
    include('includes/footer.php');
?>

