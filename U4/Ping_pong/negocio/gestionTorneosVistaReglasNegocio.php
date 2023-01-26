<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 1);

require("../accesoDatos/gestionTorneosVistaPartidosAccesoDatos.php");
require("../accesoDatos/gestionTorneosVistaJugadoresAccesoDatos.php");

class gestionTorneosReglasNegocio {

    private $ID;
    private $JUGADOR_A;
    private $JUGADOR_B;
    private $RONDA;
    private $GANADOR;


    function __construct() {
    }

    function init($id, $jugadorA, $jugadorB, $ronda, $ganador) {
        $this->ID = $id;
        $this->JUGADOR_A = $jugadorA;
        $this->JUGADOR_B = $jugadorB;
        $this->RONDA = $ronda;
        $this->GANADOR = $ganador;
    }

    function getID() {
        return $this->ID;
    }
    function getJUGADOR_A() {
        return $this->JUGADOR_A;
    }
    function getJUGADOR_B() {
        return $this->JUGADOR_B;
    }
    function getRONDA(){
        return $this->RONDA;
    }
    function getGANADOR(){
        return $this->GANADOR;
    }

    function obtener() {

        //TODO da error
        /*$jugadoresDAL = new jugadorAccesoDatos();
        $resultadosJugador = new $jugadoresDAL->obtener();

        $listaJugadores = array();
        
        foreach($resultadosJugador as $jugadores){

            arrayPush($listaJugadores, $jugadores['id_jugador'], $jugadores['nombre']);
            
        }*/

        $partidosDAL = new partidoAccesoDatos();
        $resultadosPartido = $partidosDAL->obtener();

        $listaPartidos = array();

        foreach($resultadosPartido as $partidos){

           /* $idJugadorA = $partidos['id_jugador_a'];
            $idJugadorB = $partidos['id_jugador_b'];
            $idGanador = $partidos['ganador'];

            for ($i=0; $i < count($listaJugadores); $i++) { 
                
                if ($idJugadorA == $listaJugadores($i)(0)) {
                    $nombreJugadorA = $listaJugadores($i)(1);
                }
                if ($idJugadorB == $listaJugadores($i)(0)) {
                    $nombreJugadorB = $listaJugadores($i)(1);
                }
                if ($idGanador == $listaJugadores($i)(0)) {
                    $nombreGanador = $listaJugadores($i)(1);
                }

            }*/

            $oGestionTorneosReglasNegocio = new gestionTorneosReglasNegocio();
            $oGestionTorneosReglasNegocio->init($partidos['id_partido'], $partidos['id_jugador_a'], $partidos['id_jugador_b'], $partidos['tipo_partido'], $partidos['ganador']);
            //$oGestionTorneosReglasNegocio->init($partidos['id_partido'], $nombreJugadorA, $nombreJugadorB, $partidos['tipo_partido'], $nombreGanador);
            array_push($listaPartidos, $oGestionTorneosReglasNegocio);

        }

        return $listaPartidos;

    }
}


?>