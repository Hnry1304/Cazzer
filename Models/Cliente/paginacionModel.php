<?php
    require_once 'Models/Admin/DatosImagenes.php';

    class PaginacionModel extends DatosImagenes{

        public function Datos($dataBase){

            $sql = "SELECT *FROM $dataBase";
             
            $statement = $this->conexion->prepare($sql);
            $statement->execute();

            $datos = $statement->fetchAll();

            return $datos;
        }

        public function totalDatos($dataBase){
            $sql = "SELECT *FROM $dataBase";
             
            $statement = $this->conexion->prepare($sql);
            $statement->execute();

            $total = $statement->rowCount();

            return $total;
        }

        public function numeroPaginacion($total_alumnos,$postPorPagina){
            $numero_paginacion = $total_alumnos/$postPorPagina;
            $numero_paginacion = ceil($numero_paginacion);

            return $numero_paginacion;
        }
    }
