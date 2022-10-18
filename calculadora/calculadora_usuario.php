<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Usuario</title>
</head>
<body>
    <h1>Calculadora que calcula calculos</h1>
    
    <?php
        ini_set('display_errors', 'On');
        ini_set('html_errors', 0);

        require "calculadora.php";
    
        $numero = 6;
        $n = 2;
        $k = 4;

        $factorial1 = new Calculadora;

        if (isset($numero)){
            echo "El factorial de $numero es " , $factorial1->obtenerFactorial($numero);
        } else {
            echo "Variable numero no declarada.";
        }

        if (isset($n) && isset ($k)) {
            echo "<br><br>La operación coeficiente binomial de $n y $k es " , $factorial1->coeficienteBinominial($n, $k);
        } else {
            echo "<br><br>Variable numero no declarada.<br>";
        }
        
    ?>
    
</body>
</html>