<?php
require ("model/acessoDB.php");

function addArcadeToReservation($reservationId, $arcade_id) {
    $conn = connectDB();
    $stmt = $conn->prepare("INSERT INTO arcade_reserva ('reserva_id', 'arcade_id') VALUES (:reserva_id, :arcade_id)");
    $stmt->execute( [ 'reserva_id' => $reservationId, 'arcade_id' => $arcade_id] );
}

function removeArcadeInReservation($reservationId){
    $conn = connectDB();
    $stmt = $conn->prepare("DELETE FROM arcade_reserva WHERE ('reserva_id' = :reserva_id)");
    $stmt->execute( [ 'reserva_id' => $reservationId ]);
}

function getReservationsWithArcades(){
    $conn = connectDB();
    $stmt = $conn->query("SELECT * FROM arcade_reserva");
    $reservationsWithArcades = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $reservationsWithArcades;
}

function getReservationWithArcades($reservationId){
    $conn = connectDB();
    $stmt = $conn->prepare("SELECT FROM arcade_reserva WHERE ('reserva_id' = :reserva_id)");
    $stmt->execute( [ 'reserva_id' => $reservationId ] );
}

?>