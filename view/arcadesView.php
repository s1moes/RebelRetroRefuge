<div class="bg-image">
    <div class="container text-center">
        <div class="row gap-3">
            <?php
            $arcades = getArcades();
            foreach ($arcades as $arcade_data) {
                $arcade_imagem = $arcade_data['imagem'];
                $arcade_nome = $arcade_data['nome'];
                $id_arcade = $arcade_data['id_arcade'];
                echo <<<ARCADES
                    <div class="col p-3 m-3 bg-dark text-white rounded" href>
                        <form action="arcade.php" method="post">
                            <h3 class="text-white">$arcade_nome</h3>
                            <img src="$arcade_imagem" width="588px">
                            <input type="hidden" name="id_arcade" value="$id_arcade">
                            <button type="submit" class="btn btn-outline-light m-3">Reservar</button>
                        </form>
                    </div>
                ARCADES;
            }
            ?>
        </div>
    </div>
</div>