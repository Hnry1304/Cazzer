<?php require_once 'Views/Assets/Layouts/Clients/header.php' ?>
    <div class="container">
        <div class="imagenes">

            <img src="/imagenes/playera_negra.png" alt="playera_negra" class="shirt" id="playera_negra">
            <img src="/imagenes/Playera_blanca.PNG" alt="playera_blanca" class="shirt" id="playera_blanca">
            <img src="/imagenes/playera_gris.png" alt="playera_gris" class="shirt" id="playera_gris">
            
            <img src="/imagenes/<?= $information['URL_IMAGEN']; ?>" alt="" class="img">

        </div>
        <?php require_once'Views/HomePage/Options/formulario_compra.php'; ?>
    </div>

<?php require_once 'Views/Assets/Layouts/Clients/footer.php' ?>

