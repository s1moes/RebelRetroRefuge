<?php
require ("acessoDB.php");
require ("arcadeReservation.repository.php");

function createReservation($userId, $arcade_id){
    $conn = connectDB();
    $stmt = $conn->prepare("INSERT INTO reserva ('utilizador_id') VALUES (:utilizador_id)");
    $stmt->execute( [ 'utilizador_id' => $userId] );

    $reservationId = end(getReservations());

    addArcadeToReservation($reservationId, $arcade_id);
}

function cancelReservation($reservationId){
    $conn = connectDB();
    $stmt = $conn->prepare("DELETE FROM reserva WHERE (:id_reserva)");
    $stmt->execute( [ 'id_reserva' => $reservationId ] );
    
    removeArcadeInReservation($reservationId);
}

function getReservations(){
    $conn = connectDB();
    $stmt = $conn->query("SELECT * FROM reserva");
    $reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $reservations;
}

function getReservation($reservationId){
    $conn = connectDB();
    $stmt = $conn->prepare("SELECT FROM reserva WHERE (:id_reserva)");
    $stmt->execute( [ 'id_reserva' => $reservationId ] );
}
?>