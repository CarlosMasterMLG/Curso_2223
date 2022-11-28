-- pensar tema director y reparto para otras tablas

CREATE TABLE `T_Categorias` (
    `ID` INTEGER NOT NULL PRIMARY KEY,
    `nombre` VARCHAR(50) DEFAULT NULL
);

insert into T_Categorias(`ID`, `nombre`) values (1, "Terror");
insert into T_Categorias(`ID`, `nombre`) values (2, "Ciencia Ficción");

-- select * from T_Categorias;

CREATE TABLE `T_Peliculas` (
    `ID` INT NOT NULL,
    `titulo` VARCHAR(200) DEFAULT NULL,
    `año` INT DEFAULT NULL,
    `duracion` INT DEFAULT NULL,
    `sinopsis` VARCHAR(1500) DEFAULT NULL,
    `imagen` VARCHAR(100) DEFAULT NULL,
    `votos` INT DEFAULT NULL,
    `id_categoria` INT DEFAULT NULL,
    PRIMARY KEY (ID),
    KEY idx_T_peliculas_id_categoria (`id_categoria`),
    CONSTRAINT T_peliculas_ibfk_1 FOREIGN KEY (`id_categoria`)
        REFERENCES T_Categorias (`ID`)
);

select * from T_Peliculas;


insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`) values (1, "Alien, el octavo pasajero", 1979, 116, "De regreso a la Tierra, la nave de carga Nostromo interrumpe su viaje y despierta a sus siete tripulantes. El ordenador central, MADRE, ha 
    detectado la misteriosa transmisión de una forma de vida desconocida, procedente de un planeta cercano aparentemente deshabitado. La nave se dirige entonces al extraño planeta para investigar el 
    origen de la comunicación.", "imgs/terror/alien_el_octavo_pasajero.jpg", 0, 1);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`) values (2, "El amanecer de los muertos", 2004, 100, "Rmeake del filme de terror de George A. Romero. Una inexplicable plaga ha diezmado la población del planeta, convirtiendo a los muertos en horribles zombies que continuamente buscan carne y sangre 
    humana para sobrevivir. En Wisconsin, un variopinto grupo de personas que han escapado a la plaga, tratan de salvar la vida refugiándose en un centro comercial, donde deben aprender no sólo a protegerse 
    de las hordas de zombies, sino también a convivir.", "imgs/terror/el_amanecer_de_los_muertos.jpg", 0, 1);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`) values (3, "Dejame salir", 2017, 103, "Un joven afroamericano visita a la familia de su novia blanca, un matrimonio adinerado. Para Chris 
    (Daniel Kaluuya) y su novia Rose (Allison Williams) ha llegado el momento de conocer a los futuros suegros, por lo que ella le invita a pasar un fin de semana en el campo con sus padres, Missy 
    (Catherine Keener) y Dean (Bradley Whitford). Al principio, Chris piensa que el comportamiento 'demasiado' complaciente de los padres se debe a su nerviosismo por la relación interracial de su hija, 
    pero a medida que pasan las horas, una serie de descubrimientos cada vez más inquietantes le llevan a descubrir una verdad inimaginable.", "imgs/terror/get_out.jpg", 0,1);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`) values (4, "Tiburón", 1975, 124, "En la costa de un pequeño pueblo del Este de los 
    Estados Unidos, un enorme tiburón ataca a varias personas. Por temor a los nefastos efectos que este hecho podría tener sobre el negocio turístico, el alcalde se niega a cerrar las playas y a difundir la 
    noticia. Pero un nuevo ataque del tiburón termina con la vida de un bañista. Cuando el terror se apodera de todos, un veterano cazador de tiburones, un oceanógrafo y el jefe de la policía local se unen para 
    intentar capturar al escualo.", "imgs/terror/jaws.jpg", 0, 1);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`) values (5, "Midsommar", 2019, 145, "Una pareja estadounidense que no está pasando por su mejor momento acude con unos 
    amigos al Midsommar, un festival de verano que se celebra cada 90 años en una aldea remota de Suecia. Lo que comienza como unas vacaciones de ensueño en un lugar en el que el sol no se pone nunca, poco a 
    poco se convierte en una oscura pesadilla cuando los misteriosos aldeanos les invitan a participar en sus perturbadoras actividades festivas.", "imgs/terror/midsommar.jpg", 0, 1);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`) values (6, "El exorcista", 1973, 121, "Regan, una niña de doce años, sufre fenómenos paranormales como la levitación o la manifestación de una fuerza sobrehumana. Su madre, aterrorizada, tras 
    someter a su hija a múltiples análisis médicos que no ofrecen ningún resultado, acude a un sacerdote con estudios de psiquiatría. Éste, convencido de que el mal no es físico sino espiritual, cree que se trata 
    de una posesión diabólica, y decide practicar un exorcismo... Adaptación de la novela de William Peter Blatty que se inspiró en un exorcismo real ocurrido en Washington en 1949.", "imgs/terror/the_exorcist.jpg", 0, 1);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`) values (7, "El resplandor", 1980, 146, "Jack Torrance se traslada con su mujer y su hijo de siete años al impresionante hotel Overlook, en Colorado, para encargarse del mantenimiento de 
    las instalaciones durante la temporada invernal, época en la que permanece cerrado y aislado por la nieve. Su objetivo es encontrar paz y sosiego para escribir una novela. Sin embargo, poco después de su 
    llegada al hotel, al mismo tiempo que Jack empieza a padecer inquietantes trastornos de personalidad, se suceden extraños y espeluznantes fenómenos paranormales.", "imgs/terror/the_shining.jpg", 0, 1);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`) values (8, "La cosa", 1982, 105, "En una estación experimental remota de la Antártida, un equipo de científicos de investigación estadounidenses ven cómo 
    en su campamento base un helicóptero noruego dispara contra un perro de trineo. Cuando acogen al perro, éste ataca brutalmente tanto a los seres humanos como a los caninos del campamento, y descubren que la 
    bestia, de origen desconocido, puede asumir la forma de sus víctimas...", "imgs/terror/the_thing.jpg", 0, 1);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`) values (9, "Tren a Busan", 2016, 118, "Un virus letal se expande por Corea del Sur, provocando 
    violentos altercados. Los pasajeros de un tren KTX que viaja de Seúl a Busan tendrán que luchar por su supervivencia.", "imgs/terror/train_to_busan.jpg", 0, 1);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`) values (10, "Willy's Wonderland", 2021, 88, "Un hombre solitario (Cage) se ve obligado a quedarse en un remoto pueblo de Nevada cuando su coche se avería. Allí, un mecánico se ofrece a repararle el vehículo a cambio de que él trabaje de conserje 
    nocturno en Willy's Wonderland, un local de entretenimiento familiar abandonado hace ya tiempo, que se acaba convirtiendo en una auténtica pesadilla. Allí tendrá que luchar contra un monstruo tras otro para 
    sobrevivir hasta el día siguiente.", "imgs/terror/willys_wonderland.jpg", 0, 1);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`) values (11, "Akira", 1988, 124, "Año 2019. Neo-Tokyo es una ciudad construida sobre las ruinas de la antigua capital japonesa destruida tras la Tercera Guerra Mundial. Japón es un país al borde del colapso que sufre continuas crisis políticas. 
    En secreto, un equipo de científicos ha reanudado por orden del ejército un experimento para encontrar a individuos que puedan controlar el arma definitiva: una fuerza denominada 'la energía absoluta'. Pero 
    los habitantes de Neo-Tokyo tienen otras cosas de las que preocuparse. Uno de ellos es Kaneda, un joven pandillero líder de una banda de motoristas. Durante una pelea, su mejor amigo, Tetsuo, sufre un extraño 
    accidente y termina ingresado en unas instalaciones militares. Allí los científicos descubrirán que es el poseedor de la energía absoluta. Pero Tetsuo, que no se resigna a convertirse en un conejillo de indias, 
    muy pronto se convertirá en la amenaza más grande que el mundo ha conocido.", "imgs/ciencia_ficción/akira.jpg", 0, 2);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`) values (12, "Regreso al futuro", 1985, 116, "El adolescente Marty McFly es amigo de Doc, un científico al que todos toman por loco. Cuando Doc crea una máquina para 
    viajar en el tiempo, un error fortuito hace que Marty llegue a 1955, año en el que sus futuros padres aún no se habían conocido. Después de impedir su primer encuentro, deberá conseguir que se conozcan y se 
    casen; de lo contrario, su existencia no sería posible.", "imgs/ciencia_ficción/back_to_the_future.jpg", 0, 2);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`) values (13, "Regreso al futuro 2", 1989, 105, "Aunque a Marty McFly todavía le falta tiempo para asimilar el hecho de estar viviendo dentro de 
    la familia perfecta gracias a su anterior viaje en el tiempo, no le queda ni espacio para respirar cuando su amigo Doc aparece de improviso con la máquina del tiempo (mucho más modernizada), e insta a que le 
    acompañen él y su novia a viajar al futuro para solucionar un problema con la ley que tendrá uno de sus futuros hijos. En la tremenda vorágine futurista, con todo lo que ello conlleva, del Hill Valley de 2015, 
    la presencia de tales viajeros temporales causará un efecto mayor que el que iban a arreglar. Un almanaque deportivo y la posesión del secreto de la existencia de la máquina del tiempo por parte del siempre 
    villano Biff Tannen, serán los ingredientes que conjugarán una causa-efecto en el pasado, en el presente y en el propio futuro, que hará que Marty y Doc se tengan que emplear a fondo para poner fin a la 
    catástrofe a la que les lleva el destino.", "imgs/ciencia_ficción/back_to_the_future_2.jpg", 0, 2);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`) values (14, "Regreso al futuro 3", 1990, 118,"Marty McFly sigue en 1955 y su amigo Doc ha retrocedido al año 1885, la época del salvaje oeste. 
    Éste le envía una carta donde comenta que la máquina del tiempo está averiada, y que es imposible repararla. Sin embargo no le preocupa estar atrapado en el pasado, pues allí es muy feliz trabajando de herrero 
    aunque convive con malhechores. Pero Marty descubre una vieja tumba en la que lee que Doc murió en 1885 y, sin pensárselo dos veces, irá a rescatar a su amigo.", "imgs/ciencia_ficción/back_to_the_future_3.jpg", 0, 2);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`) values (15, "Desafio total", 1990, 109, "La Tierra, año 2084. Doug Quaid, un hombre que lleva 
    una vida aparentemente tranquila, vive atormentado por una pesadilla que todas las noches lo transporta a Marte. Decide entonces recurrir al laboratorio de Recall, una empresa de vacaciones virtuales que le 
    ofrece la oportunidad de materializar su sueño gracias a un fuerte alucinógeno, pero la droga hace aflorar a su memoria una estancia verdadera en Marte cuando era el más temido agente del cruel Coohagen.", "imgs/ciencia_ficción/desafio_total.jpg", 0, 2);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`) values (16, "Kung Fury", 2015, 31, "Cuenta la historia de un 
    policía renegado (llamado Kung Fury) que persigue a su archienemigo (Hitler) a través del tiempo. Comedia de acción que rinde homenaje al cine ochentero. Incluye dinosaurios, nazis, vikingos y robots.", "imgs/ciencia_ficción/kung_fury.jpg", 0, 2);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`) values (17, "Terminator", 1984, 108, "Los Ángeles, año 2029. Las máquinas dominan el mundo. Los rebeldes que luchan contra ellas tienen 
    como líder a John Connor, un hombre que nació en los años ochenta. Para acabar con la rebelión, las máquinas deciden enviar al pasado a un robot -Terminator- cuya misión será eliminar a Sarah Connor, la madre 
    de John, e impedir así su nacimiento.", "imgs/ciencia_ficción/terminator.jpg", 0, 2);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`) values (18, "Terminator 2", 1991, 135, "Sarah Connor, la madre soltera del rebelde John Connor, está ingresada en un psiquiátrico. Algunos años antes, un viajero del tiempo le había revelado que su hijo sería el salvador de la humanidad en un 
    futuro dominado por las máquinas. Se convirtió entonces en una especie de guerrera y educó a su hijo John en tácticas de supervivencia. Esta es la razón por la que está recluida en un manicomio. Cuando un 
    nuevo androide mejorado, un T-1000, llega del futuro para asesinar a John, un viejo modelo T-800 será enviado para protegerle.", "imgs/ciencia_ficción/terminator_2.jpg", 0, 2);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`) values (19, "Matrix", 1999, 131, "Thomas Anderson es un brillante programador de una respetable compañía de software. Pero fuera del trabajo es Neo, un hacker que un día recibe una 
    misteriosa visita...", "imgs/ciencia_ficción/the_matrix.jpg", 0, 2);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`) values (20, "Tron", 1982, 82, "Un hacker es dividido en moléculas y transportado a las entrañas de un ordenador en el que un malvado programa controla 
    los comportamientos a su antojo.", "imgs/ciencia_ficción/tron.jpg", 0, 2);

update T_Peliculas set `votos` = 0 where T_Peliculas.ID = 20;	

SELECT 
    tc.*, tp.*
FROM
    T_Categorias tc
        INNER JOIN
    T_Peliculas tp
WHERE
    tc.ID = tp.id_categoria
ORDER BY tp.votos DESC;

select * from T_Peliculas;

