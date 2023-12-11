<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <title>Rebel Retro Refuge</title>
</head>
<body>
    <header>
        <h1>Rebel Retro Refuge</h1>
    </header>

    <nav>
        <?php
            $scriptName = basename($_SERVER['PHP_SELF']);
        ?>
        <ul>
            <li><a href="index.php"
                <?php echo $scriptName == 'index.php' ? "class='corrente'" : '' ?>
            >Inicio</a></li>
            <li><a href="arcades.php"
                <?php echo $scriptName == 'index.php' ? "class='corrente'" : '' ?>
            >Arcades</a></li>
            <li><a href="contactos.php"
                <?php echo $scriptName == 'index.php' ? "class='corrente'" : '' ?>
            >Contactos</a></li>
        </ul>

        <?php 
            if (isset($_SESSION['username'])) {
                echo '<div class="user-info">Bem-vindo, ' . $_SESSION['username'] . '!<br><a href="logout.php">Logout</a></div>';
            } else {
                echo '<div class="user-info"><a href="login.php">Login</a> | <a href="register.php">Register</a></div>';
            }

        ?>
    </nav>