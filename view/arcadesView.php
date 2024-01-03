<section>

    <?php
        $arcades = getArcades();

        foreach ($arcades as $arcade_data) {
            $arcade_imagem = $arcade_data['imagem'];
            $arcade_nome = $arcade_data['nome'];

                echo <<<ARCADE
                    <div class="arcade">
                        <img src="$arcade_imagem" width="300px">
                        <h3>$arcade_nome</h3>
                    </div>
                ARCADE;
        }
    ?>
</section>
