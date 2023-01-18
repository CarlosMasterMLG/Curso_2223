<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/torneosVista.css">
    <title>Torneos</title>
</head>
<body>
    <div class="bloque brillo">
        <table>
            <tr class="crear">
                <th colspan="4">
                    <a href="gestionTorneosVista.php?modo=creacion">Crear torneo</a>
                </th>
                <th colspan="3">
                    <p>Número de registros: 2</p>
                </th>
            </tr>
            <tr class="identificador">
                <th>ID</th>
                <th>Nombre del torneo</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Campeón</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th>1</th>
                <th>Torneo 2021</th>
                <th></th>
                <th>Finalizado</th>
                <th>Carlos Sogorb</th>
                <th>
                    <a href="gestionTorneosVista.php?modo=edicion">Editar</a>
                </th>
                <th>Borrar</th>
            </tr>
            <tr>
                <th>2</th>
                <th>Torneo navidad 2022</th>
                <th>22/12/22</th>
                <th>Finalizado</th>
                <th>Carlos Acedo</th>
                <th>
                    <a href="gestionTorneosVista.php?modo=edicion">Editar</a>
                </th>
                <th>Borrar</th>
            </tr>
        </table>
    </div>
</body>
</html>