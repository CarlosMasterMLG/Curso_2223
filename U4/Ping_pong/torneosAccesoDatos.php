<?php
class TorneoAccesoDatos{

    function __construct(){

    }

    function obtener(){
        $conexion = mysqli_connect('localhost','root','1234');
        if (mysqli_connect_error()) {
            
            echo "Error al conectar a MySQL: ".mysqli_connect_error();

        }
        
        mysqli_select_db($conexion, 'torneos_pingPong');
        $consulta = mysqli_prepare($conexion, 'SELECT id_torneo FROM T_Torneo');

        $consulta->execute();
        $result = $consulta->get_result();

        $torneos = array();

        while ($myrow = $result->fetch_assoc()) {
            
            array_push($torneos, $myrow);

        }

        return $torneos;

    }

}
?>