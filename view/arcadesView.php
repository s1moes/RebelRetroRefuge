<section>
    <?php
    $arcades = getArcades();

    foreach ($arcades as $arcade_data) {
        $arcade_imagem = $arcade_data['imagem'];
        $arcade_nome = $arcade_data['nome'];
        $id_arcade = $arcade_data['id_arcade'];

        $data_hora_reserva = date("m-d H:i:s");

        $user = isset($_SESSION['username']) ? $_SESSION['username'] : '';

        if (empty($user)) {
            echo <<<ARCADE
                <div class="arcade">
                    <h4>$arcade_nome</h4>
                    <img src="$arcade_imagem" width="320px" height="220">
                </div>
            ARCADE;
        } else {
            echo <<<ARCADE
                    <div class="arcade">
                        <h4>$arcade_nome</h4>
                        <img src="$arcade_imagem" width="320px" height="220">
                        <form action="reserva.php" method="post">
                            <label class="label">Selecione a Hora da Reserva:</label>
                            <select name="hora_reserva" class="select">
                                <option value="09:00" class="option">09:00</option>
                                <option value="10:00" class="option">10:00</option>
                                <option value="11:00" class="option">11:00</option>
                                <option value="12:00" class="option">12:00</option>
                                <option value="14:00" class="option">14:00</option>
                                <option value="15:00" class="option">15:00</option>
                                <option value="16:00" class="option">16:00</option>
                            </select>
                            <p></p>
                            <input type="hidden" name="id_arcade" value="$id_arcade">
                            <input type="submit" class="btnReservar" name="btnReservar" value="Reservar">
                        </form>
                    </div>
                ARCADE;
        }
    }
    ?>
</section>