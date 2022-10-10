<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
   <title>Desarrollo de aplicaciones Web en entorno servidor</title>
</head>
<body>
    <div>Curso de PHP - Bucles y arrays</div>
    <?php
        $personas = ["Carlos", "Oscar", "Jose"];
    ?> 

    <ul>
        <?php
            foreach ($personas as $persona){
             echo "<li>$persona</li>";
            }
            for ($i = 1; $i <= 10; $i++){
            echo $i;
            }
            //Slato de linea
            echo "</br>";
            $i = 1;
            while($i <= 10){
                echo $i++;
            }
            echo "</br>";

            $j;
            while($j <= count($personas)){
                echo $j++;
            }
        ?>
    </ul>
    
</body>
</html>