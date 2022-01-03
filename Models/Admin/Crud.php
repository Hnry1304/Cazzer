<?php
    require_once 'Models/Admin/DatosImagenes.php';
    
    class Crud extends DatosImagenes{

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
    }