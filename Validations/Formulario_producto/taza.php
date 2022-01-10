<?php
    $colorTaza = $_POST['color'];
    $cantidad_taza = $_POST['Cantidad'];
    $sexo = 'Taza';
    $talla = 'Taza';
    $precio_playera = '50';
    if(empty($colorTaza)){
        header('Location: index.php?class=Views&function=vistaHomePage&pagina=1');
    }

    $colorTaza = filter_var($colorTaza, FILTER_SANITIZE_STRING);

    if($colorTaza != 'Blanco'){
        header('Location: index.php?class=Views&function=vistaHomePage&pagina=1');
    }elseif($cantidad_taza < 1 ){
        header('Location: index.php?class=Views&function=vistaHomePage&pagina=1');
    }else{
        $datos_cliente->setNombre($nombreCliente);
        $datos_cliente->setIdProducto($id);
        $datos_cliente->setProducto($producto);
        $datos_cliente->setSexo($sexo);
        $datos_cliente->setTalla($talla);
        $datos_cliente->setColor($colorTaza);
        $datos_cliente->setCantidad($cantidad_taza);
        $datos_cliente->setPrecio($precio_taza);
        $datos_cliente->setTelefono($telefonoCliente);

        $datos_cliente->AgregarDatosCompra();
        require_once 'Views/HomePage/Options/formulario_compraFinal.php';
    }