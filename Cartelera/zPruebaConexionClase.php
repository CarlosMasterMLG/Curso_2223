<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Conexión DATOS PDF</title>
</head>
<body>
    
    <?php
        ini_set('display_errors', 'On');
        ini_set('html_errors', 0);

        // Contraseña->Casa: 12345678 | Clase: 12345
        $conexion = mysqli_connect('localhost', 'root', '12345');
        
        mysqli_select_db($conexion, 'prueba');
        
        $consulta = "SELECT * FROM T_Peliculas";
        
        $resultado = mysqli_query($conexion, $consulta);

        if (!$resultado) {
            $mensaje = 'Consulta invalida: ' . mysqli_error($conexion) . "\n";
            $mensaje = 'Consulta realizada: ' . $consulta;
            die($mensaje);
        } else{
            echo "Conexion OK.<br>";

            while ($registro = mysqli_fetch_assoc($resultado)) {
                echo $registro['ID']."<br>";
                echo $registro['titulo']."<br>";
                echo $registro['año']."<br>";
                echo $registro['duracion']."<br>";
                echo $registro['sinopsis']."<br>";
                echo $registro['imagen']."<br>";
                echo $registro['votos']."<br>";
                echo $registro['id_categoria']."<br>";
            }
        }
/*
        if (mysqli_connect_error()) {
            echo "Error al conectar a MySQL: ".mysqli_connect_error();
        }
*/
    ?>

</body>
</html>