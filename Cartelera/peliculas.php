<html>
<head>
    <?php
        $style;
        $titulo;
        $icon;
        $numCategoria = $_GET['categoria'];

        if ($numCategoria==1) {
            $style = 'styleTerror';
            $titulo = 'TERROR';
            $icon = 'imgs/terror/icon/ghostface_icon.png';
        } else{
            $style = 'styleCF';
            $titulo = 'CIENCIA FICCION';
            $icon = 'imgs/ciencia_ficción/icon/darthvader_icon.png';
        }
    ?>
    <title><?php echo $titulo?></title>
    <link rel="stylesheet" href="<?php echo $style?>.css">
    <link rel="shortut icon" type="image/png" href="<?php echo $icon?>" sizes="32x32">
    
</head>
<body>
        <?php
        require('peliculaObj.php');

        if ($numCategoria==1){
            $pos = 0;
            $length = count($peliculas) / 2;
            echo "<div class='contenedor'>
                    <div class='primera_caja'>
                        <h1>TERROR</h1>
                        <a href='index.php'>INICIO</a>
                    </div>";
        } else {
            $pos = 10;
            $length = count($peliculas);
            echo "<div class='contenedor'>
                    <div class='primera_caja'>
                        <h1>CIENCIA FICCIÓN</h1>
                        <a href='index.php'>INICIO</a>
                    </div>";
        }
                     
        for ($pos; $pos < $length; $pos++) { 
            
            $titulo = $peliculas[$pos]->getTitulo();
            $portada = $peliculas[$pos]->getPortada();
            $duracion = $peliculas[$pos]->getDuracion();
            $puntuacion = $peliculas[$pos]->getPuntuacion();
            $sinopsisReducida = substr($peliculas[$pos]->getSinopsis(), 0, 280);
            $ficha = $pos+1;

            echo "<div class='segunda_caja'>
            <div class='bordeIzquierdo'></div>
            <div class='primera_columna'>
                <h1 class='titulo'>$titulo</h1>
                <img src=$portada>
                <p class='duracion'>$duracion</p>
            </div>
            <div class='segunda_columna'>
                <p>
                    $sinopsisReducida ...
                </p>
            </div>
            <div class='tercera_columna'>
                <div class='puntuacion'>
                    <p>Puntuación: $puntuacion</p>
                </div>
            <div class='verFicha'>
                <a href='ficha.php?ficha=$ficha'>Ver Ficha</a>
            </div>
        </div>
        <div class='bordeDerecho'></div>
        </div>";
        }
        echo "<div class='tercera_caja'></div>";
        ?>
</body>
</html>