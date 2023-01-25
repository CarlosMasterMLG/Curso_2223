<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 1);

class TorneoAccesoDatos {        
    function __construct() {
    }

    function obtener() {
        // contraseña sql en casa->1234 | en clase->12345
        $conexion = mysqli_connect('localhost','root','12345');

        if (mysqli_connect_errno()) {
            echo "Error al conectar a MySQL: ". mysqli_connect_error();
        }

        mysqli_select_db($conexion, 'torneos_pingPong');
        $consulta = mysqli_prepare($conexion, "SELECT 
                                                    id_jugador, nombre
                                                FROM
                                                    T_Jugador;");
        
        $consulta->execute();
        $result = $consulta->get_result();

        $jugadores =  array();

        while ($myrow = $result->fetch_assoc()) {

            array_push($jugadores, $myrow);
        }

        return $jugadores;
    }
}
?>

