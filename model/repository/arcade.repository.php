<?php
require ("model/acessoDB.php");

function getArcades(){
    $conn = connectDB();
    $stmt = $conn->query("SELECT * FROM arcade");
    $arcades = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $arcades;
}

function getArcade($arcadeId){
    $conn = connectDB();
    $stmt = $conn->prepare("SELECT * FROM arcade WHERE id_arcade = :id_arcade");
    $stmt->execute( [ 'id_arcade' => $arcadeId ] );
    getReservationWithArcades($arcadeId);
}

function addArcade($arcadeName, $arcadeImage){
    $conn = connectDB();
    $stmt = $conn->prepare("INSERT INTO arcade (nome, imagem) VALUES (:nome, :imagem)");
    $stmt->execute( [ 'nome' => $arcadeName, 'imagem' => $arcadeImage ] );
}

function deleteArcade($arcadeId) {
    $conn = connectDB();
    $stmt = $conn->prepare("DELETE FROM arcade WHERE (:id_arcade)");
    $stmt->execute( [ 'id_arcade' => $arcadeId ] );
}

function getArcadeByModel($arcadeModel){
    $conn = connectDB();
    $stmt = $conn->prepare("SELECT FROM arcade WHERE ('id_arcade' = :id_arcade)");
    $stmt->execute( [ 'id_arcade' => $arcadeModel ] );
}
?>