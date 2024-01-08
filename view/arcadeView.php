<?php
$idArcade = isset($_POST["id_arcade"]) ? $_POST["id_arcade"] : '';
if (empty($idArcade)) {
        header("arcades.php");
        exit;
}
$user = isset($_SESSION['username']) ? $_SESSION['username'] : '';

$arcade = getArcade($idArcade);
$arcadeNome = $arcade[0]["nome"];
$arcadeImagem = $arcade[0]["imagem"];
$arcadeDescricao = $arcade[0]["descricao"];
?>

<div class="bg-image min-vh-100">
        <div class="container text-center">
                <div class="row align-items-center">
                        <div class="col">
                        </div>
                        <div class="col-6 p-3 m-3 bg-dark text-white rounded" >
                                <h1 class="text-white"><?php echo $arcadeNome ?></h1>
                                <img src="<?php echo $arcadeImagem ?>" width="512px" alt="">
                        </div>
                        <div class="col p-3 m-3 bg-dark text-white rounded">
                                <p class="text-white"><?php echo $arcadeDescricao ?></p>  
                                <?php 
                                $dataMin = date("Y-m-d");
                                if (!empty($user)) {
                                        echo <<<FORM
                                        <form action="reserva.php" method="post">
                                        <label for="date">Seleccione a data e hora da reserva:</label>
                                        <input type="date" name="date" min=$dataMin required>
                                        <select name="time" required>
                                    FORM;
                                    
                                        for ($hora = 9; $hora <= 17; $hora++) {
                                                $horaFormatada = str_pad($hora, 2, '0', STR_PAD_LEFT) . ':00';
                                                echo "<option value=$horaFormatada>$horaFormatada - " . str_pad($hora + 1, 2, '0', STR_PAD_LEFT) . ":00</option>";
                                        }
                                    
                                        echo <<<FORM
                                        </select>
                                        <input type="hidden" name="idArcade" value=$idArcade>
                                        <button type="submit" name="btnReservar" class="btn btn-outline-light m-3">Reservar</button>
                                        </form>
                                    FORM;
                                    }                                    
                                ?>
                             
                                
                        </div>
                </div>
        </div>
</div>
