<html>
<head>
    <title>Ciencia Ficción</title>
    <link rel="stylesheet" href="styleCF.css">
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
            $posters = array("imgs/ciencia_ficción/akira.jpg", "imgs/ciencia_ficción/back_to_the_future.jpg", "imgs/ciencia_ficción/back_to_the_future_2.jpg",
            "imgs/ciencia_ficción/back_to_the_future_3.jpg", "imgs/ciencia_ficción/desafio_total.jpg", "imgs/ciencia_ficción/kung_fury.jpg", "imgs/ciencia_ficción/terminator.jpg",
            "imgs/ciencia_ficción/terminator_2.jpg", "imgs/ciencia_ficción/the_matrix.jpg", "imgs/ciencia_ficción/tron.jpg"
        );

            $titulos = array("Akira", "Regreso al futuro", "Regreso al futuro 2", "Regreso al futuro 3", "Desafio total", "Kung Fury", "Terminator", "Terminator 2", "Matrix", "Tron");

            $anyos = array(1988, 1985, 1989, 1990, 1990, 2015, 1984, 1991, 1999, 1982);

            $duraciones = array("124 min.", "116 min.", "105 min.", "118 min.", "109 min.", "31 min.", "108 min.", "135 min.", "131 min.", "82 min.");

            $directores = array("Katsuhiro Ōtomo", "Robert Zemeckis", "Robert Zemeckis", "Robert Zemeckis", "Paul Verhoeven", "David Sandberg", "James Cameron", "James Cameron", "Steven Lisberger",
                                "Lilly Wachowski, Lana Wachowski, Hermanas Wachowski");

            $guionistas = array(
                "Katsuhiro Ōtomo, Izo Hashimoto. Manga: Katsuhiro Ōtomo",
                "Bob Gale, Robert Zemeckis",
                "Bob Gale, Robert Zemeckis",
                "Bob Gale, Robert Zemeckis",
                "Dan O'Bannon, Gary Goldman, Ronald Shusett. Relato: Philip K. Dick",
                "David Sandberg",
                "James Cameron, Gale Anne Hurd",
                "James Cameron, William Wisher Jr.",
                "Lilly Wachowski, Lana Wachowski",
                "Steven Lisberger. Historia: Steven Lisberger, Bonnie Macbird"
            );
            $musicos = array("Shoji Yamashiro", "Alan Silvestri", "Alan Silvestri", "Alan Silvestri", "Jerry Goldsmith", "Mitch Murder, Lost Years", "Brad Fiedel", "Brad Fiedel", "Don Davis", "Wendy Carlos");

            $fotografos = array("Animación", "Dean Cundey", "Dean Cundey", "Dean Cundey", "Jost Vacano", "Martin Gärdemalm, Jonas Ernhill, Mattias Andersson", "Adam Greenberg", "Adam Greenberg", "Bill Pope", "Bruce Logan");
            
            $actores = array(
                "Animación",
                "Michael J. Fox, Christopher Lloyd, Lea Thompson, Crispin Glover, Claudia Wells, Thomas F. Wilson, James Tolkan, Billy Zane, Sachi Parker, Marc McClure, George DiCenzo, Frances Lee McCain, Wendie Jo Sperber, Casey Siemaszko, J.J. Cohen, Donald Fullilove, Harry Waters Jr., Elsa Raven, Lisa Freeman, Will Hare, Ivy Bethune",
                "Michael J. Fox, Christopher Lloyd, Lea Thompson, Thomas F. Wilson, Elisabeth Shue, Charles Fleischer, Joe Flaherty, Harry Waters Jr., Billy Zane, Elijah Wood, Jeffrey Weissman, James Tolkan, Casey Siemaszko, Ricky Dean Logan, J.J. Cohen, Darlene Vogel, Jason Scott Lee, Marty Levy, Al White, Jim Ishida",
                "Michael J. Fox, Christopher Lloyd, Mary Steenburgen, Thomas F. Wilson, Lea Thompson, Elisabeth Shue, Matt Clark, Richard Dysart, Jeffrey Weissman, James Tolkan",
                "Arnold Schwarzenegger, Sharon Stone, Michael Ironside, Rachel Ticotin, Ronny Cox, Marshall Bell, Mel Johnson Jr., Ray Baker, Michael Champion, Roy Brocksmith, Lycia Naff, Debbie Lee Carrington, Dean Norris, Alexia Robinson, Erika Carlsson",
                "David Sandberg, Jorma Taccone, Steven Chew, Leopold Nilsson, Andreas Cahling, Erik Hornqvist, Eleni Young, Helene Ahlson, Per-Henrik Arvidius, Magnus Betnér, Björn Gustafsson, Eos Karlsson, David Hasselhoff, Frank Sanderson",
                "Arnold Schwarzenegger, Linda Hamilton, Michael Biehn, Paul Winfield, Lance Henriksen, Rick Rossovich, Bess Motta, Earl Boen, Dick Miller, Bill Paxton, Franco Columbu, Brian Thompson, Brad Rearden",
                "Arnold Schwarzenegger, Linda Hamilton, Edward Furlong, Robert Patrick, Earl Boen, Joe Morton, S. Epatha Merkerson, Danny Cooksey, Cástulo Guerra, Jenette Goldstein, Xander Berkeley, Michael Edwards, Dean Norris",
                "Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss, Joe Pantoliano, Hugo Weaving, Marcus Chong, Gloria Foster, Matt Doran, Belinda McClory, Julian Arahanga, Anthony Ray Parker, Paul Goddard, Robert Taylor, Marc Aden Gray",
                "Jeff Bridges, Bruce Boxleitner, David Warner, Cindy Morgan, Barnard Hughes, Dan Shor, Peter Jurasik, Tony Stephano, Craig Chudy, Michael Dudikoff"
            );
            $companias = array(
                "Akira Committee Company Ltd., TMS Entertainment, Bandai Co., Ltd., Kodansha, Mainichi Broadcasting, Toho, Sumitomo Corporation",
                "Universal Pictures, Amblin Entertainment",
                "Universal Pictures, Amblin Entertainment, U-Drive Productions. Distribuidora: Universal Pictures",
                "Universal Pictures",
                "Carolco Pictures. Distribuidora: TriStar Pictures",
                "Laser Unicorns, Lampray",
                "Pacific Western, Hemdale. Distribuidora: Orion Pictures",
                "Carolco Pictures, Pacific Western, Lightstorm Entertainment. Productor: James Cameron. Distribuidora: TriStar Pictures",
                "Warner Bros., Village Roadshow, Groucho Film Partnership. Productor: Joel Silver",
                "Walt Disney Productions, Lisberger/Kushner"
            );
            $generos = array(
                "Animación. Ciencia ficción. Acción. Thriller | Cyberpunk. Thriller futurista. Animación para adultos. Película de culto. Manga. Holocausto nuclear. Futuro postapocalíptico",
                "Ciencia ficción. Comedia. Fantástico. Aventuras | Viajes en el tiempo. Comedia juvenil. Adolescencia. Cine familiar. Película de culto",
                "Ciencia ficción. Comedia. Fantástico. Aventuras | Viajes en el tiempo. Comedia juvenil. Cine familiar. Secuela",
                "Ciencia ficción. Comedia. Fantástico. Aventuras. Western | Viajes en el tiempo. Comedia juvenil. Cine familiar. Secuela",
                "Ciencia ficción. Acción | Distopía. Película de culto",
                "Ciencia ficción. Acción. Comedia. Aventuras | Años 80. Viajes en el tiempo. Parodia. Vikingos. Nazismo. Dinosaurios. Robots. Mediometraje",
                "Ciencia ficción. Acción | Robots. Viajes en el tiempo. Película de culto",
                "Ciencia ficción. Acción | Secuela. Robots. Viajes en el tiempo. Película de culto",
                "Ciencia ficción. Fantástico. Acción. Thriller | Thriller futurista. Mundo virtual. Cyberpunk. Distopía. Internet / Informática. Artes marciales. Película de culto",
                "Ciencia ficción. Fantástico. Acción | Internet / Informática. Mundo virtual. Cyberpunk. Película de culto"
            );
            $sinopsis = array(
                "Año 2019. Neo-Tokyo es una ciudad construida sobre las ruinas de la antigua capital japonesa destruida tras la Tercera Guerra Mundial. Japón es un país al borde del colapso que sufre continuas crisis políticas. En secreto, un equipo de científicos ha reanudado por orden del ejército un experimento para encontrar a individuos que puedan controlar el arma definitiva: una fuerza denominada 'la energía absoluta'. Pero los habitantes de Neo-Tokyo tienen otras cosas de las que preocuparse. Uno de ellos es Kaneda, un joven pandillero líder de una banda de motoristas. Durante una pelea, su mejor amigo, Tetsuo, sufre un extraño accidente y termina ingresado en unas instalaciones militares. Allí los científicos descubrirán que es el poseedor de la energía absoluta. Pero Tetsuo, que no se resigna a convertirse en un conejillo de indias, muy pronto se convertirá en la amenaza más grande que el mundo ha conocido.",
                "El adolescente Marty McFly es amigo de Doc, un científico al que todos toman por loco. Cuando Doc crea una máquina para viajar en el tiempo, un error fortuito hace que Marty llegue a 1955, año en el que sus futuros padres aún no se habían conocido. Después de impedir su primer encuentro, deberá conseguir que se conozcan y se casen; de lo contrario, su existencia no sería posible.",
                "Aunque a Marty McFly todavía le falta tiempo para asimilar el hecho de estar viviendo dentro de la familia perfecta gracias a su anterior viaje en el tiempo, no le queda ni espacio para respirar cuando su amigo Doc aparece de improviso con la máquina del tiempo (mucho más modernizada), e insta a que le acompañen él y su novia a viajar al futuro para solucionar un problema con la ley que tendrá uno de sus futuros hijos. En la tremenda vorágine futurista, con todo lo que ello conlleva, del Hill Valley de 2015, la presencia de tales viajeros temporales causará un efecto mayor que el que iban a arreglar. Un almanaque deportivo y la posesión del secreto de la existencia de la máquina del tiempo por parte del siempre villano Biff Tannen, serán los ingredientes que conjugarán una causa-efecto en el pasado, en el presente y en el propio futuro, que hará que Marty y Doc se tengan que emplear a fondo para poner fin a la catástrofe a la que les lleva el destino.",
                "Marty McFly sigue en 1955 y su amigo Doc ha retrocedido al año 1885, la época del salvaje oeste. Éste le envía una carta donde comenta que la máquina del tiempo está averiada, y que es imposible repararla. Sin embargo no le preocupa estar atrapado en el pasado, pues allí es muy feliz trabajando de herrero aunque convive con malhechores. Pero Marty descubre una vieja tumba en la que lee que Doc murió en 1885 y, sin pensárselo dos veces, irá a rescatar a su amigo.",
                "La Tierra, año 2084. Doug Quaid, un hombre que lleva una vida aparentemente tranquila, vive atormentado por una pesadilla que todas las noches lo transporta a Marte. Decide entonces recurrir al laboratorio de Recall, una empresa de vacaciones virtuales que le ofrece la oportunidad de materializar su sueño gracias a un fuerte alucinógeno, pero la droga hace aflorar a su memoria una estancia verdadera en Marte cuando era el más temido agente del cruel Coohagen.",
                "Cuenta la historia de un policía renegado (llamado Kung Fury) que persigue a su archienemigo (Hitler) a través del tiempo. Comedia de acción que rinde homenaje al cine ochentero. Incluye dinosaurios, nazis, vikingos y robots.",
                "Los Ángeles, año 2029. Las máquinas dominan el mundo. Los rebeldes que luchan contra ellas tienen como líder a John Connor, un hombre que nació en los años ochenta. Para acabar con la rebelión, las máquinas deciden enviar al pasado a un robot -Terminator- cuya misión será eliminar a Sarah Connor, la madre de John, e impedir así su nacimiento.",
                "Sarah Connor, la madre soltera del rebelde John Connor, está ingresada en un psiquiátrico. Algunos años antes, un viajero del tiempo le había revelado que su hijo sería el salvador de la humanidad en un futuro dominado por las máquinas. Se convirtió entonces en una especie de guerrera y educó a su hijo John en tácticas de supervivencia. Esta es la razón por la que está recluida en un manicomio. Cuando un nuevo androide mejorado, un T-1000, llega del futuro para asesinar a John, un viejo modelo T-800 será enviado para protegerle.",
                "Thomas Anderson es un brillante programador de una respetable compañía de software. Pero fuera del trabajo es Neo, un hacker que un día recibe una misteriosa visita...",
                "Un hacker es dividido en moléculas y transportado a las entrañas de un ordenador en el que un malvado programa controla los comportamientos a su antojo."
            );
            $puntuaciones = array(9, 10, 10, 10, 8, 10, 7, 10, 10, 5);

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