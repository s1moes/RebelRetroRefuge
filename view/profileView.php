<div class="bg-image min-vh-100">
    <div class="container text-center">
        <?php
        $user = isset($_SESSION['username']) ? $_SESSION['username'] : '';
        $reservas = getReservations($user);
        $arcades = getArcades();

        echo <<<MUDARPASS
        <div class="row">
            <div class="col bg-dark text-white">
                <form action="" method="post" class="form-profile">
                <label for="novaPass">Alterar Senha:</label>
                <input type="text" name="novaPass" required>
                <input type="submit" name="mudarPass" value="Mudar Senha" class="btn btn-outline-light m-3">
                </form>
            </div>
        </div>        
        MUDARPASS;

        if (isset($_POST['novaPass'])) {
            $novaPass = $_POST['novaPass'];

            if (!empty($novaPass)) {
                $mudancaPassSucesso = mudarPass($user, $novaPass);
                    
                if ($mudancaPassSucesso) {
                    echo "Password alterada com sucesso!";
                } else {
                    echo "Erro ao alterar a password. Tente novamente.";
                }
            } else {
                    echo "Por favor, insira uma nova password.";
            }
        }

        foreach ($reservas as $reserva) {
            $id_reserva = $reserva['id_reserva'];
            $username = $reserva['username'];
            $nomeArcade = $reserva['id_arcade'];
            $hora_reserva = $reserva['hora_reserva'];
            $data_reserva = $reserva['data_reserva'];

            $arcade = getArcade($nomeArcade);
            $nomeArcade = isset($arcade[0]['nome']) ? $arcade[0]['nome'] : 'Nome não encontrado';
            $imagemArcade = isset($arcade[0]['imagem']) ? $arcade[0]['imagem'] : 'Imagem não encontrada';

            echo <<<LISTA
                <div class="row align-items-center">
                    <div class="col">
                    </div>
                        <div class="col-6 p-3 m-3 bg-dark text-white rounded" >
                            <h3 class="text-white">$nomeArcade</h1>
                            <img src="$imagemArcade" alt="Imagem do Jogo" width="100%" class="img-profile">
                        </div>
                        <div class="col p-3 m-3 bg-dark text-white rounded" >
                            <form action="cancelarReserva.php" method="post" class="form-profile">
                                <p> Reserva: $id_reserva </p>
                                <p> Data: $data_reserva </p>
                                <p> Hora: $hora_reserva </p>
                                <p> Arcade: $nomeArcade </p>
                                <input type="hidden" name="id_reserva" value="$id_reserva">
                                <input type="submit" name="btnCancelar" value="Cancelar" class="btn btn-outline-light m-3">
                            </ul>
                            </form>
                        </div>
                </div>
            LISTA;
        }
        ?>
    </div>
</div>
