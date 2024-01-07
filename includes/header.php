<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="/RebelRetroRefuge/view/css/estilos.css" type="text/css" rel="stylesheet">
    <title>Rebel Retro Refuge</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <?php $paginaAtual = basename($_SERVER['PHP_SELF']);?>
            <a class="navbar-brand" href="index.php">RebelRetroRefuge</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <?php $paginaAtual == 'index.php' ? $paginaAtiva = 'class="nav-link active" aria-current="page"' : $paginaAtiva ='class="nav-link"' ?> <a <?php echo $paginaAtiva ?> href="index.php">Inicio</a>
                <?php $paginaAtual == 'arcades.php' ? $paginaAtiva = 'class="nav-link active" aria-current="page"' : $paginaAtiva ='class="nav-link"' ?> <a <?php echo $paginaAtiva ?> href="arcades.php">Arcades</a>
                <?php $paginaAtual == 'sobre.php' ? $paginaAtiva = 'class="nav-link active" aria-current="page"' : $paginaAtiva ='class="nav-link"' ?> <a <?php echo $paginaAtiva ?> href="sobre.php" >Sobre</a>
                </div>  
            </div>
            <div class="navbar-nav">
                <?php 
                    if (isset($_SESSION['username'])) {
                        echo '<a class="nav-link" href="profile.php.php">Bem-vindo, ' . $_SESSION['username'] .'</a>';
                        echo '<a class="nav-link" href="logout.php">Logout</a>';
                    } else {
                        echo '<a class="nav-link" href="login.php">Login</a>'; 
                        echo '<a class="nav-link" href="register.php">Registar</a>';
                    }
                ?>
            </div>  
        </div>
    </nav>