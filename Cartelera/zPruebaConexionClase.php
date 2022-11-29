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

            public $id;
            public $titulo;
            public $anyo;
            public $duracion;
            public $sinopsis;
            public $imagen;
            public $votos;
            public $id_categoria;

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
            for ($i=1; $i < count($datos); $i++) { 

                $peliculas[$i] = $datos[$i];
                /*
                echo $datos[$i]->getId()."<br>";
                echo $datos[$i]->getTitulo()."<br>";
                echo $datos[$i]->getAnyo()."<br>";
                echo $datos[$i]->getDuracion()."<br>";
                echo $datos[$i]->getSinopsis()."<br>";
                echo $datos[$i]->getDuracion()."<br>";
                echo $datos[$i]->getVotos()."<br>";
                echo $datos[$i]->getIdCategoria()."<br><br><br>";*/

            }
            return $peliculas;

        } 

        $peliculas = mostrarDatos();

        echo $peliculas[1]->getTitulo();


    ?>

</body>
</html>