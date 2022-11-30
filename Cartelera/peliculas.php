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
        require('zPruebaConexionClase.php');

        pintarPeliculas();
        ?>
</body>
</html>