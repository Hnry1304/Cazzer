<?php
    require_once 'Models/Admin/Crud.php';
    require_once 'Models/Admin/paginacionModel.php';
    class CrudController{

        public function addImagenes(){

            $url = $_FILES['url']['name'];

            $carpeta_destino = 'imagenes/';
            $archivo_subido = $carpeta_destino . $_FILES['url']['name'];
            move_uploaded_file($_FILES['url']['tmp_name'],$archivo_subido);

            $add_imagenes = new Crud;
            $add_imagenes->setUrl($url);
            $add_imagenes->add();

            header('Location: index.php?class=Views&function=viewAddImagenes');
        }

        public function readImagenes(){
            //LLamaremos la paginacion.php, ahi tomaremos postPorPagina e inicio...
            require_once 'Paginacion/Admin/paginacion.php';

            $read_imagenes = new Crud;
            $information = $read_imagenes->read($inicio, $postPorPagina);

            require_once 'Views/Admin/viewHomePageAdmin.php';
        }
    }