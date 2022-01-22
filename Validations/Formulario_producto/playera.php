<?php
    $sexShirt = $_POST['sexo'];
    $colorShirt = $_POST['color'];
    $tallShirt = $_POST['talla'];
    $cantidad_playera = $_POST['Cantidad'];
    $precio_playera = '150';

    if(empty($sexShirt)|| empty($colorShirt)|| empty($tallShirt)){
        header('Location: /Views/viewProduct&pagina=1');
    }
 

    $sexShirt = filter_var($sexShirt, FILTER_SANITIZE_STRING);
    $colorShirt = filter_var($colorShirt, FILTER_SANITIZE_STRING);
    $tallShirt = filter_var($tallShirt, FILTER_SANITIZE_STRING);

    if($sexShirt != 'Caballero' && $sexShirt != 'Dama' && $sexShirt != 'Nino'){
        header('Location: /Views/viewProduct&pagina=1');
    }elseif($colorShirt != 'Negro' && $colorShirt != 'Blanco' && $colorShirt != 'Gris'){
        header('Location: /Views/viewProduct&pagina=1');
    }elseif($tallShirt != 'Mediana' && $tallShirt != 'Grande' && $tallShirt != 'Chica'){
        header('Location: /Views/viewProduct&pagina=1');
    }elseif($cantidad_playera < 1 ){
        header('Location: /Views/viewProduct&pagina=1');
    }else{

        $datos_cliente->setNombre($nombreCliente);
        $datos_cliente->setIdProducto($id);
        $datos_cliente->setProducto($producto);
        $datos_cliente->setSexo($sexShirt);
        $datos_cliente->setTalla($tallShirt);
        $datos_cliente->setColor($colorShirt);
        $datos_cliente->setCantidad($cantidad_playera);
        $datos_cliente->setPrecio($precio_playera);
        $datos_cliente->setTelefono($telefonoCliente);

        $datos_cliente->AgregarDatosCompra();
        require_once 'Views/HomePage/Options/formulario_compraFinal.php';
    }
