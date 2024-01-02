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
    $arcade = $stmt->fetchAll(PDO::FETCH_ASSOC);
    getReservationWithArcades($arcadeId); // com esta linha não está a funcionar a função

    return $arcade;
}

//Esta função está a funcionar
function addArcade($arcadeName, $arcadeImage){
    $conn = connectDB();
    $stmt = $conn->prepare("INSERT INTO arcade (nome, imagem) VALUES (:nome, :imagem)");
    $stmt->execute( [ 'nome' => $arcadeName, 'imagem' => $arcadeImage ] );
}

//Esta função já funciona mas pode melhorar
function deleteArcade($arcadeId) {
    $conn = connectDB();
    $stmt = $conn->prepare("DELETE FROM arcade WHERE id_arcade = :id_arcade");
    $stmt->execute( [ 'id_arcade' => $arcadeId ] );
}

//Nesta função mudei o id para procurar pelo nome, nao fazia sentido ter 2 funções para procurar com id
function getArcadeByModel($arcadeModel){
    $conn = connectDB();
    $stmt = $conn->prepare("SELECT * FROM arcade WHERE nome = :nome OR nome LIKE :nomePrefixo");
    $stmt->execute( [ 'nome' => $arcadeModel, 'nomePrefixo' => $arcadeModel . '%' ] );
    $arcade = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $arcade;
}
?>