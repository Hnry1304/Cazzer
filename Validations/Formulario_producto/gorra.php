<?php
    $colorGorra = $_POST['color'];
    $tallaGorra = $_POST['talla']; // Adulto o Nino
    $cantidad_gorra = $_POST['cantidad'];

    if(empty($colorGorra) || empty($tallaGorra)){
        header('Location: index.php?class=Views&function=vistaHomePage&pagina=1');
    }

    $colorGorra = filter_var($colorGorra, FILTER_SANITIZE_STRING);
    $tallaGorra = filter_var($tallaGorra, FILTER_SANITIZE_STRING);

    if($colorGorra != 'Negro' && $colorGorra != 'Blanco' && $colorGorra != 'Gris'){
        header('Location: index.php?class=Views&function=vistaHomePage&pagina=1');
    }elseif($tallaGorra != 'Adulto' && $tallaGorra != 'Nino'){
        header('Location: index.php?class=Views&function=vistaHomePage&pagina=1');
    }elseif($cantidad_gorra < 1 ){
        header('Location: index.php?class=Views&function=vistaHomePage&pagina=1');
    }else{
        require_once 'Views/HomePage/Options/formulario_compraFinal.php';
    }