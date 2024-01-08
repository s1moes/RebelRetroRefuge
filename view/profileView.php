<div class="profile"> 
    <?php
    $user = isset($_SESSION['username']) ? $_SESSION['username'] : '';
    $reservas = getReservations($user);
    $arcades = getArcades();

    echo <<<MUDARPASS
        <form action="" method="post" class="form-profile">
        <input type="text" name="novaPass">
        <input type="submit" name="mudarPass" value="Mudar">
        </form>
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

        $arcade = getArcade($nomeArcade);
        $nomeArcade = isset($arcade[0]['nome']) ? $arcade[0]['nome'] : 'Nome não encontrado';
        $imagemArcade = isset($arcade[0]['imagem']) ? $arcade[0]['imagem'] : 'Imagem não encontrada';

        echo <<<LISTA
        <form action="cancelarReserva.php" method="post" class="form-profile">
            <ul class="ul-profile">
                <li class="li-profile"><img src="$imagemArcade" alt="Imagem do Jogo" class="img-profile"></li>
                <li class="li-profile">Reserva: $id_reserva</li>
                <li class="li-profile">Hora: $hora_reserva</li>
                <li class="li-profile">Arcade: $nomeArcade</li>
                <input type="hidden" name="id_reserva" value="$id_reserva">
                <input type="submit" name="btnCancelar" value="Cancelar" class="btnCancelar">
            </ul>
        </form>
        LISTA;
    }
    ?>
</div>