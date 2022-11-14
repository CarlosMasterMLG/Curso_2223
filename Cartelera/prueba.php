<html>
<head>
    <title>Prueba</title>
    <link rel="stylesheet" href="stylePrueba.css">
</head>
<body>
    <div class="contenedor">
        <div class="primera_caja">
            <h1>Carlos Productions Cinema</h1>
            <a href="index.php">INICIO</a>
            <a href="pagina1.php">TERROR</a>
            <a href="pagina2.php">CIENCIA FICCIÓN</a>
        </div>

        <div class='segunda_caja'>
                    <div class='bordeIzquierdo'></div>
                    <div class='primera_columna'>
                        <h1 class="titulo">La cosa</h1>
                        <img src="imgs/terror/the_thing.jpg">
                        <p>Duración: 105 min.</p>
                    </div>
                    <div class='segunda_columna'>
                        <p>Año: ".$anyos[$i]."</p>
                        <p>Duración:  ".$duraciones[$i]."</p>
                        <p>Dirección: ".$directores[$i]."</p>
                        <p>Guion: ".$guionistas[$i]."</p>
                        <p>Música: ".$musicos[$i]."</p>
                        <p>Fotografía: ".$fotografos[$i]."</p>
                        <p>Reparto: ".$actores[$i]."</p>
                        <p>Compañías: ".$companias[$i]."</p>
                        <p>Género: ".$generos[$i]."</p>
                    </div>
                    <div class='tercera_columna'>
                        <p>Sinopsis<br>".$sinopsis[$i]."</p>
                        <div class='puntuacion'>
                            <p>Puntuación: ".$puntuaciones[$i]."</p>
                            <p>Tu voto</p>
                            <select name='notas' id='notas'>
                                <option value='No vista'>No vista</option>
                                <option value='10'>10 Excelente</option>
                                <option value='9'>9 Muy buena</option>
                                <option value='8'>8 Notable</option>
                                <option value='7'>7 Buena</option>
                                <option value='6'>6 Interesante</option>
                                <option value='5'>5 Pasable</option>
                                <option value='4'>4 Regular</option>
                                <option value='3'>3 Floja</option>
                                <option value='2'>2 Mala</option>
                                <option value='1'>1 Muy mala</option>
                            </select>
                        </div>
                    </div>
                    <div class='bordeDerecho'></div>
                </div>

                <div class='segunda_caja'>
                    <div class='bordeIzquierdo'></div>
                    <div class='primera_columna'>
                        <img src=".$posters[$i].">
                    </div>
                    <div class='segunda_columna'>
                        <h1>".$titulos[$i]."</h1>
                        <p>Año: ".$anyos[$i]."</p>
                        <p>Duración:  ".$duraciones[$i]."</p>
                        <p>Dirección: ".$directores[$i]."</p>
                        <p>Guion: ".$guionistas[$i]."</p>
                        <p>Música: ".$musicos[$i]."</p>
                        <p>Fotografía: ".$fotografos[$i]."</p>
                        <p>Reparto: ".$actores[$i]."</p>
                        <p>Compañías: ".$companias[$i]."</p>
                        <p>Género: ".$generos[$i]."</p>
                    </div>
                    <div class='tercera_columna'>
                        <p>Sinopsis<br>".$sinopsis[$i]."</p>
                        <div class='puntuacion'>
                            <p>Puntuación: ".$puntuaciones[$i]."</p>
                            <p>Tu voto</p>
                            <select name='notas' id='notas'>
                                <option value='No vista'>No vista</option>
                                <option value='10'>10 Excelente</option>
                                <option value='9'>9 Muy buena</option>
                                <option value='8'>8 Notable</option>
                                <option value='7'>7 Buena</option>
                                <option value='6'>6 Interesante</option>
                                <option value='5'>5 Pasable</option>
                                <option value='4'>4 Regular</option>
                                <option value='3'>3 Floja</option>
                                <option value='2'>2 Mala</option>
                                <option value='1'>1 Muy mala</option>
                            </select>
                        </div>
                    </div>
                    <div class='bordeDerecho'></div>
                </div>

                <div class='tercera_caja'></div>
        
</body>
</html>