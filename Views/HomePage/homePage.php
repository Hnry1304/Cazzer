<?php require_once 'Views/Assets/Layouts/Clients/header.php'?>
    
    <section class="content">
        <article class="box">
            <?php  foreach($information as $information):?>
                <div class="cuadro">
                    <a href="/Views/vistaImagen&id=<?= $information['ID'] ?>&pagina=<?= $_GET['pagina'] ?>">
                        <img src="/imagenes/<?= $information['URL_IMAGEN']; ?>" alt="" class="imagenes">
                    </a>
                </div>
            <?php endforeach?>
        </article>

        <?php require_once 'Views/HomePage/vistaPaginacion.php'?>
    </section>
<?php require_once 'Views/Assets/Layouts/Clients/footer.php'?>