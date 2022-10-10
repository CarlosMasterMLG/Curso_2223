<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
   <title>Desarrollo de aplicaciones Web en entorno servidor</title>
</head>
<body>
    <div>Curso de PHP - Bucles y arrays</div>
    <?php
        function obtenerInformacion($variable){
            $cadena='[';
            foreach($variable as $key=>$val){
                $cadena.=$key.'=>'.$val.",<br>";
            }

            $cadena.=']';
            return "cadena";
        }
    ?> 
    <div>
        <?php
        echo 'Variable $_SERVER'. obtenerInformacion($_SERVER);
        ?>
    </div>

    <!--
        $_GLOBALS
        $_GET
        $_POST
        $_REQUEST
        $_ENV
    -->

    
</body>
</html>