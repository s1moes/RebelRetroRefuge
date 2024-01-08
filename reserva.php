<?php
session_start();

include("model/acessoDB.php");

$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

if (!empty($username)) {
    if (isset($_POST['date'])) {
        $idArcade = $_POST['idArcade'];
        $data = $_POST['date'];
        $hora = $_POST['time'];

        createReservation($idArcade, $username, $data, $hora);
    }
}

header('Location: arcades.php');
exit;
?>