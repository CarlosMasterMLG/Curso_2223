<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $frase = "LA CASA ES BLANCA Y LA NUBE ES GRIS<br><br>";
        echo $frase;

        $abecedario = array('A','B','C', 'D', 'E', 'F', 'G');
        $arrayNumeros = array(0,0,0,0,0,0,0);

        $fraseArray = str_split($frase, 1);

        for ($i=0; $i < count($fraseArray); $i++) { 
            
            for ($j=0; $j < count($abecedario); $j++) { 
                
                if ($fraseArray[$i] == $abecedario[$j]) {
                    
                    $arrayNumeros[$j] = $arrayNumeros[$j] + 1;
                    
                }

            }

        }

        echo '<table><tr>';
        for ($i=0; $i < count($abecedario); $i++) { 
            
            echo '<td>'.$abecedario[$i].'</td>';

        }

        echo '</tr><tr>';
        for ($i=0; $i < count($arrayNumeros); $i++) { 
            
            echo '<td>'.$arrayNumeros[$i].'</td>';

        }

        echo '</tr></table>';

    ?>
</body>
</html>