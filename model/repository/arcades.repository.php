<?php
require ("acessoDB.php");

function getArcades(){
    $conn = connectDB();
    $stmt = $conn->query("SELECT * FROM arcade");
    $arcades = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $arcades;
}
?>