<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 1);

require("../accesoDatos/gestionTorneosVistaJugadoresAccesoDatos.php");

class gestionTorneosJugadoresReglasNegocio {

    private $ID;
    private $NOMBRE;


    function __construct() {
    }

    function init($id, $nombre) {
        $this->ID = $id;
        $this->NOMBRE = $nombre;
    }

    function getID() {
        return $this->ID;
    }
    function getNOMBRE() {
        return $this->NOMBRE;
    }

    function obtener() {

        //TODO da error
        $jugadoresDAL = new jugadorAccesoDatos();
        $resultadosJugador = new $jugadoresDAL->obtener();

        $listaJugadores = array();
        
        foreach($resultadosJugador as $jugadores){

            arrayPush($listaJugadores, $jugadores['id_jugador'], $jugadores['nombre']);
            /*$oGestionTorneosReglasNegocio = new gestionTorneosReglasNegocio();
            $oGestionTorneosReglasNegocio->init($partidos['id_partido'], $partidos['id_jugador_a'], $partidos['id_jugador_b'], $partidos['tipo_partido'], $partidos['ganador']);
            //$oGestionTorneosReglasNegocio->init($partidos['id_partido'], $nombreJugadorA, $nombreJugadorB, $partidos['tipo_partido'], $nombreGanador);
            array_push($listaPartidos, $oGestionTorneosReglasNegocio);*/
            
        }

        return $listaPartidos;

    }
}


?>