<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='../css/gestionTorneosVista.css'>
    <title>Gestion torneos</title>
</head>
<body>

<!--Recibir por GET lo que le paso desde torneosVista,
y en función de lo que reciba pintar una página u otra.
El modo edición es el que ya esta y el modo creación esta
empezado abajo del todo-->



<?php

    ini_set('display_errors', 'On');
    ini_set('html_errors', 1);

    require('../negocio/gestionTorneosVistaReglasNegocio.php');

    $partidosBL = new gestionTorneosVistaReglasNegocio();
    $datosPartidos = $partidosBL->obtener();

    $tipoPagina = $_GET['modo'];

    if ($tipoPagina == 'edicion') {
        
        echo ("<div class='bloque brillo'>
                <table>
                    <tr class='nuevo'>
                        <th colspan='4'>
                            <a href=''>Nuevo partido</a>
                        </th>
                        <th colspan='3'>Número de registros: ".count($datosPartidos)."</th>
                    </tr>
                    <tr class='identificador'>
                        <th>ID</th>
                        <th>Jugador A</th>
                        <th>Jugador B</th>
                        <th>Ronda</th>
                        <th>Ganador</th>
                        <th></th>
                        <th></th>
                    </tr>");

                    foreach ($datosPartidos as $partidos){

                        echo "<tr>";
                        echo "<th>".$partidos->getID()."</th>";
                        echo "<th>".$partidos->getJUGADOR_A()."</th>";
                        echo "<th>".$partidos->getJUGADOR_B()."</th>";
                        echo "<th>".$partidos->getRONDA()."</th>";
                        echo "<th>".$partidos->getGANADOR()."</th>";
                        echo "<th>Editar</th>";
                        echo "<th>Borrar</th>";
                        echo "</tr>";

                    }

                echo "</table>
                    </div>";

    } elseif ($tipoPagina == 'creacion') {
        
        echo("<div class='bloque brillo'>
                <input type='text' required='required'>
                <span>Nombre</span>
                <i></i>
                <input type='date' required='required'>
                <span>Fecha</span>
                <i></i>
                <input type='submit' value='Crear torneo'>
            </div>");
    }

?>

    
</body>
</html>