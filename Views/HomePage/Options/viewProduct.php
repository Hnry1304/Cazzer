<?php require_once 'Views/Assets/Layouts/Clients/header.php' ?>
    <section class="contenido_productos">
        <div class="buscar">
            <input type="search">
            <button>Search</button>
        </div>
        <article class="box">
            <?php  foreach($information as $information):?>
                <div class="cuadro">
                    <img src="/imagenes/Ropa/playera_negra_hombre.png" alt="imagen Playera" class="color_ropa">

                    <a href="/Views/vistaImagen&id=<?= $information['ID'] ?>&pagina=<?= $_GET['pagina'] ?>">
                        <img src="/imagenes/<?= $information['URL_IMAGEN']; ?>" alt="" class="imagenes">
                    </a>
                </div>
            <?php endforeach?>
    </article>
<?php require_once 'Views/HomePage/vistaPaginacion.php'?>

<?php require_once 'Views/Assets/Layouts/Clients/footer.php' ?>