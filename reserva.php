<?php
session_start();

include("model/acessoDB.php");

$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

if (!empty($username)) {

    if (isset($_POST['date'])) {
        $idArcade = $_POST['id_arcade'];
        $data = $_POST['date'];
        $hora = $_POST['hour'];

        createReservation($idArcade, $username, $data, $hora);

        /* if (isset($_POST['btnReservar'])) {
            createReservation($idArcade, $username, $dataReserva);
        } */
    }
}

header('Location:arcades.php');
exit;
?>