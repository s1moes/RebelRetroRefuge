<div class="bg-image min-vh-100">
        <div class="container text-center">
                <div class="row">
                        <div class="col">
                        </div>
                        
                        <div class="col p-3 m-3 bg-dark text-white rounded" >
                        <form action="register_process.php" method="post">
                            <h2>Registo</h2>
                            <?php
                            if (isset($_GET['error']) && $_GET['error'] == 'true') {
                                echo '<p style="color: red;">Erro ao registrar. Tente novamente.</p>';
                            }
                            ?>
                            <label class="mt-3" for="username">Username</label>
                            <input class="form-control" type="text" id="username" name="username" required>

                            <label class="mt-3" for="password">Password</label>
                            <input class="form-control" type="password" id="password" name="password" required>

                            <label class="mt-3" for="confirm_password">Confirme a password</label>
                            <input class="form-control" type="password" id="confirm_password" name="confirm_password" required>

                            <button class="btn btn-outline-light m-3" type="submit">Registar</button>

                            <p>Já tem conta? <a href="login.php">Clique aqui!</a></p>
                        </form>
                        </div>
                        <div class="col">
                        </div>
                </div>
        </div>
</div>