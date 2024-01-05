<div class="profile"> 
    <?php
    $user = isset($_SESSION['username']) ? $_SESSION['username'] : '';
    $reservas = getReservations($user);
    $arcades = getArcades();

    foreach ($reservas as $reserva) {
        $id_reserva = $reserva['id_reserva'];
        $username = $reserva['username'];
        $nomeArcade = $reserva['id_arcade'];
        $hora_reserva = $reserva['hora_reserva'];

        $arcade = getArcade($nomeArcade);
        $nomeArcade = isset($arcade[0]['nome']) ? $arcade[0]['nome'] : 'Nome não encontrado';
        $imagemArcade = isset($arcade[0]['imagem']) ? $arcade[0]['imagem'] : 'Imagem não encontrada';

        echo <<<LISTA
        <form action="cancelarReserva.php" method="post">
            <ul>
                <li><img src="$imagemArcade" alt="Imagem do Jogo"></li>
                <li>Reserva: $id_reserva</li>
                <li>Hora: $hora_reserva</li>
                <li>Arcade: $nomeArcade</li>
                <input type="hidden" name="id_reserva" value="$id_reserva">
                <input type="submit" name="btnCancelar" value="Cancelar" class="btnCancelar">
            </ul>
        </form>
        LISTA;
    }
    ?>
</div>