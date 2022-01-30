<?php
    class Datos{

        private $Id;
        private $url;
        protected $conexion;

        private $nombre;
        private $id_producto;
        private $producto;
        private $sexo;
        private $talla;
        private $color;
        private $cantidad;
        private $precio;
        private $telefono;


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
        
        //DATOS DE COMPRA
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setIdProducto($id_producto){
            $this->id_producto = $id_producto;
        }
        public function setProducto($producto){
            $this->producto = $producto;
        }
        public function setSexo($sexo){
            $this->sexo = $sexo;
        }
        public function setTalla($talla){
            $this->talla = $talla;
        }
        public function setColor($color){
            $this->color = $color;
        }
        public function setCantidad($cantidad){
            $this->cantidad = $cantidad;
        }
        public function setPrecio($precio){
            $this->precio = $precio;
        }
        public function setTelefono($telefono){
            $this->telefono = $telefono;
        }


        public function getNombre(){
            return $this->nombre;
        }

        public function getIdProducto(){
            return $this->id_producto;
        }
        public function getProducto(){
            return $this->producto;
        }
        public function getSexo(){
            return $this->sexo;
        }
        public function getTalla(){
            return $this->talla;
        }
        public function getColor(){
            return $this->color;
        }
        public function getCantidad(){
            return $this->cantidad;
        }
        public function getPrecio(){
            return $this->precio;
        }
        public function getTelefono(){
            return $this->telefono;
        }
    }
