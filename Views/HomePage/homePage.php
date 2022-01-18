<?php require_once 'Views/Assets/Layouts/Clients/header.php'?>
   <!--
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
    </section> -->

    <section class="contenido_principal">
        <div class="imagen_publicidad">
            <a href="#">
               <img src="/imagenes/Taza.jpg" alt="">
            </a>
        </div>
        <div class="categories">
            <ul>
                <li><a href="#">Tazas</a></li>
                <li><a href="#">Fundas Celular</a></li>
                <li><a href="#">Playeras</a></li>
                <li><a href="#">Sudaderas</a></li>
                <li><a href="#">Gorras</a></li>
                <li><a href="#">Personalizacion</a></li>               
            </ul>
        </div>

    </section>

<?php require_once 'Views/Assets/Layouts/Clients/footer.php'?>