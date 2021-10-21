<?php
    class ViewsController{

        // Vista Pagina Principal
            public function vistaHomePage(){
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