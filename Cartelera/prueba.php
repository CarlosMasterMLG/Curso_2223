<html>
<head>
    <title>PRUEBA</title>
    <link rel="stylesheet" href="styleTerror.css">
</head>
<body>
    <div class="contenedor">
        <div class="primera_caja">
            <h1>Carlos Productions Cinema</h1>
            <a href="index.php">CATEGORIAS:</a>
            <a href="pagina1.php">TERROR</a>
            <a href="pagina2.php">CIENCIA FICCIÓN</a>
        </div>

        <?php

            $posters = array(
                "imgs/terror/alien_el_octavo_pasajero.jpg",
                "imgs/terror/el_amanecer_de_los_muertos.jpg",
                "imgs/terror/get_out.jpg"
            );
            $titulos = array("Alien", "El amanecer de los muertos", "Dejame salir");
            $anyos = array(1979, 2004, 2017);
            $duraciones = array("116 min.", "100 min.", "103 min.");
            $directores = array("Ridley Scott", "Zack Snyder", "Jordan Peele");
            $guionistas = array(
                "Dan O'Bannon. Historia: Ronald Shusett. Personaje: H.R. Giger",
                "James Gunn. Remake: George A. Romero",
                "Jordan Peele");
            $musicos = array("Jerry Goldsmith", "Tyler Bates", "Michael Abels");
            $fotografos = array("Derek Vanlint", "Matthew F. Leonetti", "Toby Oliver");
            $actores = array(
                "Sigourney Weaver, John Hurt, Yaphet Kotto, Tom Skerritt, Veronica Cartwright, Harry Dean Stanton, Ian Holm",
                "Sarah Polley, Ving Rhames, Jake Weber, Mekhi Phifer, Ty Burrell, Michael Kelly, Kevin Zegers, Michael Barry, Lindy Booth, Tom Savini, Bruce Bohne, Jayne Eastwood, Boyd Banks, Inna Korobkina, R.D. Reid, Kim Poirier, Matt Frewer, Justin Louis, Hannah Lochner, Ermes Blarasin, Sanjay Talwar, Kim Roberts, Tim Post, Matt Sadowski, Philip DeWilde, Colm Magner, Luigia Zucaro, Geoff Williams, Mike Realba, Phillip MacKenzie, Laura DeCarteret, Georgia Craig, Tino Monte, Chris Gillett, Derek Keurvorst, Dan Duran, Neville Edwards, Sandy Jobin-Bevans, Natalie Brown, Liz West, Scott H. Reiniger, Ken Foree",
                "Daniel Kaluuya, Allison Williams, Catherine Keener, Bradley Whitford, Betty Gabriel, Caleb Landry Jones, Lyle Brocato, Ashley LeConte Campbell, Marcus Henderson, Lil Rel Howery, Jeronimo Spinx, Rutherford Cravens, Lakeith Stanfield"
            );
            $companias = array(
                "20th Century Fox, Brandywine Productions",
                "Strike Entertainment, New Amsterdam Entertainment, Metropolitan Filmexport, Toho-Towa. Distribuidora: Universal Pictures",
                "Blumhouse Productions, QC Entertainment"
            );
            $generos = array(
                "Ciencia ficción. Terror | Extraterrestres. Aventura espacial. Película de culto",
                "Terror. Ciencia ficción | Gore. Zombis. Remake",
                "Intriga. Terror. Thriller | Thriller psicológico. Comedia negra. Racismo. Familia"
            );
            $sinopsis = array(
                "De regreso a la Tierra, la nave de carga Nostromo interrumpe su viaje y despierta a sus siete tripulantes. El ordenador central, MADRE, ha detectado la misteriosa transmisión de una forma de vida desconocida, procedente de un planeta cercano aparentemente deshabitado. La nave se dirige entonces al extraño planeta para investigar el origen de la comunicación.",
                "Remake del filme de terror de George A. Romero. Una inexplicable plaga ha diezmado la población del planeta, convirtiendo a los muertos en horribles zombies que continuamente buscan carne y sangre humana para sobrevivir. En Wisconsin, un variopinto grupo de personas que han escapado a la plaga, tratan de salvar la vida refugiándose en un centro comercial, donde deben aprender no sólo a protegerse de las hordas de zombies, sino también a convivir.",
                "Un joven afroamericano visita a la familia de su novia blanca, un matrimonio adinerado. Para Chris (Daniel Kaluuya) y su novia Rose (Allison Williams) ha llegado el momento de conocer a los futuros suegros, por lo que ella le invita a pasar un fin de semana en el campo con sus padres, Missy (Catherine Keener) y Dean (Bradley Whitford). Al principio, Chris piensa que el comportamiento 'demasiado' complaciente de los padres se debe a su nerviosismo por la relación interracial de su hija, pero a medida que pasan las horas, una serie de descubrimientos cada vez más inquietantes le llevan a descubrir una verdad inimaginable."
            );
            $puntuaciones = array(8, 6, 7);

            
                for ($i=0; $i < count($posters); $i++) { 
                    
                    echo "<div class='segunda_caja'>
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
                        <p>Puntuación: ".$puntuaciones[$i]."</p>
                        
                        <div class='puntuacion'>
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
                </div>";
                    
                }

                echo "<div class='tercera_caja'></div>";



        ?>
        
</body>
</html>

