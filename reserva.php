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
        }
    }
}

header('Location:arcades.php');
exit;
?>