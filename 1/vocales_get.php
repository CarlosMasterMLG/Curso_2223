<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocales</title>
</head>
<body>
    
<?php
    // Mostrar errores a medida que se ejecutan: ini_set
    ini_set('display_errors', 'On');
    ini_set('html_errors', 0);

    $letra = $_GET["letra"];

    echo "La letra introducida es " . $letra . "<br>";

    $vocales = array("a","e","i","o","u");
    $loop = false;

    for ($i=0; $i < count($vocales); $i++){

        if ($letra == $vocales[$i]){
            $loop = true;
        }

    }

    if($loop){
        echo $letra . " es una vocal.";
    } else {
        echo $letra . " no es una vocal.";
    }

?>

</body>
</html>