<div class="profile"> 
    <?php   
    $idUtilizador = null;
    $reservas = getReservations($idUtilizador);
    foreach ($reservas as $reserva) {
        $id_reserva = $reserva['id_reserva'];
        $username = $reserva['username'];
        $id_arcade = $reserva['id_reserva'];
        $hora_reserva = $reserva['hora_reserva'];

        $arcade = getArcade($id_arcade);
        echo <<<LISTA
        <ul>
            <li>"Reserva: " $id_reserva</li>
            <li>"Hora: " $hora_reserva</li>
            <li>"Arcade: " $arcade</li>
            <button onclick=cancelarReserva($idUtilizador, $id_reserva)>Cancelar</button> 
        </ul>
        LISTA;
    }

    function cancelReserva($idUtilizador, $id_reserva){
        cancelReservation($idUtilizador, $id_reserva);
    }

    ?>
</div>