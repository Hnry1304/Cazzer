<?php
    require_once 'Models/Cliente/compras.php';
    require_once 'Models/Cliente/Crud.php';
    require_once 'Models/Cliente/paginacionModel.php';
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
    
    // Vista Producto
        public function viewProduct(){
            $producto = $_GET['producto'];
            if(!isset($producto)){
                header("Location: /Views/vistaHomePage");
            }else{
                //LLamaremos la paginacion.php, ahi tomaremos postPorPagina e inicio...
                require_once 'Paginacion/Cliente/paginacion.php';
    
                $read_imagenes = new Crud;
                $information = $read_imagenes->read($inicio, $postPorPagina);
                require_once 'Views/HomePage/Options/viewProduct.php';

            }
            
        }

    // Vista previa producto con Imagen
        public function vistaImagen(){
            $id = $_GET['id'];
            $producto = $_GET['producto'];

            $read_imagenes = new Crud;
            $read_imagenes->setId($id);
            $resultado = $read_imagenes->readImagen();
            
            if(!$resultado){
                header('Location: /Views/viewProduct&pagina=1');
            }else{
                
                if(!isset($producto)){
                    header("Location: /Views/vistaHomePage");
                }else{
                    if($producto != 'playera' && $producto != 'taza' && $producto != 'funda' &&
                        $producto != 'sudadera' && $producto != 'gorra' && $producto != 'personalizacion'
                    ){
                        header("Location: /Views/vistaHomePage");
                    }else{
                        $information = $read_imagenes->Imagen();
                        require_once 'Views/HomePage/Options/vistaImagen.php';
                    }

                }
                

            }
        }
    // Vista para confirmar compra
        public function producto(){

            $producto = $_POST["submit"];
            $id = $_GET['id'];
            $pagina = $_GET['pagina'];
            $nombreCliente = $_POST['name'];
            $telefonoCliente = $_POST['phone'];

            if(!isset($producto)){
                header('Location: /Views/viewProduct&pagina=1');
            }else{
                $datos_cliente = new compras;
                
                if(empty($nombreCliente) || empty($telefonoCliente)){
                    header("Location: /Views/vistaImagen&id=$id&pagina=$pagina");
                }
                if($producto == 'Comprar Gorra'){
                    require_once 'Validations/Formulario_producto/gorra.php';
                    
                }elseif($producto == 'Comprar Taza'){
                    require_once 'Validations/Formulario_producto/taza.php';
                    
                }elseif($producto == 'Comprar Playera' || $producto == 'Comprar Sudadera'){
                    require_once 'Validations/Formulario_producto/playera.php';
                    
                }else{
                    header('Location: /Views/viewProduct&pagina=1');
                }

            }
            
        }
    }