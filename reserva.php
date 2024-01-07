<?php
session_start();

include("model/acessoDB.php");

$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

if (!empty($username)) {

    if (isset($_POST['datetime'])) {
        $idArcade = $_POST['id_arcade'];
        $datareserva = $_POST['datetime'];

        /* if (isset($_POST['btnReservar'])) {
            createReservation($idArcade, $username, $dataReserva);
        } */
    }
}

function verificarDisponibilidade(){
    
}
header('Location:arcades.php');
exit;
?>