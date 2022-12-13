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

        require('zPruebaConexionClase.php');

        pintarFicha();
        
        ?>
        
</body>
</html>