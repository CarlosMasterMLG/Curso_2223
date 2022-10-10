<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
   <title>Hola Mundo</title>
</head>
<body>
    
    <?php
        $numero_entero = 5;
        $numero_flotante = 6.5;
        $cadena = "Hi!";

        echo gettype($numero_entero)." ".$numero_entero . "<br>";
        echo gettype($numero_flotante)." ".$numero_flotante . "<br>";
        echo gettype($cadena)." ".$cadena . "<br>";

        $x = 0;
        $prueba_variable_no_inicializada = $numero_entero * $x;
        echo $prueba_variable_no_inicializada;
    ?> 
    
</body>
</html>