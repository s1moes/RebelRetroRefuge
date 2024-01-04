<section>
    <?php
        $arcades = getArcades();

        foreach ($arcades as $arcade_data) {
            $arcade_imagem = $arcade_data['imagem'];
            $arcade_nome = $arcade_data['nome'];

            $data_hora_reserva = date("m-d H:i:s");

            $username = isset( $_SESSION['username']) ? $_SESSION['username'] : '';

            if ( empty($username) ) {
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
                        <p></p>
                        <label for="hora-reserva">Selecione a Hora da Reserva:</label>
                        <select name="Hora-Reserva"">
                            <option>09:00</option>
                            <option>10:00</option>
                            <option>11:00</option>
                            <option>12:00</option>
                            <option>14:00</option>
                            <option>15:00</option>
                            <option>16:00</option>
                            <option>17:00</option>
                        </select>
                        <p></p>
                        <button class="btnReservar">Reservar</button>
                    </div>
                ARCADE;
            }
        }
    ?>
</section>
