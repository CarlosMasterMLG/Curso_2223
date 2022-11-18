<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voto</title>
</head>
<body>
    <?php
        echo "<h1>Esta es la página voto.php</h1>";
        echo "<a href='index.php'>Volver a la página de inicio</a>";

        echo "<form action='voto.php' method='post'>
        <input type='hidden' voto='vienedelform' value='si' />
        <input type='integer' placeholder='Voto' voto='voto' value='' />
        <input type='submit' value='Enviar' />
       </form>";
    ?>
</body>
</html>