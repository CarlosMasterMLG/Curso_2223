<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Conexión DATOS SQL</title>
</head>
<body>
    
    <?php

        $usuario = 'root';
        $contrasenya = '12345678';
        $servidor = 'localhost';
        $database = 'cartelera';

        $conexion = mysqli_connect($servidor, $usuario, $contrasenya, $database) or die("No se ha podido conectar con el servidor");

        /*$sql = "SELECT 
            tc.*, tp.*
        FROM
            T_Categorias tc
                INNER JOIN
            T_Peliculas tp
        WHERE
            tc.ID = tp.id_categoria
        ORDER BY tp.votos DESC;";*/

        $sql = "SELECT * FROM T_Peliculas;";

        $datos = mysqli_query($conexion, $sql);
        $arrayDatos[] = array();

        while ($fila = mysqli_fetch_array($datos)) {
            
            $arrayDatos[] = $fila;
        
        }

        //print_r($arrayDatos);

        echo ($arrayDatos[1][7]) . "<br>";
/*
        for ($i=0; $i < count($arrayDatos); $i++) { 
            echo $arrayDatos[1][$i] . "<br>";
        }
*/
        for ($i=1; $i < count($arrayDatos); $i++) { 
            //echo "Hola";
                echo "<br><br>Pelicula número " . $i . "<br>";
            for ($j=0; $j < count($arrayDatos[$i]); $j++) { 
                
                if (!is_null($arrayDatos[$i][$j])) {
                    echo $arrayDatos[$i][$j]."<br>";
                } else {
                    break;
                }

                if($j == 7){
                    break;
                } 
            }
        }

        /*Si no hago ese else me duplica las posiciones como indefinidas, con el else se arregla menos la octava posicion, (7 contando desde 0),
        por lo que se arregla con el ultimo if, preguntar al profesor porque se duplica y como arreglarlo correctamente.
        Preguntar también porque me genera una posición vacia al principio dando como resultado 21 peliculas con la primera vacia.*/


        //print_r($arrayDatos);


    ?>

</body>
</html>