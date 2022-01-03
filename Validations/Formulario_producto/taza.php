<?php
    $colorTaza = $_POST['color'];
    $cantidad_taza = $_POST['Cantidad'];
    if(empty($colorTaza)){
        header('Location: index.php?class=Views&function=vistaHomePage&pagina=1');
    }

    $colorTaza = filter_var($colorTaza, FILTER_SANITIZE_STRING);

    if($colorTaza != 'Blanco'){
        header('Location: index.php?class=Views&function=vistaHomePage&pagina=1');
    }elseif($cantidad_taza < 1 ){
        header('Location: index.php?class=Views&function=vistaHomePage&pagina=1');
    }else{
        require_once 'Views/HomePage/Options/formulario_compraFinal.php';
    }