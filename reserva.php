<?php
session_start();

include("model/acessoDB.php");

$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

if (!empty($username)) {

    if (isset($_POST['id_arcade'])) {
        $idArcade = $_POST['id_arcade'];
        $horaReserva = $_POST['hora_reserva'];

        if (isset($_POST['btnReservar'])) {
            createReservation($idArcade, $username, $horaReserva);
        } else {
            // Se você desejar cancelar uma reserva, precisará fornecer o id_reserva correspondente
            // Isso depende de como você está gerenciando as reservas
            // cancelReservation($username, $idReserva);
        }
    }
}

header('Location:arcades.php');
exit;
?>