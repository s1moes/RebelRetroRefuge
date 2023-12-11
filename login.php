<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Login - Rebel Retro Refuge</title>
    <link rel="stylesheet" href="view/login.css">
</head>
<body>
    <form action="login_process.php" method="post">
        <h2>Login</h2>
        <?php
            if (isset($_GET['error']) && $_GET['error'] == 'true') {
                echo '<p style="color: red;">Credenciais inválidas. Tente novamente.</p>';
            }
        ?>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>

        <p>Ainda não tem conta? <a href="register.php">Clique aqui!</a></p>
    </form>
</body>
</html>
