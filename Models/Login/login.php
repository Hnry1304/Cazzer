<?php
    require_once 'Models/Login/datosLogin.php';
    
    class login extends datosLogin{

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