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
        /*$torneosDAL = new TorneoAccesoDatos();
        $results = $torneosDAL->obtener();

        $listaTorneos =  array();

        foreach ($results as $torneo) {
            $oTorneosReglasNegocio = new TorneoReglasNegocio();
            $oTorneosReglasNegocio->init($torneo['id_torneo'], $torneo['nombre'], $torneo['fecha'], $torneo['estado'], $torneo['campeon']);
            array_push($listaTorneos,$oTorneosReglasNegocio);            
        }
        
        return $listaTorneos;
        */
    }
}


?>