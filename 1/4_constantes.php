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
            define("MAX_VALUE", 10);
            echo "el valor de la constante MAX_VALUE es: " .MAX_VALUE. "<br>";

            const MIN_VALUE = 1;
            echo "el valor de la constante MIN_VALUE es: ".MIN_VALUE."<br>";
        ?>
    </ul>
    
</body>
</html>