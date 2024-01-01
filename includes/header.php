<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Rebel Retro Refuge</title>
</head>
<body>
    <div class="main">
            <?php $scriptName = basename($_SERVER['PHP_SELF']); ?>
            <a href="/RebelRetroRefuge/index.php"><img src="icon.png" alt="Logotipo" class="logotipo"></a>
            <ul class="primary-nav">
                <li class="nav-tab"><a href="index.php" <?php echo $scriptName == 'index.php' ? "class='corrente'" : '' ?>>Inicio</a></li>
                <li class="nav-tab"><a href="arcades.php" <?php echo $scriptName == 'arcades.php' ? "class='corrente'" : '' ?>>Arcades</a></li>
                <li class="nav-tab"><a href="sobre.php" <?php echo $scriptName == 'sobre.php' ? "class='corrente'" : '' ?>>Sobre</a></li>
            </ul>
        <div class="second-nav">
                <?php 
                    if (isset($_SESSION['username'])) {
                        echo '<div class="user-info">Bem-vindo, ' . $_SESSION['username'] . '!<br><br><a href="logout.php">Logout</a></div>';
                    } else {
                        echo '<div class="user-info"><a href="login.php">Login</a> <a href="register.php">Register</a></div>';
                    }
                ?>
        </div>
    </div>