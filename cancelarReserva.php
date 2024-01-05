<?php
    session_start();

    include('model/acessoDB.php');

    if (isset($_POST['id_reserva'])) {
        $idReserva = $_POST['id_reserva'];

        if (isset($_POST['btnCancelar'])) {
            cancelReservation($idReserva);
        }
    }

    header('Location: profile.php');
    exit;
?>