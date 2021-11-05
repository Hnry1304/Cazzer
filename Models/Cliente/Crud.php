<?php
    require_once 'Models/Cliente/Datos.php';
    
    

    class Crud extends Datos{

        public function add(){
            $sql = "INSERT INTO imagenes VALUES (NULL,:name)";

            $statement = $this->conexion->prepare($sql);
            
            $statement->execute(array(
                ":name" => $this->getUrl()
            ));

        }

        public function read($inicio, $fin){
            $sql = "SELECT *FROM imagenes LIMIT $inicio, $fin";

            $statement = $this->conexion->prepare($sql);
            $statement->execute();

            $information = $statement->fetchAll();

            return $information;
        }

        public function readImagen(){
            $sql = "SELECT *FROM imagenes WHERE ID = :id";
            
            $statement = $this->conexion->prepare($sql);
            $statement->execute(array(
                ":id" => $this->getId()
            ));
            
            $valor = FALSE;
            $information = $statement->fetch();
            if($information){
                $valor = TRUE;
            }

            return $valor;
        }

        public function Imagen(){
            $sql = "SELECT *FROM imagenes WHERE ID = :id";

            $statement = $this->conexion->prepare($sql);
            $statement->execute(array(
                ":id" => $this->getId()
            ));

            $information = $statement->fetch();

            return $information;
        }
    }