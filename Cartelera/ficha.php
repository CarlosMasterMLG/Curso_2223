<html>
<head>
    <?php
        $style;
        $icon;
        $numFicha = $_GET['ficha'];

        if ($numFicha<11) {
            $style = 'styleFichaTerror';
            $icon = 'imgs/terror/icon/ghostface_icon.png';
        }else{
            $style = 'styleFichaFiccion';
            $icon = 'imgs/ciencia_ficción/icon/darthvader_icon.png';
    }

    ?>
    <title>FICHA</title>
    <link rel="stylesheet" href="<?php echo $style?>.css">
    <link rel="shortut icon" type="image/png" href="<?php echo $icon?>" sizes="32x32">
</head>
<body>
    
        <?php

        require('peliculaObj.php');

                    $titulo;
                    $portada;
                    $anyo;
                    $duracion;
                    $direccion;
                    $guion;
                    $musica;
                    $fotografia;
                    $reparto;
                    $companyias;
                    $generos;
                    $sinopsis;
                    $puntuacion;

                    for ($i=0; $i < count($peliculas); $i++) { 

                        if ($_GET['ficha'] == $peliculas[$i]->getId()) {

                            $titulo = $peliculas[$i]->getTitulo();
                            $portada = $peliculas[$i]->getPortada();
                            $anyo = $peliculas[$i]->getAnyo();
                            $duracion = $peliculas[$i]->getDuracion();
                            $direccion = $peliculas[$i]->getDireccion();
                            $guion = $peliculas[$i]->getGuion();
                            $musica = $peliculas[$i]->getMusica();
                            $fotografia = $peliculas[$i]->getFotografia();
                            $reparto = $peliculas[$i]->getReparto();
                            $companyias = $peliculas[$i]->getCompanyias();
                            $generos = $peliculas[$i]->getGenero();
                            $sinopsis = $peliculas[$i]->getSinopsis();
                            $puntuacion = $peliculas[$i]->getPuntuacion();
                            
                        }
                    }

                    echo "<div class='contenedor'>
                    <div class='primera_caja'>
                        <h1>$titulo</h1>
                        <a href='index.php'>INICIO</a>
                    </div>";
                    echo "<div class='segunda_caja'>
                    <div class='bordeIzquierdo'></div>
                    <div class='primera_columna'>
                        <img src=$portada>
                    </div>
                    <div class='segunda_columna'>
                        <br>
                        <p>Año: $anyo</p><br>
                        <p>Duración:  $duracion</p><br>
                        <p>Dirección: $direccion</p><br>
                        <p>Guion: $guion</p><br>
                        <p>Música: $musica</p><br>
                        <p>Fotografía: $fotografia</p><br>
                        <p>Reparto: $reparto</p><br>
                        <p>Compañías: $companyias</p><br>
                        <p>Género: $generos</p>
                    </div>
                    <div class='tercera_columna'>
                        <div class='sinopsis'>
                        <br>
                        <p>Sinopsis<br><br>
                        $sinopsis
                        </p>
                        </div>
                        <div class='puntuacion'>
                            <p>Puntuación: $puntuacion</p>
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
                            <a href='voto.php?_POST[10]'>Enviar voto</a>
                        </div>
                    </div>
                    <div class='bordeDerecho'></div>
                </div>";

                echo "<div class='tercera_caja'></div>";
        ?>
        
</body>
</html>