<?php
    $colorGorra = $_POST['color'];
    $tallaGorra = $_POST['talla']; // Adulto o Nino
    $cantidad_gorra = $_POST['Cantidad'];
    $sexo = 'unisex';
    $precio_gorra = '70';

    if(empty($colorGorra) || empty($tallaGorra)){
        header('Location: /Views/viewProduct&pagina=1');
    }

    $colorGorra = filter_var($colorGorra, FILTER_SANITIZE_STRING);
    $tallaGorra = filter_var($tallaGorra, FILTER_SANITIZE_STRING);

    if($colorGorra != 'Negro' && $colorGorra != 'Blanco' && $colorGorra != 'Gris'){
        header('Location: /Views/viewProduct&pagina=1');
    }elseif($tallaGorra != 'Adulto' && $tallaGorra != 'Nino'){
        header('Location: /Views/viewProduct&pagina=1');
    }elseif($cantidad_gorra < 1 ){
        header('Location: /Views/viewProduct&pagina=1');
    }else{
        
        $datos_cliente->setNombre($nombreCliente);
        $datos_cliente->setIdProducto($id);
        $datos_cliente->setProducto($producto);
        $datos_cliente->setSexo($sexo);
        $datos_cliente->setTalla($tallaGorra);
        $datos_cliente->setColor($colorGorra);
        $datos_cliente->setCantidad($cantidad_gorra);
        $datos_cliente->setPrecio($precio_gorra);
        $datos_cliente->setTelefono($telefonoCliente);

        $datos_cliente->AgregarDatosCompra();
        require_once 'Views/HomePage/Options/formulario_compraFinal.php';
    }