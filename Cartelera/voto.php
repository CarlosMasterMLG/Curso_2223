<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voto</title>
</head>
<body>
    <?php
        echo "<a href='index.php'>Volver a la página de inicio</a>";

        echo "<br>";

        $nota = $_POST["notas"];

        $votos = array();

        if ($nota < 11 && $nota > 0) {
            echo "El dato es integer";
            $votos = array($nota);
        } else {
            echo "El dato es String";
        }

        echo "<br>El valor del array votos es: ".$votos[0];
        
    ?>
</body>
</html>