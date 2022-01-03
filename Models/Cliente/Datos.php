<?php
    class Datos{

        private $Id;
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

        public function setId($Id){
            $this->Id = $Id;
        }

        public function getId(){
            return $this->Id;
        }
        
    }
