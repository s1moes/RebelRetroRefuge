<div class="bg-image">
    <div class="container text-center">
        <div class="row gap-3">
            <?php
            // <?php echo ceil(sizeof($arcades)) 
            $arcades = getArcades();
            foreach ($arcades as $arcade_data) {
                $arcade_imagem = $arcade_data['imagem'];
                $arcade_nome = $arcade_data['nome'];
                $id_arcade = $arcade_data['id_arcade'];
                echo <<<ARCADES
                    <div class="col p-3 m-3 bg-dark text-white rounded" href>
                        <form action="arcade.php" method="post">
                            <h3 class="text-white">$arcade_nome</h3>
                            <img src="$arcade_imagem" width="512px">
                            <input type="hidden" name="id_arcade" value="$id_arcade">
                        </form>
                    </div>
                ARCADES;
            }
            ?>
        </div>
    </div>
</div>
</div>