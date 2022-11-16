<html>
<head>
    <title>Terror</title>
    <link rel="stylesheet" href="styleTerror.css">
</head>
<body>
    <div class="contenedor">
        <div class="primera_caja">
            <h1>Carlos Productions Cinema</h1>
            <a href="index.php">INICIO</a>
            <a href="pagina1.php">TERROR</a>
            <a href="pagina2.php">CIENCIA FICCIÓN</a>
        </div>

        <?php
            $posters = array("imgs/terror/alien_el_octavo_pasajero.jpg", "imgs/terror/el_amanecer_de_los_muertos.jpg", "imgs/terror/get_out.jpg", "imgs/terror/jaws.jpg", "imgs/terror/midsommar.jpg",
                "imgs/terror/the_exorcist.jpg", "imgs/terror/the_shining.jpg", "imgs/terror/the_thing.jpg", "imgs/terror/train_to_busan.jpg", "imgs/terror/willys_wonderland.jpg");

            $titulos = array("Alien", "El amanecer de los muertos", "Dejame salir", "Tiburón", "Midsommar", "El exorcista", "El resplandor", "La cosa", "Tren a Busan", "Willy's Wonderland");

            $anyos = array(1979, 2004, 2017, 1975, 2019, 1973, 1980, 1982, 2016, 2021);

            $duraciones = array("116 min.", "100 min.", "103 min.", "124 min.", "145 min.", "121 min.", "146 min.", "105 min.", "118 min.", "88 min.");

            $directores = array("Ridley Scott", "Zack Snyder", "Jordan Peele", "Steven Spielberg", "Ari Aster", "William Friedkin", "Stanley Kubrick", "John Carpenter", "Yeon Sang-ho", "Kevin Lewis");

            $guionistas = array("Dan O'Bannon. Historia: Ronald Shusett. Personaje: H.R. Giger", "James Gunn. Remake: George A. Romero", "Jordan Peele", "Peter Benchley, Carl Gottlieb. Novela: Peter Benchley",
                "Ari Aster", "William Peter Blatty. Novela: William Peter Blatty", "Stanley Kubrick, Diane Johnson. Novela: Stephen King", "Bill Lancaster. Novela: John W. Campbell",
                "Yeon Sang-ho, Park Joo-suk", "G.O. Parsons"
            );
            $musicos = array("Jerry Goldsmith", "Tyler Bates", "Michael Abels", "John Williams", "Bobby Krlic", "Jack Nitzsche", "Rachel Elkind, Wendy Carlos", "Ennio Morricone", "Young-gyu Jang", "Émoi");

            $fotografos = array("Derek Vanlint", "Matthew F. Leonetti", "Toby Oliver", "Bill Butler", "Pawel Pogorzelski", "Owen Roizman", "John Alcott", "Dean Cundey", "Lee Hyung-deok", "David Newbert");
            
            $actores = array(
                "Sigourney Weaver, John Hurt, Yaphet Kotto, Tom Skerritt, Veronica Cartwright, Harry Dean Stanton, Ian Holm",
                "Sarah Polley, Ving Rhames, Jake Weber, Mekhi Phifer, Ty Burrell, Michael Kelly, Kevin Zegers, Michael Barry, Lindy Booth, Tom Savini, Bruce Bohne, Jayne Eastwood, Boyd Banks, Inna Korobkina, R.D. Reid, Kim Poirier, Matt Frewer, Justin Louis, Hannah Lochner, Ermes Blarasin, Sanjay Talwar, Kim Roberts, Tim Post, Matt Sadowski, Philip DeWilde, Colm Magner, Luigia Zucaro, Geoff Williams, Mike Realba, Phillip MacKenzie, Laura DeCarteret, Georgia Craig, Tino Monte, Chris Gillett, Derek Keurvorst, Dan Duran, Neville Edwards, Sandy Jobin-Bevans, Natalie Brown, Liz West, Scott H. Reiniger, Ken Foree",
                "Daniel Kaluuya, Allison Williams, Catherine Keener, Bradley Whitford, Betty Gabriel, Caleb Landry Jones, Lyle Brocato, Ashley LeConte Campbell, Marcus Henderson, Lil Rel Howery, Jeronimo Spinx, Rutherford Cravens, Lakeith Stanfield",
                "Roy Scheider, Robert Shaw, Richard Dreyfuss, Lorraine Gary, Murray Hamilton, Carl Gottlieb, Jeffrey C. Kramer, Susan Backlinie, Jonathan Filley, Chris Rebello, Jay Mello, Craig Kingsbury, Jeffrey Voorhees, Lee Fierro, Ted Grossman, Robert Chambers, Peter Benchley",
                "Florence Pugh, Jack Reynor, Will Poulter, William Jackson Harper, Ellora Torchia, Archie Madekwe, Vilhelm Blomgren, Julia Ragnarsson, Anna Åström, Anki Larsson, Lars Väringer, Katarina Weidhagen van Hal, Isabelle Grill, Björn Andrésen",
                "Linda Blair, Max von Sydow, Ellen Burstyn, Jason Miller, Lee J. Cobb, Kitty Winn, Jack MacGowran, Arthur Storch, Barton Heyman, Gina Petrushka, John Mahon, William O'Malley, Peter Masterson, Rudolf Schündler, Robert Symonds, Thomas Bermingham, Vasiliki Maliaros, Titos Vandis, Wallace Rooney, Ron Faber, Donna Mitchell, Roy Cooper, Robert Gerringer, Mercedes McCambridge",
                "Jack Nicholson, Shelley Duvall, Danny Lloyd, Scatman Crothers, Barry Nelson, Philip Stone, Joe Turkel, Lia Beldam, Billie Gibson, Barry Dennen, David Baxt, Manning Redwood, Lisa Burns, Alison Coleridge, Norman Gay, Tony Burton, Anne Jackson, Jana Shelden, Burnell Tucker",
                "Kurt Russell, Wilford Brimley, Keith David, David Clennon, Richard Dysart, Donald Moffat, Richard Masur, T.K. Carter, Charles Hallahan, Peter Maloney, Joel Polis, Thomas G. Waites",
                "Gong Yoo, Ma Dong-seok, Ahn So-hee, Kim Soo-an, Jeong Yu-mi, Kim Eui-sung, Choi Woo-sik, Shim Eun-kyung, Choi Gwi-hwa, Jang Hyuk-jin, Ye Soo-jung, Park Myeong-Shin, Jeong Seok-yong, Chang-hwan Kim, Kim Jae-rok, Seong-soo Han, Hye-Yeong Moon, Do-im Woo",
                "Nicolas Cage, Emily Tosta, Caylee Cowan, Beth Grant, Terayle Hill, Grant Cramer, Ric Reitz, Chris Schmidt Jr., Duke Jackson, David Sheftell, Christian Delgrosso, Taylor Towery, Jiri Stanek, Jonathan Mercedes, Jessica Graves, Chris Warner, BJ Guyer, Olga Cramer, Chris Padilla, D.J. Stavropoulos"
            );
            $companias = array(
                "20th Century Fox, Brandywine Productions",
                "Strike Entertainment, New Amsterdam Entertainment, Metropolitan Filmexport, Toho-Towa. Distribuidora: Universal Pictures",
                "Blumhouse Productions, QC Entertainment",
                "Zanuck/Brown. Distribuidora: Universal Pictures",
                "Coproducción Estados Unidos-Suecia-Hungría; B-Reel Films, Parts and Labor. Distribuidora: A24",
                "Warner Bros., Hoya Productions",
                "Coproducción Reino Unido-Estados Unidos; Hawk Films, Peregrine, Warner Bros., Producers Circle. Distribuidora: Warner Bros.",
                "Universal Pictures, Turman-Foster Company",
                "Next Entertainment World, RedPeter Film",
                "JD Entertainment, Landafar Entertainment, Landmark Studio Group. Distribuidora: VVS Films"
            );
            $generos = array(
                "Ciencia ficción. Terror | Extraterrestres. Aventura espacial. Película de culto",
                "Terror. Ciencia ficción | Gore. Zombis. Remake",
                "Intriga. Terror. Thriller | Thriller psicológico. Comedia negra. Racismo. Familia",
                "Terror. Drama | Animales. Tiburones. Película de culto",
                "Terror. Intriga. Drama | Vida rural. Sectas",
                "Terror | Posesiones / Exorcismos. Religión. Sobrenatural. Película de culto",
                "Terror | Sobrenatural. Casas encantadas. Fantasmas. Drama psicológico. Película de culto",
                "Ciencia ficción. Terror. Fantástico | Película de culto. Extraterrestres. Remake. Zonas frías/polares",
                "Terror. Acción. Ciencia ficción. Drama | Trenes / Metros. Zombis. Familia",
                "Terror. Comedia. Fantástico. Acción | Monstruos. Robots. Comedia de terror"
            );
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
                "Un hombre solitario (Cage) se ve obligado a quedarse en un remoto pueblo de Nevada cuando su coche se avería. Allí, un mecánico se ofrece a repararle el vehículo a cambio de que él trabaje de conserje nocturno en Willy's Wonderland, un local de entretenimiento familiar abandonado hace ya tiempo, que se acaba convirtiendo en una auténtica pesadilla. Allí tendrá que luchar contra un monstruo tras otro para sobrevivir hasta el día siguiente."
            );
            $puntuaciones = array(8, 6, 7, 7, 7, 8, 10, 10, 8, 7);

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
                </div>";
                    
                }

                echo "<div class='tercera_caja'></div>";
        ?>
        
</body>
</html>