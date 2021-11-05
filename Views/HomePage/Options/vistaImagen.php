<?php require_once 'Views/Assets/Layouts/Clients/header.php' ?>
    <div class="container">
        <div class="imagenes">
            <img src="/imagenes/playera_negra.png" alt="playera_negra" class="shirt">
            <img src="/imagenes/<?= $information['URL_IMAGEN']; ?>" alt="" class="img">

        </div>
        <?php require_once'Views/HomePage/Options/formulario_compra.php'; ?>
    </div>

<?php require_once 'Views/Assets/Layouts/Clients/footer.php' ?>