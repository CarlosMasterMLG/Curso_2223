<html>
<head>
    <title>Voto</title>
    <link rel='stylesheet' href='style.css'>
    <link rel='shortut icon' type='image/png' href='imgs/check-lg.svg' sizes='32x32'>
</head>
<body>
    

    
    <?php
        

        if ($_POST['voto'] != 'default') {
            $votos = $votos + 1;
        }

        echo "  <div class='contenedor'>
                    <div class='primera_caja'></div>
                    <div class='segunda_caja'>
                        <div class='primera_columna'>
                        </div>
                    <div class='segunda_columna'>
                        <h1>Voto guardado</h1>
                        <a href='index.php'>INICIO</a>
                    </div>
                    <div class='tercera_columna'>
                    </div>      
                    </div>
                <div>";
        
    ?>


</body>
</html>