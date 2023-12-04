<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Registro - Rebel Retro Refuge</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <form action="register_process.php" method="post">
        <h2>Registro</h2>
        <?php
            if (isset($_GET['error']) && $_GET['error'] == 'true') {
                echo '<p style="color: red;">Erro ao registrar. Tente novamente.</p>';
            }
        ?>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm_password">Confirme a password</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <button type="submit">Registrar</button>

        <p>Já tem conta? <a href="login.php">Clique aqui!</a></p>
    </form>
</body>
</html>
