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

    <section class="content">
        <div class="opcion_playeras">
            <a href="#">Playeras</a>
        </div>

        <div class="opcion_sudaderas">
            <a href="#">Sudaderas</a>
        </div>
        
        <div class="opcion_tazas">
            <a href="#">Tazas</a>
        </div>

        <div class="opcion_gorras">
            <a href="#">Gorras</a>    
        </div>

        <div class="opcion_Fundas_celular">
            <a href="#">Fundas Celular</a>
        </div>

        <div class="opcion_Personalizado">
            <a href="#">Personalizado</a>
        </div>
    </section>
<?php require_once 'Views/Assets/Layouts/Clients/footer.php'?>