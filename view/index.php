<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <title>Rebel Retro Refuge</title>
</head>
<body>
    <header>
        <h1>Rebel Retro Refuge</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php" class="corrente">Inicio</a></li>
            <li><a href="jogos.php">Jogos</a></li>
            <li><a href="consolas.php">Consolas</a></li>
            <li><a href="contactos.php">Contactos</a></li>
        </ul>

        <?php 
            if (isset($_SESSION['username'])) {
                echo '<div class="user-info">Bem-vindo, ' . $_SESSION['username'] . '!<br><a href="logout.php">Logout</a></div>';
            } else {
                echo '<div class="user-info"><a href="login.php">Login</a> | <a href="register.php">Register</a></div>';
            }

        ?>
    </nav>

   <!--  <section id="content">
        Content will be dynamically loaded here based on user actions
        <h2>Bem vindo ao Rebel Retro Refuge</h2>
        <p>Descobre uma escapatório rebeliosa para o mundo dos jogos retro!</p>
    </section> -->

    <footer>
        <p>&copy; 2023 Rebel Retro Refuge</p>
    </footer>

    <script src="controller.js"></script>
</body>
</html>
