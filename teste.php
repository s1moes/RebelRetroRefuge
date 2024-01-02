<?php
    include("model/repository/arcade.repository.php"); 

    deleteArcade(15);

    echo "<pre>";
    print_r(getArcades());
    echo "</pre>";
?>