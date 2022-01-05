<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Views/Assets/Css/Clientes/header.css">
    <link rel="stylesheet" href="/Views/Assets/Css/Clientes/imagenes.css">
    <link rel="stylesheet" href="/Views/Assets/Css/Clientes/paginacion.css">
    <link rel="stylesheet" href="/Views/Assets/Css/Clientes/vistaPrevia.css">
    <link rel="stylesheet" href="/Views/Assets/Css/Clientes/formulario.css">

</head>
<body>
    <div class ="container">
        <nav>
            <?php if(isset($_GET['pagina'])): ?>
                <a href="/Views/vistaHomePage&pagina=<?= $_GET['pagina']?>" class="title">Title</a>
            
            <?php else: ?>
                <a href="/Views/vistaHomePage&pagina=1" class="title">Title</a>
            <?php endif?>
            <a href="/Views/viewLoginPage" class="login">Login</a>
        </nav>    	
