<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Views/Assets/Css/Clientes/header.css">
    <link rel="stylesheet" href="/Views/Assets/Css/Clientes/footer.css">
    <link rel="stylesheet" href="/Views/Assets/Css/Clientes/imagenes.css">
    <link rel="stylesheet" href="/Views/Assets/Css/Clientes/paginacion.css">
    <link rel="stylesheet" href="/Views/Assets/Css/Clientes/vistaPrevia.css">
    <link rel="stylesheet" href="/Views/Assets/Css/Clientes/formulario.css">
    <link rel="stylesheet" href="/Views/Assets/Css/Clientes/vistaProducto.css">

</head>
<body>
    <div class ="container">
        <nav>
            <?php if(isset($_GET['pagina'])): ?>
                <a href="/Views/vistaHomePage" class="item-1">Title</a>
            
            <?php else: ?>
                <a href="/Views/vistaHomePage" class="item-1">Title</a>
            <?php endif?>
            <a href="/Views/viewLoginPage" class="item-2">Login</a>
        </nav>    	
        <section class="content">
        <ul>
            <li><a href="#" class="opcion_Tazas">Tazas</a></li>
            <li><a href="#" class="opcion_playeras">Playeras</a></li>
            <li><a href="#" class="opcion_sudaderas">Sudaderas</a></li>
            <li><a href="#" class="opcion_gorras">Gorras</a></li>
            <li><a href="#" class="opcion_fundas">Fundas Celular</a></li>
            <li><a href="#" class="opcion_personalizacion">Personalizacion</a></li>
        </ul>
        <div class="clear"></div>
    </section>
