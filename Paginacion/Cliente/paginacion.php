<?php 
    if(empty($producto)){
        header("Location: /Views/vistaHomePage");
    }elseif($producto != 'taza' && $producto != 'funda' && $producto != 'playera' &&
        $producto != 'sudadera' && $producto != 'gorra' && $producto != 'personalizacion'){
            header("Location: /Views/vistaHomePage");
    }else{

        $pagina = isset($_GET['pagina'])? (int)$_GET['pagina'] : 0;
        $postPorPagina = 12;
    
        $inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;
    
        $dataBase = $_GET['producto'];
    
        $paginanacion = new PaginacionModel();
        $pagination = $paginanacion->Datos($dataBase);
        $numeroDatos = $paginanacion->totalDatos($dataBase);
    
        $numero_paginacion = $paginanacion->numeroPaginacion($numeroDatos,$postPorPagina);
    
        // if($pagina > $numero_paginacion || $pagina < 1){
        //     header("Location: /Views/viewProduct&pagina=1");
        // }
    }

