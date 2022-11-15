<html>
<head>
    <?php
        $style;
        $titulo;
        $numCategoria = $_GET['categoria'];
        if ($numCategoria==1) {
            $style = 'stylePrueba';
            $titulo = 'TERROR';
        } else{
            $style = 'styleCF';
            $titulo = 'CIENCIA FICCION';
        }
    ?>
    <title><?php echo $titulo?></title>
    <link rel="stylesheet" href="<?php echo $style?>.css">
    <link rel="shortut icon" type="image/png" href="imgs/ghostface_icon.png" sizes="32x32">
    
</head>
<body>
    <div class="contenedor">
        <div class="primera_caja">
            <h1>TERROR</h1>
            <a href="index.php">INICIO</a>
        </div>

        <?php
        $posters = array("imgs/terror/alien_el_octavo_pasajero.jpg", "imgs/terror/el_amanecer_de_los_muertos.jpg", "imgs/terror/get_out.jpg", "imgs/terror/jaws.jpg", "imgs/terror/midsommar.jpg",
            "imgs/terror/the_exorcist.jpg", "imgs/terror/the_shining.jpg", "imgs/terror/the_thing.jpg", "imgs/terror/train_to_busan.jpg", "imgs/terror/willys_wonderland.jpg");

        $titulos = array("Alien", "El amanecer de los muertos", "Dejame salir", "Tiburón", "Midsommar", "El exorcista", "El resplandor", "La cosa", "Tren a Busan", "Willy's Wonderland");

        $duraciones = array("116 min.", "100 min.", "103 min.", "124 min.", "145 min.", "121 min.", "146 min.", "105 min.", "118 min.", "88 min.");

        $sinopsis = array(
            "De regreso a la Tierra, la nave de carga Nostromo interrumpe su viaje y despierta a sus siete tripulantes. El ordenador central, MADRE, ha detectado la misteriosa transmisión de una forma de vida desconocida, procedente de un planeta cercano aparentemente deshabitado. La nave se dirige entonces al extraño planeta para investigar el origen de la comunicación.",
            "Remake del filme de terror de George A. Romero. Una inexplicable plaga ha diezmado la población del planeta, convirtiendo a los muertos en horribles zombies que continuamente buscan carne y sangre humana para sobrevivir. En Wisconsin, un variopinto grupo de personas que han escapado a la plaga, tratan de salvar la vida refugiándose en un centro comercial, donde deben aprender no sólo a protegerse de las hordas de zombies, sino también a convivir.",
            "Un joven afroamericano visita a la familia de su novia blanca, un matrimonio adinerado. Para Chris (Daniel Kaluuya) y su novia Rose (Allison Williams) ha llegado el momento de conocer a los futuros suegros, por lo que ella le invita a pasar un fin de semana en el campo con sus padres, Missy (Catherine Keener) y Dean (Bradley Whitford). Al principio, Chris piensa que el comportamiento 'demasiado' complaciente de los padres se debe a su nerviosismo por la relación interracial de su hija, pero a medida que pasan las horas, una serie de descubrimientos cada vez más inquietantes le llevan a descubrir una verdad inimaginable.",
            "En la costa de un pequeño pueblo del Este de los Estados Unidos, un enorme tiburón ataca a varias personas. Por temor a los nefastos efectos que este hecho podría tener sobre el negocio turístico, el alcalde se niega a cerrar las playas y a difundir la noticia. Pero un nuevo ataque del tiburón termina con la vida de un bañista. Cuando el terror se apodera de todos, un veterano cazador de tiburones, un oceanógrafo y el jefe de la policía local se unen para intentar capturar al escualo.",
            "Una pareja estadounidense que no está pasando por su mejor momento acude con unos amigos al Midsommar, un festival de verano que se celebra cada 90 años en una aldea remota de Suecia. Lo que comienza como unas vacaciones de ensueño en un lugar en el que el sol no se pone nunca, poco a poco se convierte en una oscura pesadilla cuando los misteriosos aldeanos les invitan a participar en sus perturbadoras actividades festivas.",
            "Regan, una niña de doce años, sufre fenómenos paranormales como la levitación o la manifestación de una fuerza sobrehumana. Su madre, aterrorizada, tras someter a su hija a múltiples análisis médicos que no ofrecen ningún resultado, acude a un sacerdote con estudios de psiquiatría. Éste, convencido de que el mal no es físico sino espiritual, cree que se trata de una posesión diabólica, y decide practicar un exorcismo... Adaptación de la novela de William Peter Blatty que se inspiró en un exorcismo real ocurrido en Washington en 1949.",
            "Jack Torrance se traslada con su mujer y su hijo de siete años al impresionante hotel Overlook, en Colorado, para encargarse del mantenimiento de las instalaciones durante la temporada invernal, época en la que permanece cerrado y aislado por la nieve. Su objetivo es encontrar paz y sosiego para escribir una novela. Sin embargo, poco después de su llegada al hotel, al mismo tiempo que Jack empieza a padecer inquietantes trastornos de personalidad, se suceden extraños y espeluznantes fenómenos paranormales.",
            "En una estación experimental remota de la Antártida, un equipo de científicos de investigación estadounidenses ven cómo en su campamento base un helicóptero noruego dispara contra un perro de trineo. Cuando acogen al perro, éste ataca brutalmente tanto a los seres humanos como a los caninos del campamento, y descubren que la bestia, de origen desconocido, puede asumir la forma de sus víctimas...",
            "Un virus letal se expande por Corea del Sur, provocando violentos altercados. Los pasajeros de un tren KTX que viaja de Seúl a Busan tendrán que luchar por su supervivencia.",
            "Un hombre solitario (Cage) se ve obligado a quedarse en un remoto pueblo de Nevada cuando su coche se avería. Allí, un mecánico se ofrece a repararle el vehículo a cambio de que él trabaje de conserje nocturno en Willy's Wonderland, un local de entretenimiento familiar abandonado hace ya tiempo, que se acaba convirtiendo en una auténtica pesadilla. Allí tendrá que luchar contra un monstruo tras otro para sobrevivir hasta el día siguiente.");
        $puntuaciones = array(8, 6, 7, 7, 7, 8, 10, 10, 8, 7);

        for ($i=0; $i < count($posters); $i++) { 
                    
            $sinopsisReducida = substr($sinopsis[$i], 0, 280);

            echo "<div class='segunda_caja'>
            <div class='bordeIzquierdo'></div>
            <div class='primera_columna'>
                    <h1 class='titulo'>$titulos[$i]</h1>
                    <img src='$posters[$i]'>
                    <p class='duracion'>$duraciones[$i].</p>
            </div>
            <div class='segunda_columna'>
                <p>
                    $sinopsisReducida ...
                </p>
            </div>
            <div class='tercera_columna'>
                <div class='puntuacion'>
                    <p>Puntuación: $puntuaciones[$i]</p>
                    <p>Tu puntuación</p>
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
            <div class='verFicha'>
                <a href=''>Ver Ficha</a>
            </div>
        </div>
        <div class='bordeDerecho'></div>
    </div>";
        }
        echo "<div class='tercera_caja'></div>";
        ?>
        
</body>
</html>