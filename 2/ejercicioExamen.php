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

        $fraseOriginal = "La casa es blanca y la nube es gris";
        echo $fraseOriginal . "<br><br>";
        $frase = strtoupper($fraseOriginal);
        echo $frase . "<br><br>";

        $abecedario = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
        $arrayNumeros = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

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

        echo '</tr></table><br><br><br>';

        $arrayPalabras = explode(" ", $frase);

        
        echo '<table><tr>';
        for ($i=0; $i < count($arrayPalabras); $i++) { 
            
            echo '<td>'.$i."->".$arrayPalabras[$i].'</td>';
            
        }
        echo '</tr></table>';

        echo '<table><tr>';
        for ($i=0; $i < count($arrayPalabras); $i++) { 
            
            echo '<td>'.$arrayPalabras[$i].'</td>';
            
        }
        echo '</tr></table>';

    ?>
</body>
</html>