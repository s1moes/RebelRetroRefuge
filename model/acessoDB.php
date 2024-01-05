<?php
function connectDB() {

    $hostname = 'localhost';
    $dbname = 'rebel';
    $username = 's1moes';
    $password = 's1moes';

    try {
        $conn = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8mb4",
             $username, $password);

    } catch (\PDOException $e) {
        echo $e->getMessage();
    }

    return $conn;
}

function createReservation($id_arcade, $username, $hora_reserva)
{
    $conn = connectDB();

    $stmtReserva = $conn->prepare("INSERT INTO reserva (id_arcade, username, hora_reserva) VALUES (:id_arcade, :username, :hora_reserva)");
    $stmtReserva->execute(['id_arcade' => $id_arcade, 'username' => $username, 'hora_reserva' => $hora_reserva]);
}


function cancelReservation($id_reserva)
{
    $conn = connectDB();
    $stmt = $conn->prepare("DELETE FROM reserva WHERE id_reserva = :id_reserva");
    $stmt->execute(['id_reserva' => $id_reserva]);
}

function getReservations($user)
{
    $conn = connectDB();
    $stmt = $conn->prepare("SELECT * FROM reserva WHERE username=:username");
    $stmt->execute(['username' => $user]);
    $reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $reservations;
}

function getArcades(){
    $conn = connectDB();
    $stmt = $conn->query("SELECT * FROM arcade");
    $arcades = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $arcades;
}

function getArcade($arcadeId){
    $conn = connectDB();
    $stmt = $conn->prepare("SELECT nome, imagem FROM arcade WHERE id_arcade = :id_arcade");
    $stmt->execute( [ 'id_arcade' => $arcadeId ] );
    $arcade = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $arcade;
}

function addArcade($arcadeName, $arcadeImage){
    $conn = connectDB();
    $stmt = $conn->prepare("INSERT INTO arcade (nome, imagem) VALUES (:nome, :imagem)");
    $stmt->execute( [ 'nome' => $arcadeName, 'imagem' => $arcadeImage ] );
}

function deleteArcade($arcadeId) {
    $conn = connectDB();
    $stmt = $conn->prepare("DELETE FROM arcade WHERE id_arcade = :id_arcade");
    $stmt->execute( [ 'id_arcade' => $arcadeId ] );
}

function getArcadeByModel($arcadeModel){
    $conn = connectDB();
    $stmt = $conn->prepare("SELECT * FROM arcade WHERE nome = :nome OR nome LIKE :nomePrefixo");
    $stmt->execute( [ 'nome' => $arcadeModel, 'nomePrefixo' => $arcadeModel . '%' ] );
    $arcade = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $arcade;
}

function addUser( $username, $password ) {
    $conn = connectDB();
    $stmt = $conn->prepare("INSERT INTO utilizador (username, pass) VALUES (:username, :pass)");
    $stmt->execute( [ 'username' => $username, 'pass' => $password ] );
}

function deleteUser($userId){
    $conn = connectDB();
    $stmt = $conn->prepare("DELETE FROM utilizador WHERE id_utilizador = :id_utilizador");
    $stmt->execute( [ 'id_utilizador' => $userId ] );
}

function userExistes($username, $password){
    $conn = connectDB();
    $stmt = $conn->prepare("SELECT username, pass FROM utilizador WHERE username=:username");
    $stmt->execute(['username' => $username]);
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user && password_verify($password, $user['pass'])) {
        return $user;
    }

    return false;
    
}

function getUsers() {
    $conn = connectDB();
    $stmt = $conn->query("SELECT * FROM utilizador");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $users;
}
?>