<?php
    class Pelicula{
        protected $id;
        protected $titulo;
        protected $portada;
        protected $anyo;
        protected $duracion;
        protected $direccion;
        protected $guion;
        protected $musica;
        protected $fotografia;
        protected $reparto;
        protected $companyias;
        protected $genero;
        protected $sinopsis;
        protected $puntuacion;

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

    $peliculaAlien = new Pelicula(1,"Alien","imgs/terror/alien_el_octavo_pasajero.jpg",1979," 116 min.","Ridley Scott","Dan O'Bannon. Historia: Ronald Shusett. Personaje: H.R. Giger",
                            "Jerry Goldsmith","Derek Vanlint"," Sigourney Weaver, John Hurt, Yaphet Kotto, Tom Skerritt, Veronica Cartwright, Harry Dean Stanton, Ian Holm",
                            "20th Century Fox, Brandywine Productions","Ciencia ficción. Terror | Extraterrestres. Aventura espacial. Película de culto",
                            "De regreso a la Tierra, la nave de carga Nostromo interrumpe su viaje y despierta a sus siete tripulantes. El ordenador central, 
                            MADRE, ha detectado la misteriosa transmisión de una forma de vida desconocida, procedente de un planeta cercano aparentemente deshabitado. 
                            La nave se dirige entonces al extraño planeta para investigar el origen de la comunicación.",8);


?>