<?php
    require_once 'Models/Cliente/Crud.php';
    require_once 'Models/Cliente/paginacionModel.php';
    class ViewsController{

        // Vista Pagina Principal
            public function vistaHomePage(){
                //LLamaremos la paginacion.php, ahi tomaremos postPorPagina e inicio...
                require_once 'Paginacion/Cliente/paginacion.php';

                $read_imagenes = new Crud;
                $information = $read_imagenes->read($inicio, $postPorPagina);
                require_once 'Views/HomePage/homePage.php';
            }
        
        // Vista Login, Unicamente accedido por el admin..
            public function viewLoginPage(){
                require_once 'Views/Login/viewLoginPage.php';
            }
 
        // Vista Agregar Imagen Admi
            public function viewAddImagenes(){
                require_once 'Views/Admin/viewAddImagenes.php';
            }
        
    }