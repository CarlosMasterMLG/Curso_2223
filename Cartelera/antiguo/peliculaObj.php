<?php
    class Pelicula{
        public $id; // el parametro ?ficha que se pasa en peliculas.php por get al entrar en la ficha
        public $titulo;
        public $portada;
        public $anyo;
        public $duracion;
        public $direccion;
        public $guion;
        public $musica;
        public $fotografia;
        public $reparto;
        public $companyias;
        public $genero;
        public $sinopsis;
        public $puntuacion;

        public function __construct($id,$titulo,$portada,$anyo,$duracion,$direccion,
                                    $guion,$musica,$fotografia,$reparto,$companyias,
                                    $genero,$sinopsis,$puntuacion)
            {
             $this->id=$id;
             $this->titulo=$titulo;
             $this->portada=$portada;
             $this->anyo=$anyo;
             $this->duracion=$duracion;
             $this->direccion=$direccion;
             $this->guion=$guion;
             $this->musica=$musica;
             $this->fotografia=$fotografia;
             $this->reparto=$reparto;
             $this->companyias=$companyias;
             $this->genero=$genero;
             $this->sinopsis=$sinopsis;
             $this->puntuacion=$puntuacion;
        }

        public function getId(){
            return $this->id;
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function getPortada(){
            return $this->portada;
        }

        public function getAnyo(){
            return $this->anyo;
        }

        public function getDuracion(){
            return $this->duracion;
        }

        public function getDireccion(){
            return $this->direccion;
        }

        public function getGuion(){
            return $this->guion;
        }

        public function getMusica(){
            return $this->musica;
        }

        public function getFotografia(){
            return $this->fotografia;
        }

        public function getReparto(){
            return $this->reparto;
        }

        public function getCompanyias(){
            return $this->companyias;
        }

        public function getGenero(){
            return $this->genero;
        }

        public function getSinopsis(){
            return $this->sinopsis;
        }

        public function getPuntuacion(){
            return $this->puntuacion;
        }
        
    }

    $peliculaAlien = new Pelicula(1,"Alien, el octavo pasajero","imgs/terror/alien_el_octavo_pasajero.jpg",1979," 116 min.","Ridley Scott","Dan O'Bannon. Historia: Ronald Shusett. Personaje: H.R. Giger","Jerry Goldsmith",
    "Derek Vanlint"," Sigourney Weaver, John Hurt, Yaphet Kotto, Tom Skerritt, Veronica Cartwright, Harry Dean Stanton, Ian Holm","20th Century Fox, Brandywine Productions","Ciencia ficción. Terror | 
    Extraterrestres. Aventura espacial. Película de culto","De regreso a la Tierra, la nave de carga Nostromo interrumpe su viaje y despierta a sus siete tripulantes. El ordenador central, MADRE, ha 
    detectado la misteriosa transmisión de una forma de vida desconocida, procedente de un planeta cercano aparentemente deshabitado. La nave se dirige entonces al extraño planeta para investigar el 
    origen de la comunicación.",8
    );

    $peliculaAmanacerMuertos = new Pelicula(2,"El amanecer de los muertos","imgs/terror/el_amanecer_de_los_muertos.jpg",2004,"100 min.","Zack Snyder","James Gunn. Remake: George A. Romero","Tyler Bates",
    "Matthew F. Leonetti","Sarah Polley, Ving Rhames, Jake Weber, Mekhi Phifer, Ty Burrell, Michael Kelly, Kevin Zegers, Michael Barry, Lindy Booth, Tom Savini, Bruce Bohne, Jayne Eastwood, Boyd Banks, 
    Inna Korobkina, R.D. Reid, Kim Poirier, Matt Frewer, Justin Louis, Hannah Lochner, Ermes Blarasin, Sanjay Talwar, Kim Roberts, Tim Post, Matt Sadowski, Philip DeWilde, Colm Magner, Luigia Zucaro, 
    Geoff Williams, Mike Realba, Phillip MacKenzie, Laura DeCarteret, Georgia Craig, Tino Monte, Chris Gillett, Derek Keurvorst, Dan Duran, Neville Edwards, Sandy Jobin-Bevans, Natalie Brown, Liz West, 
    Scott H. Reiniger, Ken Foree","Strike Entertainment, New Amsterdam Entertainment, Metropolitan Filmexport, Toho-Towa. Distribuidora: Universal Pictures","Terror. Ciencia ficción | Gore. Zombis. Remake",
    "Remake del filme de terror de George A. Romero. Una inexplicable plaga ha diezmado la población del planeta, convirtiendo a los muertos en horribles zombies que continuamente buscan carne y sangre 
    humana para sobrevivir. En Wisconsin, un variopinto grupo de personas que han escapado a la plaga, tratan de salvar la vida refugiándose en un centro comercial, donde deben aprender no sólo a protegerse 
    de las hordas de zombies, sino también a convivir.",6
    );

    $peliculaDejameSalir = new Pelicula (3,"Dejame salir","imgs/terror/get_out.jpg",2017,"103 min.","Jordan Peele","Jordan Peele","Michael Abels","Toby Oliver","Daniel Kaluuya, Allison Williams, Catherine Keener, 
    Bradley Whitford, Betty Gabriel, Caleb Landry Jones, Lyle Brocato, Ashley LeConte Campbell, Marcus Henderson, Lil Rel Howery, Jeronimo Spinx, Rutherford Cravens, Lakeith Stanfield","Blumhouse Productions, 
    QC Entertainment","Intriga. Terror. Thriller | Thriller psicológico. Comedia negra. Racismo. Familia","Un joven afroamericano visita a la familia de su novia blanca, un matrimonio adinerado. Para Chris 
    (Daniel Kaluuya) y su novia Rose (Allison Williams) ha llegado el momento de conocer a los futuros suegros, por lo que ella le invita a pasar un fin de semana en el campo con sus padres, Missy 
    (Catherine Keener) y Dean (Bradley Whitford). Al principio, Chris piensa que el comportamiento 'demasiado' complaciente de los padres se debe a su nerviosismo por la relación interracial de su hija, 
    pero a medida que pasan las horas, una serie de descubrimientos cada vez más inquietantes le llevan a descubrir una verdad inimaginable.",7
    );                               

    $peliculaTiburon = new Pelicula(4,"Tiburón","imgs/terror/jaws.jpg",1975,"124 min.","Steven Spielberg","Peter Benchley, Carl Gottlieb. Novela: Peter Benchley","John Williams","Bill Butler","Roy Scheider, 
    Robert Shaw, Richard Dreyfuss, Lorraine Gary, Murray Hamilton, Carl Gottlieb, Jeffrey C. Kramer, Susan Backlinie, Jonathan Filley, Chris Rebello, Jay Mello, Craig Kingsbury, Jeffrey Voorhees, Lee Fierro, 
    Ted Grossman, Robert Chambers, Peter Benchley","Zanuck/Brown. Distribuidora: Universal Pictures","Terror. Drama | Animales. Tiburones. Película de culto","En la costa de un pequeño pueblo del Este de los 
    Estados Unidos, un enorme tiburón ataca a varias personas. Por temor a los nefastos efectos que este hecho podría tener sobre el negocio turístico, el alcalde se niega a cerrar las playas y a difundir la 
    noticia. Pero un nuevo ataque del tiburón termina con la vida de un bañista. Cuando el terror se apodera de todos, un veterano cazador de tiburones, un oceanógrafo y el jefe de la policía local se unen para 
    intentar capturar al escualo.",7
    );

    $peliculaMidsommar = new Pelicula(5,"Midsommar","imgs/terror/midsommar.jpg",2019,"145 min.","Ari Aster","Ari Aster","Bobby Krlic","Pawel Pogorzelski","Florence Pugh, Jack Reynor, Will Poulter, William 
    Jackson Harper, Ellora Torchia, Archie Madekwe, Vilhelm Blomgren, Julia Ragnarsson, Anna Åström, Anki Larsson, Lars Väringer, Katarina Weidhagen van Hal, Isabelle Grill, Björn Andrésen","Coproducción Estados 
    Unidos-Suecia-Hungría; B-Reel Films, Parts and Labor. Distribuidora: A24","Terror. Intriga. Drama | Vida rural. Sectas","Una pareja estadounidense que no está pasando por su mejor momento acude con unos 
    amigos al Midsommar, un festival de verano que se celebra cada 90 años en una aldea remota de Suecia. Lo que comienza como unas vacaciones de ensueño en un lugar en el que el sol no se pone nunca, poco a 
    poco se convierte en una oscura pesadilla cuando los misteriosos aldeanos les invitan a participar en sus perturbadoras actividades festivas.",7
    );

    $peliculaExorcista = new Pelicula(6,"El exorcista","imgs/terror/the_exorcist.jpg",1973,"121 min","William Friedkin","William Peter Blatty. Novela: William Peter Blatty","Jack Nitzsche","Owen Roizman","Linda 
    Blair, Max von Sydow, Ellen Burstyn, Jason Miller, Lee J. Cobb, Kitty Winn, Jack MacGowran, Arthur Storch, Barton Heyman, Gina Petrushka, John Mahon, William O'Malley, Peter Masterson, Rudolf Schündler, Robert 
    Symonds, Thomas Bermingham, Vasiliki Maliaros, Titos Vandis, Wallace Rooney, Ron Faber, Donna Mitchell, Roy Cooper, Robert Gerringer, Mercedes McCambridge","Warner Bros., Hoya Productions","Terror | Posesiones 
    / Exorcismos. Religión. Sobrenatural. Película de culto","Regan, una niña de doce años, sufre fenómenos paranormales como la levitación o la manifestación de una fuerza sobrehumana. Su madre, aterrorizada, tras 
    someter a su hija a múltiples análisis médicos que no ofrecen ningún resultado, acude a un sacerdote con estudios de psiquiatría. Éste, convencido de que el mal no es físico sino espiritual, cree que se trata 
    de una posesión diabólica, y decide practicar un exorcismo... Adaptación de la novela de William Peter Blatty que se inspiró en un exorcismo real ocurrido en Washington en 1949.",8
    );

    $peliculaResplandor = new Pelicula(7,"El resplandor","imgs/terror/the_shining.jpg",1980,"146 min.","Stanley Kubrick","Stanley Kubrick, Diane Johnson. Novela: Stephen King","Rachel Elkind, Wendy Carlos","John Alcott",
    "Jack Nicholson, Shelley Duvall, Danny Lloyd, Scatman Crothers, Barry Nelson, Philip Stone, Joe Turkel, Lia Beldam, Billie Gibson, Barry Dennen, David Baxt, Manning Redwood, Lisa Burns, Alison Coleridge, Norman Gay, 
    Tony Burton, Anne Jackson, Jana Shelden, Burnell Tucker","Coproducción Reino Unido-Estados Unidos; Hawk Films, Peregrine, Warner Bros., Producers Circle. Distribuidora: Warner Bros.","Terror | Sobrenatural. Casas 
    encantadas. Fantasmas. Drama psicológico. Película de culto","Jack Torrance se traslada con su mujer y su hijo de siete años al impresionante hotel Overlook, en Colorado, para encargarse del mantenimiento de 
    las instalaciones durante la temporada invernal, época en la que permanece cerrado y aislado por la nieve. Su objetivo es encontrar paz y sosiego para escribir una novela. Sin embargo, poco después de su 
    llegada al hotel, al mismo tiempo que Jack empieza a padecer inquietantes trastornos de personalidad, se suceden extraños y espeluznantes fenómenos paranormales.", 10
    );

    $peliculaLaCosa = new Pelicula(8,"La cosa","imgs/terror/the_thing.jpg",1982,"105 min.","John Carpenter","Bill Lancaster. Novela: John W. Campbell","Ennio Morricone","Dean Cundey","Kurt Russell, Wilford Brimley, 
    Keith David, David Clennon, Richard Dysart, Donald Moffat, Richard Masur, T.K. Carter, Charles Hallahan, Peter Maloney, Joel Polis, Thomas G. Waites","Universal Pictures, Turman-Foster Company","Ciencia ficción. 
    Terror. Fantástico | Película de culto. Extraterrestres. Remake. Zonas frías/polares","En una estación experimental remota de la Antártida, un equipo de científicos de investigación estadounidenses ven cómo 
    en su campamento base un helicóptero noruego dispara contra un perro de trineo. Cuando acogen al perro, éste ataca brutalmente tanto a los seres humanos como a los caninos del campamento, y descubren que la 
    bestia, de origen desconocido, puede asumir la forma de sus víctimas... ",10
    );

    $peliculaTrenBusan = new Pelicula(9,"Tren a Busan","imgs/terror/train_to_busan.jpg",2016,"118 min.","Yeon Sang-ho","Yeon Sang-ho, Park Joo-suk","Young-gyu Jang","Lee Hyung-deok","Gong Yoo, Ma Dong-seok, 
    Ahn So-hee, Kim Soo-an, Jeong Yu-mi, Kim Eui-sung, Choi Woo-sik, Shim Eun-kyung, Choi Gwi-hwa, Jang Hyuk-jin, Ye Soo-jung, Park Myeong-Shin, Jeong Seok-yong, Chang-hwan Kim, Kim Jae-rok, Seong-soo Han, 
    Hye-Yeong Moon, Do-im Woo","Next Entertainment World, RedPeter Film","Terror. Acción. Ciencia ficción. Drama | Trenes / Metros. Zombis. Familia","Un virus letal se expande por Corea del Sur, provocando 
    violentos altercados. Los pasajeros de un tren KTX que viaja de Seúl a Busan tendrán que luchar por su supervivencia.",7
    );

    $peliculaWillysWonderland = new Pelicula(10,"Willy's Wonderland","imgs/terror/willys_wonderland.jpg",2021,"88 min.","Kevin Lewis","G.O. Parsons","Émoi","David Newbert","Nicolas Cage, Emily Tosta, Caylee Cowan, 
    Beth Grant, Terayle Hill, Grant Cramer, Ric Reitz, Chris Schmidt Jr., Duke Jackson, David Sheftell, Christian Delgrosso, Taylor Towery, Jiri Stanek, Jonathan Mercedes, Jessica Graves, Chris Warner, BJ Guyer, 
    Olga Cramer, Chris Padilla, D.J. Stavropoulos","JD Entertainment, Landafar Entertainment, Landmark Studio Group. Distribuidora: VVS Films","Terror. Comedia. Fantástico. Acción | Monstruos. Robots. Comedia de 
    terror","Un hombre solitario (Cage) se ve obligado a quedarse en un remoto pueblo de Nevada cuando su coche se avería. Allí, un mecánico se ofrece a repararle el vehículo a cambio de que él trabaje de conserje 
    nocturno en Willy's Wonderland, un local de entretenimiento familiar abandonado hace ya tiempo, que se acaba convirtiendo en una auténtica pesadilla. Allí tendrá que luchar contra un monstruo tras otro para 
    sobrevivir hasta el día siguiente.",7
    );

    $peliculaAkira = new Pelicula(11,"Akira","imgs/ciencia_ficción/akira.jpg",1988,"124 min.","Katsuhiro Ōtomo","Katsuhiro Ōtomo, Izo Hashimoto. Manga: Katsuhiro Ōtomo","Shoji Yamashiro","Animación","Animación","
    Akira Committee Company Ltd., TMS Entertainment, Bandai Co., Ltd., Kodansha, Mainichi Broadcasting, Toho, Sumitomo Corporation","Animación. Ciencia ficción. Acción. Thriller | Cyberpunk. Thriller futurista. 
    Animación para adultos. Película de culto. Manga. Holocausto nuclear. Futuro postapocalíptico","
    Año 2019. Neo-Tokyo es una ciudad construida sobre las ruinas de la antigua capital japonesa destruida tras la Tercera Guerra Mundial. Japón es un país al borde del colapso que sufre continuas crisis políticas. 
    En secreto, un equipo de científicos ha reanudado por orden del ejército un experimento para encontrar a individuos que puedan controlar el arma definitiva: una fuerza denominada 'la energía absoluta'. Pero 
    los habitantes de Neo-Tokyo tienen otras cosas de las que preocuparse. Uno de ellos es Kaneda, un joven pandillero líder de una banda de motoristas. Durante una pelea, su mejor amigo, Tetsuo, sufre un extraño 
    accidente y termina ingresado en unas instalaciones militares. Allí los científicos descubrirán que es el poseedor de la energía absoluta. Pero Tetsuo, que no se resigna a convertirse en un conejillo de indias, 
    muy pronto se convertirá en la amenaza más grande que el mundo ha conocido.",9
    );

    $peliculaRegresoFuturo = new Pelicula(12,"Regreso al futuro","imgs/ciencia_ficción/back_to_the_future.jpg",1985,"116 min.","Robert Zemeckis","Bob Gale, Robert Zemeckis","Alan Silvestri","Dean Cundey","Michael 
    J. Fox, Christopher Lloyd, Lea Thompson, Crispin Glover, Claudia Wells, Thomas F. Wilson, James Tolkan, Billy Zane, Sachi Parker, Marc McClure, George DiCenzo, Frances Lee McCain, Wendie Jo Sperber, Casey 
    Siemaszko, J.J. Cohen, Donald Fullilove, Harry Waters Jr., Elsa Raven, Lisa Freeman, Will Hare, Ivy Bethune","Universal Pictures, Amblin Entertainment","Ciencia ficción. Comedia. Fantástico. Aventuras | 
    Viajes en el tiempo. Comedia juvenil. Adolescencia. Cine familiar. Película de culto","El adolescente Marty McFly es amigo de Doc, un científico al que todos toman por loco. Cuando Doc crea una máquina para 
    viajar en el tiempo, un error fortuito hace que Marty llegue a 1955, año en el que sus futuros padres aún no se habían conocido. Después de impedir su primer encuentro, deberá conseguir que se conozcan y se 
    casen; de lo contrario, su existencia no sería posible.",10
    );

    $peliculaRegresoFuturo2 = new Pelicula(13,"Regreso al futuro 2","imgs/ciencia_ficción/back_to_the_future_2.jpg",1989,"105 min.","Robert Zemeckis","Bob Gale. Historia: Bob Gale, Robert Zemeckis","Alan Silvestri",
    "Dean Cundey","Michael J. Fox, Christopher Lloyd, Lea Thompson, Thomas F. Wilson, Elisabeth Shue, Charles Fleischer, Joe Flaherty, Harry Waters Jr., Billy Zane, Elijah Wood, Jeffrey Weissman, James Tolkan, 
    Casey Siemaszko, Ricky Dean Logan, J.J. Cohen, Darlene Vogel, Jason Scott Lee, Marty Levy, Al White, Jim Ishida","Universal Pictures, Amblin Entertainment, U-Drive Productions. Distribuidora: Universal Pictures",
    "Ciencia ficción. Comedia. Fantástico. Aventuras | Viajes en el tiempo. Comedia juvenil. Cine familiar. Secuela","Aunque a Marty McFly todavía le falta tiempo para asimilar el hecho de estar viviendo dentro de 
    la familia perfecta gracias a su anterior viaje en el tiempo, no le queda ni espacio para respirar cuando su amigo Doc aparece de improviso con la máquina del tiempo (mucho más modernizada), e insta a que le 
    acompañen él y su novia a viajar al futuro para solucionar un problema con la ley que tendrá uno de sus futuros hijos. En la tremenda vorágine futurista, con todo lo que ello conlleva, del Hill Valley de 2015, 
    la presencia de tales viajeros temporales causará un efecto mayor que el que iban a arreglar. Un almanaque deportivo y la posesión del secreto de la existencia de la máquina del tiempo por parte del siempre 
    villano Biff Tannen, serán los ingredientes que conjugarán una causa-efecto en el pasado, en el presente y en el propio futuro, que hará que Marty y Doc se tengan que emplear a fondo para poner fin a la 
    catástrofe a la que les lleva el destino.",10
    );

    $peliculaRegresoFuturo3 = new Pelicula(14,"Regreso al futuro 3","imgs/ciencia_ficción/back_to_the_future_3.jpg",1990,"118 min.","Robert Zemeckis","Bob Gale. Historia: Bob Gale, Robert Zemeckis","Alan Silvestri",
    "Dean Cundey","Michael J. Fox, Christopher Lloyd, Mary Steenburgen, Thomas F. Wilson, Lea Thompson, Elisabeth Shue, Matt Clark, Richard Dysart, Jeffrey Weissman, James Tolkan","Universal Pictures","Ciencia 
    ficción. Comedia. Fantástico. Aventuras. Western | Viajes en el tiempo. Comedia juvenil. Cine familiar. Secuela","Marty McFly sigue en 1955 y su amigo Doc ha retrocedido al año 1885, la época del salvaje oeste. 
    Éste le envía una carta donde comenta que la máquina del tiempo está averiada, y que es imposible repararla. Sin embargo no le preocupa estar atrapado en el pasado, pues allí es muy feliz trabajando de herrero 
    aunque convive con malhechores. Pero Marty descubre una vieja tumba en la que lee que Doc murió en 1885 y, sin pensárselo dos veces, irá a rescatar a su amigo.",10
    );

    $peliculaDesafioTotal = new Pelicula(15,"Desafio total","imgs/ciencia_ficción/desafio_total.jpg",1990,"109 min.","Paul Verhoeven","Dan O'Bannon, Gary Goldman, Ronald Shusett. Relato: Philip K. Dick","Jerry Goldsmith",
    "Jost Vacano","Arnold Schwarzenegger, Sharon Stone, Michael Ironside, Rachel Ticotin, Ronny Cox, Marshall Bell, Mel Johnson Jr., Ray Baker, Michael Champion, Roy Brocksmith, Lycia Naff, Debbie Lee Carrington, 
    Dean Norris, Alexia Robinson, Erika Carlsson","Carolco Pictures. Distribuidora: TriStar Pictures","Ciencia ficción. Acción | Distopía. Película de culto","La Tierra, año 2084. Doug Quaid, un hombre que lleva 
    una vida aparentemente tranquila, vive atormentado por una pesadilla que todas las noches lo transporta a Marte. Decide entonces recurrir al laboratorio de Recall, una empresa de vacaciones virtuales que le 
    ofrece la oportunidad de materializar su sueño gracias a un fuerte alucinógeno, pero la droga hace aflorar a su memoria una estancia verdadera en Marte cuando era el más temido agente del cruel Coohagen.",8
    );

    $peliculaKungFury = new Pelicula(16,"Kung Fury","imgs/ciencia_ficción/kung_fury.jpg",2015,"31 min.","David Sandberg","David Sandberg","Mitch Murder, Lost Years","Martin Gärdemalm, Jonas Ernhill, Mattias Andersson",
    "David Sandberg, Jorma Taccone, Steven Chew, Leopold Nilsson, Andreas Cahling, Erik Hornqvist, Eleni Young, Helene Ahlson, Per-Henrik Arvidius, Magnus Betnér, Björn Gustafsson, Eos Karlsson, David Hasselhoff, 
    Frank Sanderson","Laser Unicorns, Lampray","Ciencia ficción. Acción. Comedia. Aventuras | Años 80. Viajes en el tiempo. Parodia. Vikingos. Nazismo. Dinosaurios. Robots. Mediometraje","Cuenta la historia de un 
    policía renegado (llamado Kung Fury) que persigue a su archienemigo (Hitler) a través del tiempo. Comedia de acción que rinde homenaje al cine ochentero. Incluye dinosaurios, nazis, vikingos y robots.",10
    );

    $peliculaTerminator = new Pelicula(17,"Terminator","imgs/ciencia_ficción/terminator.jpg",1984,"108 min.","James Cameron","James Cameron, Gale Anne Hurd","Brad Fiedel","Adam Greenberg","Arnold Schwarzenegger, 
    Linda Hamilton, Michael Biehn, Paul Winfield, Lance Henriksen, Rick Rossovich, Bess Motta, Earl Boen, Dick Miller, Bill Paxton, Franco Columbu, Brian Thompson, Brad Rearden","Pacific Western, Hemdale. 
    Distribuidora: Orion Pictures","Ciencia ficción. Acción | Robots. Viajes en el tiempo. Película de culto","Los Ángeles, año 2029. Las máquinas dominan el mundo. Los rebeldes que luchan contra ellas tienen 
    como líder a John Connor, un hombre que nació en los años ochenta. Para acabar con la rebelión, las máquinas deciden enviar al pasado a un robot -Terminator- cuya misión será eliminar a Sarah Connor, la madre 
    de John, e impedir así su nacimiento.",7
    );

    $peliculaTerminator2 = new Pelicula(18,"Terminator 2","imgs/ciencia_ficción/terminator_2.jpg",1991,"135 min.","James Cameron","James Cameron, William Wisher Jr.","Brad Fiedel","Adam Greenberg","Arnold 
    Schwarzenegger, Linda Hamilton, Edward Furlong, Robert Patrick, Earl Boen, Joe Morton, S. Epatha Merkerson, Danny Cooksey, Cástulo Guerra, Jenette Goldstein, Xander Berkeley, Michael Edwards, Dean Norris",
    "Carolco Pictures, Pacific Western, Lightstorm Entertainment. Productor: James Cameron. Distribuidora: TriStar Pictures","Ciencia ficción. Acción | Secuela. Robots. Viajes en el tiempo. Película de culto",
    "Sarah Connor, la madre soltera del rebelde John Connor, está ingresada en un psiquiátrico. Algunos años antes, un viajero del tiempo le había revelado que su hijo sería el salvador de la humanidad en un 
    futuro dominado por las máquinas. Se convirtió entonces en una especie de guerrera y educó a su hijo John en tácticas de supervivencia. Esta es la razón por la que está recluida en un manicomio. Cuando un 
    nuevo androide mejorado, un T-1000, llega del futuro para asesinar a John, un viejo modelo T-800 será enviado para protegerle.",10
    );

    $peliculaMatrix = new Pelicula(19,"Matrix","imgs/ciencia_ficción/the_matrix.jpg",1999,"131 min.","Lilly Wachowski, Lana Wachowski, Hermanas Wachowski","Lilly Wachowski, Lana Wachowski","Don Davis","Bill Pope",
    "Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss, Joe Pantoliano, Hugo Weaving, Marcus Chong, Gloria Foster, Matt Doran, Belinda McClory, Julian Arahanga, Anthony Ray Parker, Paul Goddard, Robert Taylor, 
    Marc Aden Gray","Warner Bros., Village Roadshow, Groucho Film Partnership. Productor: Joel Silver","Ciencia ficción. Fantástico. Acción. Thriller | Thriller futurista. Mundo virtual. Cyberpunk. Distopía. 
    Internet / Informática. Artes marciales. Película de culto","Thomas Anderson es un brillante programador de una respetable compañía de software. Pero fuera del trabajo es Neo, un hacker que un día recibe una 
    misteriosa visita...",10
    );

    $peliculaTron = new Pelicula(20,"Tron","imgs/ciencia_ficción/tron.jpg",1982,"82 min.","Steven Lisberger","Steven Lisberger. Historia: Steven Lisberger, Bonnie Macbird","Wendy Carlos","Bruce Logan","Jeff 
    Bridges, Bruce Boxleitner, David Warner, Cindy Morgan, Barnard Hughes, Dan Shor, Peter Jurasik, Tony Stephano, Craig Chudy, Michael Dudikoff","Walt Disney Productions, Lisberger/Kushner","Ciencia ficción. 
    Fantástico. Acción | Internet / Informática. Mundo virtual. Cyberpunk. Película de culto","Un hacker es dividido en moléculas y transportado a las entrañas de un ordenador en el que un malvado programa controla 
    los comportamientos a su antojo.",5
    );


    $peliculas=array($peliculaAlien,$peliculaAmanacerMuertos,$peliculaDejameSalir,$peliculaTiburon,$peliculaMidsommar,
                            $peliculaExorcista,$peliculaResplandor,$peliculaLaCosa,$peliculaTrenBusan,$peliculaWillysWonderland,
                            $peliculaAkira,$peliculaRegresoFuturo,$peliculaRegresoFuturo2,$peliculaRegresoFuturo3,$peliculaDesafioTotal,
                            $peliculaKungFury,$peliculaTerminator,$peliculaTerminator2,$peliculaMatrix,$peliculaTron);

?>