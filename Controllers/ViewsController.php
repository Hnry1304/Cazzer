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
        
        // Vista previa Playera con Imagen
            public function vistaImagen(){
                $id = $_GET['id'];

                $read_imagenes = new Crud;
                $read_imagenes->setId($id);
                $resultado = $read_imagenes->readImagen();
                
                if(!$resultado){
                    header('Location: index.php?class=Views&function=vistaHomePage&pagina=1');
                }else{

                    $information = $read_imagenes->Imagen();
                    require_once 'Views/HomePage/Options/vistaImagen.php';
                }
            }
        // Vista para confirmar compra
            public function producto(){
                $producto = $_POST["submit"];
                
                if(!isset($producto)){
                    header('Location: index.php?class=Views&function=vistaHomePage&pagina=1');
                }

                if($producto == 'Comprar Gorra'){
                    require_once 'Validations/Formulario_producto/gorra.php';

                }elseif($producto == 'Comprar Taza'){
                    require_once 'Validations/Formulario_producto/taza.php';

                }elseif($producto == 'Comprar Playera'){
                    require_once 'Validations/Formulario_producto/playera.php';

                }else{
                    header('Location: index.php?class=Views&function=vistaHomePage&pagina=1');
                }
            }
        // Vista Compra Realizada
            public function productoComprado(){
                require_once 'Views/HomePage/Options/compraRealizado.php';
            }
    }