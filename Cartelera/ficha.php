<html>
<head>
    <?php
        $style;
        $titulo;
        $icon;

        $numFichaTerror = $_GET['terrorFicha'];
        $numFichaFiccion = $_GET['ficcionFicha'];
        
        if ($numFichaTerror==10||$numFichaTerror==1||$numFichaTerror==2||$numFichaTerror==3||$numFichaTerror==4||$numFichaTerror==5||$numFichaTerror==6
            ||$numFichaTerror==7||$numFichaTerror==8||$numFichaTerror==9) {
            $style = 'styleFichaTerror';
        } 
        
        if ($numFichaFiccion==10||$numFichaFiccion==1||$numFichaFiccion==2||$numFichaFiccion==3||$numFichaFiccion==4||$numFichaFiccion==5||$numFichaFiccion==6
        ||$numFichaFiccion==7||$numFichaFiccion==8||$numFichaFiccion==9) {
            $style = 'styleFichaFiccion';
    }
        
        

    ?>
    <title>FICHA</title>
    <link rel="stylesheet" href="<?php echo $style?>.css">
    <link rel="shortut icon" type="image/png" href="imgs/terror/icon/xenomorfo.jpg" sizes="32x32">
</head>
<body>
    <div class="contenedor">
        <div class="primera_caja">
            <h1>ALIEN, EL OCTAVO PASAJERO</h1>
            <a href="index.php">INICIO</a>
            <a href="peliculas.php?categoria=1">VOLVER</a>
        </div>

        <?php
                    echo "<div class='segunda_caja'>
                    <div class='bordeIzquierdo'></div>
                    <div class='primera_columna'>
                        <img src=imgs/terror/alien_el_octavo_pasajero.jpg>
                    </div>
                    <div class='segunda_columna'>
                        <br>
                        <p>Año: 1979</p><br>
                        <p>Duración:  116 min.</p><br>
                        <p>Dirección: Ridley Scott</p><br>
                        <p>Guion: Dan O'Bannon. Historia: Ronald Shusett. Personaje: H.R. Giger</p><br>
                        <p>Música: Jerry Goldsmith</p><br>
                        <p>Fotografía: Derek Vanlint</p><br>
                        <p>Reparto: 
                        Sigourney Weaver, John Hurt, Yaphet Kotto, Tom Skerritt, Veronica Cartwright, Harry Dean Stanton, Ian Holm
                    </p><br>
                        <p>Compañías: 20th Century Fox, Brandywine Productions
                        </p><br>
                        <p>Género: Ciencia ficción. Terror | Extraterrestres. Aventura espacial. Película de culto </p>
                    </div>
                    <div class='tercera_columna'>
                        <div class='sinopsis'>
                        <br>
                        <p>Sinopsis<br><br>
                        De regreso a la Tierra, la nave de carga Nostromo interrumpe su viaje y despierta a sus siete 
                        tripulantes. El ordenador central, MADRE, ha detectado la misteriosa transmisión de una forma 
                        de vida desconocida, procedente de un planeta cercano aparentemente deshabitado. La nave se 
                        dirige entonces al extraño planeta para investigar el origen de la comunicación.
                        </p>
                        </div>
                        <div class='puntuacion'>
                            <p>Puntuación: 8</p>
                            <p>Tu voto</p>
                            <select name='notas' id='notas'>
                                <option value='No vista'>No vista</option>
                                <option value='10'>10 Excelente</option>
                                <option value='9'>9 Muy buena</option>
                                <option value='8'>8 Notable</option>
                                <option value='7'>7 Buena</option>
                                <option value='6'>6 Interesante</option>
                                <option value='5'>5 Pasable</option>
                                <option value='4'>4 Regular</option>
                                <option value='3'>3 Floja</option>
                                <option value='2'>2 Mala</option>
                                <option value='1'>1 Muy mala</option>
                            </select>
                        </div>
                    </div>
                    <div class='bordeDerecho'></div>
                </div>";

                echo "<div class='tercera_caja'></div>";
        ?>
        
</body>
</html>