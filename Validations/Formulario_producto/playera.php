<?php
    $sexShirt = $_POST['sexo'];
    $colorShirt = $_POST['color'];
    $tallShirt = $_POST['talla'];
    $cantidad_playera = $_POST['Cantidad'];

    if(empty($sexShirt)|| empty($colorShirt)|| empty($tallShirt)){
        header('Location: index.php?class=Views&function=vistaHomePage&pagina=1');
    }

    $sexShirt = filter_var($sexShirt, FILTER_SANITIZE_STRING);
    $colorShirt = filter_var($colorShirt, FILTER_SANITIZE_STRING);
    $tallShirt = filter_var($tallShirt, FILTER_SANITIZE_STRING);

    if($sexShirt != 'Caballero' && $sexShirt != 'Dama' && $sexShirt != 'Nino'){
        header('Location: index.php?class=Views&function=vistaHomePage&pagina=1');
    }elseif($colorShirt != 'Negro' && $colorShirt != 'Blanco' && $colorShirt != 'Gris'){
        header('Location: index.php?class=Views&function=vistaHomePage&pagina=1');
    }elseif($tallShirt != 'Mediana' && $tallShirt != 'Grande' && $tallShirt != 'Chica'){
        header('Location: index.php?class=Views&function=vistaHomePage&pagina=1');
    }elseif($cantidad_playera < 1 ){
        header('Location: index.php?class=Views&function=vistaHomePage&pagina=1');
    }else{
        require_once 'Views/HomePage/Options/formulario_compraFinal.php';
    }
