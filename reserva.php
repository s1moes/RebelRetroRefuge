<?php
session_start();

include("model/acessoDB.php");

$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

if (!empty($username)) {
    if (isset($_POST['date'])) {
        $idArcade = $_POST['idArcade'];
        $data = $_POST['date'];
        $hora = $_POST['time'];

        if (reservationExists($idArcade, $data, $hora)) {
            $_SESSION['error_message'] = 'A reserva já existe para a data e hora selecionadas.';
        } else {
            createReservation($idArcade, $username, $data, $hora);
            $_SESSION['success_message'] = 'Reserva criada com sucesso!';
        }
    }
}

header('Location: arcades.php');
exit;
?>