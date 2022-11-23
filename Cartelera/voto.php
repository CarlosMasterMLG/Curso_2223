<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortut icon" type="image/png" href="imgs/check-lg.svg" sizes="32x32">
    <title>Voto</title>
</head>
<body>
    <?php
        //echo "<a href='index.php'>Volver a la página de inicio</a>";

        //echo "<br>";

        $nota = $_POST["notas"];

        $votos = array();

        if ($nota < 11 && $nota > 0) {
            //echo "El dato es integer";
            $votos = array($nota);
        } else {
            //echo "El dato es String";
        }

        //echo "<br>El valor del array votos es: ".$votos[0];

        echo "<div class='contenedor'>
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