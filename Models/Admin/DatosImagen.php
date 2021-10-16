<?php
    class DatosImagen{

        private $urlImagen;
        protected $conexion;


        public function __construct(){
            $this->conexion = new Database();
            $this->conexion = $this->conexion->connect();
        }

        public function setUrlImagen($urlImagen){
            $this->urlImagen = $urlImagen;
        }

        public function getUrlImagen(){
            $this->urlImagen;
        }
        
    }