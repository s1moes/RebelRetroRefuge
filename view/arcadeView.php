<?php
if (isset($_POST["id_arcade"])) {
  $idArcade = $_POST["id_arcade"];
}

$arcade = getArcade($idArcade);
$arcadeNome = $arcade[0]["nome"];
$arcadeImagem = $arcade[0]["imagem"];
$arcadeDescricao = $arcade[0]["descricao"];
?>

<div class="bg-image min-vh-100">
        <div class="container text-center">
                <div class="row align-items-center d-flex align-items-center">
                        <div class="col">
                        </div>
                        <div class="col-6 p-3 m-3 bg-dark text-white rounded" >
                                <h1 class="text-white"><?php echo $arcadeNome ?></h1>
                                <img src="<?php echo $arcadeImagem ?>" width="512px" alt="">
                                
                        </div>
                        <div class="col p-3 m-3 bg-dark text-white">
                                <p class="text-white"><?php echo $arcadeDescricao ?></p>  
                                <form action="reserva.php" method="post">
                                <input type="datetime-local" name="datetime">
                                <input type="hidden" name="idArcade" value="<?php echo $idArcade ?>">
                                <button type="submit"> Reservar</button>
                                </form>      
                        </div>
                </div>
        </div>
</div>
