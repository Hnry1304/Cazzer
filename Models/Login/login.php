<?php
    class login{

        private $username;
        private $password;
        private $conexion;


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

        public function comprobar(){

            $sql = "SELECT *FROM login WHERE USERNAME = :username AND CONTRASENA = :contrasena ";

            $statement = $this->conexion->prepare($sql);
            $statement->execute(array(
                ":username" => $this->getUsername(),
                ":contrasena" => $this->getPassword()
            ));

            $resultado = $statement->fetch();
            
            $valor = false;

            if($resultado){
                $valor = true;
            }

            return $valor;
        }
    }