<?php
    class datosLogin{

        private $username;
        private $password;
        protected $conexion;


        public function __construct(){
            $this->conexion = new Database();
            $this->conexion = $this->conexion->connect();
        }

        public function setUsername($username){
            $this->username = $username;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function getUsername(){
            return $this->username;
        }

        public function getPassword(){
            return $this->password;
        }
    }