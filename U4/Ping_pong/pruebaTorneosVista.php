<!doctype html>
<html>
<head>

</head>

<body>
    <h1> Listado de torneos </h1>
        <?php
            require("torneosReglasNegocio.php");
            echo "hola";
            $torneosBL = new TorneosReglasNegocio();
            $datosTorneos = $torneosBL->obtener();
            echo "hola";
            foreach ($datosTorneos as $torneos)
            {
                echo "<div>";
                print($torneos->getID());
                echo "</div>";
            }
            echo "hola";
        ?>

</body>

</html>