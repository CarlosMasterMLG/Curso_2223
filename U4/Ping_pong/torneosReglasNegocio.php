<?php

require("torneosAccesoDatos.php");

class TorneosReglasNegocio{

    private $_ID;

    function __construct(){

    }

    function init($id){
        $this->_ID = $id;
    }

    function getID(){
        return $this->_ID;
    }

    function obtener(){
        $torneosDAL = new TorneosAccesoDatos();
        $rs = $torneosDAL->obtener();

        $listaTorneos = array();
        
        foreach($rs as $torneos){
            $oTorneosReglasNegocio = new TorneosReglasNegocio();
            $oTorneosReglasNegocio->Init($torneos['id_torneo']);
            array_push($listaTorneos,$oTorneosReglasNegocio);
        }

        return $listaTorneos;

    }

}

?>