<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrado Mágico</title>
    <link rel="stylesheet" href="estilos_cuadrado_magico.css">
</head>
<body>

<?php
        ini_set('display_errors', 'On');
        ini_set('html_errors', 0);

        // Creamos objeto cuadrado

        $cuadrado = array(
        array(4, 9, 2),
        array(3, 5, 7),
        array(8, 1, 6)
        );

        // Pintar tabla
            echo "<table>";
            for ($i=0; $i < count($cuadrado); $i++) { 
                echo "<tr>";
                for ($j=0; $j < count($cuadrado[$i]); $j++) { 
                
                    echo "<td>".$cuadrado[$i][$j]."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";

       
        function analizarCuadradoMagico($cuadrado){

            




            return "<br><h1>hola</h1>";

        }

        echo analizarCuadradoMagico($cuadrado);


    ?>
    
</body>
</html>