<?php
    class DatosImagenes{

        private $url;
        protected $conexion;

        public function __construct(){
            $this->conexion = new Database;
            $this->conexion = $this->conexion->connect();
        }

        public function setUrl($url){
            $this->url = $url;
        }

        public function getUrl(){
            return $this->url;
        }
        
    }
