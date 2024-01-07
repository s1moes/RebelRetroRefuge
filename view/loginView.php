<div class="bg-image min-vh-100">
        <div class="container text-center">
                <div class="row">
                        <div class="col">
                        </div>
                        
                        <div class="col p-3 m-3 bg-dark text-white rounded" >
                        <form action="login_process.php" method="post">
                            <h2>Login</h2>
                            <?php
                                if (isset($_GET['error']) && $_GET['error'] == 'true') {
                                    echo '<p style="color: red;">Credenciais inválidas. Tente novamente.</p>';
                                }
                            ?>
                            <label class="mt-3" for="username">Username</label>
                            <input class="form-control" type="text" id="username" name="username" required>

                            <label class="mt-3" for="password">Password</label>
                            <input class="form-control" type="password" id="password" name="password" required>

                            <button class="btn btn-outline-light m-3" type="submit">Login</button>

                            <p>Ainda não tem conta? <a href="register.php">Clique aqui!</a></p>
                            
                        </form>
                        </div>
                        <div class="col">
                        </div>
                </div>
        </div>
</div>