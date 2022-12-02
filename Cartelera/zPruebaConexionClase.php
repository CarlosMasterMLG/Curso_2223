<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Conexión DATOS PDF</title>
</head>
<body>
    
    <?php
        ini_set('display_errors', 'On');
        ini_set('html_errors', 0);

        class Pelicula{

            private $id;
            private $titulo;
            private $anyo;
            private $duracion;
            private $sinopsis;
            private $imagen;
            private $votos;
            private $id_categoria;

            public function __construct($id, $titulo, $anyo, $duracion, $sinopsis, $imagen, $votos, $id_categoria){

                $this->id=$id;
                $this->titulo=$titulo;
                $this->anyo=$anyo;
                $this->duracion=$duracion;
                $this->sinopsis=$sinopsis;
                $this->imagen=$imagen;
                $this->votos=$votos;
                $this->id_categoria=$id_categoria;
                
            }

            public function getId(){
                return $this->id;
            }
    
            public function getTitulo(){
                return $this->titulo;
            }

            public function getAnyo(){
                return $this->anyo;
            }

            public function getDuracion(){
                return $this->duracion;
            }

            public function getSinopsis(){
                return $this->sinopsis;
            }

            public function getImagen(){
                return $this->imagen;
            }
            
            public function getVotos(){
                return $this->votos;
            }

            public function getIdCategoria(){
                return $this->id_categoria;
            }

        }

        function cargarDatos(){
            // Contraseña->Casa: 12345678 | Clase: 12345
            $conexion = mysqli_connect('localhost', 'root', '12345');
            
            mysqli_select_db($conexion, 'prueba');
            
            $consulta = "SELECT * FROM T_Peliculas";
            //$consulta = "select * from T_Peliculas order by `votos` DESC";
            
            $resultado = mysqli_query($conexion, $consulta);

            if (!$resultado) {
                $mensaje = 'Consulta invalida: ' . mysqli_error($conexion) . "\n";
                $mensaje = 'Consulta realizada: ' . $consulta;
                die($mensaje);
            } else{
                //echo "Conexion OK.<br>";

                $peliculas = [];
                $contador = 1;
                while ($registro = mysqli_fetch_assoc($resultado)) {

                    $peliculas[$contador] = new Pelicula($registro['ID'], $registro['titulo'], $registro['año'], $registro['duracion'], $registro['sinopsis'], $registro['imagen'], $registro['votos'], $registro['id_categoria']);
                    $contador = $contador + 1;
                    
                }
                return $peliculas;
            }

        }


        function mostrarDatos(){
            
            $datos = cargarDatos();
            $peliculas = [];
            for ($i=1; $i < count($datos) + 1; $i++) { 

                $peliculas[$i] = $datos[$i];
                /*
                echo $datos[$i]->getId()."<br>";
                echo $datos[$i]->getTitulo()."<br>";
                */

            }
            return $peliculas;

        } 

        function guardarDatosPeliculas(){
            $peliculas = mostrarDatos();

            $numCategoria = $_GET['categoria'];
            if ($numCategoria==1){
                $pos = 1;
                $length = count($peliculas) / 2;
            } else {
                $pos = 11;
                $length = count($peliculas);
            }
                
            $arrayContenido = [];
            $contador = 1;
            for ($pos; $pos <= $length; $pos++) { 
            
                $titulo = $peliculas[$pos]->getTitulo();
                $portada = $peliculas[$pos]->getImagen();
                $duracion = $peliculas[$pos]->getDuracion();
                $votos = $peliculas[$pos]->getVotos();
                $sinopsisReducida = substr($peliculas[$pos]->getSinopsis(), 0, 280);
                
                $ficha = $pos;

                $arrayContenido[$contador] = array($numCategoria, $pos, $length, $titulo, $portada, $duracion, $votos, $sinopsisReducida, $ficha);
                $contador = $contador + 1;
                
            }

            return $arrayContenido;
        }

        function pintarPeliculas(){
            $peliculas = guardarDatosPeliculas();
            if ($peliculas[1][0]==1){
                
                echo "<div class='contenedor'>
                        <div class='primera_caja'>
                            <h1>TERROR</h1>
                            <a href='index.php'>INICIO</a>
                        </div>";
            } else {
                
                echo "<div class='contenedor'>
                        <div class='primera_caja'>
                            <h1>CIENCIA FICCIÓN</h1>
                            <a href='index.php'>INICIO</a>
                        </div>";
            }
            
            for ($i = 1; $i <= count($peliculas); $i++) { 

                echo "  <div class='segunda_caja'>
                        <div class='bordeIzquierdo'></div>
                        <div class='primera_columna'>
                            <h1 class='titulo'>".$peliculas[$i][3]."</h1>
                            <img src=".$peliculas[$i][4].">
                            <p class='duracion'>".$peliculas[$i][5]." min.</p>
                        </div>
                        <div class='segunda_columna'>
                            <p>
                            ".$peliculas[$i][7]." ...
                            </p>
                        </div>
                        <div class='tercera_columna'>
                            <div class='puntuacion'>
                                <p>Número de votos: ".$peliculas[$i][6]."</p>
                            </div>
                        <div class='verFicha'>
                            <a href='ficha.php?ficha=".$peliculas[$i][8]."'>Ver Ficha</a>
                        </div>
                        </div>
                        <div class='bordeDerecho'></div>
                        </div>";
            }
            echo "<div class='tercera_caja'></div></div>";

        }

    ?>

</body>
</html>