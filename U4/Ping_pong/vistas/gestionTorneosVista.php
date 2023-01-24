<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='css/gestionTorneosVista.css'>
    <title>Gestion torneos</title>
</head>
<body>

<!--Recibir por GET lo que le paso desde torneosVista,
y en función de lo que reciba pintar una página u otra.
El modo edición es el que ya esta y el modo creación esta
empezado abajo del todo-->



<?php

    $tipoPagina = $_GET['modo'];

    if ($tipoPagina == 'edicion') {
        
        echo ("<div class='bloque brillo'>
                <table>
                    <tr class='nuevo'>
                        <th colspan='4'>
                            <a href=''>Nuevo partido</a>
                        </th>
                        <th colspan='3'>Número de registros: 7</th>
                    </tr>
                    <tr class='identificador'>
                        <th>ID</th>
                        <th>Jugador A</th>
                        <th>Jugador B</th>
                        <th>Ronda</th>
                        <th>Ganador</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>Jugador 7</th>
                        <th>Jugador 3</th>
                        <th>Cuartos</th>
                        <th>Jugador 7</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th>Jugador 1</th>
                        <th>Jugador 4</th>
                        <th>Cuartos</th>
                        <th>Jugador 1</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th>Jugador 6</th>
                        <th>Jugador 8</th>
                        <th>Cuartos</th>
                        <th>Jugador 8</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                    <tr>
                        <th>4</th>
                        <th>Jugador 5</th>
                        <th>Jugador 2</th>
                        <th>Cuartos</th>
                        <th>Jugador 2</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                    <tr>
                        <th>5</th>
                        <th>Jugador 7</th>
                        <th>Jugador 1</th>
                        <th>Semifinales</th>
                        <th>Jugador 1</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                    <tr>
                        <th>6</th>
                        <th>Jugador 8</th>
                        <th>Jugador 2</th>
                        <th>Semifinales</th>
                        <th>Jugador 8</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                    <tr>
                        <th>7</th>
                        <th>Jugador 1</th>
                        <th>Jugador 8</th>
                        <th>Final</th>
                        <th>Jugador 8</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                </table>
            </div>");

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