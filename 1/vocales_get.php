<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocales</title>
</head>
<body>
    
<?php

    function esVocal($char){
        return in_array($char, array("a", "e", "i", "o", "u"));
    }

?>

</body>
</html>