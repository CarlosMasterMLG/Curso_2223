<?php

    function cargarDatos(){
        
        // Contraseña->Casa: 1234 | Clase: 12345
        $conexion = mysqli_connect('localhost', 'root', '12345');

        if (mysqli_connect_errno()) {
            echo "Error al conectar a MySQL: ".mysqli_connect_error();
        }
        mysqli_select_db($conexion, 'DBempresa');

        $consulta = "select Name from country;";


        $resultado = mysqli_query($conexion, $consulta);

        if (!$resultado) {
            $mensaje = 'Consulta invalida: ' . mysqli_error($conexion) . "\n";
            $mensaje .= 'Consulta realizada: ' . $consulta;
        } else {
            if (($resultado->num_rows) > 0) {
                
            $paises = [];
            $contador = 1;
            
            while ($registro = mysqli_fetch_assoc($resultado)) {

                $paises[$contador] = new Pelicula($registro['Nanme']);

                $contador = $contador + 1;
            }
            return $paises;
                
            } else {
                echo "No hay resultados";
            }
        }

    }
?>