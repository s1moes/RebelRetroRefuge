<?php
    include("model/acessoDB.php"); 

    cancelReservation(6);

    echo "<pre>";
    print_r(getReservations("Francisco"));
    echo "</pre>";
?>